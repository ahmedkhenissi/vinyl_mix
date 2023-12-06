<?php

namespace App\DataFixtures;

use App\Entity\VinylMix;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Factory\VinylMixFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        VinylMixFactory::createMany(25);
        $manager->flush();
    }
}
