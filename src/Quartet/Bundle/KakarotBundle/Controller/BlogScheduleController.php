<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\BlogSchedule;
use Quartet\Bundle\KakarotBundle\Form\BlogScheduleType;

/**
 * BlogSchedule controller.
 *
 * @Route("/blogschedule")
 */
class BlogScheduleController extends Controller
{

    /**
     * Lists all BlogSchedule entities.
     *
     * @Route("/", name="blogschedule")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:BlogSchedule')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new BlogSchedule entity.
     *
     * @Route("/", name="blogschedule_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:BlogSchedule:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new BlogSchedule();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('blogschedule_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a BlogSchedule entity.
    *
    * @param BlogSchedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(BlogSchedule $entity)
    {
        $form = $this->createForm(new BlogScheduleType(), $entity, array(
            'action' => $this->generateUrl('blogschedule_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BlogSchedule entity.
     *
     * @Route("/new", name="blogschedule_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new BlogSchedule();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a BlogSchedule entity.
     *
     * @Route("/{id}", name="blogschedule_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:BlogSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BlogSchedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing BlogSchedule entity.
     *
     * @Route("/{id}/edit", name="blogschedule_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:BlogSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BlogSchedule entity.');
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
    * Creates a form to edit a BlogSchedule entity.
    *
    * @param BlogSchedule $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BlogSchedule $entity)
    {
        $form = $this->createForm(new BlogScheduleType(), $entity, array(
            'action' => $this->generateUrl('blogschedule_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BlogSchedule entity.
     *
     * @Route("/{id}", name="blogschedule_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:BlogSchedule:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:BlogSchedule')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BlogSchedule entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('blogschedule_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a BlogSchedule entity.
     *
     * @Route("/{id}", name="blogschedule_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:BlogSchedule')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BlogSchedule entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('blogschedule'));
    }

    /**
     * Creates a form to delete a BlogSchedule entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('blogschedule_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
