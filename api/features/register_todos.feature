Feature: Register Todos
    Scenario: As an user, I can register an existing todo list that I can see the todo list at any moment
        Given I need to register an existing todo list
        When I register the todo list
        Then I can see the todo list at any moment