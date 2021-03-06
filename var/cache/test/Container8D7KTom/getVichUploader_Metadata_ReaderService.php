<?php

namespace Container8D7KTom;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Metadata_ReaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'vich_uploader.metadata.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['vich_uploader.metadata.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }
}
