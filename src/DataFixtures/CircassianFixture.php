<?php

namespace App\DataFixtures;

use App\Entity\Circassian;
use App\Entity\Performance;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CircassianFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $circassian = new Circassian();
        $circassian->setLastName('Dupont');
        $circassian->setFirstName('Duran');
        $circassian->set('Dupont');

        $manager->persist($circassian);

        $circassian1 = new Circassian();
        $circassian1->setLastName('Dupont');
        $circassian1->setFirstName('Duran');
        $manager->persist($circassian1);

        $circassian2 = new Circassian();
        $circassian2->setLastName('Dupont');
        $circassian2->setFirstName('Duran');
        $manager->persist($circassian2);

        $circassian3 = new Circassian();
        $circassian3->setLastName('Dupont');
        $circassian3->setFirstName('Duran');
        $manager->persist($circassian3);

        $manager->flush();
    }
}
