<?php

namespace Core;

class Request
{
    public function __construct()
    {
        $request = array();

        if (!empty($_REQUEST)) {
            foreach ($_REQUEST as $key => $value) {
                $newValue = htmlspecialchars(trim($value, " \t\n\r\0\x0B"), ENT_QUOTES, "UTF-8");
                $stripped = str_replace('/', '', preg_replace('/\s/', '', $newValue));
                $endValue = stripslashes($stripped);
                $this->$key = $endValue;
                $request[$key] = $this->$key; 
            }
            $this->request = $request;
        }
    }
    public function getQueryParams()
    {
        if (is_array($this->request))
        {
            return $this->request;
        }
    }
}