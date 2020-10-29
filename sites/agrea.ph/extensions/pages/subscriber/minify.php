<?php

class ExtPagesSubscriberMinify extends ComPagesEventSubscriberAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'priority' => KEvent::PRIORITY_LOWEST,
            'enable' => JDEBUG ? false : true,
        ));

        parent::_initialize($config);
    }

    public function onBeforeDispatcherSend(KEventInterface $event)
    {
        $content = $event->getTarget()->getResponse()->getContent();

        if($event->getTarget()->getRequest()->getFormat() == 'html')
        {
            //Filter our multiple spaces and html commments
            $htmlMin = new voku\helper\HtmlMin();
            $htmlMin->doOptimizeViaHtmlDomParser();
            $htmlMin->doRemoveComments();
            $htmlMin->doSumUpWhitespace();
            $htmlMin->doRemoveWhitespaceAroundTags();
            $htmlMin->doSortHtmlAttributes(false);
            $content = $htmlMin->minify($content);

            $event->getTarget()->getResponse()->setContent($content);
        }
    }

    public function isEnabled()
    {
        $result = false;

        if(class_exists('voku\helper\HtmlMin')) {
            $result = parent::isEnabled();
        }

        return $result;
    }
}
