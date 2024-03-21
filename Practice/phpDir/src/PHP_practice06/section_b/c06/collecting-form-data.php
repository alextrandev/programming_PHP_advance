<?php include 'includes/header.php'; ?>

<?php
//Step 1: Fix the form
//Hints: How the data is collected using form?
//What attributes of the form that are necessary?
//After fixing this form, simply run it few times to check how this works
if ($_SERVER["REQUEST_METHOD"] == "POST"):

  $name = $_POST["name"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $password = $_POST["pwd"];
  $bio = $_POST["bio"];
  $preference = $_POST["preference"];
  $rating = $_POST["rating"];

  echo <<<CONFIRM
  <pre>
  Name: $name
  Age: $age
  Email: $email
  Preference: $preference
  Rating: $rating
  </pre>
  CONFIRM;

else: ?>

  <form target="collecting-form-data.php" method="post">
    <p>Name: <input type="text" name="name" required></p>
    <p>Age: <input type="text" name="age" required></p>
    <p>Email: <input type="text" name="email" required></p>
    <p>Password: <input type="password" name="pwd" required></p>
    <p>Bio: <textarea name="bio"></textarea></p>
    <p>Contact preference:
    <select name="preference">
      <option value="email">Email</option>
      <option value="phone">Phone</option>
    </select></p>
    <p>Rating:
      1 <input type="radio" name="rating" value="1">
      2 <input type="radio" name="rating" value="2" select=selected>
      3 <input type="radio" name="rating" value="3"></p>
      <p><input type="checkbox" name="terms" value="true" required>
      I agree to the terms and conditions.</p>
      <p><input type="submit" value="Save"></p>
  </form>

<?php
endif; ?>
    
<?php include 'includes/footer.php'; ?>