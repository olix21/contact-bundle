<?php

/*
namespace Dywee\ContactBundle\Listener;

use Dywee\CoreBundle\DyweeCoreEvent;
use Dywee\CoreBundle\Event\DashboardBuilderEvent;
use Dywee\OrderBundle\Service\AdminDashboardHandler;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class AdminDashboardBuilderListener implements EventSubscriberInterface{
    private $orderAdminDashboardHandler;

    public function __construct(AdminDashboardHandler $orderAdminDashboardHandler)
    {
        $this->orderAdminDashboardHandler = $orderAdminDashboardHandler;
    }

    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return array(
            DyweeCoreEvent::BUILD_ADMIN_DASHBOARD => array('addElementToDashboard', 2048)
        );
    }

    public function addElementToDashboard(DashboardBuilderEvent $adminDashboardBuilderEvent)
    {
        $adminDashboardBuilderEvent->addElement($this->orderAdminDashboardHandler->getDashboardElement());
    }

}
