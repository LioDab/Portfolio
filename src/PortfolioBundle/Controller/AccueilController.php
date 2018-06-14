<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 18-05-18
 * Time: 20:09
 */

namespace PortfolioBundle\Controller;


class AccueilController extends MasterController
{
    public function AccueilAction()
    {
        if ($this->getUser() != null)
        {
            $user = $this->getUser()->getId();
            return $this->render('@Portfolio/Accueil/Accueil.html.twig',array('user'=>$user));
        }
        return $this->render('@Portfolio/Accueil/Accueil.html.twig');
    }
}