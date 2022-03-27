<?php
namespace Media;

abstract class Media implements renderable
{
    private string $url;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function render(): void
    {
        echo $this->getHtml();
    }

}
