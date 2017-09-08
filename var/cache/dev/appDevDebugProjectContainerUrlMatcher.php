<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/authors')) {
            // author_index
            if ('/authors' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_author_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuthorController::indexAction',  '_route' => 'author_index',);
            }
            not_author_index:

            // author_new
            if ('/authors' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_author_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuthorController::newAction',  '_route' => 'author_new',);
            }
            not_author_new:

            // author_show
            if (preg_match('#^/authors/(?P<author_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_author_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_show')), array (  '_controller' => 'AppBundle\\Controller\\AuthorController::showAction',));
            }
            not_author_show:

            // author_edit
            if (preg_match('#^/authors/(?P<author_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($requestMethod, array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not_author_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_edit')), array (  '_controller' => 'AppBundle\\Controller\\AuthorController::editAction',));
            }
            not_author_edit:

            // author_delete
            if (preg_match('#^/authors/(?P<author_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_author_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_delete')), array (  '_controller' => 'AppBundle\\Controller\\AuthorController::deleteAction',));
            }
            not_author_delete:

        }

        // quote_show
        if (0 === strpos($pathinfo, '/author') && preg_match('#^/author/(?P<author_id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_quote_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_show')), array (  '_controller' => 'AppBundle\\Controller\\QuoteController::showAction',));
        }
        not_quote_show:

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/quote')) {
            // quote_index
            if ('/quote' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_quote_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\QuoteController::indexAction',  '_route' => 'quote_index',);
            }
            not_quote_index:

            // quote_random
            if ('/quoteRandom' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_quote_random;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\QuoteController::randomAction',  '_route' => 'quote_random',);
            }
            not_quote_random:

            // quote_pull
            if (preg_match('#^/quote/(?P<quote_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_quote_pull;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_pull')), array (  '_controller' => 'AppBundle\\Controller\\QuoteController::pullAction',));
            }
            not_quote_pull:

            // quote_new
            if ('/quote' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_quote_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\QuoteController::newAction',  '_route' => 'quote_new',);
            }
            not_quote_new:

            // quote_edit
            if (preg_match('#^/quote/(?P<quote_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($requestMethod, array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not_quote_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_edit')), array (  '_controller' => 'AppBundle\\Controller\\QuoteController::editAction',));
            }
            not_quote_edit:

            // quote_delete
            if (preg_match('#^/quote/(?P<quote_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_quote_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quote_delete')), array (  '_controller' => 'AppBundle\\Controller\\QuoteController::deleteAction',));
            }
            not_quote_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
