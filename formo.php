<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
<form action="form-logic.php" class="was-validated w-25 myform" method="post">
  <div class="form-group">
    <label for="uname">Name:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Surname:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="surname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">District:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="district" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <!-- <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on Terms and conditions.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>