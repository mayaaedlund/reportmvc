<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Product.
 */
class ProductTest extends TestCase
{
    /**
     * Test creating a new Product object.
     */
    public function testCreateProduct()
    {
        $product = new Product();

        $this->assertInstanceOf("\App\Entity\Product", $product);

        $product->setName("Sample Product");
        $this->assertEquals("Sample Product", $product->getName());

        $product->setValue(100);
        $this->assertEquals(100, $product->getValue());
    }

    /**
     * Test the id field of the Product entity.
     */
    public function testId()
    {
        $product = new Product();
        
        $this->assertNull($product->getId());
    }
}
