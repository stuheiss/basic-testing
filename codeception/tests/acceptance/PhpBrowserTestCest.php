<?php


class PhpBrowserTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    /**
     * @env local
     */
    public function tryIndex(AcceptanceTester $I)
    {
        $I->wantTo('load the index');
        $I->amOnPage('/');
        $I->see('It work\'s');
    }
}
