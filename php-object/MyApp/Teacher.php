<?php

namespace MyApp;

class Teacher extends person
{

    public function getType(): string
    {
       return("Enseignant");
    }
}