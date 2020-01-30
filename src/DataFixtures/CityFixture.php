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

        $manager->flush();
    }
}
