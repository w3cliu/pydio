<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64db14e1d39da26124fc9d96d97b710d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pydio\\Access\\WebDAV\\' => 20,
            'Pydio\\Access\\Core\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pydio\\Access\\WebDAV\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Pydio\\Access\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../core.access/src',
        ),
    );

    public static $classMap = array (
        'Pydio\\Access\\Core\\AbstractAccessDriver' => __DIR__ . '/../..' . '/../core.access/src/AbstractAccessDriver.php',
        'Pydio\\Access\\Core\\CoreAccessHandler' => __DIR__ . '/../..' . '/../core.access/src/CoreAccessHandler.php',
        'Pydio\\Access\\Core\\EncodingWrapper' => __DIR__ . '/../..' . '/../core.access/src/EncodingWrapper.php',
        'Pydio\\Access\\Core\\Exception\\FileNotFoundException' => __DIR__ . '/../..' . '/../core.access/src/Exception/FileNotFoundException.php',
        'Pydio\\Access\\Core\\Exception\\FileNotWriteableException' => __DIR__ . '/../..' . '/../core.access/src/Exception/FileNotWriteableException.php',
        'Pydio\\Access\\Core\\Filter\\AJXP_Permission' => __DIR__ . '/../..' . '/../core.access/src/Filter/AJXP_Permission.php',
        'Pydio\\Access\\Core\\Filter\\AJXP_PermissionMask' => __DIR__ . '/../..' . '/../core.access/src/Filter/AJXP_PermissionMask.php',
        'Pydio\\Access\\Core\\Filter\\ContentFilter' => __DIR__ . '/../..' . '/../core.access/src/Filter/ContentFilter.php',
        'Pydio\\Access\\Core\\IAjxpWrapper' => __DIR__ . '/../..' . '/../core.access/src/IAjxpWrapper.php',
        'Pydio\\Access\\Core\\IAjxpWrapperProvider' => __DIR__ . '/../..' . '/../core.access/src/IAjxpWrapperProvider.php',
        'Pydio\\Access\\Core\\MetaStreamWrapper' => __DIR__ . '/../..' . '/../core.access/src/MetaStreamWrapper.php',
        'Pydio\\Access\\Core\\Model\\AJXP_Node' => __DIR__ . '/../..' . '/../core.access/src/Model/AJXP_Node.php',
        'Pydio\\Access\\Core\\Model\\NodesDiff' => __DIR__ . '/../..' . '/../core.access/src/Model/NodesDiff.php',
        'Pydio\\Access\\Core\\Model\\NodesList' => __DIR__ . '/../..' . '/../core.access/src/Model/NodesList.php',
        'Pydio\\Access\\Core\\Model\\Repository' => __DIR__ . '/../..' . '/../core.access/src/Model/Repository.php',
        'Pydio\\Access\\Core\\Model\\UserSelection' => __DIR__ . '/../..' . '/../core.access/src/Model/UserSelection.php',
        'Pydio\\Access\\Core\\RecycleBinManager' => __DIR__ . '/../..' . '/../core.access/src/RecycleBinManager.php',
        'Pydio\\Access\\Core\\SchemeTranslatorWrapper' => __DIR__ . '/../..' . '/../core.access/src/SchemeTranslatorWrapper.php',
        'Pydio\\Access\\Core\\Stream\\AuthStream' => __DIR__ . '/../..' . '/../core.access/src/Stream/AuthStream.php',
        'Pydio\\Access\\Core\\Stream\\Exception\\OAuthException' => __DIR__ . '/../..' . '/../core.access/src/Stream/Exception/OAuthException.php',
        'Pydio\\Access\\Core\\Stream\\Iterator\\DirIterator' => __DIR__ . '/../..' . '/../core.access/src/Stream/Iterator/DirIterator.php',
        'Pydio\\Access\\Core\\Stream\\Listener\\AuthSubscriber' => __DIR__ . '/../..' . '/../core.access/src/Stream/Listener/AuthSubscriber.php',
        'Pydio\\Access\\Core\\Stream\\Listener\\PathSubscriber' => __DIR__ . '/../..' . '/../core.access/src/Stream/Listener/PathSubscriber.php',
        'Pydio\\Access\\Core\\Stream\\MetadataCachingStream' => __DIR__ . '/../..' . '/../core.access/src/Stream/MetadataCachingStream.php',
        'Pydio\\Access\\Core\\Stream\\OAuthStream' => __DIR__ . '/../..' . '/../core.access/src/Stream/OAuthStream.php',
        'Pydio\\Access\\Core\\Stream\\PydioStreamWrapper' => __DIR__ . '/../..' . '/../core.access/src/Stream/PydioStreamWrapper.php',
        'Pydio\\Access\\Core\\Stream\\Stream' => __DIR__ . '/../..' . '/../core.access/src/Stream/Stream.php',
        'Pydio\\Access\\Core\\Stream\\StreamWrapper' => __DIR__ . '/../..' . '/../core.access/src/Stream/StreamWrapper.php',
        'Pydio\\Access\\Core\\Stream\\Utils\\AuthorizationCode' => __DIR__ . '/../..' . '/../core.access/src/Stream/Utils/AuthorizationCode.php',
        'Pydio\\Access\\Core\\Stream\\WriteBufferStream' => __DIR__ . '/../..' . '/../core.access/src/Stream/WriteBufferStream.php',
        'Pydio\\Access\\WebDAV\\Driver' => __DIR__ . '/../..' . '/src/Driver.php',
        'Pydio\\Access\\WebDAV\\Listener\\WebDAVSubscriber' => __DIR__ . '/../..' . '/src/Listener/WebDAVSubscriber.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64db14e1d39da26124fc9d96d97b710d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64db14e1d39da26124fc9d96d97b710d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64db14e1d39da26124fc9d96d97b710d::$classMap;

        }, null, ClassLoader::class);
    }
}
