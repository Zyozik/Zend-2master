<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3b664db8d67ec63586fd69802018eae
{
    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZfcUser' => 
            array (
                0 => __DIR__ . '/..' . '/zf-commons/zfc-user/src',
            ),
            'ZfcBase' => 
            array (
                0 => __DIR__ . '/..' . '/zf-commons/zfc-base/src',
            ),
            'Zend\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendframework/library',
            ),
            'ZendXml\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendxml/library',
            ),
        ),
        'B' => 
        array (
            'BjyProfiler' => 
            array (
                0 => __DIR__ . '/..' . '/bjyoungblood/bjy-profiler/src',
            ),
        ),
    );

    public static $classMap = array (
        'BjyProfiler\\Module' => __DIR__ . '/..' . '/bjyoungblood/bjy-profiler/Module.php',
        'ZfcBase\\Module' => __DIR__ . '/..' . '/zf-commons/zfc-base/Module.php',
        'ZfcUser\\Module' => __DIR__ . '/..' . '/zf-commons/zfc-user/Module.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitb3b664db8d67ec63586fd69802018eae::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb3b664db8d67ec63586fd69802018eae::$classMap;

        }, null, ClassLoader::class);
    }
}