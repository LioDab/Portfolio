<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 20-05-18
 * Time: 13:30
 */

namespace PortfolioBundle\Controller;


use PortfolioBundle\Entity\education_training;
use PortfolioBundle\Form\Education\EducationType;
use Symfony\Component\HttpFoundation\Request;

class EducationController extends MasterController
{
    public function createAction(Request $request)
    {
        $user = $this->getUser();
        $education = new education_training();
        $education->setUser($user);

        $form = $this->createForm(EducationType::class,$education);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($education);
            $em->flush();

        }
        return $this->render('@Portfolio/Accueil/Education/create.html.twig',array('Education_Type'=>$form->createView()));
    }

    public function readAction()
    {
        $education = $this->getUser()->getEducations();

        return $this->render('@Portfolio/Accueil/Education/read.html.twig', array('education'=>$education));
    }

    public function updateAction(Request $request, $educationId)
    {
        $em = $this->getDoctrine()->getManager();
        $education = $em->getRepository('PortfolioBundle:education_training')->find($educationId);

        if ($education === null)
        {
            throw $this->createNotFoundException();
        }

        $form = $this->createForm(EducationType::class,$education);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
        }
        return $this->render('@Portfolio/Accueil/Education/update.html.twig',array('Education_Type'=>$form->createView()));
    }

    public function deleteAction($educationId)
    {
        $em = $this->getDoctrine()->getManager();
        $education = $em->getRepository('PortfolioBundle:education_training')->find($educationId);

        if ($education !==null)
        {
            $em->remove($education);
            $em->flush();
        }

        return $this->redirectToRoute('portfolio_education_read');
    }
}