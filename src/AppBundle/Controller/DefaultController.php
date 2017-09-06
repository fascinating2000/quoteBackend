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
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function createAction()
    {
        $author = new Author();
        $author->setAuthorName('John');

        $quote = new Quote();
        $quote->setAuthor($author);
        $quote->setQuoteContent('This is entire life!');

        $quote1 = new Quote();
        $quote1->setAuthor($author);
        $quote1->setQuoteContent('This is entire life1!');

        $quote2 = new Quote();
        $quote2->setAuthor($author);
        $quote2->setQuoteContent('This is entire life2!');

        $em = $this->getDoctrine()->getManager();
        $em->persist($author);
        $em->persist($quote);
        $em->persist($quote1);
        $em->persist($quote2);
        $em->flush();
    }
}
