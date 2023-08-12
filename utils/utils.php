<?php
function init_php_session() : bool
{
    if(!session_id())
    {
        session_start();
        session_regenerate_id();
        return True;
    }
    return False;
}
function clean_php_session() : void
{
    session_unset();
    session_destroy();
}

function isLogged() : bool
{
    return True;
}

function isAdmin() : bool
{
    return True;
}