<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\Division;
use Quartet\Bundle\KakarotBundle\Form\DivisionType;

/**
 * Division controller.
 *
 * @Route("/division")
 */
class DivisionController extends Controller
{

    /**
     * Lists all Division entities.
     *
     * @Route("/", name="division")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:Division')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Division entity.
     *
     * @Route("/", name="division_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:Division:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Division();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('division'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Division entity.
    *
    * @param Division $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Division $entity)
    {
        $form = $this->createForm(new DivisionType(), $entity, array(
            'action' => $this->generateUrl('division_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => '新規作成', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Division entity.
     *
     * @Route("/new", name="division_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Division();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Division entity.
     *
     * @Route("/{id}", name="division_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Division')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Division entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Division entity.
     *
     * @Route("/{id}/edit", name="division_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Division')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Division entity.');
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
    * Creates a form to edit a Division entity.
    *
    * @param Division $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Division $entity)
    {
        $form = $this->createForm(new DivisionType(), $entity, array(
            'action' => $this->generateUrl('division_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => '更新', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Division entity.
     *
     * @Route("/{id}", name="division_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:Division:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Division')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Division entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('division'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Division entity.
     *
     * @Route("/{id}", name="division_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:Division')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Division entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('division'));
    }

    /**
     * Creates a form to delete a Division entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('division_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => '削除', 'attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
