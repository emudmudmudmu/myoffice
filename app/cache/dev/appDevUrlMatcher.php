<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/08beb90')) {
            // _assetic_08beb90
            if ($pathinfo === '/css/08beb90.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '08beb90',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_08beb90',);
            }

            if (0 === strpos($pathinfo, '/css/08beb90_')) {
                // _assetic_08beb90_0
                if ($pathinfo === '/css/08beb90_mopabootstrapbundle_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '08beb90',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_08beb90_0',);
                }

                // _assetic_08beb90_1
                if ($pathinfo === '/css/08beb90_eyecon-datepicker_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '08beb90',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_08beb90_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/647abb0')) {
            // _assetic_647abb0
            if ($pathinfo === '/js/647abb0.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_647abb0',);
            }

            if (0 === strpos($pathinfo, '/js/647abb0_')) {
                // _assetic_647abb0_0
                if ($pathinfo === '/js/647abb0_tooltip_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_647abb0_0',);
                }

                if (0 === strpos($pathinfo, '/js/647abb0_a')) {
                    // _assetic_647abb0_1
                    if ($pathinfo === '/js/647abb0_affix_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_647abb0_1',);
                    }

                    // _assetic_647abb0_2
                    if ($pathinfo === '/js/647abb0_alert_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_647abb0_2',);
                    }

                }

                // _assetic_647abb0_3
                if ($pathinfo === '/js/647abb0_button_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_647abb0_3',);
                }

                if (0 === strpos($pathinfo, '/js/647abb0_c')) {
                    // _assetic_647abb0_4
                    if ($pathinfo === '/js/647abb0_carousel_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_647abb0_4',);
                    }

                    // _assetic_647abb0_5
                    if ($pathinfo === '/js/647abb0_collapse_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_647abb0_5',);
                    }

                }

                // _assetic_647abb0_6
                if ($pathinfo === '/js/647abb0_dropdown_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_647abb0_6',);
                }

                // _assetic_647abb0_7
                if ($pathinfo === '/js/647abb0_modal_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_647abb0_7',);
                }

                // _assetic_647abb0_8
                if ($pathinfo === '/js/647abb0_popover_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_647abb0_8',);
                }

                // _assetic_647abb0_9
                if ($pathinfo === '/js/647abb0_scrollspy_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_647abb0_9',);
                }

                if (0 === strpos($pathinfo, '/js/647abb0_t')) {
                    // _assetic_647abb0_10
                    if ($pathinfo === '/js/647abb0_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_647abb0_10',);
                    }

                    // _assetic_647abb0_11
                    if ($pathinfo === '/js/647abb0_transition_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_647abb0_11',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/647abb0_mopabootstrap-')) {
                    // _assetic_647abb0_12
                    if ($pathinfo === '/js/647abb0_mopabootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_647abb0_12',);
                    }

                    // _assetic_647abb0_13
                    if ($pathinfo === '/js/647abb0_mopabootstrap-subnav_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_647abb0_13',);
                    }

                }

                // _assetic_647abb0_14
                if ($pathinfo === '/js/647abb0_eyecon-bootstrap-datepicker_15.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '647abb0',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_647abb0_14',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/screen_diagnostic')) {
            // _assetic_d75f95d
            if ($pathinfo === '/css/screen_diagnostic.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd75f95d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d75f95d',);
            }

            // _assetic_d75f95d_0
            if ($pathinfo === '/css/screen_diagnostic_diagnostic_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd75f95d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d75f95d_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/head_compiled')) {
                // _assetic_ba30769
                if ($pathinfo === '/js/head_compiled.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba30769',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ba30769',);
                }

                // _assetic_ba30769_0
                if ($pathinfo === '/js/head_compiled_modernizr-2.5.3-respond-1.1.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba30769',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ba30769_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/foot_compiled')) {
                // _assetic_51ad5fc
                if ($pathinfo === '/js/foot_compiled.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_51ad5fc',);
                }

                if (0 === strpos($pathinfo, '/js/foot_compiled_')) {
                    // _assetic_51ad5fc_0
                    if ($pathinfo === '/js/foot_compiled_tooltip_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/foot_compiled_a')) {
                        // _assetic_51ad5fc_1
                        if ($pathinfo === '/js/foot_compiled_affix_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_1',);
                        }

                        // _assetic_51ad5fc_2
                        if ($pathinfo === '/js/foot_compiled_alert_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_2',);
                        }

                    }

                    // _assetic_51ad5fc_3
                    if ($pathinfo === '/js/foot_compiled_button_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_3',);
                    }

                    if (0 === strpos($pathinfo, '/js/foot_compiled_c')) {
                        // _assetic_51ad5fc_4
                        if ($pathinfo === '/js/foot_compiled_carousel_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_4',);
                        }

                        // _assetic_51ad5fc_5
                        if ($pathinfo === '/js/foot_compiled_collapse_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_5',);
                        }

                    }

                    // _assetic_51ad5fc_6
                    if ($pathinfo === '/js/foot_compiled_dropdown_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_6',);
                    }

                    // _assetic_51ad5fc_7
                    if ($pathinfo === '/js/foot_compiled_modal_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_7',);
                    }

                    // _assetic_51ad5fc_8
                    if ($pathinfo === '/js/foot_compiled_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_8',);
                    }

                    // _assetic_51ad5fc_9
                    if ($pathinfo === '/js/foot_compiled_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_9',);
                    }

                    if (0 === strpos($pathinfo, '/js/foot_compiled_t')) {
                        // _assetic_51ad5fc_10
                        if ($pathinfo === '/js/foot_compiled_tab_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_10',);
                        }

                        // _assetic_51ad5fc_11
                        if ($pathinfo === '/js/foot_compiled_transition_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_11',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/foot_compiled_mopabootstrap-')) {
                        // _assetic_51ad5fc_12
                        if ($pathinfo === '/js/foot_compiled_mopabootstrap-collection_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_12',);
                        }

                        // _assetic_51ad5fc_13
                        if ($pathinfo === '/js/foot_compiled_mopabootstrap-subnav_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_13',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/foot_compiled_html5bp_')) {
                        // _assetic_51ad5fc_14
                        if ($pathinfo === '/js/foot_compiled_html5bp_plugins_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_14',);
                        }

                        // _assetic_51ad5fc_15
                        if ($pathinfo === '/js/foot_compiled_html5bp_script_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_15',);
                        }

                    }

                    // _assetic_51ad5fc_16
                    if ($pathinfo === '/js/foot_compiled_eyecon-bootstrap-datepicker_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51ad5fc',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_51ad5fc_16',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/99536f5')) {
            // _assetic_99536f5
            if ($pathinfo === '/css/99536f5.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '99536f5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_99536f5',);
            }

            if (0 === strpos($pathinfo, '/css/99536f5_m')) {
                // _assetic_99536f5_0
                if ($pathinfo === '/css/99536f5_mopabootstrapbundle_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '99536f5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_99536f5_0',);
                }

                // _assetic_99536f5_1
                if ($pathinfo === '/css/99536f5_main_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '99536f5',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_99536f5_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/71a4197')) {
                // _assetic_71a4197
                if ($pathinfo === '/js/71a4197.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '71a4197',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_71a4197',);
                }

                if (0 === strpos($pathinfo, '/js/71a4197_')) {
                    // _assetic_71a4197_0
                    if ($pathinfo === '/js/71a4197_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '71a4197',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_71a4197_0',);
                    }

                    // _assetic_71a4197_1
                    if ($pathinfo === '/js/71a4197_expense_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '71a4197',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_71a4197_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/8c626b9')) {
                // _assetic_8c626b9
                if ($pathinfo === '/js/8c626b9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8c626b9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8c626b9',);
                }

                if (0 === strpos($pathinfo, '/js/8c626b9_')) {
                    // _assetic_8c626b9_0
                    if ($pathinfo === '/js/8c626b9_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8c626b9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8c626b9_0',);
                    }

                    // _assetic_8c626b9_1
                    if ($pathinfo === '/js/8c626b9_paidholiday_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8c626b9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8c626b9_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expense_copy')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\ExpenseController::copyAction',));
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

        if (0 === strpos($pathinfo, '/m')) {
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

            // myoffice
            if (rtrim($pathinfo, '/') === '/myoffice') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_myoffice;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myoffice');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\MyOfficeController::indexAction',  '_route' => 'myoffice',);
            }
            not_myoffice:

        }

        if (0 === strpos($pathinfo, '/notification')) {
            // notification
            if (rtrim($pathinfo, '/') === '/notification') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notification');
                }

                return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification',);
            }
            not_notification:

            // notification_pager
            if (0 === strpos($pathinfo, '/notification/pager') && preg_match('#^/notification/pager/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_pager;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_pager')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\NotificationController::pagerAction',));
            }
            not_notification_pager:

            // notification_all_already_read
            if (preg_match('#^/notification/(?P<date>[^/]++)/all_already$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_all_already_read;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_all_already_read')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\NotificationController::allAlreadyReadAction',));
            }
            not_notification_all_already_read:

            // notification_already_read
            if (preg_match('#^/notification/(?P<id>[^/]++)/(?P<date>[^/]++)/already$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_already_read;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_already_read')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\NotificationController::alreadyReadAction',));
            }
            not_notification_already_read:

            // notification_not_yet_read
            if (preg_match('#^/notification/(?P<id>[^/]++)/(?P<date>[^/]++)/notyet$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_not_yet_read;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_not_yet_read')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\NotificationController::notYetReadAction',));
            }
            not_notification_not_yet_read:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/paidholiday')) {
                // paidholiday
                if (rtrim($pathinfo, '/') === '/paidholiday') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paidholiday;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paidholiday');
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::indexAction',  '_route' => 'paidholiday',);
                }
                not_paidholiday:

                // paidholiday_pager
                if (0 === strpos($pathinfo, '/paidholiday/pager') && preg_match('#^/paidholiday/pager/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paidholiday_pager;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paidholiday_pager')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::pagerAction',));
                }
                not_paidholiday_pager:

                // paidholiday_approval
                if ($pathinfo === '/paidholiday/approval') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paidholiday_approval;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::approvalAction',  '_route' => 'paidholiday_approval',);
                }
                not_paidholiday_approval:

                // paidholiday_approval_update
                if (preg_match('#^/paidholiday/(?P<id>[^/]++)/approval$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paidholiday_approval_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paidholiday_approval_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::approvalUpdateAction',));
                }
                not_paidholiday_approval_update:

                // paidholiday_create
                if ($pathinfo === '/paidholiday/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_paidholiday_create;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::createAction',  '_route' => 'paidholiday_create',);
                }
                not_paidholiday_create:

                // paidholiday_new
                if ($pathinfo === '/paidholiday/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paidholiday_new;
                    }

                    return array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::newAction',  '_route' => 'paidholiday_new',);
                }
                not_paidholiday_new:

                // paidholiday_show
                if (preg_match('#^/paidholiday/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paidholiday_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paidholiday_show')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::showAction',));
                }
                not_paidholiday_show:

                // paidholiday_edit
                if (preg_match('#^/paidholiday/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paidholiday_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paidholiday_edit')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::editAction',));
                }
                not_paidholiday_edit:

                // paidholiday_update
                if (preg_match('#^/paidholiday/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_paidholiday_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paidholiday_update')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::updateAction',));
                }
                not_paidholiday_update:

                // paidholiday_delete
                if (preg_match('#^/paidholiday/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_paidholiday_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paidholiday_delete')), array (  '_controller' => 'Quartet\\Bundle\\KakarotBundle\\Controller\\PaidHolidayController::deleteAction',));
                }
                not_paidholiday_delete:

            }

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
