<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 20-05-18
 * Time: 15:37
 */

namespace PortfolioBundle\Controller;


use PortfolioBundle\Entity\linguistic_knowledge;
use PortfolioBundle\Form\Linguistic\LinguisticType;
use Symfony\Component\HttpFoundation\Request;

class LinguisticController extends MasterController
{
    public function createAction(Request $request)
    {
        $user = $this->getUser();
        $linguistic = new linguistic_knowledge();
        $linguistic->setUser($user);

        $form = $this->createForm(LinguisticType::class,$linguistic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($linguistic);
            $em->flush();
        }
        return $this->render('@Portfolio/Accueil/Linguistic/create.html.twig',array('Linguistic_Type'=>$form->createView()));
    }

    public function readAction()
    {
        $linguistic = $this->getUser()->getLinguistics();

        return $this->render('@Portfolio/Accueil/Linguistic/read.html.twig',array('linguistic'=>$linguistic));
    }

    public function updateAction(Request $request,$linguisticId)
    {
        $em = $this->getDoctrine()->getManager();
        $linguistic = $em->getRepository('PortfolioBundle:linguistic_knowledge')->find($linguisticId);

        if ($linguistic === null)
        {
            throw $this->createNotFoundException();
        }

        $form = $this->createForm(LinguisticType::class,$linguistic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();

            return $this->redirectToRoute('portfolio_linguistic_read');
        }
        return $this->render('PortfolioBundle:Accueil/Linguistic:update.html.twig',array('Linguistic_Type'=>$form->createView()));
    }

    public function deleteAction($linguisticId)
    {
        $em = $this->getDoctrine()->getManager();
        $linguistic = $em->getRepository('PortfolioBundle:linguistic_knowledge')->find($linguisticId);

        if ($linguistic !== null)
        {
            $em->remove($linguistic);
            $em->flush();
        }
        return $this->redirectToRoute('portfolio_linguistic_read');
    }
}