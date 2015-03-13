<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * MyOffice controller.
 *
 * @Route("/myoffice")
 */
class MyOfficeController extends Controller
{

    /**
     * Lists all Day entities.
     *
     * @Route("/", name="myoffice")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}