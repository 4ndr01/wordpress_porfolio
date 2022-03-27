<?php

namespace Media;

interface renderable
{
    public function getHtml():string;
    public function render():void;
}