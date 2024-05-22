<?php

namespace App\Tests\Entity;

use App\Entity\MarineProtection;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for class MarineProtection.
 */
class MarineProtectionTest extends TestCase
{
    /**
     * Test creating a new MarineProtection object.
     */
    public function testCreateMarineProtection()
    {
        // Create a new MarineProtection object
        $marineProtection = new MarineProtection();

        // Verify that the object is an instance of MarineProtection
        $this->assertInstanceOf(MarineProtection::class, $marineProtection);

        // Set values
        $marineProtection->setRegion('Region1');
        $marineProtection->setYear2022(80);
        $marineProtection->setYear2021(75);
        $marineProtection->setYear2020(70);
        $marineProtection->setYear2019(65);
        $marineProtection->setYear2018(60);

        // Verify that the getters return the correct values
        $this->assertEquals('Region1', $marineProtection->getRegion());
        $this->assertEquals(80, $marineProtection->getYear2022());
        $this->assertEquals(75, $marineProtection->getYear2021());
        $this->assertEquals(70, $marineProtection->getYear2020());
        $this->assertEquals(65, $marineProtection->getYear2019());
        $this->assertEquals(60, $marineProtection->getYear2018());
    }
}
