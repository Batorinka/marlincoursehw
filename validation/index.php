<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Form</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form class="" action="validate.php" method="post">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name='name' class="form-control">

            <?php if (!empty($_SESSION['errorsMessage']['name'])): ?>
              <div class="alert alert-danger" role="alert">
                <?= $_SESSION['errorsMessage']['name'] ?>
              </div>
            <?php endif; ?>

          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" name='email' class="form-control">

            <?php if (!empty($_SESSION['errorsMessage']['email'])): ?>
              <div class="alert alert-danger" role="alert">
                <?= $_SESSION['errorsMessage']['email'] ?>
              </div>
            <?php endif; ?>

          </div>

          <div class="form-group">
            <button class="btn btn-success">LogIn</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
