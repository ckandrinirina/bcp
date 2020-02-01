<?php

namespace BcpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security;

class SecurityController extends AbstractController
{

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request) {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('etablissement_index');
        }
        $authenticationUtils = $this->get('security.authentication_utils');
        return $this->render('security/login.html.twig', array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/admin", name = "index")
     */
    public function indexAction() {
        return $this->redirectToRoute('login');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction() {
        return $this->render('BcpBundle:SecurityController:logout.html.twig', array());
    }

}
