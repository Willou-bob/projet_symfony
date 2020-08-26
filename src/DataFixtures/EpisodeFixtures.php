<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for($i = 0 ; $i <= 50 ; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->title(10));
            $episode->setNumber($faker->numberBetween(1,50));
            $episode->setSynopsis($faker->text(50));
            $manager->persist($episode);
            $this->addReference('episode_' . $i, $episode);
            $episode->setSeason($this->getReference('season_0'));
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
        return [SeasonFixtures::class];
    }
}