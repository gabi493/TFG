Feature: Login checking
  In order to login to the application
  As a user
  I need to be able to put my username and password

  Rules:
  - Username in UTF8-bin
  - Username not existing in the DDBB returns error "Username not registered in the system"
  - Password in UTF8-bin
  - Password shorter than 5 characters returns an error
  - Password not containing at least one number (0-9) returns error "Password has to contain at least one number (0-9)"
  - Password not containing at least one symbol ($, %, &,...) returns error "Password has to contain at least one symbol ($, %, &,...)"
  - Password not belonging to the introduced username returns error "Username and password do not match"

  Scenario: Login to the application with a username not existing in the DDBB
    Given I am not registered
    When I try to "login" to the system
    Then I should see the error message "Username not registered in the system"

