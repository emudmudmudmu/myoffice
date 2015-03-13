<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\DaySetting;
use Quartet\Bundle\KakarotBundle\Form\DaySettingType;

/**
 * DaySetting controller.
 *
 * @Route("/daysetting")
 */
class DaySettingController extends Controller
{

    /**
     * Lists all DaySetting entities.
     *
     * @Route("/", name="daysetting")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:DaySetting')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new DaySetting entity.
     *
     * @Route("/", name="daysetting_create")
     * @Method("POST")
     * @Template("QuartetKakarotBundle:DaySetting:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new DaySetting();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('daysetting_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a DaySetting entity.
    *
    * @param DaySetting $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(DaySetting $entity)
    {
        $form = $this->createForm(new DaySettingType(), $entity, array(
            'action' => $this->generateUrl('daysetting_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DaySetting entity.
     *
     * @Route("/new", name="daysetting_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new DaySetting();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing DaySetting entity.
     *
     * @Route("/{id}/edit", name="daysetting_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:DaySetting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DaySetting entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a DaySetting entity.
    *
    * @param DaySetting $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DaySetting $entity)
    {
        $form = $this->createForm(new DaySettingType(), $entity, array(
            'action' => $this->generateUrl('daysetting_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DaySetting entity.
     *
     * @Route("/{id}", name="daysetting_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:DaySetting:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:DaySetting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DaySetting entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('daysetting_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
}
