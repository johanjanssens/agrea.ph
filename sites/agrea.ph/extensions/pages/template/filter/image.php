<?php

class ExtPagesTemplateFilterImage extends ComPagesTemplateFilterAbstract
{
    public function filter(&$text)
    {
        $text = $this->getTemplate()->helper('image.filter', $text);
    }
}
