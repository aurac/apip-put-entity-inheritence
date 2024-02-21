<?php
// api/tests/BooksTest.php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Resource;
use App\Factory\ResourceFactory;
use Zenstruck\Foundry\Test\Factories;
use Zenstruck\Foundry\Test\ResetDatabase;

class ResourcesTest extends ApiTestCase
{
    // This trait provided by Foundry will take care of refreshing the database content to a known state before each test
    use ResetDatabase, Factories;

    public function testStandardPutResource(): void
    {
        // Only create the book we need with a given ISBN
        ResourceFactory::createOne([
            'baseProperty' => 'base property',
            'property' => 'property',
        ]);

        $client = static::createClient();
        // findIriBy allows to retrieve the IRI of an item by searching for some of its properties.
        $iri = $this->findIriBy(Resource::class, ['baseProperty' => 'base property']);

        // Use the PATCH method here to do a partial update
        $client->request('PUT', $iri, [
            'json' => [
                'baseProperty' => 'base property updated',
                'property' => 'property updated',
            ],
            'headers' => [
                'Content-Type' => 'application/ld+json',
            ]
        ]);

        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            '@id' => $iri,
            'baseProperty' => 'base property updated',
            'property' => 'property updated',
        ]);
    }
}
