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

        $performance1 = new Performance();
        $performance1->setName('Jongleur');
        $performance1->setDescription('Et paf dans la tête');
        $manager->persist($performance1);

        $performance2 = new Performance();
        $performance2->setName('Dresseur');
        $performance2->setDescription('Et paf mistrigri a croquer le public');
        $manager->persist($performance2);

        $performance3 = new Performance();
        $performance3->setName('Clown');
        $performance3->setDescription('Et paf ca fait peur aux enfants');
        $manager->persist($performance3);

        $manager->flush();
    }
}
