<?php return array(
    'root' => array(
        'name' => 'automattic/jetpack-beta',
        'pretty_version' => 'dev-trunk',
        'version' => 'dev-trunk',
        'reference' => NULL,
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-admin-ui' => array(
            'pretty_version' => '0.2.23',
            'version' => '0.2.23.0',
            'reference' => 'baeddb30dbf346677e225410e4bbc6ff240ccc41',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-admin-ui',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '2.12.0-alpha.1695757092',
            'version' => '2.12.0.0-alpha1695757092',
            'reference' => '48cf99dfea5e90934b5322d62912e0d8a3f5f0c4',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-beta' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'reference' => NULL,
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
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
    ),
);
