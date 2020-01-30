<?php

namespace App\DataFixtures;

use App\Entity\Circassian;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CircassianFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $circassian = new Circassian();
        $circassian->setLastName('Dupont');
        $circassian->setFirstName('Duran');
        $manager->persist($circassian);

        $manager->flush();
    }
}
