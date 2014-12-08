<?php

class LongSide extends Side
{
    protected $iconPositions = [
        ['x' => 85,  'y' => 30],
        ['x' => 175, 'y' => 30],
        ['x' => 265, 'y' => 30],
        ['x' => 353, 'y' => 30],
        ['x' => 435, 'y' => 30],
        ['x' => 520, 'y' => 30],
        ['x' => 610, 'y' => 30],
        ['x' => 695, 'y' => 30],
    ];

    protected $allowedIcons = ['up', 'down', 'skip', 'swap'];

    function __construct($items = [])
    {
        parent::__construct('images/side-long.png', 8, $items);
    }

    public function getPosition($index)
    {
        return $this->iconPositions[$index];
    }
}
