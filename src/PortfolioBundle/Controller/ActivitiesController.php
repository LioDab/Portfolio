<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 20-05-18
 * Time: 14:44
 */

namespace PortfolioBundle\Controller;


use PortfolioBundle\Entity\professional_activities;
use PortfolioBundle\Form\Activities\ActivitiesType;
use Symfony\Component\HttpFoundation\Request;

class ActivitiesController extends MasterController
{
    public function createAction(Request $request)
    {
        $user = $this->getUser();
        $activities = new professional_activities();
        $activities->setUser($user);

        $form = $this->createForm(ActivitiesType::class,$activities);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activities);
            $em->flush();

        }
        return $this->render('@Portfolio/Accueil/Activities/create.html.twig',array('Activities_Type'=>$form->createView()));
    }

    public function readAction()
    {
        $activities = $this->getUser()->getExperiences();

        return $this->render('@Portfolio/Accueil/Activities/read.html.twig',array('activities'=>$activities));
    }

    public function updateAction(Request $request,$activitiesId)
    {
        $em = $this->getDoctrine()->getManager();
        $activities = $em->getRepository('PortfolioBundle:professional_activities')->find($activitiesId);

        if ($activities === null)
        {
            throw $this->createNotFoundException();
        }

        $form = $this->createForm(ActivitiesType::class,$activities);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();

            return $this->redirectToRoute('portfolio_activities_read');
        }
        return $this->render('@Portfolio/Accueil/Activities/update.html.twig',array('Activities_Type'=>$form->createView()));
    }

    public function deleteAction($activitiesId)
    {
        $em = $this->getDoctrine()->getManager();
        $activities = $em->getRepository('PortfolioBundle:professional_activities')->find($activitiesId);

        if ($activities !== null)
        {
            $em->remove($activities);
            $em->flush();
        }
        return $this->redirectToRoute('portfolio_activities_read');
    }
}