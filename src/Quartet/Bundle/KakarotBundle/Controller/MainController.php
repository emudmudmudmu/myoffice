<?php

namespace Quartet\Bundle\KakarotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Main controller.
 *
 * @Route("/")
 */
class MainController extends Controller
{

    /**
     * Lists all Main entities.
     *
     * @Route("/")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $securityContext = $this->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $loginUser = $securityContext->getToken()->getUser()->getId();
        }
        else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        // 祝日データを取得
        $hs = $this->get('kakarot.google_calendar');
        $hs->initialize();
        $monthHolidays = $hs->getMonthHolidays();
        $oneWeekHolidays = $hs->getOneWeekHolidays();
        $oneWeekHeader = $hs->getOneWeekHeader();

        // ゴミ捨て当番・掃除当番を取得
        $cs = $this->get('kakarot.clean_schedules_service');
        $cleanSchedules = $cs->getCleanSchedules($oneWeekHolidays, $loginUser);

        // いいね！グループを取得
        $ls = $this->get('kakarot.like_schedules_service');
        $likeSchedules = $ls->getLikeSchedules($oneWeekHolidays, $loginUser);

        // 知っ得メンバーを取得
        $bs = $this->get('kakarot.blog_schedules_service');
        $blogSchedules = $bs->getBlogSchedules($monthHolidays, $loginUser);

        return array(
            'clean_schedules' => $cleanSchedules,
            'like_schedules'  => $likeSchedules,
            'blog_schedules'  => $blogSchedules,
            'oneWeekHolidays' => $oneWeekHolidays,
            'oneWeekHeader'   => $oneWeekHeader,
        );
    }
}
