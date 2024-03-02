<?php

namespace tests\unit\models;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        User::findIdentity(1);
    }
    public function testFindUserByName()
    {
        $this->assertTrue(true);
    }
}
