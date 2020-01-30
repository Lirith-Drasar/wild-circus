<?php

namespace App\DataFixtures;

use App\Entity\Shows;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ShowsFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $show = new Shows();
        $show->setName('WinterShows');
        $show->setImage('index.jpeg');
        $show->setDescription('je suis une description');

        $manager->persist($show);

        $manager->flush();
    }
}
