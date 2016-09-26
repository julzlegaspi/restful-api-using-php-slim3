<?php

$app->get('/','HomeController:index')->setName('homepage');

$app->get('/api/todos', 'HomeController:alltodos');

$app->get('/api/find/{id}', 'HomeController:findtodo');

$app->post('/api/todo', 'HomeController:addtodo');

$app->delete('/api/todo/{id}', 'HomeController:deletetodo');

$app->put('/api/todo/{id}', 'HomeController:updatetodo');