<?php

namespace Release\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Release\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('Asto');

    foreach ($listNames as $name) {

      $user = new User;

      $user->setUsername($name);
      $user->setPassword('lol');
      $user->setEmail('asto@lol.fr');
      $user->setSalt('');
      $user->setRoles(array('ROLE_ADMIN'));

      $manager->persist($user);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}
