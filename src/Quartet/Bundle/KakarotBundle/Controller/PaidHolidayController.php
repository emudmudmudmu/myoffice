<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\PaidHoliday;
use Quartet\Bundle\KakarotBundle\Form\PaidHolidayType;

/**
 * PaidHoliday controller.
 *
 * @Route("/paidholiday")
 */
class PaidHolidayController extends Controller
{
    private static $daysLabels = array('日', '月', '火', '水', '木', '金', '土');

    /**
     * Lists all PaidHoliday entities.
     *
     * @Route("/", name="paidholiday")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $currentDate = date('Y-m');

        return $this->pagerAction($currentDate);
    }

    /**
     * Lists all PaidHoliday entities.
     *
     * @Route("/pager/{date}", name="paidholiday_pager")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:PaidHoliday:index.html.twig")
     */
    public function pagerAction($date)
    {
        $securityContext = $this->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $userEntity = $securityContext->getToken()->getUser();
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:PaidHoliday')
            ->getEntities($date, $userEntity);

        $axpenseRepository = $em->getRepository('QuartetKakarotBundle:PaidHoliday');

        $nextDate = date('Y-m', strtotime($date. ' +1 month'));
        $prevDate = date('Y-m', strtotime($date. ' -1 month'));

        return array(
            'entities'    => $entities,
            'currentDate' => $date,
            'nextDate'    => $nextDate,
            'prevDate'    => $prevDate,
            'daysLabel'   => PaidHolidayController::$daysLabels,
        );
    }

    /**
     * Lists all approval entities.
     *
     * @Route("/approval", name="paidholiday_approval")
     * @Method("GET")
     * @Template()
     */
    public function approvalAction()
    {
        $securityContext = $this->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $userEntity = $securityContext->getToken()->getUser();
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:PaidHoliday')
            ->getApprovalEntities($userEntity);


        return array(
            'entities'   => $entities,
            'daysLabel'  => PaidHolidayController::$daysLabels,
        );
    }

    /**
     * approval update.
     *
     * @Route("/{id}/approval", name="paidholiday_approval_update")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:PaidHoliday:approval.html.twig")
     */
    public function approvalUpdateAction($id)
    {
        $securityContext = $this->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $userEntity = $securityContext->getToken()->getUser();
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('QuartetKakarotBundle:PaidHoliday')->find($id);

        $entity->setApprover($userEntity);
        $em->flush();

        if (null == $userEntity->getParent()) {
            $em->getRepository('QuartetKakarotBundle:Notification')
                ->sendPaidHolidayClosed($entity);
        }

        return $this->approvalAction();
    }

    /**
     * Creates a new PaidHoliday entity.
     *
     * @Route("/", name="paidholiday_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:PaidHoliday:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $message = null;

        $entity = new PaidHoliday();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $paidHolidayRepository = $em->getRepository('QuartetKakarotBundle:PaidHoliday');
        if (!$paidHolidayRepository->isNewFindSameDate($entity)) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                $em->getRepository('QuartetKakarotBundle:Notification')
                    ->sendPaidHolidayProcessing($entity);

                return $this->redirect($this->generateUrl('paidholiday'));
            }
        } else {
            $message = '同一日が既に登録されています。';
        }

        return array(
            'message' => $message,
            'entity'  => $entity,
            'form'    => $form->createView(),
        );
    }

    /**
    * Creates a form to create a PaidHoliday entity.
    *
    * @param PaidHoliday $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PaidHoliday $entity)
    {
        $form = $this->createForm(new PaidHolidayType(), $entity, array(
            'action' => $this->generateUrl('paidholiday_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => '新規作成', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new PaidHoliday entity.
     *
     * @Route("/new", name="paidholiday_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $securityContext = $this->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $userEntity = $securityContext->getToken()->getUser();
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $entity = new PaidHoliday();
        $entity->setAuthor($userEntity);
        $entity->setApprover($userEntity);

        $form   = $this->createCreateForm($entity);

        return array(
            'message' => null,
            'entity'  => $entity,
            'form'    => $form->createView(),
        );
    }

    /**
     * Finds and displays a PaidHoliday entity.
     *
     * @Route("/{id}/delete", name="paidholiday_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:PaidHoliday')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaidHoliday entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing PaidHoliday entity.
     *
     * @Route("/{id}/edit", name="paidholiday_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:PaidHoliday')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaidHoliday entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'message'     => null,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a PaidHoliday entity.
    *
    * @param PaidHoliday $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PaidHoliday $entity)
    {
        $form = $this->createForm(new PaidHolidayType(), $entity, array(
            'action' => $this->generateUrl('paidholiday_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => '更新', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }
    /**
     * Edits an existing PaidHoliday entity.
     *
     * @Route("/{id}", name="paidholiday_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:PaidHoliday:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $message = null;

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:PaidHoliday')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaidHoliday entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $paidHolidayRepository = $em->getRepository('QuartetKakarotBundle:PaidHoliday');
        if (!$paidHolidayRepository->isEditFindSameDate($entity)) {
            if ($editForm->isValid()) {
                $em->flush();

                return $this->redirect($this->generateUrl('paidholiday'));
            }
        } else {
            $message = '同一日が既に登録されています。';
        }

        return array(
            'message'     => $message,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a PaidHoliday entity.
     *
     * @Route("/{id}", name="paidholiday_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:PaidHoliday')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PaidHoliday entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('paidholiday'));
    }

    /**
     * Creates a form to delete a PaidHoliday entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paidholiday_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => '削除', 'attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
