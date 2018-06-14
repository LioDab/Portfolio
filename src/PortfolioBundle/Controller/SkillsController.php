<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 21-05-18
 * Time: 13:21
 */

namespace PortfolioBundle\Controller;


use PortfolioBundle\Entity\skills;
use PortfolioBundle\Form\Skills\SkillsType;
use Symfony\Component\HttpFoundation\Request;

class SkillsController extends MasterController
{
    public function createAction(Request $request)
    {
        $user = $this->getUser();
        $skills = new skills();
        $skills->setUser($user);

        $form = $this->createForm(SkillsType::class,$skills);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($skills);
            $em->flush();

        }
        return $this->render('@Portfolio/Accueil/Skills/create.html.twig',array('Skills_Type'=>$form->createView()));

    }

    public function readAction()
    {
        $skills = $this->getUser()->getSkills();

        return $this->render('@Portfolio/Accueil/Skills/read.html.twig',array('skills'=>$skills));
    }

}