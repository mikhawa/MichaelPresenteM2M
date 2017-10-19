<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query\ResultSetMapping;

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
    public function sectionAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        // pour récupérer le titre
        $titre_section = $em->getRepository('AppBundle:Section')->find($id);
        // les articles
        $repository = $em->getRepository('AppBundle:Article');
        $articles = $repository->createQueryBuilder('a')
            ->innerJoin('a.section', 's')
            ->where('s.id = :idactu')
            ->setParameter('idactu', $id)
            ->getQuery()->getResult();
        //dump($articles);
        // menu
        $sections = $em->getRepository('AppBundle:Section')->findAll();

        return $this->render('default/section.html.twig', array(
            'titre' => $titre_section,
            'articles' => $articles,
            'sections' => $sections
        ));
    }
}
