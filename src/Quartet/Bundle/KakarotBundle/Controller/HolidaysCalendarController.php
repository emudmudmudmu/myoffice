<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\HolidaysCalendar;
use Quartet\Bundle\KakarotBundle\Form\HolidaysCalendarType;

/**
 * HolidaysCalendar controller.
 *
 * @Route("/holidayscalendar")
 */
class HolidaysCalendarController extends Controller
{

    /**
     * Lists all HolidaysCalendar entities.
     *
     * @Route("/", name="holidayscalendar")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $currentYear = date('Y');

        return $this->pagerAction($currentYear);
    }

    /**
     * Lists all Attendance entities.
     *
     * @Route("/pager/{year}", name="holidayscalendar_pager")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:HolidaysCalendar:index.html.twig")
     */
    public function pagerAction($year)
    {
        $hc = $this->getDoctrine()->getRepository('QuartetKakarotBundle:HolidaysCalendar');
        $entities = $hc->getHolidays($year);

        $nextYear = date('Y', strtotime($year. '-01-01 +1 year'));
        $prevYear = date('Y', strtotime($year. '-01-01 -1 year'));

        return array(
            'entities'    => $entities,
            'currentYear' => $year,
            'nextYear'    => $nextYear,
            'prevYear'    => $prevYear,
        );
    }

    /**
     * register Google Calendar
     *
     * @Route("/holidayscalendar_googlecalendar/{year}", name="holidayscalendar_googlecalendar")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:HolidaysCalendar:index.html.twig")
     */
    public function googleCalendarAction($year)
    {

        $holidayscalendar = $this->get('kakarot.holidayscalendar_service');
        $holidayscalendar->registerGoogleCalendar($year);

        return $this->redirect($this->generateUrl('holidayscalendar_pager', array('year' => $year)));
    }

    /**
     * Creates a new HolidaysCalendar entity.
     *
     * @Route("/", name="holidayscalendar_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:HolidaysCalendar:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $message = null;

        $entity = new HolidaysCalendar();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $holidayscalendar = $this->getdoctrine()->getRepository('QuartetKakarotBundle:HolidaysCalendar');
        if (!$holidayscalendar->isNewFindDate($entity)) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('holidayscalendar'));
            }
        } else {
            $message = '既に登録されています。';
        }

        return array(
            'message' => $message,
            'entity'  => $entity,
            'form'    => $form->createView(),
        );
    }

    /**
    * Creates a form to create a HolidaysCalendar entity.
    *
    * @param HolidaysCalendar $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(HolidaysCalendar $entity)
    {
        $form = $this->createForm(new HolidaysCalendarType(), $entity, array(
            'action' => $this->generateUrl('holidayscalendar_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => '新規作成', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new HolidaysCalendar entity.
     *
     * @Route("/new", name="holidayscalendar_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new HolidaysCalendar();
        $entity->setDate(new \DateTime());

        $form   = $this->createCreateForm($entity);

        return array(
            'message' => null,
            'entity'  => $entity,
            'form'    => $form->createView(),
        );
    }

    /**
     * Finds and displays a HolidaysCalendar entity.
     *
     * @Route("/{id}", name="holidayscalendar_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:HolidaysCalendar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HolidaysCalendar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing HolidaysCalendar entity.
     *
     * @Route("/{id}/edit", name="holidayscalendar_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:HolidaysCalendar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HolidaysCalendar entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'message'     => null,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a HolidaysCalendar entity.
    *
    * @param HolidaysCalendar $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(HolidaysCalendar $entity)
    {
        $form = $this->createForm(new HolidaysCalendarType(), $entity, array(
            'action' => $this->generateUrl('holidayscalendar_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => '更新', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }
    /**
     * Edits an existing HolidaysCalendar entity.
     *
     * @Route("/{id}/edit", name="holidayscalendar_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:HolidaysCalendar:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $message = null;

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:HolidaysCalendar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HolidaysCalendar entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $holidayscalendar = $this->getdoctrine()->getRepository('QuartetKakarotBundle:HolidaysCalendar');
        if (!$holidayscalendar->isEditFindDate($entity)) {
            if ($editForm->isValid()) {
                $em->flush();

                return $this->redirect($this->generateUrl('holidayscalendar'));
            }
        } else {
            $message = '既に登録されています。';
        }

        return array(
            'message'     => $message,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a HolidaysCalendar entity.
     *
     * @Route("/{id}", name="holidayscalendar_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:HolidaysCalendar')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HolidaysCalendar entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('holidayscalendar'));
    }

    /**
     * Creates a form to delete a HolidaysCalendar entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('holidayscalendar_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => '削除', 'attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
