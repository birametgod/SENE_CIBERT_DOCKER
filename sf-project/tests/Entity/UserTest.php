<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    public function testAdd() {
        $user = new User();
        $login = $user->setLogin("birame") ;
        $getLog = $user->getLogin();
        $password = $user->setPassword("birou");
        $getPass = $user->getPassword();

        $this -> assertEquals("birame",$getLog);
        $this -> assertEquals("birou",$getPass);
    }
}
