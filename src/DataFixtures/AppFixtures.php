<?php

namespace App\DataFixtures;

use App\Story\DefaultResourcesStory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        DefaultResourcesStory::load();
    }
}
