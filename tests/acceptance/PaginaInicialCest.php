<?php namespace App\Tests;

class PaginaInicialCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantToTest('Acesso à página de documentação do codeception');

        $I->amOnUrl('https://codeception.com/');
    }
}
