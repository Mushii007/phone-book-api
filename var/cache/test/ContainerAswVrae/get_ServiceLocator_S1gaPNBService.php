<?php

namespace ContainerAswVrae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S1gaPNBService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.s1gaPNB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s1gaPNB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', false],
        ], [
            'fileUploader' => 'App\\Service\\FileUploader',
        ]);
    }
}
