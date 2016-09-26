# RESTful-API-using-PHP-Slim3
using Illuminate database engine - https://github.com/illuminate/database <br>


# Installation

<code>composer install</code> <br>

Sample url: <code>http://localhost:8080/slim3-api/api/todos</code>

<table>
  <tr>
    <thead>
      <th>Method</th>
      <th>URL</th>
      <th>Action</th>
    </thead>
  </tr>
  <tbody>
    <tr>
      <td>GET</td>
      <td><code>api/todos</code></td>
      <td>show all todos</td>
    </tr>
    <tr>
      <td>GET</td>
      <td><code>api/find/3</code></td>
      <td>find todo with id of <code>3</code></td>
    </tr>
    <tr>
      <td>POST</td>
      <td><code>api/todo</code></td>
      <td>add new todo (parameter name: <code>todolist</code>)</td>
    </tr>
    <tr>
      <td>PUT</td>
      <td><code>api/todo/3</code></td>
      <td>update todo with id of <code>3</code> (parameter name: <code>updatetodolist</code>)</td>
    </tr>
    <tr>
      <td>DELETE</td>
      <td><code>api/todo/3</code></td>
      <td>delete todo with id of <code>3</code></td>
    </tr>
  </tbody>
</table>
