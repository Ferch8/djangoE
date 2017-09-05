<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // bufete_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bufete_homepage');
            }

            return array (  '_controller' => 'BufeteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bufete_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/paises')) {
                // paises_index
                if (rtrim($pathinfo, '/') === '/paises') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paises_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paises_index');
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\PaisesController::indexAction',  '_route' => 'paises_index',);
                }
                not_paises_index:

                // paises_show
                if (preg_match('#^/paises/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paises_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paises_show')), array (  '_controller' => 'BufeteBundle\\Controller\\PaisesController::showAction',));
                }
                not_paises_show:

                // paises_new
                if ($pathinfo === '/paises/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_paises_new;
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\PaisesController::newAction',  '_route' => 'paises_new',);
                }
                not_paises_new:

                // paises_edit
                if (preg_match('#^/paises/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_paises_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paises_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\PaisesController::editAction',));
                }
                not_paises_edit:

                // paises_delete
                if (preg_match('#^/paises/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_paises_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paises_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\PaisesController::deleteAction',));
                }
                not_paises_delete:

            }

            if (0 === strpos($pathinfo, '/pre')) {
                if (0 === strpos($pathinfo, '/prestaciones')) {
                    // prestaciones_index
                    if (rtrim($pathinfo, '/') === '/prestaciones') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_prestaciones_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'prestaciones_index');
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\PrestacionesController::indexAction',  '_route' => 'prestaciones_index',);
                    }
                    not_prestaciones_index:

                    // prestaciones_show
                    if (preg_match('#^/prestaciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_prestaciones_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestaciones_show')), array (  '_controller' => 'BufeteBundle\\Controller\\PrestacionesController::showAction',));
                    }
                    not_prestaciones_show:

                    // prestaciones_new
                    if ($pathinfo === '/prestaciones/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_prestaciones_new;
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\PrestacionesController::newAction',  '_route' => 'prestaciones_new',);
                    }
                    not_prestaciones_new:

                    // prestaciones_edit
                    if (preg_match('#^/prestaciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_prestaciones_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestaciones_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\PrestacionesController::editAction',));
                    }
                    not_prestaciones_edit:

                    // prestaciones_delete
                    if (preg_match('#^/prestaciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_prestaciones_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'prestaciones_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\PrestacionesController::deleteAction',));
                    }
                    not_prestaciones_delete:

                }

                if (0 === strpos($pathinfo, '/pretenciones')) {
                    // pretenciones_index
                    if (rtrim($pathinfo, '/') === '/pretenciones') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pretenciones_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pretenciones_index');
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\PretencionesController::indexAction',  '_route' => 'pretenciones_index',);
                    }
                    not_pretenciones_index:

                    // pretenciones_show
                    if (preg_match('#^/pretenciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pretenciones_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pretenciones_show')), array (  '_controller' => 'BufeteBundle\\Controller\\PretencionesController::showAction',));
                    }
                    not_pretenciones_show:

                    // pretenciones_new
                    if ($pathinfo === '/pretenciones/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_pretenciones_new;
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\PretencionesController::newAction',  '_route' => 'pretenciones_new',);
                    }
                    not_pretenciones_new:

                    // pretenciones_edit
                    if (preg_match('#^/pretenciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_pretenciones_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pretenciones_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\PretencionesController::editAction',));
                    }
                    not_pretenciones_edit:

                    // pretenciones_delete
                    if (preg_match('#^/pretenciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pretenciones_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pretenciones_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\PretencionesController::deleteAction',));
                    }
                    not_pretenciones_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tribunales')) {
                // tribunales_index
                if (rtrim($pathinfo, '/') === '/tribunales') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tribunales_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tribunales_index');
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\TribunalesController::indexAction',  '_route' => 'tribunales_index',);
                }
                not_tribunales_index:

                // tribunales_show
                if (preg_match('#^/tribunales/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tribunales_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tribunales_show')), array (  '_controller' => 'BufeteBundle\\Controller\\TribunalesController::showAction',));
                }
                not_tribunales_show:

                // tribunales_new
                if ($pathinfo === '/tribunales/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tribunales_new;
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\TribunalesController::newAction',  '_route' => 'tribunales_new',);
                }
                not_tribunales_new:

                // tribunales_edit
                if (preg_match('#^/tribunales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tribunales_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tribunales_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\TribunalesController::editAction',));
                }
                not_tribunales_edit:

                // tribunales_delete
                if (preg_match('#^/tribunales/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tribunales_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tribunales_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\TribunalesController::deleteAction',));
                }
                not_tribunales_delete:

            }

            if (0 === strpos($pathinfo, '/tipo')) {
                if (0 === strpos($pathinfo, '/tipoasuntos')) {
                    // tipoasuntos_index
                    if (rtrim($pathinfo, '/') === '/tipoasuntos') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoasuntos_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tipoasuntos_index');
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\TipoasuntosController::indexAction',  '_route' => 'tipoasuntos_index',);
                    }
                    not_tipoasuntos_index:

                    // tipoasuntos_show
                    if (preg_match('#^/tipoasuntos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoasuntos_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoasuntos_show')), array (  '_controller' => 'BufeteBundle\\Controller\\TipoasuntosController::showAction',));
                    }
                    not_tipoasuntos_show:

                    // tipoasuntos_new
                    if ($pathinfo === '/tipoasuntos/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tipoasuntos_new;
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\TipoasuntosController::newAction',  '_route' => 'tipoasuntos_new',);
                    }
                    not_tipoasuntos_new:

                    // tipoasuntos_edit
                    if (preg_match('#^/tipoasuntos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tipoasuntos_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoasuntos_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\TipoasuntosController::editAction',));
                    }
                    not_tipoasuntos_edit:

                    // tipoasuntos_delete
                    if (preg_match('#^/tipoasuntos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_tipoasuntos_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoasuntos_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\TipoasuntosController::deleteAction',));
                    }
                    not_tipoasuntos_delete:

                }

                if (0 === strpos($pathinfo, '/tipocaso')) {
                    // tipocaso_index
                    if (rtrim($pathinfo, '/') === '/tipocaso') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipocaso_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tipocaso_index');
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\TipocasoController::indexAction',  '_route' => 'tipocaso_index',);
                    }
                    not_tipocaso_index:

                    // tipocaso_show
                    if (preg_match('#^/tipocaso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipocaso_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocaso_show')), array (  '_controller' => 'BufeteBundle\\Controller\\TipocasoController::showAction',));
                    }
                    not_tipocaso_show:

                    // tipocaso_new
                    if ($pathinfo === '/tipocaso/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tipocaso_new;
                        }

                        return array (  '_controller' => 'BufeteBundle\\Controller\\TipocasoController::newAction',  '_route' => 'tipocaso_new',);
                    }
                    not_tipocaso_new:

                    // tipocaso_edit
                    if (preg_match('#^/tipocaso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_tipocaso_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocaso_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\TipocasoController::editAction',));
                    }
                    not_tipocaso_edit:

                    // tipocaso_delete
                    if (preg_match('#^/tipocaso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_tipocaso_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocaso_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\TipocasoController::deleteAction',));
                    }
                    not_tipocaso_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/bufetes')) {
            // bufetes_index
            if (rtrim($pathinfo, '/') === '/bufetes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bufetes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bufetes_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\BufetesController::indexAction',  '_route' => 'bufetes_index',);
            }
            not_bufetes_index:

            // bufetes_show
            if (preg_match('#^/bufetes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bufetes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bufetes_show')), array (  '_controller' => 'BufeteBundle\\Controller\\BufetesController::showAction',));
            }
            not_bufetes_show:

            // bufetes_new
            if ($pathinfo === '/bufetes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_bufetes_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\BufetesController::newAction',  '_route' => 'bufetes_new',);
            }
            not_bufetes_new:

            // bufetes_edit
            if (preg_match('#^/bufetes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_bufetes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bufetes_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\BufetesController::editAction',));
            }
            not_bufetes_edit:

            // bufetes_delete
            if (preg_match('#^/bufetes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_bufetes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bufetes_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\BufetesController::deleteAction',));
            }
            not_bufetes_delete:

        }

        if (0 === strpos($pathinfo, '/de')) {
            if (0 === strpos($pathinfo, '/demandantes')) {
                // demandantes_index
                if (rtrim($pathinfo, '/') === '/demandantes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_demandantes_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demandantes_index');
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\DemandantesController::indexAction',  '_route' => 'demandantes_index',);
                }
                not_demandantes_index:

                // demandantes_show
                if (preg_match('#^/demandantes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_demandantes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandantes_show')), array (  '_controller' => 'BufeteBundle\\Controller\\DemandantesController::showAction',));
                }
                not_demandantes_show:

                // demandantes_new
                if ($pathinfo === '/demandantes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_demandantes_new;
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\DemandantesController::newAction',  '_route' => 'demandantes_new',);
                }
                not_demandantes_new:

                // demandantes_edit
                if (preg_match('#^/demandantes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_demandantes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandantes_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\DemandantesController::editAction',));
                }
                not_demandantes_edit:

                // demandantes_delete
                if (preg_match('#^/demandantes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_demandantes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandantes_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\DemandantesController::deleteAction',));
                }
                not_demandantes_delete:

            }

            if (0 === strpos($pathinfo, '/departamentos')) {
                // departamentos_index
                if (rtrim($pathinfo, '/') === '/departamentos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_departamentos_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'departamentos_index');
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\DepartamentosController::indexAction',  '_route' => 'departamentos_index',);
                }
                not_departamentos_index:

                // departamentos_show
                if (preg_match('#^/departamentos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_departamentos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamentos_show')), array (  '_controller' => 'BufeteBundle\\Controller\\DepartamentosController::showAction',));
                }
                not_departamentos_show:

                // departamentos_new
                if ($pathinfo === '/departamentos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_departamentos_new;
                    }

                    return array (  '_controller' => 'BufeteBundle\\Controller\\DepartamentosController::newAction',  '_route' => 'departamentos_new',);
                }
                not_departamentos_new:

                // departamentos_edit
                if (preg_match('#^/departamentos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_departamentos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamentos_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\DepartamentosController::editAction',));
                }
                not_departamentos_edit:

                // departamentos_delete
                if (preg_match('#^/departamentos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_departamentos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamentos_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\DepartamentosController::deleteAction',));
                }
                not_departamentos_delete:

            }

        }

        if (0 === strpos($pathinfo, '/ciudad')) {
            // ciudad_index
            if (rtrim($pathinfo, '/') === '/ciudad') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ciudad_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ciudad_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\CiudadController::indexAction',  '_route' => 'ciudad_index',);
            }
            not_ciudad_index:

            // ciudad_show
            if (preg_match('#^/ciudad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ciudad_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_show')), array (  '_controller' => 'BufeteBundle\\Controller\\CiudadController::showAction',));
            }
            not_ciudad_show:

            // ciudad_new
            if ($pathinfo === '/ciudad/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ciudad_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\CiudadController::newAction',  '_route' => 'ciudad_new',);
            }
            not_ciudad_new:

            // ciudad_edit
            if (preg_match('#^/ciudad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ciudad_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\CiudadController::editAction',));
            }
            not_ciudad_edit:

            // ciudad_delete
            if (preg_match('#^/ciudad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ciudad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\CiudadController::deleteAction',));
            }
            not_ciudad_delete:

        }

        if (0 === strpos($pathinfo, '/estadosciviles')) {
            // estadosciviles_index
            if (rtrim($pathinfo, '/') === '/estadosciviles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estadosciviles_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estadosciviles_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\EstadoscivilesController::indexAction',  '_route' => 'estadosciviles_index',);
            }
            not_estadosciviles_index:

            // estadosciviles_show
            if (preg_match('#^/estadosciviles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estadosciviles_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadosciviles_show')), array (  '_controller' => 'BufeteBundle\\Controller\\EstadoscivilesController::showAction',));
            }
            not_estadosciviles_show:

            // estadosciviles_new
            if ($pathinfo === '/estadosciviles/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estadosciviles_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\EstadoscivilesController::newAction',  '_route' => 'estadosciviles_new',);
            }
            not_estadosciviles_new:

            // estadosciviles_edit
            if (preg_match('#^/estadosciviles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estadosciviles_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadosciviles_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\EstadoscivilesController::editAction',));
            }
            not_estadosciviles_edit:

            // estadosciviles_delete
            if (preg_match('#^/estadosciviles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_estadosciviles_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadosciviles_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\EstadoscivilesController::deleteAction',));
            }
            not_estadosciviles_delete:

        }

        if (0 === strpos($pathinfo, '/trabajos')) {
            // trabajos_index
            if (rtrim($pathinfo, '/') === '/trabajos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_trabajos_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'trabajos_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\TrabajosController::indexAction',  '_route' => 'trabajos_index',);
            }
            not_trabajos_index:

            // trabajos_show
            if (preg_match('#^/trabajos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_trabajos_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_show')), array (  '_controller' => 'BufeteBundle\\Controller\\TrabajosController::showAction',));
            }
            not_trabajos_show:

            // trabajos_new
            if ($pathinfo === '/trabajos/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_trabajos_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\TrabajosController::newAction',  '_route' => 'trabajos_new',);
            }
            not_trabajos_new:

            // trabajos_edit
            if (preg_match('#^/trabajos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_trabajos_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\TrabajosController::editAction',));
            }
            not_trabajos_edit:

            // trabajos_delete
            if (preg_match('#^/trabajos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_trabajos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajos_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\TrabajosController::deleteAction',));
            }
            not_trabajos_delete:

        }

        if (0 === strpos($pathinfo, '/demandados')) {
            // demandados_index
            if (rtrim($pathinfo, '/') === '/demandados') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_demandados_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'demandados_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\DemandadosController::indexAction',  '_route' => 'demandados_index',);
            }
            not_demandados_index:

            // demandados_show
            if (preg_match('#^/demandados/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_demandados_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandados_show')), array (  '_controller' => 'BufeteBundle\\Controller\\DemandadosController::showAction',));
            }
            not_demandados_show:

            // demandados_new
            if ($pathinfo === '/demandados/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_demandados_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\DemandadosController::newAction',  '_route' => 'demandados_new',);
            }
            not_demandados_new:

            // demandados_edit
            if (preg_match('#^/demandados/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_demandados_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandados_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\DemandadosController::editAction',));
            }
            not_demandados_edit:

            // demandados_delete
            if (preg_match('#^/demandados/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_demandados_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandados_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\DemandadosController::deleteAction',));
            }
            not_demandados_delete:

        }

        if (0 === strpos($pathinfo, '/personas')) {
            // personas_index
            if (rtrim($pathinfo, '/') === '/personas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_personas_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'personas_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\PersonasController::indexAction',  '_route' => 'personas_index',);
            }
            not_personas_index:

            // personas_show
            if (preg_match('#^/personas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_personas_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personas_show')), array (  '_controller' => 'BufeteBundle\\Controller\\PersonasController::showAction',));
            }
            not_personas_show:

            // personas_new
            if ($pathinfo === '/personas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_personas_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\PersonasController::newAction',  '_route' => 'personas_new',);
            }
            not_personas_new:

            // personas_edit
            if (preg_match('#^/personas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_personas_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personas_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\PersonasController::editAction',));
            }
            not_personas_edit:

            // personas_delete
            if (preg_match('#^/personas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_personas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personas_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\PersonasController::deleteAction',));
            }
            not_personas_delete:

        }

        if (0 === strpos($pathinfo, '/estudiantes')) {
            // estudiantes_index
            if (rtrim($pathinfo, '/') === '/estudiantes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estudiantes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estudiantes_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\EstudiantesController::indexAction',  '_route' => 'estudiantes_index',);
            }
            not_estudiantes_index:

            // estudiantes_show
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estudiantes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_show')), array (  '_controller' => 'BufeteBundle\\Controller\\EstudiantesController::showAction',));
            }
            not_estudiantes_show:

            // estudiantes_new
            if ($pathinfo === '/estudiantes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estudiantes_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\EstudiantesController::newAction',  '_route' => 'estudiantes_new',);
            }
            not_estudiantes_new:

            // estudiantes_edit
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estudiantes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\EstudiantesController::editAction',));
            }
            not_estudiantes_edit:

            // estudiantes_delete
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_estudiantes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\EstudiantesController::deleteAction',));
            }
            not_estudiantes_delete:

        }

        if (0 === strpos($pathinfo, '/casos')) {
            // casos_index
            if (rtrim($pathinfo, '/') === '/casos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_casos_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'casos_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\CasosController::indexAction',  '_route' => 'casos_index',);
            }
            not_casos_index:

            // casos_show
            if (preg_match('#^/casos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_casos_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'casos_show')), array (  '_controller' => 'BufeteBundle\\Controller\\CasosController::showAction',));
            }
            not_casos_show:

            // casos_new
            if ($pathinfo === '/casos/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_casos_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\CasosController::newAction',  '_route' => 'casos_new',);
            }
            not_casos_new:

            // casos_edit
            if (preg_match('#^/casos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_casos_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'casos_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\CasosController::editAction',));
            }
            not_casos_edit:

            // casos_delete
            if (preg_match('#^/casos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_casos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'casos_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\CasosController::deleteAction',));
            }
            not_casos_delete:

        }

        if (0 === strpos($pathinfo, '/laborales')) {
            // laborales_index
            if (rtrim($pathinfo, '/') === '/laborales') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_laborales_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'laborales_index');
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\LaboralesController::indexAction',  '_route' => 'laborales_index',);
            }
            not_laborales_index:

            // laborales_show
            if (preg_match('#^/laborales/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_laborales_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'laborales_show')), array (  '_controller' => 'BufeteBundle\\Controller\\LaboralesController::showAction',));
            }
            not_laborales_show:

            // laborales_new
            if ($pathinfo === '/laborales/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_laborales_new;
                }

                return array (  '_controller' => 'BufeteBundle\\Controller\\LaboralesController::newAction',  '_route' => 'laborales_new',);
            }
            not_laborales_new:

            // laborales_edit
            if (preg_match('#^/laborales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_laborales_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'laborales_edit')), array (  '_controller' => 'BufeteBundle\\Controller\\LaboralesController::editAction',));
            }
            not_laborales_edit:

            // laborales_delete
            if (preg_match('#^/laborales/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_laborales_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'laborales_delete')), array (  '_controller' => 'BufeteBundle\\Controller\\LaboralesController::deleteAction',));
            }
            not_laborales_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
