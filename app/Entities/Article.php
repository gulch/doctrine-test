<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Article")
 **/
class Article
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     **/
    private $id;

    /**
     * @Column(type="string", nullable=false, unique=true)
     */
    private $slug;

    /**
     * @Column(type="string")
     **/
    private $title;

    /**
     * @Column(type="string", nullable=true)
     **/
    private $content;

    /**
     * @Column(type="integer")
     **/
    private $is_published;

    /**
     * @Column(type="string", nullable=true)
     **/
    private $social_image;

    /**
     * @Column(type="string", nullable=true)
     **/
    private $seo_title;

    /**
     * @Column(type="string", nullable=true)
     **/
    private $seo_description;

    /**
     * @Column(type="string", nullable=true)
     **/
    private $seo_keywords;

    /**
     * @Column(type="datetime", nullable=true)
     **/
    private $updated_at;

    /**
     * Many Articles have Many Tags.
     * @ManyToMany(targetEntity="App\Entities\Tag")
     * @JoinTable(name="Article_Tag",
     *      joinColumns={@JoinColumn(name="id__Article", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id__Tag", referencedColumnName="id")}
     *      )
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function show()
    {
        return $this->id . ' | ' . $this->title;
    }
}