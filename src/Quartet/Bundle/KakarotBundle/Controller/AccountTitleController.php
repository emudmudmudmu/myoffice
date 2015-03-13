<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\AccountTitle;
use Quartet\Bundle\KakarotBundle\Form\AccountTitleType;

/**
 * AccountTitle controller.
 *
 * @Route("/accounttitle")
 */
class AccountTitleController extends Controller
{

    /**
     * Lists all AccountTitle entities.
     *
     * @Route("/", name="accounttitle")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:AccountTitle')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new AccountTitle entity.
     *
     * @Route("/", name="accounttitle_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:AccountTitle:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new AccountTitle();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('accounttitle'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a AccountTitle entity.
    *
    * @param AccountTitle $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(AccountTitle $entity)
    {
        $form = $this->createForm(new AccountTitleType(), $entity, array(
            'action' => $this->generateUrl('accounttitle_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => '新規作成', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new AccountTitle entity.
     *
     * @Route("/new", name="accounttitle_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new AccountTitle();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a AccountTitle entity.
     *
     * @Route("/{id}", name="accounttitle_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:AccountTitle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccountTitle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing AccountTitle entity.
     *
     * @Route("/{id}/edit", name="accounttitle_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:AccountTitle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccountTitle entity.');
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
    * Creates a form to edit a AccountTitle entity.
    *
    * @param AccountTitle $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AccountTitle $entity)
    {
        $form = $this->createForm(new AccountTitleType(), $entity, array(
            'action' => $this->generateUrl('accounttitle_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => '更新', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }
    /**
     * Edits an existing AccountTitle entity.
     *
     * @Route("/{id}", name="accounttitle_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:AccountTitle:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:AccountTitle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccountTitle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('accounttitle'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a AccountTitle entity.
     *
     * @Route("/{id}", name="accounttitle_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuartetKakarotBundle:AccountTitle')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AccountTitle entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('accounttitle'));
    }

    /**
     * Creates a form to delete a AccountTitle entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accounttitle_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => '削除', 'attr' => array('class' => 'btn-danger')))
            ->getForm()
        ;
    }
}
