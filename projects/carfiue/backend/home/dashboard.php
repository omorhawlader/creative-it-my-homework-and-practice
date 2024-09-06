<!-- header  -->
<?php include "./extras/header.php" ?>
<?php include "../../config/db.php" ?>
<!-- header end  -->

<?php

$query = "SELECT * FROM users";
$result = mysqli_query($db_connection, $query) or die("Unexpected Error Happends" . mysqli_error($db_connection));

?>

<div class="row">
  <div class="col">
    <div class="page-description">
      <h1>Dashboard</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-header">User List</div>
      <div class="card-body">
        <!-- ---- user list ---  -->
        <div class="example-content">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $counter = 1;
              foreach ($result as $user) {

                if ($_SESSION["username"] === $user["username"]) {
                  continue;
                } else {
              ?>
                  <tr>
                    <th scope="row"><?php echo $counter++ ?></th>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>@mdo</td>
                  </tr>

              <?php }
              }  ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- footer  -->
<?php include "./extras/footer.php" ?>
<!-- footer end  -->