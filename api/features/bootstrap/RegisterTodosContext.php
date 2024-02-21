<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RegisterTodosContext implements Context
{
    /**
     * @Given /^I need to register an existing todo list$/
     */
    public function iNeedToRegisterAnExistingTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I register the todo list$/
     */
    public function iRegisterTheTodoList()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can see the todo list at any moment$/
     */
    public function iCanSeeTheTodoListAtAnyMoment()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
