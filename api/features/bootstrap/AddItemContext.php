<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class AddItemContext implements Context
{
    /**
     * @Given /^I need to add an item to the todo list$/
     */
    public function iNeedToAddAnItemToTheTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I add an item$/
     */
    public function iAddAnItem()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can see my item in the todo list$/
     */
    public function iCanSeeMyItemInTheTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
