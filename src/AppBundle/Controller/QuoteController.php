<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use AppBundle\Entity\Quote;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Quote controller.
 *
 */
class QuoteController extends Controller
{
    /**
     * Lists all quote entities.
     * @Route("/quote", name="quote_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $quotes = $this->getDoctrine()
            ->getRepository('AppBundle:Quote')
            ->findAll();

        $response = $this->get('serializer')->serialize($quotes, 'json');

        return $this->json(json_decode($response, true));
    }

    /**
     * Generate a random quote.
     * @Route("/quoteRandom", name="quote_random")
     * @Method("GET")
     */
    public function randomAction()
    {
        $quotes = $this->getDoctrine()
            ->getRepository('AppBundle:Quote')
            ->findAll();

        $count = count($quotes);
        $rand = rand(0, $count-1);

        $response = $this->get('serializer')->serialize($quotes[$rand], 'json');

        return $this->json(json_decode($response, true));
    }

    /**
     * get a quote width quote_id.
     * @Route("/quote/{quote_id}", name="quote_pull")
     * @Method("GET")
     */
    public function pullAction($quote_id)
    {
        $quotes = $this->getDoctrine()
            ->getRepository('AppBundle:Quote')
            ->find($quote_id);

        $response = $this->get('serializer')->serialize($quotes, 'json');

        return $this->json(json_decode($response, true));
    }

    /**
     * Creates a new quote entity.
     * @Route("/quote", name="quote_new")
     * @Method("POST")
     */
    public function newAction(Request $request)
    {
        $response = new Response();

        $authorName = $request->request->get('authorName');
        $quoteContent = $request->request->get('quoteContent');

        if (empty($authorName) || empty($quoteContent))
            return $response->setStatusCode(Response::HTTP_NO_CONTENT);

        $author = $this->getDoctrine()
            ->getRepository('AppBundle:Author')
            ->findOneBy(array('authorName' => $authorName));

        if (!empty($author)) {
            $quote = new Quote();
            $quote->setQuoteContent($quoteContent);
            $quote->setAuthor($author);

            $em = $this->getDoctrine()->getManager();
            $em->persist($quote);
            $em->flush();
        }
        else {
            $authorNew = new Author();
            $authorNew->setAuthorName($authorName);

            $quote = new Quote();
            $quote->setQuoteContent($quoteContent);
            $quote->setAuthor($authorNew);


            $em = $this->getDoctrine()->getManager();
            $em->persist($authorNew);
            $em->persist($quote);
            $em->flush();
        }

        return $response->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Finds and displays a quote entity.
     * @Route("/author/{author_id}", name="quote_show")
     * @Method("GET")
     */
    public function showAction($author_id)
    {
        $author = $this->getDoctrine()
            ->getRepository('AppBundle:Author')
            ->find($author_id);

        $quotes = $this->getDoctrine()
            ->getRepository('AppBundle:Quote')
            ->findBy(array('author' => $author));

        $response = $this->get('serializer')->serialize($quotes, 'json');

        return $this->json(json_decode($response, true));
    }

    /**
     * Displays a form to edit an existing quote entity.
     * @Route("/quote/{quote_id}", name="quote_edit")
     * @Method({"POST", "PUT", "PATCH"})
     */
    public function editAction(Request $request, $quote_id)
    {
        $response = new Response();

        $authorName = $request->request->get('authorName');
        $quoteContent = $request->request->get('quoteContent');

        if (empty($authorName) || empty($quoteContent)) {
            return $response->setStatusCode(Response::HTTP_NO_CONTENT);
        }

        $author = $this->getDoctrine()
            ->getRepository('AppBundle:Author')
            ->findOneBy(array('authorName' => $authorName));

        $quote = $this->getDoctrine()
            ->getRepository('AppBundle:Quote')
            ->find($quote_id);

        if (!empty($author))
        {
            $quote->setQuoteContent($quoteContent);
            $quote->setAuthor($author);

            $em = $this->getDoctrine()->getManager();
            $em->persist($quote);
            $em->flush();
        } else
        {
            $authorNew = new Author();
            $authorNew->setAuthorName($authorName);

            $quote->setQuoteContent($quoteContent);
            $quote->setAuthor($authorNew);


            $em = $this->getDoctrine()->getManager();
            $em->persist($authorNew);
            $em->persist($quote);
            $em->flush();
        }

        return $response->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Deletes a quote entity.
     * @Route("/quote/{quote_id}", name="quote_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $quote_id)
    {
        $response = new Response();

        $quote = $this->getDoctrine()
            ->getRepository('AppBundle:Quote')
            ->find($quote_id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($quote);
        $em->flush();

        return $response->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Creates a form to delete a quote entity.
     *
     * @param Quote $quote The quote entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Quote $quote)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quote_delete', array('id' => $quote->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
