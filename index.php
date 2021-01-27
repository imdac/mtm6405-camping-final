<?php require 'camping.php'; ?>
<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Camping</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Camping</h1>
  <div id="response" class="response">
    <?php if (isset($_SESSION['camping']['response'])) : ?>
      <?php echo getResponse(); ?>
    <?php else : ?>
      <?php echo updateResponse(help()); ?>
    <?php endif; ?>
  </div>
  <form method="post">
    <input type="text" name="command" class="command" autofocus>
  </form>
  <a class="clear" href="?clear">Clear Session</a>
  <script src="script.js"></script>
</body>

</html>