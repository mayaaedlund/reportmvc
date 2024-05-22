<?php

namespace App\Tests\Entity;

use App\Entity\SustainableFish;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class SustainableFish.
 */
class SustainableFishTest extends TestCase
{
    /**
     * Test creating a new SustainableFish object.
     */
    public function testCreateSustainableFish()
    {
        // Create a new SustainableFish object
        $sustainableFish = new SustainableFish();

        // Verify that the object is an instance of SustainableFish
        $this->assertInstanceOf(SustainableFish::class, $sustainableFish);

        // Set values
        $sustainableFish->setYear(2022);
        $sustainableFish->setSustainablePercentage(52);
        $sustainableFish->setSustainableAmount(36);
        $sustainableFish->setAssessedAmount(65);

        // Verify that the getters return the correct values
        $this->assertEquals(2022, $sustainableFish->getYear());
        $this->assertEquals(52, $sustainableFish->getSustainablePercentage());
        $this->assertEquals(36, $sustainableFish->getSustainableAmount());
        $this->assertEquals(65, $sustainableFish->getAssessedAmount());
    }
}
