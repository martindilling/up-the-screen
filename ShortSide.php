<?php

class ShortSide extends Side
{
    protected $iconPositions = [
        ['x' => 80,  'y' => 30],
        ['x' => 153, 'y' => 30],
        ['x' => 219, 'y' => 30],
        ['x' => 283, 'y' => 30],
        ['x' => 350, 'y' => 30],
        ['x' => 425, 'y' => 30],
    ];

    protected $allowedIcons = ['left', 'right', 'skip', 'swap'];

    function __construct($items = [])
    {
        parent::__construct('images/side-short.png', 6, $items);
    }

    public function getPosition($index)
    {
        return $this->iconPositions[$index];
    }
}
