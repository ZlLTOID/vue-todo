<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        for ($i=0;$i<100;$i++){
            $employee = new Employee();
            $employee->setName($faker->name);
            $employee->setEmail($faker->email);
            $employee->setAddress($faker->address);
            $employee->setPhone($faker->phoneNumber);
            
            $createdAt = $faker->dateTimeBetween('-6 months');
            $updatedAt = $faker->dateTimeBetween($createdAt);
            
            $createdAtImmutable = DateTimeImmutable::createFromMutable($createdAt);
            $updatedAtImmutable = DateTimeImmutable::createFromMutable($updatedAt);
            
            $employee->setCreatedAt($createdAtImmutable);
            $employee->setUpdatedAt($updatedAtImmutable);
            
            $manager->persist($employee);
        }
        $manager->flush();
    }
}
