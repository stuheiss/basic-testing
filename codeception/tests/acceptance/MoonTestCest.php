<?php


class MoonTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    /**
     * @env google
     */
    public function navigateToMoonPhases(AcceptanceTester $I)
    {
        $I->wantTo('query google and see result');

        $I->amOnPage('search?q=moon');
        $I->see('google');
        $I->seeLink('Moon Phases 2017 – Lunar Calendar - Time and Date');
        $I->click('Moon Phases 2017 – Lunar Calendar - Time and Date');
        //$I->see('Moon Phase Tonight:');
        $I->seeInSource('Moon Phase Tonight:');
        $I->canSeeInCurrentUrl('/moon/phases');
    }
    /**
     * @env google
     */
    public function navigateToWikipediaMoon(AcceptanceTester $I)
    {
        $I->wantTo('query google and see result');

        $I->amOnPage('search?q=moon');
        $I->see('google');
        $I->seeLink('Moon - Wikipedia');
        $I->click('Moon - Wikipedia');
        $I->see('The Moon is thought to have formed about 4.51 billion years ago');
        $I->canSeeInCurrentUrl('/wiki/Moon');
    }
    /**
     * @env google
     */
    public function navigateToWikipediaNaturalSatellite(AcceptanceTester $I)
    {
        $I->wantTo('query google and see result');

        $I->amOnPage('search?q=moon');
        $I->see('google');
        $I->seeLink('Moon - Wikipedia');
        $I->click('Moon - Wikipedia');
        $I->seeLink('natural satellite');
        $I->click('natural satellite');
        $I->see('The first known natural satellite was the Moon');
        $I->canSeeInCurrentUrl('/wiki/Natural_satellite');
    }
}
