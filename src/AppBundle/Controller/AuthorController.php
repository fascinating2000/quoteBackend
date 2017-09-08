<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use Doctrine\ORM\Query;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Author controller.
 *
 */
class AuthorController extends Controller
{
    /**
     * Lists all author entities.
     * @Route("/authors", name="author_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $query = $this->getDoctrine()
            ->getRepository('AppBundle:Author')
            ->findAll();

        $response = $this->get('serializer')->serialize($query, 'json');

        return $this->json(json_decode($response, true));
    }

    /**
     * Creates a new author entity.
     * @Route("/authors", name="author_new")
     * @Method("POST")
     */
    public function newAction(Request $request)
    {
        $authorName = $request->request->get('authorName');

        if (empty($authorName))
            return $this->json(array('status' => 'Parameters are incorrect.'));

        $author = new Author();
        $author->setAuthorName($authorName);
        $em = $this->getDoctrine()->getManager();
        $em->persist($author);

        $em->flush();

        return $this->json(array('status' => 'success'));
    }

    /**
     * Finds and displays a author entity.
     * @Route("/authors/{author_id}", name="author_show")
     * @Method("GET")
     */
    public function showAction($author_id)
    {
        $author = $this->getDoctrine()
            ->getRepository('AppBundle:Author')
            ->find($author_id);

        $response = $this->get('serializer')->serialize($author, 'json');

        return $this->json(json_decode($response, true));
    }

    /**
     * Displays a form to edit an existing author entity.
     * @Route("/authors/{author_id}", name="author_edit")
     * @Method({"POST", "PUT", "PATCH"})
     */
    public function editAction(Request $request, $author_id)
    {
        $authorName = $request->request->get('authorName');

        if (empty($authorName))
            return $this->json(array('status' => 'Parameters are incorrect.'));

        $author = $this->getDoctrine()
            ->getRepository('AppBundle:Author')
            ->find($author_id);
        $author->setAuthorName($authorName);
        $em = $this->getDoctrine()->getManager();
        $em->persist($author);

        $em->flush();

        return $this->json(array('status' => 'success'));
    }

    /**
     * Deletes a author entity.
     * @Route("/authors/{author_id}", name="author_delete")
     * @Method("DELETE")
     */
    public function deleteAction($author_id)
    {
        $author = $this->getDoctrine()
            ->getRepository('AppBundle:Author')
            ->find($author_id);

        $quotes = $this->getDoctrine()
            ->getRepository('AppBundle:Quote')
            ->findBy(array('author' => $author));

        $em = $this->getDoctrine()->getManager();
        $em->remove($author);
        $em->remove($quotes);
        $em->flush();

        return $this->json(array('status' => 'success'));
    }

    /**
     * Creates a form to delete a author entity.
     *
     * @param Author $author The author entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Author $author)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('author_delete', array('id' => $author->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
