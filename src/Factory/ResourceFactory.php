<?php

namespace App\Factory;

use App\Entity\Resource;
use App\Repository\ResourceRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Resource>
 *
 * @method        resource|Proxy                     create(array|callable $attributes = [])
 * @method static Resource|Proxy                     createOne(array $attributes = [])
 * @method static Resource|Proxy                     find(object|array|mixed $criteria)
 * @method static Resource|Proxy                     findOrCreate(array $attributes)
 * @method static Resource|Proxy                     first(string $sortedField = 'id')
 * @method static Resource|Proxy                     last(string $sortedField = 'id')
 * @method static Resource|Proxy                     random(array $attributes = [])
 * @method static Resource|Proxy                     randomOrCreate(array $attributes = [])
 * @method static ResourceRepository|RepositoryProxy repository()
 * @method static Resource[]|Proxy[]                 all()
 * @method static Resource[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Resource[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Resource[]|Proxy[]                 findBy(array $attributes)
 * @method static Resource[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Resource[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class ResourceFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'baseProperty' => self::faker()->text(),
            'property' => self::faker()->text(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Resource $resource): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Resource::class;
    }
}
