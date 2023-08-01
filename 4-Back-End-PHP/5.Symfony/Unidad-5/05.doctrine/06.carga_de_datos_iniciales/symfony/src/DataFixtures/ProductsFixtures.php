<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
// 
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

// entities
use App\Entity\Category;
use App\Entity\Product;

class ProductsFixtures extends Fixture implements DependentFixtureInterface
{

    private const PRODUCTS = [
        [
            'name' => 'music I',
            'category' => 'basic',
        ],
        [
            'name' => 'music II',
            'category' => 'medium',
        ],
        [
            'name' => 'music III',
            'category' => 'high',
        ],        
    ]; 

    public function load(ObjectManager $manager): void
    {
        $this->loadProducts($manager);
    }

    public function loadProducts(ObjectManager $manager){
        $category_repo = $manager->getRepository(Category::class);
        foreach(self::PRODUCTS as $data){
            $product = new Product();
            $product->setName($data['name']);
            $category = $category_repo->findOneBy(['name' => $data['category']]);
            $product->setCategory($category);
            $manager->persist($product);
        }
        $manager->flush();
    }

    public function getDependencies(){
        return [
            CategoriesFixtures::class,
        ];
    }
}
