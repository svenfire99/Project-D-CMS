<?php

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Tableware;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTablewareData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tableware = new Tableware();
        $tableware->setName('bord-vlak-met-rand');
        $tableware->setDescription("");
        $tableware->setType(Tableware::TYPE_PLATE);
        $tableware->setWidth(10);
        $tableware->setLength(10);
        $tableware->setHeight(2);
        $tableware->setPrice(100.00);
        $tableware->setModel('plate.modelextension');
        $manager->persist($tableware);
        $manager->flush();

        $tableware = new Tableware();
        $tableware->setName('big_plate');
        $tableware->setDisplayName('Groot bord');
        $tableware->setType(Tableware::TYPE_PLATE);
        $tableware->setWidth(100);
        $tableware->setLength(100);
        $tableware->setHeight(42);
        $tableware->setPrice(4206.90);
        $tableware->setModel('big_plate.modelextension');
        $manager->persist($tableware);
        $manager->flush();

        $tableware = new Tableware();
        $tableware->setName('bowl');
        $tableware->setDisplayName('Normale Kom');
        $tableware->setType(Tableware::TYPE_BOWL);
        $tableware->setWidth(20);
        $tableware->setLength(20);
        $tableware->setHeight(10);
        $tableware->setPrice(10.00);
        $tableware->setModel('bowl.modelextension');
        $manager->persist($tableware);
        $manager->flush();

        $tableware = new Tableware();
        $tableware->setName('mug');
        $tableware->setDisplayName('Normale Mok');
        $tableware->setType(Tableware::TYPE_MUG);
        $tableware->setWidth(10);
        $tableware->setLength(10);
        $tableware->setHeight(30);
        $tableware->setPrice(10.00);
        $tableware->setModel('mug.modelextension');
        $manager->persist($tableware);
        $manager->flush();
    }

}