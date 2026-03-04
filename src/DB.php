<?php

namespace Ddtix\Dbconn;

class DB
{
    public static function get(): string
    {
        return getenv('DB_USERNAME');
    }
}
