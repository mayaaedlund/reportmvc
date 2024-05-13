<?php

namespace App\Card;

/**
 * Class Card represents a playing card.
 */
class Card
{
    /**
     * The value of the card.
     *
     * @var int
     */
    protected $value;

    /**
     * The points associated with the card.
     *
     * @var int
     */
    protected $points;

    /**
     * Constructor. Initializes the card with a random value between 1 and 52.
     */
    public function __construct()
    {
        $this->value = random_int(1, 52);
    }


    /**
     * Get the value of the card.
     *
     * @return int The value of the card.
     */
    public function take(): int
    {
        return $this->value;
    }


    /**
     * Get the value of the card.
     *
     * @return int The value of the card.
     */
    public function getValue(): int
    {
        return $this->value;
    }


    /**
     * Get the string representation of the card.
     *
     * @return string The string representation of the card.
     */
    public function getAsString(): string
    {
        return "[{$this->value}]";
    }


    /**
     * Get an array of all card numbers (from 1 to 52).
     *
     * @return array An array containing all card numbers.
     */
    public function getAllNumbers(): array
    {
        $numbers = range(1, 52);
        return $numbers;
    }

}
