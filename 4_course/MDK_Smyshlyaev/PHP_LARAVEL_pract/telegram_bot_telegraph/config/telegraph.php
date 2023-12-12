<?php

use DefStudio\Telegraph\Telegraph;

return [
    /*
     * Telegram API - базовый URL, он может быть переопределен
     * Для самостоятельных серверов
     */
    'telegram_api_url' => 'https://api.telegram.org/',

    /*
     * Sets Telegraph messages default parse mode
     * allowed values: html|markdown|MarkdownV2
     */
    'default_parse_mode' => Telegraph::PARSE_MARKDOWN,

    /*
     * Устанавливает обработчик, который будет использоваться при телеграфе
     * Получает новый вызов Webhook.
     *
     * Для справки см. https://defstudio.github.io/telegraph/webhooks/overview
     */
    'webhook_handler' => App\Telegram\Handler::class,

    /*
     * Sets a custom domain when registering a webhook. This will allow a local telegram bot api server
     * to reach the webhook. Disabled by default
     *
     * For reference, see https://core.telegram.org/bots/api#using-a-local-bot-api-server
     */
    // 'custom_webhook_domain' => 'http://my.custom.domain',

    /*
     * If enabled, Telegraph dumps received
     * webhook messages to logs
     */
    'debug_mode' => false,

    /*
     * If enabled, unknown webhook commands are
     * reported as exception in application logs
     */
    'report_unknown_webhook_commands' => true,

    'security' => [
        /*
         * Если включено, разрешают запросы обратного вызова от незарегистрированных чатов
         */
        'allow_callback_queries_from_unknown_chats' => true,

        /*
         * Если включено, разрешают сообщения и команды из незарегистрированных чатов
         */
        'allow_messages_from_unknown_chats' => true,

        /*
         * if enabled, store unknown chats as new TelegraphChat models
         */
        'store_unknown_chats_in_db' => false,
    ],

    /*
     * Set model class for both TelegraphBot and TelegraphChat,
     * to allow more customization.
     *
     * Bot model must be or extend `DefStudio\Telegraph\Models\TelegraphBot::class`
     * Chat model must be or extend `DefStudio\Telegraph\Models\TelegraphChat::class`
     */
    'models' => [
        'bot' => DefStudio\Telegraph\Models\TelegraphBot::class,
        'chat' => DefStudio\Telegraph\Models\TelegraphChat::class,
    ],

    'storage' => [
        /**
         * Default storage driver to be used for Telegraph data
         */
        'default' => 'file',

        'stores' => [
            'file' => [
                /**
                 * Telegraph cache driver to be used, must implement
                 * DefStudio\Telegraph\Contracts\StorageDriver contract
                 */
                'driver' => \DefStudio\Telegraph\Storage\FileStorageDriver::class,

                /*
                 * Laravel Storage disk to use. See /config/filesystems/disks for available disks
                 * If 'null', Laravel default store will be used,
                 */
                'disk' => 'local',

                /**
                 * Folder inside filesystem to be used as root for Telegraph storage
                 */
                'root' => 'telegraph',
            ],
            'cache' => [
                /**
                 * Telegraph cache driver to be used, must implement
                 * DefStudio\Telegraph\Contracts\StorageDriver contract
                 */
                'driver' => \DefStudio\Telegraph\Storage\CacheStorageDriver::class,

                /*
                 * Laravel Cache store to use. See /config/cache/stores for available stores
                 * If 'null', Laravel default store will be used,
                 */
                'store' => null,

                /*
                 * Prefix to be prepended to cache keys
                 */
                'key_prefix' => 'tgph',
            ],
        ],
    ],
];
