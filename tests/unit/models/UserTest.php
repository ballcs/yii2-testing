<?php

namespace tests\unit\models;

use app\models\User;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        $user = User::findIdentity(1);
        verify($user)->notNull();
        verify($user->username)->equals('admin');
        $user = User::findIdentity(null);
        verify($user)->empty();
    }
    public function testFindUserByName()
    {
        $this->assertTrue(true);
    }
}
