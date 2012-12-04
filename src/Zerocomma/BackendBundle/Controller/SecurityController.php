<?php

namespace Zerocomma\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Security Controller
 *
 * @author Siamion Makarski <s.makarski.s@gmail.com>
 */
class SecurityController extends Controller
{
    /**
     * @return Response
     *
     * @Route("/login", name="backend_login")
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('ZerocommaBackendBundle:Security:login.html.twig', array(
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }

    /**
     * @throws \RuntimeException
     *
     * @Route("/login_check", name="backend_login_check")
     */
    public function checkAction()
    {
        throw new \RuntimeException("Please, define login_check in your security firewall configuartion");
    }

    /**
     * @throws \RuntimeException
     *
     * @Route("/logout", name="backend_logout")
     */
    public function logoutAction()
    {
        throw new \RuntimeException("Please, define logout in the security firewall configuration");
    }

}
