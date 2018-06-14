<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 19-05-18
 * Time: 17:11
 */

namespace PortfolioBundle\Controller;




use PortfolioBundle\Entity\contact_information;
use PortfolioBundle\Form\Contact\ContactType;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends MasterController
{

    public function createAction(Request $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(ContactType::class,$user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('portfolio_contact_read');
        }

        return $this->render('@Portfolio/Accueil/ContactInformation/create.html.twig',array('Contact_Type'=>$form->createView()));

    }

    public function readAction()
    {
        $contact=$this->getUser();

        return $this->render('@Portfolio/Accueil/ContactInformation/read.html.twig',array('contact' => $contact));

    }

    public function updateAction(Request $request, $contactId)
    {
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('PortfolioBundle:Users')->find($contactId);

        if ($contact === null)
        {
            throw $this->createNotFoundException();
        }

        $form = $this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();

            return $this->redirectToRoute('portfolio_contact_read');
        }

        return $this->render('@Portfolio/Accueil/ContactInformation/edit.html.twig',array('Contact_Type'=>$form->createView(),'contact'=>$contact));
    }

    public function deleteAction($contactId)
    {
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('PortfolioBundle:contact_information')->find($contactId);

        if ($contact !== null)
        {
            $em->remove($contact);
            $em->flush();
        }

        return $this->redirectToRoute('portfolio_contact_read');

    }


}