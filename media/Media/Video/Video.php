<?php

namespace Media\Video;

use Media\Media;

abstract class Video extends Media
{
    private bool $autoplay;

    /**
     * @return bool
     */
    public function isAllowFullScreen(): bool
    {
        return $this->allowFullScreen;
    }

    /**
     * @param bool $allowFullScreen
     */
    public function setAllowFullScreen(bool $allowFullScreen): void
    {
        $this->allowFullScreen = $allowFullScreen;
    }

    /**
     * @return int
     */
    public function getFrameborder(): int
    {
        return $this->frameborder;
    }

    /**
     * @param int $frameborder
     */
    public function setFrameborder(int $frameborder): void
    {
        $this->frameborder = $frameborder;
    }
    private int $frameborder;

    /**
     * @return bool
     */
    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }

    /**
     * @param bool $autoplay
     */
    public function setAutoplay(bool $autoplay): void
    {
        $this->autoplay = $autoplay;
    }
    private bool $allowFullScreen;
}