<?php

return [
  '/users/save' => [
    'type' => 'post',
    'class' => 'User\UserController',
    'method' => 'save'
  ],
  '/users/list' => [
    'type' => 'get',
    'class' => 'User\UserController',
    'method' => 'show'
  ],
  '/products' => [
    'groups' => [
      'class' => 'ProductsController',
      'execute' => [
        '/save' => [
          'type' => 'post',
          'method' => 'save'
        ],
        '/update' => [
          'type' => 'put',
          'method' => 'update'
        ]
      ]
    ]
  ]
];

OU

/* eu posso usar funcoes clousure para definir urls get e post, é só comparar a url da funcao com a url quem vem da requisição */
