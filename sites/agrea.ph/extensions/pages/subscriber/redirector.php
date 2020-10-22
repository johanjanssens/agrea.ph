<?php

class ExtPagesSubscriberRedirector extends ComPagesEventSubscriberAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'priority' => KEvent::PRIORITY_HIGH,
        ));

        parent::_initialize($config);
    }

    public function onAfterApplicationRoute(KEventInterface $event)
    {
        $request = $this->getObject('request');
        $router  = $this->getObject('com://site/pages.dispatcher.router.redirect', ['request' => $request]);

        if(false !== $route = $router->resolve())
        {
            $dispatcher = $this->getObject('com://site/pages.dispatcher.http');
            $response   = $dispatcher->getResponse();

            //Set the location header
            if($route->toString(KHttpUrl::AUTHORITY)) {
                //External redierct: 301 permanent
                $status = KHttpResponse::MOVED_PERMANENTLY;
            } else {
                //Internal redirect: 307 temporary
                $status = KHttpResponse::TEMPORARY_REDIRECT;
            }

            //Set the redirect status
            $response->setStatus($status);

            //Qualify the route
            $url = $router->qualify($route);

            $dispatcher->redirect($url);
        }
    }
}
