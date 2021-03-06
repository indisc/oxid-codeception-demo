<?php

namespace StartPage;


use AcceptanceTester;
use Page\Acceptance\StartPage;

class HeaderCest
{
    /**
     * @param AcceptanceTester $I
     * @param StartPage $page
     *
     * @throws \Exception
     */
    public function _before(AcceptanceTester $I, StartPage $page)
    {
        $I->amOnPage($page::$URL);
        $I->waitForElement($page::$footerElement);
    }

    /**
     * @param AcceptanceTester $I
     * @param StartPage $page
     */
    public function testHeaderWillBeDisplayed(AcceptanceTester $I, StartPage $page)
    {
        $I->seeElement($page::$headerElement);
    }
}
