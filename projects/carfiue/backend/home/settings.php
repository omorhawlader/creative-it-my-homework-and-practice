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
            <h1>Settings</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <h2 class="mb-2 h4">Update Your Name</h2>
        <form action="updatename.php" method="post">
            <div class="auth-credentials m-b-xxl">
                <input name="username" type="text" class="form-control m-b-md <?php echo isset($_SESSION['username_error']) ? 'is-invalid' : '' ?>" id="signInEmail" aria-describedby="signInEmail" placeholder="Update Your Name">

                <!-- //! show if email_error -->
                <div class="form-text m-b-md text-danger">
                    <?php echo isset($_SESSION['username_error']) ? $_SESSION['username_error'] : '';
                    unset($_SESSION['username_error']) ?>
                </div>
            </div>
            <div class="form-text m-b-md text-success">
                <?php echo $_SESSION['error'] ?? '';
                unset($_SESSION['error']) ?>
            </div>

            <div class="auth-submit">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <div class="col-6">
        <h2 class="mb-2 h4">Update Your Password</h2>
        <form action="updatename.php" method="post">
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Old Password</label>
                <input name="username" value="<?= $_SESSION['newusername'] ?? '' ?>" type="password" class="form-control m-b-md <?php echo isset($_SESSION['username_error']) ? 'is-invalid' : '';
                                                                                                                                unset($_SESSION['username_error']) ?>" id="signInEmail" aria-describedby="signInEmail" placeholder="Old Password">

                <!-- //! show if password_error -->
                <div class="form-text m-b-md text-danger">
                    <?php echo $_SESSION['username_error'] ?? '';
                    unset($_SESSION['username_error']) ?>
                </div>
            </div>
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">New Password</label>
                <input name="username" value="<?= $_SESSION['newusername'] ?? '' ?>" type="password" class="form-control m-b-md <?php echo isset($_SESSION['username_error']) ? 'is-invalid' : '';
                                                                                                                                unset($_SESSION['username_error']) ?>" id="signInEmail" aria-describedby="signInEmail" placeholder="New Password">

                <!-- //! show if password_error -->
                <div class="form-text m-b-md text-danger">
                    <?php echo $_SESSION['username_error'] ?? '';
                    unset($_SESSION['username_error']) ?>
                </div>
            </div>
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Conform Password</label>
                <input name="username" value="<?= $_SESSION['newusername'] ?? '' ?>" type="password" class="form-control m-b-md <?php echo isset($_SESSION['username_error']) ? 'is-invalid' : '';
                                                                                                                                unset($_SESSION['username_error']) ?>" id="signInEmail" aria-describedby="signInEmail" placeholder="Conform Password">

                <!-- //! show if password_error -->
                <div class="form-text m-b-md text-danger">
                    <?php echo $_SESSION['username_error'] ?? '';
                    unset($_SESSION['username_error']) ?>
                </div>
            </div>
            <div class="form-text m-b-md text-success">
                <?php echo $_SESSION['error'] ?? '';
                unset($_SESSION['error']) ?>
            </div>

            <div class="auth-submit">
                <button type="submit" name="submit" class="btn btn-primary">Update Password</button>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col">
        <h4>Upload Your Profile Image</h4>
        <form action="uploadFile.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="file" class="mb-2 form-control" accept="image/*">
            <div class="auth-submit">
                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
            </div>
            <!-- <input type="submit" value="upload" name="submit"> -->
        </form>
    </div>
</div>


<!-- footer  -->
<?php include "./extras/footer.php" ?>
<!-- footer end  -->