<?php 
// @env google
$I = new AcceptanceTester($scenario);
$I->wantTo('query google and see result');

$I->amOnPage('search?q=moon');
$I->see('google');
$I->seeLink('Moon Phases 2017 – Lunar Calendar - Time and Date');
$I->seeLink('Moon - Wikipedia');
$I->click('Moon - Wikipedia');
$I->seeLink('natural satellite');
$I->click('natural satellite');
$I->see('The first known natural satellite was the Moon');
$I->canSeeInCurrentUrl('/wiki/Natural_satellite');
