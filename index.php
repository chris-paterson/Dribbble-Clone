<!DOCTYPE html>
<html>
<head>
  <title>Dribble - Show and tell for designers</title>

  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php require_once('fragments/navbar.php') ?>
  <?php require_once('fragments/filter.php') ?>

  <div class="container">
    <?php require_once('fragments/body.php') ?>
  </div>

  <?php require_once('fragments/modal/post.php') ?>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
    $('#postModal').on('shown.bs.modal', function () {

    })
  </script>
</body>
</html>