<?php

class ExtPagesSubscriberRedirector extends ComPagesEventSubscriberErrorhandler
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'priority'  => KEvent::PRIORITY_HIGH,
        ));

        parent::_initialize($config);
    }

    public function onException(KEventException $event)
    {
        $exception = $event->getException();

        if($exception->getCode() == 404)
        {
            $dispatcher = $this->getObject('com://site/pages.dispatcher.http');
            $router     = $this->getObject('com://site/pages.dispatcher.router.redirect', ['request' => $dispatcher->getRequest()]);

            if(false !== $route = $router->resolve())
            {
                //External redirect: 301 permanent
                $status = KHttpResponse::MOVED_PERMANENTLY;

                //Qualify the route
                $url = $router->qualify($route);

                //Set the location header
                $dispatcher->getResponse()->setStatus($status);

                //Purge the cache
                if($dispatcher->isCacheable()) {
                    $dispatcher->purge();
                }

                $dispatcher->redirect($url);
            }
        }
    }
}
