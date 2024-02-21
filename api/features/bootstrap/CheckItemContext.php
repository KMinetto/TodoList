<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class CheckItemContext implements Context
{
    /**
     * @Given /^I need to check an existing item in the todo list$/
     */
    public function iNeedToCheckAnExistingItemInTheTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I check an item$/
     */
    public function iCheckAnItem()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can see my item in the todo list as done$/
     */
    public function iCanSeeMyItemInTheTodoListAsDone()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
