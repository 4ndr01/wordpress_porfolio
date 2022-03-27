<?php

namespace Media\Picture;

use Media\Media;

class Picture extends Media
{

    private string $alt;

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     */
    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }


    public function getHtml(): string
    {
        return '<img src="'. $this->getUrl(). '" alt"' .$this->getAlt(). '"/>';
    }
}