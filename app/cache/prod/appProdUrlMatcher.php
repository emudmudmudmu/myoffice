<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/accounttitle')) {
                // accounttitle
                if (rtrim($pathinfo, '/') === '/accounttitle') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_accounttitle;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'accounttitle');
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AccountTitleController::indexAction',  '_route' => 'accounttitle',);
                }
                not_accounttitle:

                // accounttitle_create
                if ($pathinfo === '/accounttitle/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_accounttitle_create;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AccountTitleController::createAction',  '_route' => 'accounttitle_create',);
                }
                not_accounttitle_create:

                // accounttitle_new
                if ($pathinfo === '/accounttitle/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_accounttitle_new;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AccountTitleController::newAction',  '_route' => 'accounttitle_new',);
                }
                not_accounttitle_new:

                // accounttitle_show
                if (preg_match('#^/accounttitle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_accounttitle_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accounttitle_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AccountTitleController::showAction',));
                }
                not_accounttitle_show:

                // accounttitle_edit
                if (preg_match('#^/accounttitle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_accounttitle_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accounttitle_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AccountTitleController::editAction',));
                }
                not_accounttitle_edit:

                // accounttitle_update
                if (preg_match('#^/accounttitle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_accounttitle_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accounttitle_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AccountTitleController::updateAction',));
                }
                not_accounttitle_update:

                // accounttitle_delete
                if (preg_match('#^/accounttitle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_accounttitle_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accounttitle_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AccountTitleController::deleteAction',));
                }
                not_accounttitle_delete:

            }

            if (0 === strpos($pathinfo, '/attendance')) {
                // attendance
                if (rtrim($pathinfo, '/') === '/attendance') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_attendance;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'attendance');
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::indexAction',  '_route' => 'attendance',);
                }
                not_attendance:

                // attendance_pager
                if (0 === strpos($pathinfo, '/attendance/pager') && preg_match('#^/attendance/pager/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_attendance_pager;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attendance_pager')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::pagerAction',));
                }
                not_attendance_pager:

                // attendance_create
                if ($pathinfo === '/attendance/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_attendance_create;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::createAction',  '_route' => 'attendance_create',);
                }
                not_attendance_create:

                // attendance_new
                if ($pathinfo === '/attendance/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_attendance_new;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::newAction',  '_route' => 'attendance_new',);
                }
                not_attendance_new:

                // attendance_show
                if (preg_match('#^/attendance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_attendance_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attendance_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::showAction',));
                }
                not_attendance_show:

                // attendance_edit
                if (preg_match('#^/attendance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_attendance_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attendance_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::editAction',));
                }
                not_attendance_edit:

                // attendance_update
                if (preg_match('#^/attendance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_attendance_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attendance_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::updateAction',));
                }
                not_attendance_update:

                // attendance_delete
                if (preg_match('#^/attendance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_attendance_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attendance_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\AttendanceController::deleteAction',));
                }
                not_attendance_delete:

            }

        }

        if (0 === strpos($pathinfo, '/blogschedule')) {
            // blogschedule
            if (rtrim($pathinfo, '/') === '/blogschedule') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_blogschedule;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'blogschedule');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\BlogScheduleController::indexAction',  '_route' => 'blogschedule',);
            }
            not_blogschedule:

            // blogschedule_create
            if ($pathinfo === '/blogschedule/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_blogschedule_create;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\BlogScheduleController::createAction',  '_route' => 'blogschedule_create',);
            }
            not_blogschedule_create:

            // blogschedule_new
            if ($pathinfo === '/blogschedule/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_blogschedule_new;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\BlogScheduleController::newAction',  '_route' => 'blogschedule_new',);
            }
            not_blogschedule_new:

            // blogschedule_show
            if (preg_match('#^/blogschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_blogschedule_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blogschedule_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\BlogScheduleController::showAction',));
            }
            not_blogschedule_show:

            // blogschedule_edit
            if (preg_match('#^/blogschedule/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_blogschedule_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blogschedule_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\BlogScheduleController::editAction',));
            }
            not_blogschedule_edit:

            // blogschedule_update
            if (preg_match('#^/blogschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_blogschedule_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blogschedule_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\BlogScheduleController::updateAction',));
            }
            not_blogschedule_update:

            // blogschedule_delete
            if (preg_match('#^/blogschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_blogschedule_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blogschedule_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\BlogScheduleController::deleteAction',));
            }
            not_blogschedule_delete:

        }

        if (0 === strpos($pathinfo, '/cleanschedule')) {
            // cleanschedule
            if (rtrim($pathinfo, '/') === '/cleanschedule') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cleanschedule;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cleanschedule');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\CleanScheduleController::indexAction',  '_route' => 'cleanschedule',);
            }
            not_cleanschedule:

            // cleanschedule_create
            if ($pathinfo === '/cleanschedule/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cleanschedule_create;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\CleanScheduleController::createAction',  '_route' => 'cleanschedule_create',);
            }
            not_cleanschedule_create:

            // cleanschedule_new
            if ($pathinfo === '/cleanschedule/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cleanschedule_new;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\CleanScheduleController::newAction',  '_route' => 'cleanschedule_new',);
            }
            not_cleanschedule_new:

            // cleanschedule_show
            if (preg_match('#^/cleanschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cleanschedule_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cleanschedule_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\CleanScheduleController::showAction',));
            }
            not_cleanschedule_show:

            // cleanschedule_edit
            if (preg_match('#^/cleanschedule/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cleanschedule_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cleanschedule_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\CleanScheduleController::editAction',));
            }
            not_cleanschedule_edit:

            // cleanschedule_update
            if (preg_match('#^/cleanschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_cleanschedule_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cleanschedule_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\CleanScheduleController::updateAction',));
            }
            not_cleanschedule_update:

            // cleanschedule_delete
            if (preg_match('#^/cleanschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cleanschedule_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cleanschedule_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\CleanScheduleController::deleteAction',));
            }
            not_cleanschedule_delete:

        }

        if (0 === strpos($pathinfo, '/day')) {
            // day
            if (rtrim($pathinfo, '/') === '/day') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_day;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'day');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DayController::indexAction',  '_route' => 'day',);
            }
            not_day:

            if (0 === strpos($pathinfo, '/daysetting')) {
                // daysetting
                if (rtrim($pathinfo, '/') === '/daysetting') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_daysetting;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'daysetting');
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DaySettingController::indexAction',  '_route' => 'daysetting',);
                }
                not_daysetting:

                // daysetting_create
                if ($pathinfo === '/daysetting/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_daysetting_create;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DaySettingController::createAction',  '_route' => 'daysetting_create',);
                }
                not_daysetting_create:

                // daysetting_new
                if ($pathinfo === '/daysetting/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_daysetting_new;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DaySettingController::newAction',  '_route' => 'daysetting_new',);
                }
                not_daysetting_new:

                // daysetting_edit
                if (preg_match('#^/daysetting/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_daysetting_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'daysetting_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DaySettingController::editAction',));
                }
                not_daysetting_edit:

                // daysetting_update
                if (preg_match('#^/daysetting/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_daysetting_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'daysetting_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DaySettingController::updateAction',));
                }
                not_daysetting_update:

            }

        }

        // quartet_kakarot_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'quartet_kakarot_default_index')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/division')) {
            // division
            if (rtrim($pathinfo, '/') === '/division') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_division;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'division');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DivisionController::indexAction',  '_route' => 'division',);
            }
            not_division:

            // division_create
            if ($pathinfo === '/division/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_division_create;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DivisionController::createAction',  '_route' => 'division_create',);
            }
            not_division_create:

            // division_new
            if ($pathinfo === '/division/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_division_new;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DivisionController::newAction',  '_route' => 'division_new',);
            }
            not_division_new:

            // division_show
            if (preg_match('#^/division/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_division_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'division_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DivisionController::showAction',));
            }
            not_division_show:

            // division_edit
            if (preg_match('#^/division/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_division_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'division_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DivisionController::editAction',));
            }
            not_division_edit:

            // division_update
            if (preg_match('#^/division/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_division_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'division_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DivisionController::updateAction',));
            }
            not_division_update:

            // division_delete
            if (preg_match('#^/division/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_division_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'division_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\DivisionController::deleteAction',));
            }
            not_division_delete:

        }

        if (0 === strpos($pathinfo, '/expense')) {
            // expense
            if (rtrim($pathinfo, '/') === '/expense') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_expense;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'expense');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::indexAction',  '_route' => 'expense',);
            }
            not_expense:

            // expense_pager
            if (0 === strpos($pathinfo, '/expense/pager') && preg_match('#^/expense/pager/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_expense_pager;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expense_pager')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::pagerAction',));
            }
            not_expense_pager:

            // expense_create
            if ($pathinfo === '/expense/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_expense_create;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::createAction',  '_route' => 'expense_create',);
            }
            not_expense_create:

            // expense_new
            if ($pathinfo === '/expense/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_expense_new;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::newAction',  '_route' => 'expense_new',);
            }
            not_expense_new:

            // expense_show
            if (preg_match('#^/expense/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_expense_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expense_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::showAction',));
            }
            not_expense_show:

            // expense_edit
            if (preg_match('#^/expense/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_expense_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expense_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::editAction',));
            }
            not_expense_edit:

            // expense_update
            if (preg_match('#^/expense/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_expense_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expense_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::updateAction',));
            }
            not_expense_update:

            // expense_delete
            if (preg_match('#^/expense/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_expense_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expense_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::deleteAction',));
            }
            not_expense_delete:

            // expense_copy
            if (0 === strpos($pathinfo, '/expense/copy') && preg_match('#^/expense/copy/(?P<date>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_expense_copy;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expense_copy')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::cpoyAction',));
            }
            not_expense_copy:

            if (0 === strpos($pathinfo, '/expense/processing')) {
                // expense_processing
                if ($pathinfo === '/expense/processing') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_expense_processing;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::processingAction',  '_route' => 'expense_processing',);
                }
                not_expense_processing:

                // expense_processing_select
                if ($pathinfo === '/expense/processing') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_expense_processing_select;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::processingSelectAction',  '_route' => 'expense_processing_select',);
                }
                not_expense_processing_select:

            }

        }

        if (0 === strpos($pathinfo, '/globalsetting')) {
            // globalsetting
            if (rtrim($pathinfo, '/') === '/globalsetting') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_globalsetting;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'globalsetting');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\GlobalSettingController::indexAction',  '_route' => 'globalsetting',);
            }
            not_globalsetting:

            // globalsetting_edit
            if (preg_match('#^/globalsetting/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_globalsetting_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'globalsetting_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\GlobalSettingController::editAction',));
            }
            not_globalsetting_edit:

            // globalsetting_update
            if (preg_match('#^/globalsetting/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_globalsetting_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'globalsetting_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\GlobalSettingController::updateAction',));
            }
            not_globalsetting_update:

        }

        if (0 === strpos($pathinfo, '/holidayscalendar')) {
            // holidayscalendar
            if (rtrim($pathinfo, '/') === '/holidayscalendar') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_holidayscalendar;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'holidayscalendar');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::indexAction',  '_route' => 'holidayscalendar',);
            }
            not_holidayscalendar:

            // holidayscalendar_pager
            if (0 === strpos($pathinfo, '/holidayscalendar/pager') && preg_match('#^/holidayscalendar/pager/(?P<year>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_holidayscalendar_pager;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'holidayscalendar_pager')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::pagerAction',));
            }
            not_holidayscalendar_pager:

            // holidayscalendar_googlecalendar
            if (0 === strpos($pathinfo, '/holidayscalendar/holidayscalendar_googlecalendar') && preg_match('#^/holidayscalendar/holidayscalendar_googlecalendar/(?P<year>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_holidayscalendar_googlecalendar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'holidayscalendar_googlecalendar')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::googleCalendarAction',));
            }
            not_holidayscalendar_googlecalendar:

            // holidayscalendar_create
            if ($pathinfo === '/holidayscalendar/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_holidayscalendar_create;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::createAction',  '_route' => 'holidayscalendar_create',);
            }
            not_holidayscalendar_create:

            // holidayscalendar_new
            if ($pathinfo === '/holidayscalendar/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_holidayscalendar_new;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::newAction',  '_route' => 'holidayscalendar_new',);
            }
            not_holidayscalendar_new:

            // holidayscalendar_show
            if (preg_match('#^/holidayscalendar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_holidayscalendar_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'holidayscalendar_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::showAction',));
            }
            not_holidayscalendar_show:

            // holidayscalendar_edit
            if (preg_match('#^/holidayscalendar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_holidayscalendar_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'holidayscalendar_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::editAction',));
            }
            not_holidayscalendar_edit:

            // holidayscalendar_update
            if (preg_match('#^/holidayscalendar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_holidayscalendar_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'holidayscalendar_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::updateAction',));
            }
            not_holidayscalendar_update:

            // holidayscalendar_delete
            if (preg_match('#^/holidayscalendar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_holidayscalendar_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'holidayscalendar_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\HolidaysCalendarController::deleteAction',));
            }
            not_holidayscalendar_delete:

        }

        if (0 === strpos($pathinfo, '/likeschedule')) {
            // likeschedule
            if (rtrim($pathinfo, '/') === '/likeschedule') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_likeschedule;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'likeschedule');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\LikeScheduleController::indexAction',  '_route' => 'likeschedule',);
            }
            not_likeschedule:

            // likeschedule_create
            if ($pathinfo === '/likeschedule/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_likeschedule_create;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\LikeScheduleController::createAction',  '_route' => 'likeschedule_create',);
            }
            not_likeschedule_create:

            // likeschedule_new
            if ($pathinfo === '/likeschedule/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_likeschedule_new;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\LikeScheduleController::newAction',  '_route' => 'likeschedule_new',);
            }
            not_likeschedule_new:

            // likeschedule_show
            if (preg_match('#^/likeschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_likeschedule_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'likeschedule_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\LikeScheduleController::showAction',));
            }
            not_likeschedule_show:

            // likeschedule_edit
            if (preg_match('#^/likeschedule/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_likeschedule_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'likeschedule_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\LikeScheduleController::editAction',));
            }
            not_likeschedule_edit:

            // likeschedule_update
            if (preg_match('#^/likeschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_likeschedule_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'likeschedule_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\LikeScheduleController::updateAction',));
            }
            not_likeschedule_update:

            // likeschedule_delete
            if (preg_match('#^/likeschedule/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_likeschedule_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'likeschedule_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\LikeScheduleController::deleteAction',));
            }
            not_likeschedule_delete:

        }

        // quartet_kakarot_main_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_quartet_kakarot_main_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'quartet_kakarot_main_index');
            }

            return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\MainController::indexAction',  '_route' => 'quartet_kakarot_main_index',);
        }
        not_quartet_kakarot_main_index:

        // management
        if (rtrim($pathinfo, '/') === '/management') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_management;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'management');
            }

            return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ManagementController::indexAction',  '_route' => 'management',);
        }
        not_management:

        if (0 === strpos($pathinfo, '/position')) {
            // position
            if (rtrim($pathinfo, '/') === '/position') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'position');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PositionController::indexAction',  '_route' => 'position',);
            }
            not_position:

            // position_create
            if ($pathinfo === '/position/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_position_create;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PositionController::createAction',  '_route' => 'position_create',);
            }
            not_position_create:

            // position_new
            if ($pathinfo === '/position/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position_new;
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PositionController::newAction',  '_route' => 'position_new',);
            }
            not_position_new:

            // position_show
            if (preg_match('#^/position/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PositionController::showAction',));
            }
            not_position_show:

            // position_edit
            if (preg_match('#^/position/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PositionController::editAction',));
            }
            not_position_edit:

            // position_update
            if (preg_match('#^/position/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_position_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PositionController::updateAction',));
            }
            not_position_update:

            // position_delete
            if (preg_match('#^/position/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_position_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'position_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PositionController::deleteAction',));
            }
            not_position_delete:

        }

        // role
        if (rtrim($pathinfo, '/') === '/role') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_role;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'role');
            }

            return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
        }
        not_role:

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }
            not_user:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
