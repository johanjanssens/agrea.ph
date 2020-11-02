<?php

class ExtPagesSubscriberRedirector extends ComPagesEventSubscriberAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'priority'  => KEvent::PRIORITY_HIGHEST,
            'redirects' => array(),
        ));

        parent::_initialize($config);
    }

    public function onAfterApplicationRoute(KEventInterface $event)
    {
        $request = $this->getObject('request');
        $base    = $request->getBasePath();
        $url     = urldecode( $request->getUrl()->getPath());

        $route  = rtrim(str_replace(array($base, '/index.php'), '', $url), '/');

        if($url = $this->getConfig()->redirects->get($route))
        {
            $dispatcher = $this->getObject('com://site/pages.dispatcher.http');
            $response   = $dispatcher->getResponse();

            //Set the redirect status
            $response->setStatus(KHttpResponse::MOVED_PERMANENTLY);

            $dispatcher->redirect($url);
        }
    }
}
