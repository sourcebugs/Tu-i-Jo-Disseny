<?php

namespace AppBundle\Controller\Back;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ProductAdminController
 *
 * @category Controller
 * @package  AppBundle\Controller\Back
 * @author   David Romaní <david@flux.cat>
 */
abstract class BaseAdminController extends Controller
{
    /**
     * @param Request|null $request
     *
     * @return Request
     */
    protected function resolveRequest(Request $request = null)
    {
        if (null === $request) {
            return $this->getRequest();
        }

        return $request;
    }
}
