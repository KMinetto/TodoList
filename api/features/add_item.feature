Feature: Add Item
    Scenario: As an user, I can add some items to the todo list
        Given I need to add an item to the todo list
        When I add an item
        Then I can see my item in the todo list