<?php

namespace TodomvcElectro\Website\Controllers;

use Electro\Interfaces\Http\RedirectionInterface;
use Electro\Interfaces\SessionInterface;
use PhpKit\ExtPDO\Interfaces\ConnectionsInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class TodoController
{

    private $db;
    private $redirection;
    private $session;

    public function __construct(ConnectionsInterface $connections, RedirectionInterface $redirection, SessionInterface $session)
    {
        $this->db = $connections->get()->getPdo();
        $this->redirection = $redirection;
        $this->session = $session;
    }

    public function postTodo($data, ServerRequestInterface $request, ResponseInterface $response)
    {
        $this->db->exec('INSERT INTO todos (name,active) VALUES(?,?);', [$data['inputTodo'], 1]);
        return $this->redirection->setRequest($request)->back();
    }

    public function deleteTodo($data, $id, ServerRequestInterface $request, ResponseInterface $response)
    {
        $this->db->exec('DELETE FROM todos WHERE id = ? ;', [$id]);
        return $this->redirection->setRequest($request)->back();
    }

    public function updateTodo($data, $id, ServerRequestInterface $request)
    {
        $this->db->exec('UPDATE todos SET name = ? WHERE id = ?;', [$data['inputUpdateTodo'], $id]);
        return $this->redirection->setRequest($request)->home();
    }

    public function clearTodoCompleted($data, ServerRequestInterface $request)
    {
        $this->db->exec('DELETE FROM todos WHERE active = 0;');
        return $this->redirection->setRequest($request)->back();
    }

    public function todoCompleted($data, $id, ServerRequestInterface $request)
    {
        if (isset($data['checkBCompleted'])) $todoComplete = 0;
        else $todoComplete = 1;

        $this->db->exec('UPDATE todos SET active = ? WHERE id = ?;', [$todoComplete, $id]);
        return $this->redirection->setRequest($request)->home();
    }

    public function markAllTodosCompleted($data, ServerRequestInterface $request)
    {
        $todos = $this->db->select('SELECT * FROM todos')->fetchAll();

        $completedCounter = 0;

        foreach ($todos as $todo) {
            if ($todo['active'] == 1) {
                $this->db->exec('UPDATE todos SET active = ?', [0]);
            } else {
                $completedCounter++;
            }
        }

        if ($completedCounter == count($todos)) {
            $this->db->exec('UPDATE todos SET active = ?', [1]);
        }
        return $this->redirection->setRequest($request)->home();
    }

    public function filterTodos($data,$filter, ServerRequestInterface $request){
        $this->session['filter'] = $filter;
        return $this->redirection->setRequest($request)->home();
    }
}

?>