<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class ModifyItemContext implements Context
{
    /**
     * @Given /^I need to modify an item of the todo list$/
     */
    public function iNeedToModifyAnItemOfTheTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I modify an item$/
     */
    public function iModifyAnItem()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can see my item in the todo list with modified fields$/
     */
    public function iCanSeeMyItemInTheTodoListWithModifiedFields()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
