<?php

namespace App\DataFixtures;

use App\Entity\Price;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PriceFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $price = new Price();
        $price->setAdult(10.50);
        $price->setChildren(5.50);
        $manager->persist($price);

        $manager->flush();
    }
}
