<?php

class Icon
{
    public $type;
    private $allowed = ['up', 'down', 'right', 'down', 'skip', 'swap'];
    private $defaultPath = 'images/';
    private $defaultExt = '.png';

    public function __construct($type = '', $allowed = [])
    {
        if (!empty($allowed)) {
            $this->allowed = $allowed;
        }

        if (empty($type)) {
            $type = $this->allowed[mt_rand(0, count($this->allowed) - 1)];
        }

        if (!in_array($type, $this->allowed)) {
            throw new InvalidArgumentException('Given type ['.$type.'] is not allowed! ['.implode(', ', $this->allowed).']');
        }

        $this->type = $type;
    }

    public static function random($allowed = [])
    {
        return new static('', $allowed);
    }

    public function getUrl()
    {
        return $this->defaultPath . $this->type . $this->defaultExt;
    }
}
