<?php

namespace App\DataFixtures;

use App\Entity\Performance;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PerformanceFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $performance = new Performance();
        $performance->setName('Acrobate');
        $performance->setDescription('Et paf ca fait des chocapic');
        $manager->persist($performance);

        $manager->flush();
    }
}
