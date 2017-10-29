<?php

function config(string $key)
{
    return \App\Helpers\Config::getInstance()->get($key);
}