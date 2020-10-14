<?php
/**
 * Class NotFoundException
 * @package flamist\package\exception
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\exception;


class NotFoundException extends \Exception
{
    protected $message = "Not Found";
    protected $code = 404;
}