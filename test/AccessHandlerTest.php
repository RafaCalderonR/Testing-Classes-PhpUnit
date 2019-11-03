<?php

use Component\AccessHandler as Access;
use Component\Authenticator;
use Component\AuthenticatorContract;
use Component\User;
class AccessHandlerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \Component\AccessHandler
     */
    protected $access;

    protected function setUp()
    {
        $this->access = new Access($this->getAuthenticatorMock());
    }

    protected function tearDown()
    {
        Mockery::close();
    }
    public function test_grant_access()
    {
        $this->assertTrue(
            $this->access->check('admin')
        );
    }
    public function test_deny_access()
    {
        $this->assertFalse(
            $this->access->check('editor')
        );
    }

    public function test_grant_access_with_more_than_one_role()
    {
        $this->assertTrue(
            $this->access->check(['admin', 'superadmin'])
        );
    }

    public function test_deny_access_with_more_than_one_role()
    {
        $this->assertFalse(
            $this->access->check(['editor', 'user'])
        );
    }

    public function test_allow_pipe_character()
    {
        $this->assertTrue(
            $this->access->check('admin|superadmin'),
            'It should accept a string divided by the pipe character " | "'
        );
    }
    protected function getAuthenticatorMock()
    {
        $user = Mockery::mock(User::class);
        $user->role = 'admin';
        $auth = Mockery::mock(Authenticator::class);
        $auth->shouldReceive('check')
            ->once()
            ->andReturn(true);
        $auth->shouldReceive('user')
            ->once()
            ->andReturn($user);
        return $auth;
    }
}