<!DOCTYPE html>
<html>
<head>
  <title>Create User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="{{asset('app.js')}}"></script>
  <style>

  </style>


</head>
<body>
  <div class="container">
    <h1>Create User</h1>
    <form action="/create-user" method="post">
      @csrf
      <div class="row g-3">
        <div class="col-12 col-md-4">
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" onchange="previewFile()">
            <img src="" height="200" alt="Image preview...">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Create User</button>
    </form>
  </div>

</body>
</html>