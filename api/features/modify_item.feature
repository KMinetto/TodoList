Feature: Modify Item
    Scenario: As an user, I can modify some items to the todo list
        Given I need to modify an item of the todo list
        When I modify an item
        Then I can see my item in the todo list with modified fields