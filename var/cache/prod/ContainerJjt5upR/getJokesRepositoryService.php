<?php

namespace ContainerJjt5upR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJokesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\JokesRepository' shared autowired service.
     *
     * @return \App\Repository\JokesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\JokesRepository'] = new \App\Repository\JokesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}