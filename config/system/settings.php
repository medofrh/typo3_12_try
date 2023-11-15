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
        'indexed_search' => [
            'catdoc' => '/usr/bin/',
            'debugMode' => '0',
            'deleteFromIndexAfterEditing' => '1',
            'disableFrontendIndexing' => '0',
            'enableMetaphoneSearch' => '1',
            'flagBitMask' => '192',
            'fullTextDataLength' => '0',
            'ignoreExtensions' => '',
            'indexExternalURLs' => '0',
            'maxAge' => '0',
            'maxExternalFiles' => '5',
            'minAge' => '24',
            'pdf_mode' => '20',
            'pdftools' => '/usr/bin/',
            'ppthtml' => '/usr/bin/',
            'unrtf' => '/usr/bin/',
            'unzip' => '/usr/bin/',
            'useMysqlFulltext' => '0',
            'xlhtml' => '/usr/bin/',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
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
        'processor_allowTemporaryMasksAsPng' => 0,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
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
