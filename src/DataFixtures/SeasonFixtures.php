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

        for ($i = 0 ; $i <= 5 ; $i++) {
            $season = new Season();
            $season->setNumber($faker->numberBetween(1,5));
            $season->setDescription($faker->text(50));
            $season->setYear($faker->year);
            $manager->persist($season);
            $this->addReference('season_' . $i, $season);
            $season->setProgram($this->getReference('program_0'));
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