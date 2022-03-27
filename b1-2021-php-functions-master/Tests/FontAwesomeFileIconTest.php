<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use TypeError;

require_once __DIR__ . "/../Functions/fontAwesomeFileIcon.php";

class FontAwesomeFileIconTest  extends TestCase
{

    /**
     * @dataProvider filenameProvider
     */
    public function testFontAwesomeFileIcon(string $filename, string $expected)
    {
        $this->assertSame($expected, fontAwesomeFileIcon($filename));
    }

    /**
     * @expectedException TypeError
     */
    public function testFailingAverage()
    {
        fontAwesomeFileIcon(["not_a_string"]);
    }

    /**
     * Créer une fonction "fontAwesomeFileIcon" permettant de retourner
     * l'icone FontAwesome correspondant à un nom de fichier.
     *
     * Exemples :
     * ("resume.docx") => "<i class="fa fa-word-o"></i>"
     * ("~/Documents/charts.pdf") => "<i class="fa fa-pdf-o"></i>",
     * ("todo.txt") => "<i class="fa fa-text-o"></i>"
     * ("birthday.avi") => "<i class="fa fa-video-o"></i>"
     */
    public function filenameProvider()
    {
        return [
            ["resume.docx", '<i class="fa fa-word-o"></i>'],
            ["~/Documents/charts.pdf", '<i class="fa fa-pdf-o"></i>'],
            ["todo.txt", '<i class="fa fa-text-o"></i>'],
            ["birthday.avi", '<i class="fa fa-video-o"></i>']
        ];
    }

}