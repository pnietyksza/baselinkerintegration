<?php

namespace App\DataFixtures;

use App\Entity\AuthorizationData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ad = new AuthorizationData();
        $ad->setUsername('default');
        $ad->setPassword('default');
        $ad->setToken('default');
        $ad->setClientid('default');
        $ad->setSecret('default');
        $ad->setBltoken('default');

        $manager->persist($ad);
        $manager->flush();
    }
}
