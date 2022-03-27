<?php

namespace Media\Audio;

use Media\Media;

class Audio extends Media
{

    private bool $controls;

    /**
     * @return bool
     */
    public function isControls(): bool
    {
        return $this->controls;
    }

    /**
     * @param bool $controls
     */
    public function setControls(bool $controls): void
    {
        $this->controls = $controls;
    }

    public function getHtml(): string
    {
        return '<audio controls preload="auto"'.'src=". $this->getUrl() ."'>'</audio>';

    }
}