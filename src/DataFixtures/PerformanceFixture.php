<?php

namespace App\DataFixtures;

use App\Entity\Performance;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PerformanceFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 50; $i++) {  
            $performance = new Performance();  
            $performance->setName('Performance ' . $i); 
            $performance->setDescription('Je suis la description numéro : ' . $i);   
            $manager->persist($performance);  
        }  
        $manager->flush();
    }
}
