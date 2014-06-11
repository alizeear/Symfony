<?php

namespace Wiki\wikiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WikiController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('wikiBundle:Default:index.html.twig', array('name' => $name));
    }
}
