<?php

class ExtPagesTemplateFilterImage extends ComPagesTemplateFilterAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'priority' => self::PRIORITY_LOWEST,
        ));

        parent::_initialize($config);
    }

    public function filter(&$text)
    {
        $text = $this->getTemplate()->helper('image.filter', $text);
    }
}
