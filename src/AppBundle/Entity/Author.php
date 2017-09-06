<?php
/**
 * Created by PhpStorm.
 * User: reinhold
 * Date: 9/4/17
 * Time: 3:59 PM
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="author")
 */
class Author
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */

    private $authorName;

    /**
     * @ORM\Column(type="datetime")
     */

    private $createdAt;

    /**
     * @var Quote[]|ArrayCollection
     *
     * @ORM\OneToMany(
     *      targetEntity="AppBundle\Entity\Quote",
     *      mappedBy="author",
     *      orphanRemoval=true
     * )
     */

    private $quotes;

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
        $this->quotes = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthorName()
    {
        return $this->authorName;
    }

    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createAt)
    {
        $this->createdAt = $createAt;
    }

    public function getQuotes()
    {
        return $this->quotes;
    }

    public function addQuote(Quote $quote)
    {
        $quote->setAuthor($this);
        if (!$this->quotes->contains($quote)) {
            $this->quotes->add($quote);
        }
    }

    public function removeQuote(Quote $quote)
    {
        $quote->setAuthor(null);
        $this->quotes->removeElement($quote);
    }
}