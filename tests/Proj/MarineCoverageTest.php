<?php

namespace App\Tests\Entity;

use App\Entity\MarineCoverage;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class MarineCoverage.
 */
class MarineCoverageTest extends TestCase
{
    public function testCreateMarineCoverage()
    {
        // Create a new MarineCoverage object
        $marineCoverage = new MarineCoverage();

        // Verify that the object is an instance of MarineCoverage
        $this->assertInstanceOf(MarineCoverage::class, $marineCoverage);

        // Set values
        $marineCoverage->setRegion('Region1');
        $marineCoverage->setYear(2021);
        $marineCoverage->setPercentage(75);

        // Verify that the getters return the correct values
        $this->assertEquals('Region1', $marineCoverage->getRegion());
        $this->assertEquals(2021, $marineCoverage->getYear());
        $this->assertEquals(75, $marineCoverage->getPercentage());
    }
}
