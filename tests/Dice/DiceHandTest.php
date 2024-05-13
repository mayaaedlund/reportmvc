<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DiceHand.
 */
class DiceHandTest extends TestCase
{
    /**
     * Test adding dice to the dice hand.
     */
    public function testAddDice()
    {
        // Create a new DiceHand object
        $hand = new DiceHand();

        // Create two Dice objects
        $die1 = new Dice();
        $die2 = new Dice();

        // Add the dice to the hand
        $hand->add($die1);
        $hand->add($die2);

        // Verify that the number of dice in the hand is 2
        $this->assertEquals(2, $hand->getNumberDices());
    }

    /**
     * Test rolling the dice hand.
     */
    public function testRoll()
    {
        // Create a new DiceHand object
        $hand = new DiceHand();

        // Create two Dice objects and add them to the hand
        $die1 = new Dice();
        $die2 = new Dice();
        $hand->add($die1);
        $hand->add($die2);

        // Roll the dice hand
        $hand->roll();

        // Verify that the values of the dice are set
        $this->assertNotNull($die1->getValue());
        $this->assertNotNull($die2->getValue());
    }

    /**
     * Test getting the values of the dice hand.
     */
    public function testGetValues()
    {
        // Create a new DiceHand object
        $hand = new DiceHand();

        // Create two Dice objects and add them to the hand
        $die1 = new Dice();
        $die2 = new Dice();
        $hand->add($die1);
        $hand->add($die2);

        // Roll the dice hand
        $hand->roll();

        // Get the values of the dice hand
        $values = $hand->getValues();

        // Verify that the values array contains the values of both dice
        $this->assertCount(2, $values);
        $this->assertContains($die1->getValue(), $values);
        $this->assertContains($die2->getValue(), $values);
    }

    /**
     * Test getting the string representation of the dice hand.
     */
    public function testGetString()
    {
        // Create a new DiceHand object
        $hand = new DiceHand();

        // Create two Dice objects and add them to the hand
        $die1 = new Dice();
        $die2 = new Dice();
        $hand->add($die1);
        $hand->add($die2);

        // Roll the dice hand
        $hand->roll();

        // Get the string representation of the dice hand
        $strings = $hand->getString();

        // Verify that the strings array contains the string representation of both dice
        $this->assertCount(2, $strings);
        $this->assertContains($die1->getAsString(), $strings);
        $this->assertContains($die2->getAsString(), $strings);
    }
}
