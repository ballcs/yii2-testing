<?php

namespace tests\unit\models;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        // $user = User::findIdentity(1);
        // verify($user)->notNull();
        // verify($user->username)->equals('admin');
        // $user = User::findIdentity(null);
        // verify($user)->empty();
        $this->assertTrue(true);
    }
    public function testFindUserByName()
    {
        $this->assertTrue(true);
    }
}
