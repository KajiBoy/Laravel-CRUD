<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Form</title>
  <!-- Add Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form class="bg-white p-4 rounded shadow-sm" action="{{ url('modify/'. $productId)}}" method="POST" style="max-width: 400px; width: 100%;">
      <h2 class="text-center mb-4">Add Product</h2>
      @csrf
      @method('PUT')
      <input type="text" name="name" required>
      <input type="text" name="description" required>
      <input type="text" name="price" required>
      <input type="text" name="quantity" required>
      <div class="d-grid">
      <button name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS (optional, for interactive components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
