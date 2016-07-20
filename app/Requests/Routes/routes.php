<?php

return [
  '/users/save' => [
    'type' => 'post',
    'action' => 'User\UserController',
    'method' => 'save'
  ]
];

OU

/* eu posso usar funcoes clousure para definir urls get e post, é só comparar a url da funcao com a url quem vem da requisição */
