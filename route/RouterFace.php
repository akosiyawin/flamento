<?php
/**
 * Interface RouterFace
 * @package flamist\package\faces
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\route;

/*
 * Required notice
 * */
interface RouterFace
{
    public function get(string $path, $callback);
    public function post(string $path, $callback);
}