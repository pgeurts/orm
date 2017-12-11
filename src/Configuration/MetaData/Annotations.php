<?php

namespace LaravelDoctrine\ORM\Configuration\MetaData;

use Doctrine\ORM\Configuration;

class Annotations extends MetaData
{
    /**
     * @param array $settings
     *
     * @return \Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
     */
    public function resolve(array $settings = [])
    {
        $driver = (new Configuration())->newDefaultAnnotationDriver(
            array_get($settings, 'paths', []),
            array_get($settings, 'simple', false)
        );
        $driver->addExcludePaths(array_get($settings, 'excludePaths', []));
        return $driver;
    }
}
