<?php
/**
 * Class TerminalMiddleware
 * @package flamist\package\console
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\console;


use flamist\package\middlewares\Middleware;

class TerminalMiddleware extends Middleware
{

    public function execute()
    {
        if($_ENV['CONSOLE'] !== "on")
        {
            $this->authenticate();
        }
    }
}