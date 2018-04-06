<?php

namespace TodomvcElectro\Website\ViewModels;

use Electro\Interfaces\Navigation\NavigationInterface;
use Electro\Interfaces\SessionInterface;
use Electro\Interop\ViewModel;
use PhpKit\ExtPDO\Interfaces\ConnectionsInterface;

class Index extends ViewModel
{
    private $db;
    private $session;
    private $navigation;

    public function __construct(ConnectionsInterface $connections, SessionInterface $session, NavigationInterface $navigation)
    {
        parent::__construct();
        $this->db = $connections->get()->getPdo();
        $this->session = $session;
        $this->navigation = $navigation;
    }

    function init()
    {
        parent::init();

        $filter = $this->session['filter'];

        $allTodos = $this->db->select('select * from todos')->fetchAll();
        $activeTodos = $this->db->select('select * from todos WHERE active = 1')->fetchAll();
        $completedTodos = $this->db->select('select * from todos WHERE active = 0')->fetchAll();

        switch ($filter) {
            case 'all':
                $this['todos'] = $allTodos;
                $this['countTodos'] = count($allTodos);
                break;
            case 'active':
                $this['todos'] = $activeTodos;
                $this['countTodos'] = count($activeTodos);
                break;
            case 'completed':
                $this['todos'] = $completedTodos;
                $this['countTodos'] = count($completedTodos);
                break;
            default:
                $this['todos'] = $allTodos;
                $this['countTodos'] = count($allTodos);

        }
        $this['countAllTodos'] = count($allTodos);
        $this['countTodosCompleted'] = count($completedTodos);

        $this->checkEditionMode();
    }

    public function checkEditionMode()
    {
        if (isset($this['props']['id'])) {
            $this['string'] = "value='editingMode'";
        }

    }
}

?>
