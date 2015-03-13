<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\GlobalSetting;
use Quartet\Bundle\KakarotBundle\Form\GlobalSettingType;

/**
 * GlobalSetting controller.
 *
 * @Route("/globalsetting")
 */
class GlobalSettingController extends Controller
{

    /**
     * Lists all GlobalSetting entities.
     *
     * @Route("/", name="globalsetting")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:GlobalSetting')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Displays a form to edit an existing GlobalSetting entity.
     *
     * @Route("/{id}/edit", name="globalsetting_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:GlobalSetting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GlobalSetting entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a GlobalSetting entity.
    *
    * @param GlobalSetting $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(GlobalSetting $entity)
    {
        $form = $this->createForm(new GlobalSettingType(), $entity, array(
            'action' => $this->generateUrl('globalsetting_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => '更新', 'attr' => array('class' => 'btn-primary')));

        return $form;
    }
    /**
     * Edits an existing GlobalSetting entity.
     *
     * @Route("/{id}", name="globalsetting_update")
     * @Method("PUT")
     * @Template("QuartetKakarotBundle:GlobalSetting:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:GlobalSetting')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GlobalSetting entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('globalsetting'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
}
