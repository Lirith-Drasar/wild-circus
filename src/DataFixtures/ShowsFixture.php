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
        $show->setName('WinterShow');
        $show->setImage('winter.jpeg');
        $show->setDescription('je suis une description');

        $manager->persist($show);

        $show1 = new Shows();
        $show1->setName('SummerShow');
        $show1->setImage('Summer.jpeg');
        $show1->setDescription('je suis une description');

        $manager->persist($show1);

        $show2 = new Shows();
        $show2->setName('AutomnShow');
        $show2->setImage('automn.jpeg');
        $show2->setDescription('je suis une description');

        $manager->persist($show2);

        $show3 = new Shows();
        $show3->setName('SpringShow');
        $show3->setImage('spring.jpeg');
        $show3->setDescription('je suis une description');

        $manager->persist($show3);

        $manager->flush();
    }
}
