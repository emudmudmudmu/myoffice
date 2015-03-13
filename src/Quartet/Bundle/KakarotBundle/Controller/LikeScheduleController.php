<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\LikeSchedule;
use Quartet\Bundle\KakarotBundle\Form\LikeScheduleType;

/**
 * LikeSchedule controller.
 *
 * @Route("/likeschedule")
 */
class LikeScheduleController extends Controller
{

    /**
     * Lists all LikeSchedule entities.
     *
     * @Route("/", name="likeschedule")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:LikeSchedule')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new LikeSchedule entity.
     *
     * @Route("/", name="likeschedule_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:LikeSchedule:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new LikeSchedule();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('likeschedule_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a LikeSchedule entity.
    *
    * @param LikeSchedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(LikeSchedule $entity)
    {
        $form = $this->createForm(new LikeScheduleType(), $entity, array(
            'action' => $this->generateUrl('likeschedule_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LikeSchedule entity.
     *
     * @Route("/new", name="likeschedule_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LikeSchedule();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a LikeSchedule entity.
     *
     * @Route("/{id}", name="likeschedule_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:LikeSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LikeSchedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LikeSchedule entity.
     *
     * @Route("/{id}/edit", name="likeschedule_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:LikeSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LikeSchedule entity.');
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
    * Creates a form to edit a LikeSchedule entity.
    *
    * @param LikeSchedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LikeSchedule $entity)
    {
        $form = $this->createForm(new LikeScheduleType(), $entity, array(
            'action' => $this->generateUrl('likeschedule_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LikeSchedule entity.
     *
     * @Route("/{id}", name="likeschedule_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:LikeSchedule:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:LikeSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LikeSchedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('likeschedule_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a LikeSchedule entity.
     *
     * @Route("/{id}", name="likeschedule_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:LikeSchedule')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LikeSchedule entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('likeschedule'));
    }

    /**
     * Creates a form to delete a LikeSchedule entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('likeschedule_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}