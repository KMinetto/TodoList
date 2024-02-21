<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RemoveItemContext implements Context
{
    /**
     * @Given /^I need to remove an existing item to the todo list$/
     */
    public function iNeedToRemoveAnExistingItemToTheTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I remove an existing item$/
     */
    public function iRemoveAnExistingItem()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can't see my item in the todo list anymore$/
     */
    public function iCantSeeMyItemInTheTodoListAnymore()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
