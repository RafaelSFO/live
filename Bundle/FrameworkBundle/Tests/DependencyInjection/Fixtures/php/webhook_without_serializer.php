<?php

$container->loadFromExtension('framework', [
    'http_method_override' => false,
    'webhook' => ['enabled' => true],
    'http_client' => ['enabled' => true],
    'serializer' => ['enabled' => false],
]);
