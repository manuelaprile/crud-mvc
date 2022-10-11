<!doctype html>
<html lang="en">

<head>
  <?php include 'includes/head.php' ?>
</head>

<body>
  <div class="container">
    <h1 class="text-center my-5">CRUD</h1>
    <a class="btn btn_add text-light" href="index.php?controller=users&action=insert">Add new user</a>
    <div class="users_container">
      <div class="top_bar">
        <h2 class="text-center">List of Users</h2>
      </div>
      <div class="table_list">
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">ID</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $u) { ?>
              <tr>
                <td scope="row"><?php echo $u->name ?></td>
                <td><?php echo $u->dni ?></td>
                <td>
                  <a class="btn btn-danger text-light" href="index.php?controller=users&action=delete&id=<?php echo $u->id ?>">Delete</a>
                  <a class="btn btn-warning text-light" href="index.php?controller=users&action=update&id=<?php echo $u->id ?>">Update</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <?php include 'includes/footer.php' ?>

</body>

</html>