<!-- header  -->
<?php include "./extras/header.php" ?>
<?php include "../../config/db.php" ?>
<?php

$service_query = "SELECT * FROM services";
$services = mysqli_query($db_connection, $service_query);

?>

<!-- header end  -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h4>Services List</h4>
                <a href="create.php" class="btn btn-dark"><i class="material-icons">add</i>create</a>
            </div>
            <div class="card-body">
                <div class="example-content">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            foreach ($services as $service): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $num++ ?>
                                    </th>
                                    <td>
                                        <i class="fa-2x <?= $service['icon'] ?>"></i>
                                    </td>
                                    <td>
                                        <?= $service['title'] ?>
                                    </td>
                                    <td>
                                        <?= $service['description'] ?>
                                    </td>
                                    <td>
                                        <a href="store.php?statusid=<?= $service['id'] ?>" class="<?= ($service['status'] == 'deactive') ? 'badge bg-danger' : 'badge bg-success' ?> text-white"><?= $service['status'] ?></a>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around align-items-center gap-4">
                                            <a href="edit.php?editid=<?= $service['id'] ?>" class="text-primary fa-2x">
                                                <i class="fa fa-chain"></i>
                                            </a>
                                            <a href="store.php?deleteid=<?= $service['id'] ?>" class="text-danger fa-2x">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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