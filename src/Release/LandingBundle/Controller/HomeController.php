<?php

namespace Release\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReleaseLandingBundle:Home:landing.html.twig');
    }
}
