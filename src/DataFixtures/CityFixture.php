<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CityFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $city = new City();
        $city->setName('Tours');
        $city->setAdress('Parc des expos');
        $manager->persist($city);

        $city2 = new City();
        $city2->setName('Paris');
        $city2->setAdress('Stade de France');
        $manager->persist($city2);

        $city3 = new City();
        $city3->setName('Loop');
        $city3->setAdress('Chateau de la loop');
        $manager->persist($city3);

        $manager->flush();
    }
}
