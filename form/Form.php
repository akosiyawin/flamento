<?php
/**
 * Class Form
 * @package flamist\package\form
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\form;


use flamist\package\Bull;
use flamist\package\database\Model;
use flamist\package\exception\UserException;
use flamist\package\Notice;

class Form
{

    public static function begin(string $action = '', string $method = '')
    {
        echo sprintf('<form action="%s" method="%s">',$action,$method);
        return new Form();
    }

    public static function end()
    {
        echo "</form>";
    }

    public function field(Model $model,string $attr,string $type = 'text')
    {
        self::findError($type);

        if(!property_exists($model,$attr))
        {
            Notice::message("Property does not exist '$attr' inside $model but is used in one of your $type input");
        }
        return new InputField($model,$attr,$type);
    }

    public function beginString(string $action = '', string $method = '')
    {
        return sprintf('<form action="%s" method="%s">',$action,$method);
    }

    public function submit()
    {
        return "<input type='submit' class='btn btn-primary'>";
    }

    private function findError(string $type)
    {
        if( $type !== Bull::TYPE_TEXT   and
            $type !== Bull::TYPE_EMAIL  and
            $type !== Bull::TYPE_NUMBER and
            $type !== Bull::TYPE_PASSWORD )
        {
            Notice::message("Undefined type '$type'");
        }
    }
}