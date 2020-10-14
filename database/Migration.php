<?php

/**
 * Interface Migration
 * @package flamist\package\database
 * @author Darwin Marcelo <akosiyawin@gmail.com>
 */

namespace flamist\package\database;

interface Migration
{
    public function up();
    public function down();
}