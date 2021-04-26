<?php
namespace SwagPluginSystem\Subscriber;
use Enlight\Event\SubscriberInterface;

class FrontendRoutingSubscriber implements SubscriberInterface
{

    public static function getSubscribedEvents()
    {

        // TODO: Implement getSubscribedEvents() method.

        return [
            'Enlight_Controller_Action_PreDispatch' => 'onPreDispatch'
        ];
    }

    public function onPreDispatch(\Enlight_Event_EventArgs $args)
    {
        /** @var \Shopware_Controllers_Frontend_Detail $subject */
        $controller = $args->getSubject();


        $controller->View()->addTemplateDir(__DIR__. '/../Resources/views');

    }
}
