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
        for ($i = 1; $i <= 50; $i++) {  
            $circassian = new Circassian();  
            $circassian->setLastname('Je suis : ' . $i); 
            $circassian->setDescription('Je suis la description numéro : ' . $i);   
            $manager->persist($circassian);  
        }  
        $manager->flush();
    }
}
