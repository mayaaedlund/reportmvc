<?php

namespace App\Dice;

class DiceGraphic extends Dice
{
    private $representation = [
        '⚀',
        '⚁',
        '⚂',
        '⚃',
        '⚄',
        '⚅',
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function getAsString(): string
    {
        return $this->representation[$this->value - 1];
    }

    public function setValue(int $value): void
    {
        if ($value < 1 || $value > 6) {
            throw new \InvalidArgumentException('Value must be between 1 and 6');
        }
        $this->value = $value;
    }
}
