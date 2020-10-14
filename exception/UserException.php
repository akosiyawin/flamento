<?php
/**
 * Class UserException
 * @package flamist\package\exception
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\exception;


class UserException extends \Exception
{
    public const EXCEPTION_TYPE_DIE = 'die';
    protected $message = "User Exception";
    protected $code = 400;
    public string $errorType = self::EXCEPTION_TYPE_DIE;
}