<?php

include 'extras/header.php';

include '../../public/fonts/fonts.php';

?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Brand Add</h4>
            </div>
            <div class="card-body">
                <form action="brandStore.php" method="POST" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label my-2">Brand Image</label>
                    <input onchange="document.querySelector('#port_show_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" aria-describedby="emailHelp" name="image">

                    <button type="submit" name="insert" class="btn btn-primary mt-3"><i class="material-icons">add</i>create</button>
                </form>
            </div>
        </div>
    </div>
</div>




<?php

include 'extras/footer.php';

?>