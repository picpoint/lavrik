<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User page</title>
</head>
<body>
<?php
  
?>

<h3>User page</h3>

<?php
  echo($_SESSION['user']);
?>



</body>
</html>