<?php

namespace ContainerHM0D7ZY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationrepasControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReservationrepasController' shared autowired service.
     *
     * @return \App\Controller\ReservationrepasController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ReservationrepasController.php';

        $container->services['App\\Controller\\ReservationrepasController'] = $instance = new \App\Controller\ReservationrepasController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ReservationrepasController', $container));

        return $instance;
    }
}