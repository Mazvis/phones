<?php

namespace Phones\FrontEndBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $params =[];

        $products = $this->getDoctrine()
            ->getRepository('PhonesPhoneBundle:Phone')
            ->findAll();

        $params['products'] = $products;

        return $this->render('PhonesFrontEndBundle:Default:index.html.twig', $params);
    }
}
