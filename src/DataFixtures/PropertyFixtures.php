<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
Use Faker\Factory;

class PropertyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 100; $i++) {
            $property = new Property();
            $property
                ->setTitle($faker->words($nb = 3, true))
                ->setDescription($faker->sentences($nb = 3, true))
                ->setSurface($faker->numberBetween($min = 10, $max = 400))
                ->setRooms($faker->numberBetween($min = 2, $max = 15))
                ->setBedrooms($faker->numberBetween($min = 2, $max = 15))
                ->setFloor($faker->numberBetween($min = 0, $max = 15))
                ->setPrice($faker->numberBetween($min = 50000, $max = 15000000))
                ->setHeat($faker->numberBetween(0, count(Property::HEAT) - 1))
                ->setCity($faker->city)
                ->setAdress($faker->address)
                ->setPostalCode($faker->numberBetween($min = 00000, $max = 99999))
                ->setSold(false);
            $manager->persist($property);
        }

        $manager->flush();
    }
}
