<?php
    class Parcel
    {
        private $length;
        private $width;
        private $height;
        private $weight;

        function __construct($length, $width, $height, $weight)
        {
            $this->length = $length;
            $this->width = $width;
            $this->height = $height;
            $this->weight = $weight;
        }

        function volume()
        {
            return $this->length * $this->width * $this->height;
        }

        function getLength()
        {
            return $this->length;
        }

        function getWidth()
        {
            return $this->width;
        }

        function getHeight()
        {
            return $this->height;
        }

        function getWeight()
        {
            return $this->weight;
        }

        function setLength($new_length)
        {
            $this->length = (float) $new_length;
        }

        function setWdith($new_width)
        {
            $this->width = (float) $new_width;
        }

        function setHeight($new_height)
        {
            $this->height = (float) $new_height;
        }

        function setWeight($new_weight)
        {
            $this->length = (float) $new_weight;
        }

    }

?>
