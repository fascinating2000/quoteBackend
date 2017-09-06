<?php
/**
 * Created by PhpStorm.
 * User: reinhold
 * Date: 9/4/17
 * Time: 4:00 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="quote")
 */
class Quote
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
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="comment.blank")
     * @Assert\Length(
     *     min=5,
     *     minMessage="comment.too_short",
     *     max=10000,
     *     maxMessage="comment.too_long"
     * )
     */
    private $quoteContent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Author", inversedBy="quotes")
     * @ORM\JoinColumn(nullable=false)
     */

    private $author;

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime());
    }

    /**
     * @Assert\IsTrue(message="quote.is_spam")
     */
    public function isLegitComment()
    {
        $containsInvalidCharacters = false !== mb_strpos($this->quoteContent, '@');

        return !$containsInvalidCharacters;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuoteContent()
    {
        return $this->quoteContent;
    }

    /**
     * @param string $content
     */
    public function setQuoteContent($content)
    {
        $this->quoteContent = $content;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createAt)
    {
        $this->createdAt = $createAt;
    }

    /**
     * @return Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Author $author
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }
}