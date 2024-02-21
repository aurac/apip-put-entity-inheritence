<?php

namespace App\Story;

use App\Factory\ResourceFactory;
use Zenstruck\Foundry\Story;

final class DefaultResourcesStory extends Story
{
    public function build(): void
    {
        ResourceFactory::createOne();
    }
}
