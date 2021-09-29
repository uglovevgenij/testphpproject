<?php

class SigninCest
{
    public function signInSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField('//*[@id="userName"]','davert');
        $I->fillField('Password','qwerty');
        $I->click('login');
        $I->see('Hello, davert');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
?>
