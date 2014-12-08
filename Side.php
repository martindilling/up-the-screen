<?php

class Side
{
    public $imageUrl;
    public $size;
    public $items;

    function __construct($imageUrl, $size, $items = [])
    {
        $this->imageUrl = $imageUrl;
        $this->size = $size;

        if (empty($items)) {
            $allowed = $this->allowedIcons;
            $items = Collection::generate($size, function() use ($allowed) {
                return Icon::random($allowed);
            });
        }
        $this->items = $items;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}
