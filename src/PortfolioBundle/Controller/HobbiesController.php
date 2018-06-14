<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 21-05-18
 * Time: 13:38
 */

namespace PortfolioBundle\Controller;


use PortfolioBundle\Entity\hobbies;
use PortfolioBundle\Form\Hobbies\HobbiesType;
use Symfony\Component\HttpFoundation\Request;

class HobbiesController extends MasterController
{
    public function createAction(Request $request)
    {
        $user = $this->getUser();
        $hobbies = new hobbies();
        $hobbies->setUser($user);

        $form = $this->createForm(HobbiesType::class,$hobbies);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hobbies);
            $em->flush();

            return $this->redirectToRoute('portfolio_hobbies_read');
        }
        return $this->render('@Portfolio/Accueil/Hobbies/create.html.twig',array('Hobbies_Type'=>$form->createView()));
    }

    public function readAction()
    {
        $hobbies = $this->getUser()->getHobbies();
        return $this->render('@Portfolio/Accueil/Hobbies/read.html.twig',array('hobbies'=>$hobbies));
    }

    public function updateAction(Request $request, $hobbiesId)
    {
        $em = $this->getDoctrine()->getManager();
        $hobbies = $em->getRepository('PortfolioBundle:hobbies')->find($hobbiesId);

        if ($hobbies === null)
        {
            throw $this->createNotFoundException();
        }
        $form = $this->createForm(HobbiesType::class,$hobbies);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('portfolio_hobbies_read');
        }
        return $this->render('PortfolioBundle:Accueil/Hobbies:update.html.twig',array('Hobbies_Type'=>$form->createView()));
    }

    public function deleteAction($hobbiesId)
    {
        $em = $this->getDoctrine()->getManager();
        $hobbies = $em->getRepository('PortfolioBundle:hobbies')->find($hobbiesId);

        if($hobbies !== null)
        {
            $em->remove($hobbies);
            $em->flush();
        }

        return $this->redirectToRoute('portfolio_hobbies_read');
    }
}