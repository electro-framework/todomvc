<?php

namespace TodomvcElectro\Website\Config;

use Electro\Interfaces\Http\RequestHandlerInterface;
use Electro\Interfaces\Http\RouterInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TodomvcElectro\Website\Controllers\TodoController;

class Routes implements RequestHandlerInterface
{
    /** @var RouterInterface */
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next)
    {
        return $this->router
            ->set([
                '.' => page('index.html'),
                'POST insertNewTodo'      => controller([TodoController::class, 'postTodo']),
                'POST deleteTodo/@id'      => controller([TodoController::class, 'deleteTodo']),
                'POST updateTodo/@id'      => controller([TodoController::class, 'updateTodo']),
                'GET edit/@id'      => page('index.html'),
                'POST clearTodoCompleted'      => controller([TodoController::class, 'clearTodoCompleted']),
                'POST todoCompleted/@id'      => controller([TodoController::class, 'todoCompleted']),
                'POST filterTodos/@filter' => controller([TodoController::class, 'filterTodos']),
                'POST markAllTodosCompleted' => controller([TodoController::class, 'markAllTodosCompleted']),
            ])
            ->__invoke($request, $response, $next);
    }
}
