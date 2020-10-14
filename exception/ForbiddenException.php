<?php
/**
 * Class ForbiddenException
 * @package flamist\package\exception
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\exception;


class ForbiddenException extends \Exception
{
    protected $message = "Access to this site is strictly Forbidden";
    protected $code = 403;
}