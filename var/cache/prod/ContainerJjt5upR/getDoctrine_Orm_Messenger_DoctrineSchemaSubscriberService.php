<?php

namespace ContainerJjt5upR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.messenger.doctrine_schema_subscriber' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.messenger.doctrine_schema_subscriber'] = new \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaSubscriber(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.async'] ?? $container->load('getMessenger_Transport_AsyncService'));
            yield 1 => ($container->privates['messenger.transport.failed'] ?? $container->load('getMessenger_Transport_FailedService'));
        }, 2));
    }
}
