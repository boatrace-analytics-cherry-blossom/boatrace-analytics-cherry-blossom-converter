<?php

return [
    'Converter' => \DI\create('\Boatrace\Analytics\Cherry\Blossom\Converter')->constructor(
        \DI\get('MainConverter')
    ),
    'MainConverter' => function ($container) {
        return $container->get('\Boatrace\Analytics\Cherry\Blossom\MainConverter');
    },
];
