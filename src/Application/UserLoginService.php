<?php

namespace UserLoginService\Application;

class UserLoginService
{
    private array $loggedUsers = [];

    public function manualLogin(string $name): string
    {
        if(in_array($name, $this->loggedUsers)){
            return "user already logged in";
        }
        $this->loggedUsers [] = $name;
        return "user logged";
    }

}