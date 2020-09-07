<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page All Logs</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  require_once "../model/getParametres.php";
  require_once "../controller/createLog.php";
  require_once "../controller/readFolderLogs.php";
?>

<?php
  $pt = new CreateLog();
  $pt -> createLogs();
?>

  <section class="logs">
    <div class="logs__hdr">
      <h3>Логи системы</h3>
    </div>
    <div class="logs__logpage">
      <?php
        $readContent = new ReadFolder();
        $readContent -> readFolderContent();
      ?>
    </div>
  </section>

<script src="js/getAlllogs.js"></script>
</body>
</html>