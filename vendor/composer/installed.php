<?php return array(
    'root' => array(
        'name' => 'automattic/jetpack-beta',
        'pretty_version' => 'dev-trunk',
        'version' => 'dev-trunk',
        'reference' => '56fc592858b7ea7c2fd4ec5596818e321ac67690',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'automattic/jetpack-admin-ui' => array(
            'pretty_version' => 'v0.4.3',
            'version' => '0.4.3.0',
            'reference' => '83e500408e8542b108987b54d845ecb47b8e36b8',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-admin-ui',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => 'v3.0.10',
            'version' => '3.0.10.0',
            'reference' => 'ec4c465ce6a47fb15c15ab0224ec5b1272422d3e',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-beta' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'reference' => '56fc592858b7ea7c2fd4ec5596818e321ac67690',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-changelogger' => array(
            'pretty_version' => 'v4.2.6',
            'version' => '4.2.6.0',
            'reference' => '23b7c4b3dc98ce9c78d7c14fc8f0fd0c17f7888d',
            'type' => 'project',
            'install_path' => __DIR__ . '/../automattic/jetpack-changelogger',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'composer/semver' => array(
            'pretty_version' => '3.3.2',
            'version' => '3.3.2.0',
            'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
            'type' => 'library',
            'install_path' => __DIR__ . '/./semver',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'erusev/parsedown' => array(
            'pretty_version' => '1.7.4',
            'version' => '1.7.4.0',
            'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../erusev/parsedown',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/container' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0|3.0',
            ),
        ),
        'symfony/console' => array(
            'pretty_version' => 'v7.1.3',
            'version' => '7.1.3.0',
            'reference' => 'cb1dcb30ebc7005c29864ee78adb47b5fb7c3cd9',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/console',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'v3.5.0',
            'version' => '3.5.0.0',
            'reference' => '0e0d29ce1f20deffb4ab1b016a7257c4f1e789a1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => '0424dff1c58f028c451efff2045f5d92410bd540',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => '64647a7c30b2283f5d49b874d84a18fc22054b7a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-grapheme',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => 'a95281b0be0d9ab48050ebd988b967875cdb9fdb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.30.0',
            'version' => '1.30.0.0',
            'reference' => 'fd22ab50000ef01661e2a31d850ebaa297f8e03c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/process' => array(
            'pretty_version' => 'v7.1.3',
            'version' => '7.1.3.0',
            'reference' => '7f2f542c668ad6c313dc4a5e9c3321f733197eca',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/process',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/service-contracts' => array(
            'pretty_version' => 'v3.5.0',
            'version' => '3.5.0.0',
            'reference' => 'bd1d9e59a81d8fa4acdcea3f617c581f7475a80f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/service-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/string' => array(
            'pretty_version' => 'v7.1.3',
            'version' => '7.1.3.0',
            'reference' => 'ea272a882be7f20cad58d5d78c215001617b7f07',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/string',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
