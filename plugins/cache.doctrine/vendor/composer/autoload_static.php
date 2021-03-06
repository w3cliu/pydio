<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5853e8f4d82bd1b4461000f6a8c2b230
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pydio\\Cache\\Doctrine\\Ext\\' => 25,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pydio\\Cache\\Doctrine\\Ext\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
    );

    public static $classMap = array (
        'Doctrine\\Common\\Cache\\ApcCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php',
        'Doctrine\\Common\\Cache\\ApcuCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php',
        'Doctrine\\Common\\Cache\\ArrayCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php',
        'Doctrine\\Common\\Cache\\Cache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php',
        'Doctrine\\Common\\Cache\\CacheProvider' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php',
        'Doctrine\\Common\\Cache\\ChainCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/ChainCache.php',
        'Doctrine\\Common\\Cache\\ClearableCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php',
        'Doctrine\\Common\\Cache\\CouchbaseCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php',
        'Doctrine\\Common\\Cache\\FileCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php',
        'Doctrine\\Common\\Cache\\FilesystemCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php',
        'Doctrine\\Common\\Cache\\FlushableCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php',
        'Doctrine\\Common\\Cache\\MemcacheCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php',
        'Doctrine\\Common\\Cache\\MemcachedCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php',
        'Doctrine\\Common\\Cache\\MongoDBCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/MongoDBCache.php',
        'Doctrine\\Common\\Cache\\MultiGetCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php',
        'Doctrine\\Common\\Cache\\MultiPutCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php',
        'Doctrine\\Common\\Cache\\PhpFileCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php',
        'Doctrine\\Common\\Cache\\PredisCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/PredisCache.php',
        'Doctrine\\Common\\Cache\\RedisCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php',
        'Doctrine\\Common\\Cache\\RiakCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php',
        'Doctrine\\Common\\Cache\\SQLite3Cache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/SQLite3Cache.php',
        'Doctrine\\Common\\Cache\\Version' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/Version.php',
        'Doctrine\\Common\\Cache\\VoidCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/VoidCache.php',
        'Doctrine\\Common\\Cache\\WinCacheCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php',
        'Doctrine\\Common\\Cache\\XcacheCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php',
        'Doctrine\\Common\\Cache\\ZendDataCache' => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php',
        'Pydio\\Cache\\Doctrine\\Ext\\PatternClearableCache' => __DIR__ . '/../..' . '/src/PatternClearableCache.php',
        'Pydio\\Cache\\Doctrine\\Ext\\PydioApcuCache' => __DIR__ . '/../..' . '/src/PydioApcuCache.php',
        'Pydio\\Cache\\Doctrine\\Ext\\PydioArrayCache' => __DIR__ . '/../..' . '/src/PydioArrayCache.php',
        'Pydio\\Cache\\Doctrine\\Ext\\PydioChainCache' => __DIR__ . '/../..' . '/src/PydioChainCache.php',
        'Pydio\\Cache\\Doctrine\\Ext\\PydioRedisCache' => __DIR__ . '/../..' . '/src/PydioRedisCache.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5853e8f4d82bd1b4461000f6a8c2b230::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5853e8f4d82bd1b4461000f6a8c2b230::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5853e8f4d82bd1b4461000f6a8c2b230::$classMap;

        }, null, ClassLoader::class);
    }
}
