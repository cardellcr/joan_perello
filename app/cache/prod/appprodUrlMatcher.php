<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Web\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // qui_som
        if ($pathinfo === '/qui_som') {
            return array (  '_controller' => 'Web\\WebBundle\\Controller\\DefaultController::qui_somAction',  '_route' => 'qui_som',);
        }

        // presupost
        if ($pathinfo === '/presupost') {
            return array (  '_controller' => 'Web\\WebBundle\\Controller\\DefaultController::presupostAction',  '_route' => 'presupost',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
