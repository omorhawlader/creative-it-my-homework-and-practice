<?php

include './extras/header.php';

include '../../public/fonts/fonts.php';

?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>testimonial Add</h4>
            </div>
            <div class="card-body">
                <form action="tupload.php" method="POST" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label my-2">Upload Customar Img</label>
                    <input name="img" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label my-2">Customar Description</label>
                    <textarea name="description" type="email" class="form-control" rows="5"> </textarea>
                    <label for="exampleInputEmail1" class="form-label my-2">customar name</label>
                    <input name="name_c" type="text" class="form-control" id="hudai" aria-describedby="emailHelp">
                    <!-- <div class="card my-2">
                        <div class="card-body fa-2x" style="overflow-y: scroll; overflow-x:hidden; height:300px;">
                            <?php foreach ($fonts as $font): ?>
                                <span class="m-2">
                                    <i onclick="myFun(event)" class="<?= $font ?>"></i>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div> -->

                    <button type="submit" name="insert" class="btn btn-dark mt-3"><i class="material-icons">add</i>create</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php

include './extras/footer.php';

?>