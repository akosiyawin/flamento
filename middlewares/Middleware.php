<?php
/**
 * Class Middleware
 * @package flamist\package
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\middlewares;


use flamist\package\Application;
use flamist\package\exception\ForbiddenException;

abstract class Middleware
{
    protected array $registeredActions = [];
    abstract public function execute();

    /**
     * Middle constructor.
     * @param array $actions
     * if actions is empty, it will restrict the whole class
     */
    public function __construct(array $actions = [])
    {
        $this->registeredActions = $actions;
    }

    protected function authenticate()
    {
        /*
            *We are going to check if 'action' is in ['action1','action2]]*/
        if(empty($this->registeredActions) || in_array(Application::$app->controller->action,$this->registeredActions))
        {
            throw new ForbiddenException();
        }
    }
}