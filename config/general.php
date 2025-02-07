<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in src/config/GeneralConfig.php
 */

use craft\helpers\App;

// Removed --column-inserts to reduce size and prevent OOM errors
$backupCommand = 'PGPASSWORD="{password}" pg_dump' .
' --dbname={database}' .
' --host={server}' .
' --port={port}' .
' --username={user}' .
' --if-exists' .
' --clean' .
' --no-owner' .
' --no-privileges' .
' --no-acl' .
' --file="{file}"' .
' --schema={schema}';

return [
    '*' => [
        'allowAdminChanges' => true,
        'backupOnUpdate' => false,
        'backupCommand' => $backupCommand,
        'defaultSearchTermOptions' => [
            'subLeft' => true,
            'subRight' => true,
        ],
        'disallowRobots' => true,
        'enableCsrfProtection' => true,
        'useEmailAsUsername' => true,
        'generateTransformsBeforePageLoad' => true,
        'omitScriptNameInUrls' => true,
        'securityKey' => App::env('SECURITY_KEY'),
        'maxInvalidLogins' => 1000,
        'maxUploadFileSize' => 20000000,
        'resourceBasePath' => dirname(__DIR__) . '/web/cpresources',
        'maxSlugIncrement' => 100,
        'aliases' => [
            '@web' => App::env('DEFAULT_SITE_URL'),
        ],
    ],
    'dev' => [

    ],
];
