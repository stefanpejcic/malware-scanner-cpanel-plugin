<?php
class Account
{
    public static function name($cpanel)
    {
        return $cpanel->cpanelprint('$user');
    }
}
