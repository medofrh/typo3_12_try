<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$YkZSSHRXSjZZRURxRExqeQ$ZirFNucgoCRhdQ06JK2CQbZTCWsFVeIYm4PX+7cOMvE',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'typo3-blog',
                'driver' => 'mysqli',
                'host' => 'localhost',
                'password' => 'M6e3d3o6@',
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'root',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'imageoptimizer' => [
            'gifBinary' => 'gifsicle',
            'gifCheck' => 'gif',
            'gifOnProcessing' => '0',
            'gifOnUpload' => '0',
            'gifParametersOnProcessing' => '--batch -O2 %s',
            'gifParametersOnUpload' => '--batch -O2 %s',
            'jpgBinary' => 'jpegoptim',
            'jpgCheck' => 'jpg',
            'jpgOnProcessing' => '0',
            'jpgOnUpload' => '0',
            'jpgParametersOnProcessing' => '--strip-all %s',
            'jpgParametersOnUpload' => '--strip-all %s',
            'pngBinary' => 'optipng',
            'pngCheck' => 'png',
            'pngOnProcessing' => '0',
            'pngOnUpload' => '0',
            'pngParametersOnProcessing' => '-o2 %s',
            'pngParametersOnUpload' => '-o2 %s',
            'svgBinary' => 'svgo',
            'svgCheck' => 'svg',
            'svgOnUpload' => '0',
            'svgParametersOnUpload' => '--pretty %s',
        ],
    ],
    'FE' => [
        'debug' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => '',
        'processor_colorspace' => 'RGB',
        'processor_effects' => '',
        'processor_enabled' => '1',
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '505ce72a9f04e79e23b432a9539fbefe5a5867686ed76358f98796dd6480db0282b4e26fd4d217443ef6cf387d4df3c5',
        'exceptionalErrors' => 12290,
        'sitename' => 'New TYPO3 Project',
        'systemMaintainers' => [
            1,
        ],
        'trustedHostsPattern' => '.*.*',
    ],
];
