<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\Attendance;
use Quartet\Bundle\KakarotBundle\Form\AttendanceType;

/**
 * Attendance controller.
 *
 * @Route("/attendance")
 */
class AttendanceController extends Controller
{
    private static $daysLabels = array('日', '月', '火', '水', '木', '金', '土');

    /**
     * Lists all Attendance entities.
     *
     * @Route("/", name="attendance")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $currentDate = date('Y-m');

        return $this->pagerAction($currentDate);
    }

    /**
     * Lists all Attendance entities.
     *
     * @Route("/pager/{date}", name="attendance_pager")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Attendance:index.html.twig")
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

        $entities = $em->getRepository('QuartetKakarotBundle:Attendance')
            ->getEntities($userEntity, $date);

        $attendanceRepository = $em->getRepository('QuartetKakarotBundle:Attendance');
        $message = $attendanceRepository->getNotInputDateMessage($userEntity, $date);

        $nextDate = date('Y-m', strtotime($date. ' +1 month'));
        $prevDate = date('Y-m', strtotime($date. ' -1 month'));

        return array(
            'message'     => $message,
            'entities'    => $entities,
            'currentDate' => $date,
            'nextDate'    => $nextDate,
            'prevDate'    => $prevDate,
            'daysLabel'   => AttendanceController::$daysLabels,
        );
    }

    /**
     * Creates a new Attendance entity.
     *
     * @Route("/", name="attendance_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:Attendance:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $message = null;
        $entity = new Attendance();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $attendanceRepository = $em->getRepository('QuartetKakarotBundle:Attendance');
        if (!$attendanceRepository->isNewFindSameDate($entity)) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('attendance'));
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
    * Creates a form to create a Attendance entity.
    *
    * @param Attendance $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Attendance $entity)
    {
        $form = $this->createForm(new AttendanceType(), $entity, array(
            'action' => $this->generateUrl('attendance_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => '新規作成', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Attendance entity.
     *
     * @Route("/new", name="attendance_new")
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

        $em = $this->getDoctrine()->getManager();
        $attendanceRepository = $em->getRepository('QuartetKakarotBundle:Attendance');
        $entity = $attendanceRepository->getNewAttendance();
        $entity->setUser($userEntity);

        $form   = $this->createCreateForm($entity);
        return array(
            'message' => null,
            'entity'  => $entity,
            'form'    => $form->createView(),
        );
    }

    /**
     * Finds and displays a Attendance entity.
     *
     * @Route("/{id}", name="attendance_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Attendance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attendance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Attendance entity.
     *
     * @Route("/{id}/edit", name="attendance_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Attendance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attendance entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'message'     => null,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Attendance entity.
    *
    * @param Attendance $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Attendance $entity)
    {
        $form = $this->createForm(new AttendanceType(), $entity, array(
            'action' => $this->generateUrl('attendance_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => '更新', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Attendance entity.
     *
     * @Route("/{id}/edit", name="attendance_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:Attendance:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Attendance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Attendance entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $attendanceRepository = $em->getRepository('QuartetKakarotBundle:Attendance');
        if (!$attendanceRepository->isEditFindSameDate($entity)) {
            if ($editForm->isValid()) {
                $em->flush();

                return $this->redirect($this->generateUrl('attendance'));
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
     * Deletes a Attendance entity.
     *
     * @Route("/{id}", name="attendance_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:Attendance')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Attendance entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('attendance'));
    }

    /**
     * Creates a form to delete a Attendance entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('attendance_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => '削除', 'attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
