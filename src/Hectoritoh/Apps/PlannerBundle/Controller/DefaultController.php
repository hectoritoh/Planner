<?php

namespace Hectoritoh\Apps\PlannerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HectoritohAppsPlannerBundle:Pages:index.html.twig');
    }
    
    
    public function loginAction()
    {
        return $this->render('HectoritohAppsPlannerBundle:Pages:login.html.twig');
    }
    
    
}
