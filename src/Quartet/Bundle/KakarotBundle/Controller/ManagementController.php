<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Management controller.
 *
 * @Route("/management")
 */
class ManagementController extends Controller
{

    /**
     * Lists all Management entities.
     *
     * @Route("/", name="management")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $masterDataResgister = $this->get('kakarot.master_data_resgister');
        $masterDataResgister->initialize();

        return array();
    }
}
