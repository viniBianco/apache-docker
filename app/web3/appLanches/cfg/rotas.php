<?php

$rotas = [
    '/' => [
        'GET' => '\Controlador\MensagemControlador#index',
        'POST' => '\Controlador\MensagemControlador#armazenar',
    ],
    '/pedidos' => [
        'GET' => '\Controlador\MensagemControlador#pedidos'
    ],
];
