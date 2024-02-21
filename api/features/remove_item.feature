Feature: Remove Item
    Scenario: As an user, I can remove some items to the todo list
        Given I need to remove an existing item to the todo list
        When I remove an existing item
        Then I can't see my item in the todo list anymore