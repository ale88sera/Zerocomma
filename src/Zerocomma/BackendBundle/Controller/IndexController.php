<?php

namespace Zerocomma\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Zerocomma\BackendBundle\Controller\AbstractBackendController;

/**
 * Index Backend Controller
 *
 * @author Siamion Makarski <s.makarski.s@gmail.com>
 */
class IndexController extends AbstractBackendController
{
    /**
     * return Response
     *
     * @Route("/", name="backend_index")
     */
    public function indexAction()
    {
        return $this->render("ZerocommaBackendBundle::index.html.twig");
    }
}
