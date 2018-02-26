<?php

namespace frontend\components;

class StringHelper
{
    public function getShort ($string)
    {
        return substr($string, 0, 10);
    }
}