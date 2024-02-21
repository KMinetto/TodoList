Feature: Register
    Scenario: As an user, I can register that I can see all my todos
        Given I need to register
        When I fill the registration form
        Then I can log in with my new account