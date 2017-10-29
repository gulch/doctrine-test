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
    private $id;

    /** @Column(type="string") **/
    private $name;

    /** @Column(type="string") **/
    private $email;

    /** @Column(type="string") **/
    private $password;

    /** @Column(type="datetime", nullable=true) **/
    private $created_at;
}