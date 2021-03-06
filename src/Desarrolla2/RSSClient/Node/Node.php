<?php

/**
 * This file is part of the RSSClient project.
 *
 * Copyright (c)
 * Daniel González Cerviño <daniel.gonzalez@freelancemadrid.es>
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

namespace Desarrolla2\RSSClient\Node;

use Desarrolla2\RSSClient\Node\NodeInterface;

/**
 *
 * Node
 *
 * @author : Daniel González Cerviño <daniel.gonzalez@freelancemadrid.es>
 */
abstract class Node implements NodeInterface
{
    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $link = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $author = null;

    /**
     * @var array
     */
    protected $categories = array();

    /**
     * @var string
     */
    protected $comments = null;

    /**
     * @var string
     */
    protected $enclosure = null;

    /**
     * @var string
     */
    protected $guid = null;

    /**
     * @var \DateTime
     */
    protected $pubDate = null;

    /**
     * @var string
     */
    protected $source = null;

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return null|string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return null|string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param array $categories
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }

    /**
     * @param string $category
     */
    public function addCategory($category)
    {
        $this->categories[] = $category;
    }

    /**
     * @return null|string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return null|string
     */
    public function getEnclosure()
    {
        return $this->enclosure;
    }

    /**
     * @param string $enclosure
     */
    public function setEnclosure($enclosure)
    {
        $this->enclosure = $enclosure;
    }

    /**
     * @return null|string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
    }

    /**
     * @return \DateTime|null
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * @param \DateTime $pubDate
     */
    public function setPubDate(\DateTime $pubDate)
    {
        $this->pubDate = $pubDate;
    }

    /**
     * @return null|string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
}
