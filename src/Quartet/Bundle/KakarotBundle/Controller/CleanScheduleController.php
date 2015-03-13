<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\CleanSchedule;
use Quartet\Bundle\KakarotBundle\Form\CleanScheduleType;

/**
 * CleanSchedule controller.
 *
 * @Route("/cleanschedule")
 */
class CleanScheduleController extends Controller
{

    /**
     * Lists all CleanSchedule entities.
     *
     * @Route("/", name="cleanschedule")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:CleanSchedule')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new CleanSchedule entity.
     *
     * @Route("/", name="cleanschedule_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:CleanSchedule:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CleanSchedule();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cleanschedule_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a CleanSchedule entity.
    *
    * @param CleanSchedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(CleanSchedule $entity)
    {
        $form = $this->createForm(new CleanScheduleType(), $entity, array(
            'action' => $this->generateUrl('cleanschedule_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CleanSchedule entity.
     *
     * @Route("/new", name="cleanschedule_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CleanSchedule();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a CleanSchedule entity.
     *
     * @Route("/{id}", name="cleanschedule_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:CleanSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CleanSchedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CleanSchedule entity.
     *
     * @Route("/{id}/edit", name="cleanschedule_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:CleanSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CleanSchedule entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a CleanSchedule entity.
    *
    * @param CleanSchedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CleanSchedule $entity)
    {
        $form = $this->createForm(new CleanScheduleType(), $entity, array(
            'action' => $this->generateUrl('cleanschedule_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CleanSchedule entity.
     *
     * @Route("/{id}", name="cleanschedule_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:CleanSchedule:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:CleanSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CleanSchedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cleanschedule_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a CleanSchedule entity.
     *
     * @Route("/{id}", name="cleanschedule_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:CleanSchedule')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CleanSchedule entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cleanschedule'));
    }

    /**
     * Creates a form to delete a CleanSchedule entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cleanschedule_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
