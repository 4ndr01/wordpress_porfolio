<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use TypeError;

require_once __DIR__ . "/../Functions/htmlLink.php";

class HtmlLinkTest  extends TestCase
{

    /**
     * @dataProvider htmlLinkProvider
     */
    public function testHtmlLink(string $url, string $text, ?bool $active, string $expected)
    {
        if ($active === null) {
            $this->assertSame($expected, htmlLink($url, $text));
        } else {
            $this->assertSame($expected, htmlLink($url, $text, $active));
        }
    }

    /**
     * @expectedException TypeError
     */
    public function testFailingHtmlLink()
    {
        htmlLink("http://www.php.net", "php.net", [true]);
    }

    public function htmlLinkProvider()
    {
        return [
            ["http://www.php.net", "php.net", false, "<a href=\"http://www.php.net\">php.net</a>"],
            ["http://www.php.net", "php.net", true, "<a href=\"http://www.php.net\" class=\"active\">php.net</a>"],
            ["http://www.php.net", "php.net", null, "<a href=\"http://www.php.net\">php.net</a>"]
        ];
    }

}