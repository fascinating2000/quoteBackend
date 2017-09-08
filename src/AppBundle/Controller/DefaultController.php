<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use AppBundle\Entity\Quote;
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
        $this->createAction();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function createAction()
    {
        $author = new Author();
        $author->setAuthorName('General George S. Patton');

        $quote = new Quote();
        $quote->setQuoteContent('If a man does his best, what else is there?');
        $quote->setAuthor($author);

        $quote1 = new Quote();
        $quote1->setQuoteContent('A pint of sweat saves a gallon of blood.');
        $quote1->setAuthor($author);


        $author1 = new Author();
        $author1->setAuthorName('Mark Twain');

        $quote2 = new Quote();
        $quote2->setQuoteContent('A pint of sweat saves a gallon of blood.');
        $quote2->setAuthor($author1);


        $em = $this->getDoctrine()->getManager();
        $em->persist($author);
        $em->persist($quote);
        $em->persist($quote1);
        $em->persist($author1);
        $em->persist($quote2);
        $em->flush();
    }
}
