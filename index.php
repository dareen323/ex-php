<!DOCTYPE html>

<head>
    <title> simple calculator
    </title>
</head>
<!-- calculator -->
<?php
    $CalculatorResult = "";
if(isset($_POST['FirstNumber']) || isset($_POST['SecondNumber']) || isset($_POST['operator'])){
    $FirstNumber = $_POST['FirstNumber'];
    $SecondNumber = $_POST['SecondNumber'];
    $operator = $_POST['operator'];

if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {

    switch ($operator) {
        case "Sum":
            $CalculatorResult = $FirstNumber + $SecondNumber;
            break;
        case "Subtraction":
            $CalculatorResult = $FirstNumber - $SecondNumber;
            break;
        case "Multiplication":
            $CalculatorResult = $FirstNumber * $SecondNumber;
            break;
        case "Division":
            $CalculatorResult = $FirstNumber / $SecondNumber;
    }
}
}
?>

<body>
    <div id="page-wrap">
        <h1>PHP - Simple Calculator Program</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber  ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
            </p>
            <input type="submit" name="operator" value="Sum" />
            <input type="submit" name="operator" value="Subtraction" />
            <input type="submit" name="operator" value="Multiplication" />
            <input type="submit" name="operator" value="Division" />
        </form>
    </div>
</body>
<br>
<!-- form -->
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
    $nameErr = "password is required";
  } else {
    $name = test_input($_POST["password"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
Password: <input type="text" name="password" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $email;
echo "<br>";
echo $name;
echo "<br>";

?>

</body>
</html>