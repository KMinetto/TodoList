Feature: Remove Todos
    Scenario: As an user, I can remove an existing todo list
        Given I need to remove an existing todo list
        When I remove the todo list
        Then I can't see the deleted todo list anymore