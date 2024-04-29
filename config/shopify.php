<?php

return [

    'credentials' => [

        /*
         * The API access token from the private app.
         */
        'access_token' => env('SHOPIFY_ACCESS_TOKEN', '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'),

        /*
         * The shopify domain for your shop.
         */
        'domain' => env('SHOPIFY_DOMAIN', '247commercestage.myshopify.com'),

        /*
         * The shopify api version.
         */
        'api_version' => env('SHOPIFY_API_VERSION', '2024-04'),

        /*
         * The shopify api key.
         */
        'api_key' => env('SHOPIFY_API_KEY', '905794df215fb8883a1d6934b072d297'),

        /*
         * The shopify api secret.
         */
        'api_secret' => env('SHOPIFY_API_SECRET', '4c7505affac75123ba487b6a2dd78260'),

    ],

    'webhooks' => [

        /*
         * The webhook secret provider to use.
         */
        'secret_provider' => \Signifly\Shopify\Webhooks\ConfigSecretProvider::class,

        /*
         * The shopify webhook secret.
         */
        'secret' => env('SHOPIFY_WEBHOOK_SECRET'),

    ],

    'exceptions' => [

        /*
         * Whether to include the validation errors in the exception message.
         */
        'include_validation_errors' => false,

    ],
    'access_scopes' => "write_orders,write_fulfillments,write_customers,write_products,read_third_party_fulfillment_orders,write_third_party_fulfillment_orders,write_assigned_fulfillment_orders,read_assigned_fulfillment_orders,read_merchant_managed_fulfillment_orders,write_merchant_managed_fulfillment_orders"
];
