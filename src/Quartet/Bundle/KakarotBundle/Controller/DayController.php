<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\Day;
use Quartet\Bundle\KakarotBundle\Form\DayType;

/**
 * Day controller.
 *
 * @Route("/day")
 */
class DayController extends Controller
{

    /**
     * Lists all Day entities.
     *
     * @Route("/", name="day")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:Day')->findAll();

        return array(
            'entities' => $entities,
        );
    }
}
