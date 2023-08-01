<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\MicroPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Stmt\Catch_;

// entities

class CategoriesFixtures extends Fixture
{

    private const CATEGORIES = [
        [
            'name' => 'basic',
        ],
        [
            'name' => 'medium',
        ],
        [
            'name' => 'high',
        ],        
    ];

    public function load(ObjectManager $manager): void
    {
        $this->loadCategories($manager);
    }

    public function loadCategories(ObjectManager $manager){
        foreach(self::CATEGORIES as $data){
            $category = new Category();
            $category->setName($data['name']);
            $manager->persist($category);
        }
        $manager->flush();
    }

}
