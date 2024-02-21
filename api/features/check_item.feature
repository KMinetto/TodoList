Feature: Check Item
    Scenario: As an user, I can check some items in the todo list
        Given I need to check an existing item in the todo list
        When I check an item
        Then I can see my item in the todo list as done