<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="User")
 **/
class User
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;
    /** @Column(type="string") **/
    protected $email;
    /** @Column(type="datetime") **/
    protected $created_at;

    public function show()
    {
        return $this->id . ' | ' . $this->name . ' | ' . $this->email . "\n";
    }

    public function create(string $name, string $email, \DateTime $created_at): void
    {
        $this->name = $name;
        $this->email = $email;
        $this->created_at = $created_at;
    }

}