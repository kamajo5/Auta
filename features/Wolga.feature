Feature: Web pages

  Scenario: GAZ Wołga
    Given I am on homepage
    When I follow "GAZ Wołga"
    Then I should see "Wołga"