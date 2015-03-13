<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quartet\Bundle\KakarotBundle\Entity\Notification;
use Quartet\Bundle\KakarotBundle\Form\NotificationType;

/**
 * Notification controller.
 *
 * @Route("/notification")
 */
class NotificationController extends Controller
{
    private static $daysLabels = array('日', '月', '火', '水', '木', '金', '土');

    /**
     * Lists all Notification entities.
     *
     * @Route("/", name="notification")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $currentDate = date('Y-m');

        return $this->pagerAction($currentDate);
    }

    /**
     * Lists all Notification entities.
     *
     * @Route("/pager/{date}", name="notification_pager")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Notification:index.html.twig")
     */
    public function pagerAction($date)
    {
        $securityContext = $this->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $userEntity = $securityContext->getToken()->getUser();
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuartetKakarotBundle:Notification')
            ->getEntities($date, $userEntity);

        $nextDate = date('Y-m', strtotime($date. ' +1 month'));
        $prevDate = date('Y-m', strtotime($date. ' -1 month'));

        return array(
            'entities'    => $entities,
            'currentDate' => $date,
            'nextDate'    => $nextDate,
            'prevDate'    => $prevDate,
            'daysLabel'   => NotificationController::$daysLabels,
        );
    }

    /**
     * Lists all Notification entities.
     *
     * @Route("/{date}/all_already", name="notification_all_already_read")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Notification:index.html.twig")
     */
    public function allAlreadyReadAction($date)
    {
        $securityContext = $this->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $userEntity = $securityContext->getToken()->getUser();
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $em = $this->getDoctrine()->getManager();

        $em->getRepository('QuartetKakarotBundle:Notification')
            ->allAlreadyRead($date, $userEntity);

        return $this->pagerAction($date);
    }

    /**
     * Lists all Notification entities.
     *
     * @Route("/{id}/{date}/already", name="notification_already_read")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Notification:index.html.twig")
     */
    public function alreadyReadAction($id, $date)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Notification')->find($id);
        $entity->setIsRead(true);
        $em->flush();

        return $this->pagerAction($date);
    }

    /**
     * Lists all Notification entities.
     *
     * @Route("/{id}/{date}/notyet", name="notification_not_yet_read")
     * @Method("GET")
     * @Template("QuartetKakarotBundle:Notification:index.html.twig")
     */
    public function notYetReadAction($id, $date)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuartetKakarotBundle:Notification')->find($id);
        $entity->setIsRead(false);
        $em->flush();

        return $this->pagerAction($date);
    }
}
