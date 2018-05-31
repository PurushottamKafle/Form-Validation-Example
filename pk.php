<!DOCTYPE HTML>  
<html>
<head>
<title>
PHP - By Purushottam Kafle </title>
</head>
<body>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
<link href='//fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Quattrocento:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<?php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = pk_input($_POST["name"]);
  $email = pk_input($_POST["email"]);
  $website = pk_input($_POST["website"]);
  $comment = pk_input($_POST["comment"]);
  $gender = pk_input($_POST["gender"]);
}

function pk_input($pkdata) {
  $pkdata = trim($pkdata);
  $pkdata = stripslashes($pkdata);
  $pkdata = htmlspecialchars($pkdata);
  return $pkdata;
}
?>

<h1>Form Validation Example</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="6" cols="25"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
