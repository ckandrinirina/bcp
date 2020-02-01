<?php

namespace BcpBundle\Controller;

use BcpBundle\Entity\Offre;
use BcpBundle\Entity\Photo;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BcpBundle\Entity\Etablissement;

/**
 * Offre controller.
 *
 * @Route("admin/offre")
 */
class OffreController extends CommonController
{
    private $oManager;
    
    public function __construct() {
        parent::__construct();
        $this->oManager = $this->container->get('service.manager');
    }
    
    /**
     * Lists all offre entities.
     *
     * @Route("/", name="admin_offre_index")
     * @Method("GET")
     */
    public function indexAction(Request $oRequest){
        $oEm = $this->getDoctrine()->getManager();
        $oPaginator = $this->container->get('knp_paginator');
        $oQuery = $oEm->getRepository('BcpBundle:Offre')->listAll();
        $aoOffres = $oPaginator->paginate(
            $oQuery, // query NOT result 
            $oRequest->query->getInt('page', 1), // page number,
            2 // limit per page
        );
        return $this->render('@Bcp/admin/offre/index.html.twig', array(
            'offres' => $aoOffres,
        ));
    }

    /**
     * Creates a new offre entity.
     *
     * @Route("/{id}/new", name="admin_offre_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $oRequest, Etablissement $oEtablissement) {
        if ($oRequest->getMethod() == 'POST'){
            $sDir = $this->getParameter('path_uploads');
            $oFile = $oRequest->files->get('bcpbundle_offre')['file'];
            $aRequestContent = $oRequest->request->all();
            if ($oFile instanceof UploadedFile && !empty($aRequestContent) && key_exists('bcpbundle_offre', $aRequestContent)){
                $oOffre = new Offre();
                $oPhoto = new Photo($oFile, $sDir);
                $oPhoto->setOffre($oOffre);
                $oPhoto->setType('offre');
                $oDataManager = $this->get('liip_imagine.data.manager');
                $oFilterManager = $this->get('liip_imagine.filter.manager');
                $result = $oPhoto->createThumb($oDataManager, $oFilterManager);
                $oOffre->setNom($aRequestContent['bcpbundle_offre']['nom']);
                $oOffre->setPrix($aRequestContent['bcpbundle_offre']['prix']);
                $oOffre->setDescriptions($aRequestContent['bcpbundle_offre']['descriptions']);
                $oOffre->addPhoto($oPhoto);
                $oOffre->setEtablissement($oEtablissement);
                $oEm = $this->getDoctrine()->getManager();
                $oEm->persist($oOffre);
                $oEm->flush();
            }
            return $this->redirectToRoute('admin_offre_index');
        }

        return $this->render('@Bcp/admin/offre/new.html.twig', ['etablissement' => $oEtablissement]);
    }

    /**
     * Finds and displays a offre entity.
     *
     * @Route("/{id}/show", name="admin_offre_show")
     * @Method("GET")
     */
    public function showAction(Offre $oOffre){
        return $this->render('@Bcp/admin/offre/show.html.twig', array(
            'offre' => $oOffre
        ));
    }

    /**
     * Displays a form to edit an existing offre entity.
     *
     * @Route("/{id}/edit", name="admin_offre_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $oRequest, Offre $oOffre){
        $oEditForm = $this->createForm('BcpBundle\Form\OffreType', $oOffre);
        $oEditForm->handleRequest($oRequest);

        if ($oEditForm->isSubmitted() && $oEditForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('admin_offre_index');
        }

        return $this->render('@Bcp/admin/offre/edit.html.twig', array(
            'offre' => $oOffre,
            'edit_form' => $oEditForm->createView()
        ));
    }

    /**
     * Deletes a offre entity.
     *
     * @Route("/{id}", name="admin_offre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $oRequest, Offre $oOffre){
        if ($oRequest->getMethod() == 'DELETE'){
            $oEm = $this->getDoctrine()->getManager();
            $oEm->remove($oOffre);
            $oEm->flush();
        }

        return $this->redirectToRoute('admin_offre_index');
    }

    /**
     * Creates a form to delete a offre entity.
     *
     * @param Offre $offre The offre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Offre $oOffre){
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_offre_delete', array('id' => $oOffre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Deletes a etablissement entity.
     *
     * @Route("/{id}/delete", name="offre_delete_link")
     * @Method("GET")
     */
    public function linkDeleteAction(Offre $oOffre){
        if (!empty($oOffre)) {
            $oEm = $this->getDoctrine()->getManager();
            $oEm->remove($oOffre);
            $oEm->flush();
        }
        return $this->redirectToRoute('admin_offre_index');
    }
}
