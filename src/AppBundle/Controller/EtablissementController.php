<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Manager\ServiceManager;
use AppBundle\Entity\Etablissement;

/**
 * Etablissement controller.
 *
 * @Route("admin/etablissement")
 */
class EtablissementController extends CommonController
{
    private $oManager;
    
    public function __construct() {
        parent::__construct();
        $this->oManager = $this->container->get('service.manager');
    }
    
    /**
     * Lists all etablissement entities.
     *
     * @Route("/", name="etablissement_index")
     * @Method("GET")
     */
    public function indexAction(Request $request) {
        $oQuery = $this->oManager->getEtablissement('');
        $paginator = $this->container->get('knp_paginator');
        $etablissements = $paginator->paginate($oQuery, $request->query->getInt('page', 1), 10);        
        return $this->render('@App/admin/etablissement/index.html.twig', array(
            'etablissements' => $etablissements,
        ));
    }

    /**
     * Creates a new etablissement entity.
     *
     * @Route("/new", name="etablissement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        if ($request->getMethod() == 'POST'){
            $file = $request->files->get('AppBundle_etablissement')['file'];
            $aRequestContent = $request->request->all();
            if ($file instanceof UploadedFile && !empty($aRequestContent) && key_exists('AppBundle_etablissement', $aRequestContent)){
                $oEtablissement = $this->oManager->createEtablissement($this->container, $aRequestContent, $file);
            }
            return $this->redirectToRoute('etablissement_index');
        }
        return $this->render('@App/admin/etablissement/new.html.twig', array());
    }

    /**
     * Finds and displays a etablissement entity.
     *
     * @Route("/{id}/show", name="etablissement_show")
     * @Method("GET")
     */
    public function showAction(Etablissement $oEtablissement) {
        $deleteForm = $this->createDeleteForm($oEtablissement);
        return $this->render('@App/admin/etablissement/show.html.twig', array(
            'etablissement' => $oEtablissement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing etablissement entity.
     *
     * @Route("/{id}/edit", name="etablissement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Etablissement $oEtablissement) {
        $deleteForm = $this->createDeleteForm($oEtablissement);
        $editForm = $this->createForm('AppBundle\Form\EtablissementType', $oEtablissement);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->oManager->crudObject($oEtablissement, 'update');
            return $this->redirectToRoute('etablissement_index');
        }
        return $this->render('@App/admin/etablissement/edit.html.twig', array(
            'etablissement' => $oEtablissement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a etablissement entity.
     *
     * @Route("/{id}", name="etablissement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Etablissement $oEtablissement) {
        $form = $this->createDeleteForm($oEtablissement);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $oManager->crudObject($oEtablissement, 'remove');
        }
        return $this->redirectToRoute('etablissement_index');
    }

    /**
     * Creates a form to delete a etablissement entity.
     *
     * @param Etablissement $oEtablissement The etablissement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Etablissement $oEtablissement) {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etablissement_delete', array('id' => $oEtablissement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Deletes a etablissement entity.
     *
     * @Route("/{id}/delete", name="etablissement_delete_link")
     * @Method("GET")
     */
    public function linkDeleteAction(Etablissement $oEtablissement) {
        if (!empty($oEtablissement)) {
            $this->oManager->crudObject($oEtablissement, 'remove');
        }
        return $this->redirectToRoute('etablissement_index');
    }
    
}
