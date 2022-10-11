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
        <h2 class="text-center">Edit User</h2>
      </div>
      <div class="edit_users">
        <form method="POST" action="index.php?controller=users&action=updateuser">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <label>Name</label>
          <input type="text" name="name" class="form-control mb-3" value="<?php echo $data[0]->name ?>">
          <label>ID</label>
          <input type="text" name="dni" class="form-control mb-3" value="<?php echo $data[0]->dni ?>">
          <div>
            <button class="btn btn_add w-100">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include 'includes/footer.php' ?>

</body>

</html>