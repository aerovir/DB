<?php
namespace Step\Acceptance;

class TestUserJoin extends \AcceptanceTester
{

    public function imagineUser()
    {
        $I = $this;
        $this->name     = 'John';
        $this->email    = 'mail@mail.rf';
        $this->passhash = '123456';
        $this->status   = 2;

        print_r($user);
        return $user;
    }

    public function joinUser($user)
    {
        $I = $this;
        $I->amOnPage('/user/join');
        $I->see('Join us');
        $I->fillField('UserJoinForm[name]', $user['name']);
        $I->fillField('UserJoinForm[name]', $user['email']);
        $I->fillField('UserJoinForm[name]', $user['password']);
        $I->fillField('UserJoinForm[name]', $user['password2']);
        $I->click('Create');
    }

    public function loginUser($user)
    {
        $I = $this;
        $I->amOnPage('/user/login');
        $I->see('Log in');
        $I->fillField('UserLoginForm[name]', $user['email']);
        $I->fillField('UserLoginForm[name]', $user['password']);
        $I->click('Enter');
    }

    public function logoutUser()
    {
        $I = $this;
        $I->click('Logout');
    }

    public function isUserLogged($user)
    {
        $I = $this;
        $I->see($user['name']);
    }

    public function noUserLogged($user)
    {
        $I = $this;
        $I->dontSee($user['name']);
    }

}