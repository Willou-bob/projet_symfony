<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0 ; $i <= 10 ; $i++) {
            $season = new Season();
            $season->setNumber($faker->numberBetween(1,5));
            $season->setDescription($faker->text(50));
            $season->setYear($faker->year);
            $season->setProgram($this->getReference('program_' . rand(0,5)));
            $this->addReference('season_' . $i, $season);

            $manager->persist($season);
        }
        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return class-string[]
     */
    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}