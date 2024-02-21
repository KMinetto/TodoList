<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RemoveTodoContext implements Context
{
    /**
     * @Given /^I need to remove an existing todo list$/
     */
    public function iNeedToRemoveAnExistingTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I remove the todo list$/
     */
    public function iRemoveTheTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can't see the deleted todo list anymore$/
     */
    public function iCantSeeTheDeletedTodoListAnymore()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
