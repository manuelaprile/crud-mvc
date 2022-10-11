<!doctype html>
<html lang="en">

<head>
  <?php include 'includes/head.php' ?>
</head>

<body>
  <div class="container">
    <h1 class="text-center my-5">CRUD</h1>
    <a class="btn btn_add text-light" href="index.php">Back to list</a>
    <div class="users_container">
      <div class="top_bar">
        <h2 class="text-center">Add User</h2>
      </div>
      <div class="edit_users">
        <form method="POST" action="index.php?controller=users&action=insertuser">
          <label>Name</label>
          <input type="text" class="form-control mb-3" name="name">
          <label>ID</label>
          <input type="text" class="form-control mb-3" name="dni">
          <div>
            <button class="btn btn_add w-100" name="insertar">Insert</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include 'includes/footer.php' ?>

</body>

</html>