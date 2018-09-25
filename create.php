<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <form action="/store.php" method='POST' enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Picture</label>
              <input type="file" name='file' class="form-control">
              <label for="">Picture</label>
              <input type="file" name='file2' class="form-control">
              <label for="">Picture</label>
              <input type="file" name='file3' class="form-control">
            </div>
            <div class="form-group">
              <button class="btn btn-success">Add Post</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
