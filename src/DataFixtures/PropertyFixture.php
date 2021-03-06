<?php

namespace App\DataFixtures;

use App\Entity\Property;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PropertyFixture extends Fixture
{
    //Ajoute des biens
    public function load(ObjectManager $manager)
    {
        /*$faker = Factory::create('fr_FR');
        for ($i=0; $i < 100; $i++) { 
            $property = new Property();
            $property
                ->setTitle($faker->words(3, true))
                ->setDescription($faker->sentences(3, true))
                ->setSurface($faker->numberBetween(20, 350))
                ->setRooms($faker->numberBetween(2, 10))
                ->setBedrooms($faker->numberBetween(1, 9))
                ->setFloor($faker->numberBetween(0, 15))
                ->setPrice($faker->numberBetween(1000000, 10000000))
                ->setHeat($faker->numberBetween(0, count(Property::HEAT) - 1))
                ->setCity($faker->city)
                ->setAddress($faker->address)
                ->setPostalCode($faker->postcode)
                ->setSold(false)
                ->setFilename(null)
                ->setUpdatedAt(new DateTime());

            $manager->persist($property);
        }

        $manager->flush();*/
    }
}
