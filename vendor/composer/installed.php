<?php return array(
    'root' => array(
        'name' => 'automattic/jetpack-beta',
        'pretty_version' => 'dev-trunk',
        'version' => 'dev-trunk',
        'reference' => null,
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-admin-ui' => array(
            'pretty_version' => '0.4.2',
            'version' => '0.4.2.0',
            'reference' => 'b0363d21eb6f5c39ee7728a1a26d2b16b23db27d',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-admin-ui',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '3.0.7-alpha.1714641327',
            'version' => '3.0.7.0-alpha1714641327',
            'reference' => 'cd6d3cce0c56bc27075b643a32ba4fd38a92d7b4',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-beta' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'reference' => null,
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
