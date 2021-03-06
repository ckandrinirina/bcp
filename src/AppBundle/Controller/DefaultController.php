<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Manager\ServiceManagerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Etablissement;

class DefaultController extends CommonController
{
    private $oManager;
    
    public function __construct() {
        parent::__construct();
        $this->oManager = $this->container->get('service.manager');
    }
    
    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $oRequest) {
        return $this->render('@App/Etablissement/home.html.twig');
    }
    
    /**
     * @param Request $oRequest
     * @Route("/etablissement/hotel", name="hotel")
     * @Route("/search/hotel", name="hotel_search")
     * @Route("/search/restorant", name="restorant_search")
     * @Route("/etablissement/restorant", name="restorant")
     */
    public function etablissementAction(Request $oRequest) {
        $sRoute = $oRequest->get('_route');
        $oSession = $this->get('session');
        $aParam = $oSession->get('aSearchParam');
        $aItems = $oSession->get('aSearchResult');
        $oPaginationItem = null;
        $sType = $aParam['type'];
        if ($sRoute != 'restorant_search' && $sRoute != 'hotel_search') {
            $queryEtablissement = $this->oManager->getEtablissement($sRoute);
            $oPagination = $this->container->get('knp_paginator');
            $oPaginationItem = $oPagination->paginate($queryEtablissement, $oRequest->query->getInt('page', 1), 12);
            if ($sRoute != $aParam['type']) {
                $oPaginationItem->setItems($this->oManager->generateStarEtablissementsOfArray([]));
                $aItems = $oPaginationItem;
            }
            
            $oPaginationItem->setItems($this->oManager->generateStarEtablissementsOfArray($oPaginationItem->getItems()));
            $sType = $sRoute;
        }
        return $this->render('@App/Etablissement/etablissement.html.twig', array(
            'items' => $aItems,
            'defaultItems' => $oPaginationItem,
            'type' => $sType
        ));
    }
    
    /**
     * @Route("/recette", name="recette")
     */
    public function recetteAction() {
        return $this->render('@App/Etablissement/recette.html.twig');
    }
    
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $oRequest) {
        if ($oRequest->isMethod('POST')) {
            $params = $oRequest->request->all();
            $sendTo = $this->getParameter('owner_email');
            if ($this->oManager->sendMail($sendTo, $params['name'], $params['email'], $params['subject'], $params['message'])) {
                return new \Symfony\Component\HttpFoundation\JsonResponse('mail envoyee');
            }
        }
        return $this->render('@App/Etablissement/contact.html.twig');
    }
    
    /**
     * @param type $id
     * @Route("/etablissement/fiche/{id}", name="fiche")
     */
    public function ficheAction(Etablissement $oEtablissement) {
        $aoEtablissement = $this->oManager->generateStarEtablissementsOfArray([$oEtablissement]);
        $oEtablissement->setViewers($oEtablissement->getViewers() + 1);
        $this->oManager->crudObject($oEtablissement, 'update');
        return $this->render('@App-/Etablissement/fiche.html.twig', ['etablissement' => $aoEtablissement[0]]);
    }
    
    /**
     * 
     * @param type $param
     * @Route("/search", name="search_etablissament")
     */
    public function searchEtablissement(Request $oRequest) {
        $aParam = $oRequest->request->all();
        $oSession = $this->get('session');
        if (empty($aParam)) {
            $aParam = $oSession->get('aSearchParam');
        }
        $queryEtablissement = $this->oManager->searchEtablissement($aParam);
        $paginator = $this->container->get('knp_paginator');
        $oPagination = $paginator->paginate($queryEtablissement, $oRequest->query->getInt('page', 1), 12);
        $oPagination->setItems($this->oManager->generateStarEtablissementsOfArray($oPagination->getItems()));
        $oSession->set('aSearchParam', $aParam);
        $oSession->set('aSearchResult', $oPagination);
        $sRoute = ($aParam['type'] == 'hotel') ?  'hotel_search' : 'restorant_search';
        return $this->redirectToRoute($sRoute);
    }
}
