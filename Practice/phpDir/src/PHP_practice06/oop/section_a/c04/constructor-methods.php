<?php
/*
Step 1: Use and declare php strict types
Step 2:  Create a class for account (with its properties e.g. number, type and balance)
Step 3: Create a PHP constructor with argument types e.g. number, type and balance
If a balance is not given when creating the object, a default value of 0.00 should be used.
Step 4: Create two methods for deposit and withdraw which will update the value
stored in the balance property. They should be given arguments and return type declaration of float.
Step 5: Create two objects to represent a checking account and savings account. 
Step 6:  An HTML skeleton is drawn. The first row should show headings using 
the type property of two objects. To access property use the:
 - Name of the variable that holds the object
 - Object operator
 - Property name
Step 7: In the next table row show the balance property of the objects.
Step 8: In the third row of the table, the balance of each account is updated by calling deposit() or
withdraw() methods. These methods return the new value of balance property and this should be shown in page.
To call a method, you can use
- Name of the variable that holds the object
- Object operator
- Method name with its argument in parantheses
Step 9: In the final row of the table, previous step is repeated using different values. 
*/

declare(strict_types=1); ?>

<?php
$accounts = [];

class Account {
  public $number, $type, $balance;

  function __construct(int $number, string $type, float $balance) {
    $this->number = $number;
    $this->type = $type;
    $this->balance = $balance;
  }

  function displayRow() {
    echo <<<HTML
    <tr>
      <td>$this->number</td>
      <td>$this->type</td>
      <td>$this->balance</td>
    </tr>
    HTML;
  }
}

$accounts[] = new Account(32002928172, "savings", 5123.06);
$accounts[] = new Account(32001924827, "investing", 9992.01);
$accounts[] = new Account(32003105818, "savings", 2232.12);

include 'includes/header.php'; ?>

<h2>Account Balances</h2>
<table>
  <tr>
    <th>Number</th>
    <th>Type</th>
    <th>Balance</th>
  </tr>

  <?php foreach ($accounts as $account) {
    $account->displayRow();
  } ?>

</table>

<?php include 'includes/footer.php'; ?>