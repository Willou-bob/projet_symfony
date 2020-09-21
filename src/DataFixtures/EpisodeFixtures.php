<?php

namespace App\DataFixtures;

use App\Service\Slugify;
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
            $episode->setTitle($faker->text(15));
            $episode->setNumber($faker->numberBetween(1,50));
            $episode->setSynopsis($faker->text(50));

            $slugify = new Slugify();
            $slug = $slugify->generate($episode->getTitle());
            $episode->setSlug($slug);

            $episode->setSeason($this->getReference('season_' . rand(0,9)));
            $this->addReference('episode_' . $i, $episode);

            $manager->persist($episode);
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