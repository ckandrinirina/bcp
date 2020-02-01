<?php

namespace BcpBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;

interface ExceptionListenerInterface
{
    public function onKernelException(GetResponseForExceptionEvent $event);
}
