<?php

namespace App\Controllers;

use App\Models\Todo;

class HomeController extends Controller
{
    public function index($request,$response)
    {
        return '<h1>Todo api</h1>';
    }

    // Display all todo
    public function alltodos ($request, $response)
    {
        $todo = Todo::all();
        return $this->response->withJson($todo);
    }

    // Find todo base on id
    public function findtodo ($request, $response, $args)
    {
        $searchResult = Todo::find($args['id']);
        return $this->response->withJson($searchResult);
    }

    // Add new todo
    public function addtodo ($request, $response)
    {
        $input = $request->getParsedBody();
        Todo::create([
            'todolist' => $input['todolist'],
        ]);
        return $this->response->withJson($input);
    }

    // Delete todo based on id given
    public function deletetodo ($request, $response, $args)

    {
        Todo::where('id', $args['id'])->delete();
        return $this->response->withJson(Todo::all());
    }

    // Update todo
    public function updatetodo ($request, $response, $args) {
        $input = $request->getParsedBody();
        $todo = Todo::find($args['id']);   
        $todo->todolist = $input['updatetodolist'];
        $todo->save();
        return $this->response->withJson(Todo::find($args['id']));
    }

}