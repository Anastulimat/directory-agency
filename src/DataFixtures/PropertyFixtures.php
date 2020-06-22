<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class PropertyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $faker = Factory::create('fr_FR');
         for($i = 0; $i < 100; $i++)
         {
             $property = new Property();
             $property
                 ->setName($faker->words(3, true))
                 ->setDescription($faker->sentences( 7, true))
                 ->setSurface($faker->numberBetween(15, 350))
                 ->setRoom($faker->numberBetween(2, 10))
                 ->setFloor($faker->numberBetween(0, 15))
                 ->setBedroom($faker->numberBetween(1, 9))
                 ->setBathroom($faker->numberBetween(1, 4))
                 ->setPrice($faker->numberBetween(100000, 10000000))
                 ->setHeat($faker->numberBetween(0, count(Property::HEAT) - 1))
                 ->setType($faker->numberBetween(0, count(Property::TYPE) - 1))
                 ->setCity($faker->city)
                 ->setAddress($faker->address)
                 ->setPostalCode($faker->postcode)
             ;
             $manager->persist($property);
         }

         $manager->flush();
    }
}
