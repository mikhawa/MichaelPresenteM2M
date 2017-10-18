<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AppBundle:Article')->findAll();
        $sections = $em->getRepository('AppBundle:Section')->findAll();

        return $this->render('default/index.html.twig', array(
            'articles' => $articles,
            'sections' => $sections
        ));
    }
    /**
     * @Route("/section/{id}", name="sections")
     */
    public function sectionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AppBundle:Article')->findAll();
        $sections = $em->getRepository('AppBundle:Section')->findAll();

        return $this->render('default/index.html.twig', array(
            'articles' => $articles,
            'sections' => $sections
        ));
    }
}
