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
     * @Column(type="string")
     **/
    private $title;

    /**
     * @Column(type="string", nullable=true)
     **/
    private $content;

    /**
     * @Column(type="datetime", nullable=true)
     **/
    private $updated_at;

    /**
     * Many Articles have Many Tags.
     * @ManyToMany(targetEntity="App\Entity\Tag")
     * @JoinTable(name="Article_Tag",
     *      joinColumns={@JoinColumn(name="id__Tag", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id__Article", referencedColumnName="id")}
     *      )
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function create(string $name, string $email): void
    {
        $this->name = $name;
        $this->email = $email;
    }

}