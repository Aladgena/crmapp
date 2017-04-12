<?php
namespace AcceptanceTester;

class CRMOperatorSteps extends \AcceptanceTester
{
    function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }
	
	public function imagineCustomer()
    {
//        $faker = \Faker\Factory::create();
        return [
            'CustomerRecord[name]' => 'faker',
            'CustomerRecord[birth_date]' => date('Y-m-d'),
            'CustomerRecord[notes]' => 'hjlkjhlkj kljhlkjh  lkjhlkjh  lkjhlkj ',
            'PhoneRecord[number]' => 1234567890
        ];
    }
    function fillCustomerDataForm($fieldsData)
    {
        $I = $this;
        foreach ($fieldsData as $key => $value)
            $I->fillField($key, $value);
    }
    function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
        $I->wait(1);
    }
    public function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }
    function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }
	
}