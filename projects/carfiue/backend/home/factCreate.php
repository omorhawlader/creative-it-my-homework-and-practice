<?php

include './extras/header.php';

include '../../public/fonts/fonts.php';

?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Fact Add</h4>
            </div>
            <div class="card-body">
                <form action="factStore.php" method="POST">
                    <label for="exampleInputEmail1" class="form-label my-2"> Title</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label my-2">Subtitle</label>
                    <textarea name="description" type="email" class="form-control" rows="5"> </textarea>
                    <label for="exampleInputEmail1" class="form-label my-2">Icon</label>
                    <input name="icon" type="text" readonly class="form-control" id="hudai" aria-describedby="emailHelp">
                    <div class="card my-2">
                        <div class="card-body fa-2x" style="overflow-y: scroll; overflow-x:hidden; height:300px;">
                            <?php foreach ($fonts as $font): ?>
                                <span class="m-2">
                                    <i onclick="myFun(event)" class="<?= $font ?>"></i>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <button type="submit" name="insert" class="btn btn-dark mt-3"><i class="material-icons">add</i>create</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    $input = document.querySelector('#hudai');

    function myFun(e) {
        $input.value = e.target.classList.value;
    }
</script>

<?php

include './extras/footer.php';

?>