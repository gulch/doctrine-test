<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Tag")
 **/
class Tag
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
     * Many Tags have Many Articles.
     * @ManyToMany(targetEntity="App\Entities\Article")
     * @JoinTable(name="Article_Tag",
     *      joinColumns={@JoinColumn(name="id__Tag", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id__Article", referencedColumnName="id")}
     *      )
     */
    private $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection;
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function show()
    {
        return $this->id . ' | ' . $this->title;
    }
}