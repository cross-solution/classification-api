<?php
return [
    'controllers' => [
        'factories' => [
            'Classify\\V1\\Rpc\\Type\\Controller' => \Classify\V1\Rpc\Type\TypeControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'classify.rpc.type' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/type',
                    'defaults' => [
                        'controller' => 'Classify\\V1\\Rpc\\Type\\Controller',
                        'action' => 'type',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'classify.rpc.type',
        ],
    ],
    'zf-rpc' => [
        'Classify\\V1\\Rpc\\Type\\Controller' => [
            'service_name' => 'type',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'classify.rpc.type',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Classify\\V1\\Rpc\\Type\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Classify\\V1\\Rpc\\Type\\Controller' => [
                0 => 'application/vnd.classify.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'Classify\\V1\\Rpc\\Type\\Controller' => [
                0 => 'application/vnd.classify.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'Classify\\V1\\Rpc\\Type\\Controller' => [
                'actions' => [
                    'type' => [
                        'GET' => true,
                        'POST' => false,
                        'PUT' => false,
                        'PATCH' => false,
                        'DELETE' => false,
                    ],
                ],
            ],
        ],
    ],
    'zf-content-validation' => [
        'Classify\\V1\\Rpc\\Type\\Controller' => [],
    ],
    'input_filter_specs' => [
        'Classify\\V1\\Rpc\\Type\\Validator' => [],
    ],
];
