<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="mb-5">Page 2</h1>
      <form action="success.php" method="post">
        <div class="form-group">
          <label for="location">Location:</label>
          <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
          <label for="university">University:</label>
          <input type="text" class="form-control" id="university" name="university" required>
        </div>
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

  </body>
</html>
