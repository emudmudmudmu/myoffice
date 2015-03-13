<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\Expense;
use Quartet\Bundle\KakarotBundle\Form\ExpenseType;

/**
 * Expense controller.
 *
 * @Route("/expense")
 */
class ExpenseController extends Controller
{
    private static $daysLabels = array('日', '月', '火', '水', '木', '金', '土');

    /**
     * Lists all Expense entities.
     *
     * @Route("/", name="expense")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $currentDate = date('Y-m');

        return $this->pagerAction($currentDate);
    }

    /**
     * Lists all Expense entities.
     *
     * @Route("/pager/{date}", name="expense_pager")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Expense:index.html.twig")
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

        $entities = $em->getRepository('QuartetKakarotBundle:Expense')
            ->getEntities($date, $userEntity);

        $axpenseRepository = $em->getRepository('QuartetKakarotBundle:Expense');

        $nextDate = date('Y-m', strtotime($date. ' +1 month'));
        $prevDate = date('Y-m', strtotime($date. ' -1 month'));

        return array(
            'message'     => null,
            'entities'    => $entities,
            'currentDate' => $date,
            'nextDate'    => $nextDate,
            'prevDate'    => $prevDate,
            'daysLabel'   => ExpenseController::$daysLabels,
        );
    }

    /**
     * Creates a new Expense entity.
     *
     * @Route("/", name="expense_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:Expense:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Expense();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('expense'));
        }

        return array(
            'entity'  => $entity,
            'form'    => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Expense entity.
    *
    * @param Expense $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Expense $entity)
    {
        $form = $this->createForm(new ExpenseType(), $entity, array(
            'action' => $this->generateUrl('expense_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => '新規作成', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Expense entity.
     *
     * @Route("/new", name="expense_new")
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

        $entity = new Expense();
        $entity->setUser($userEntity);
        $form   = $this->createCreateForm($entity);

        return array(
            'entity'  => $entity,
            'form'    => $form->createView(),
        );
    }

    /**
     * Finds and displays a Expense entity.
     *
     * @Route("/{id}/delete", name="expense_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Expense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expense entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Expense entity.
     *
     * @Route("/{id}/edit", name="expense_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Expense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expense entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Expense entity.
    *
    * @param Expense $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Expense $entity)
    {
        $form = $this->createForm(new ExpenseType(), $entity, array(
            'action' => $this->generateUrl('expense_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => '更新', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Expense entity.
     *
     * @Route("/{id}", name="expense_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:Expense:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Expense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expense entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('expense'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a Expense entity.
     *
     * @Route("/{id}/delete", name="expense_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:Expense')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Expense entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('expense'));
    }

    /**
     * Creates a form to delete a Expense entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('expense_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => '削除', 'attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }

    /**
     * copy Expense entities.
     *
     * @Route("/copy/{date}/{id}", name="expense_copy")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Expense:index.html.twig")
     */
    public function copyAction($date, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:Expense')
            ->copyEntity($id);

        return $this->pagerAction($date);

    }

    /**
     * processing Expense entities.
     *
     * @Route("/processing", name="expense_processing")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Expense:processing.html.twig")
     */
    public function processingAction()
    {
        return $this->processingSelect('', '', '', '');
    }

    /**
     * processing Expense entities.
     *
     * @Route("/processing", name="expense_processing_select")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:Expense:processing.html.twig")
     */
    public function processingSelectAction(Request $request)
    {
        $status = $request->get('expense_status');
        $userid = $request->get('expense_user_list');
        $accountTitle = $request->get('expense_accountTitle_list');

        return $this->processingSelect($status, $userid, $accountTitle);
    }


    /**
     * processing Expense entities.
     * @param $status
     * @param $userid
     * @param $accountTitle
     */
    private function processingSelect($status, $userid, $accountTitle)
    {
        $em = $this->getDoctrine()->getManager();

        if ('' != $status) {
            $entities = $em->getRepository('QuartetKakarotBundle:Expense')
                ->setStatus($status, $userid, $accountTitle);
        } else {
            $entities = $em->getRepository('QuartetKakarotBundle:Expense')
                ->getSelectEntities($userid, $accountTitle);
        }

        $userEntities = $em->getRepository('QuartetKakarotBundle:User')->findAll();

        $accountTitleEntities = $em->getRepository('QuartetKakarotBundle:AccountTitle')->findAll();

        $message = $em->getRepository('QuartetKakarotBundle:Expense')
            ->getMessage();

        if (!$message) {
            $message = $em->getRepository('QuartetKakarotBundle:Expense')
                ->getSumMessage($entities);
        }
        return array(
            'message'               => $message,
            'entities'              => $entities,
            'userEntities'          => $userEntities,
            'accountTitleEntities'  => $accountTitleEntities,
            'selectUser'            => $userid,
            'selectAccountTitle'    => $accountTitle,
            'daysLabel'             => ExpenseController::$daysLabels,
        );
    }
}
