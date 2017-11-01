<?php

namespace App\Repositories;

use App\Entities\User;
use Doctrine\ORM\EntityManager;

class UsersRepository
{
    private const ENTITY = User::class;
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function add(User $user): void
    {
        $this->em->persist($user);
    }

    public function remove(User $user): void
    {
        $this->em->remove($user);
    }

    public function ofId(int $id): ?User
    {
        return $this->em->find(self::ENTITY, $id);
    }

    /*public function ofCredentials(string $email, string $passwordHash): ?User
    {
        return $this->em->findOneBy([
            'email' => $email,
            'password' => $passwordHash,
        ]);
    }*/

    public function latestSince(\DateTimeImmutable $sinceDate)
    {
        return $this->em
            ->createQueryBuilder()
            ->select('u')
            ->from(self::ENTITY, 'u')
            ->where('u.created_at > :since')
            ->setParameter(':since', $sinceDate)
            ->getQuery()
            ->getResult();
    }
}