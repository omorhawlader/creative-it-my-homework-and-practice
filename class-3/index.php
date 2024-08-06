<div style="display: flex; flex-wrap: wrap;justify-content: center;">

    <?php

    for ($i = 1; $i <= 10; $i++) {

    ?>
        <div style="margin: 5px; border-right:1px dashed cornflowerblue; border-bottom:1px dashed cornflowerblue; flex:1 ;display:flex; flex-direction: column;align-items: center;">

            <p style="color:tomato;font-weight: bold;">Table for <?php echo $i ?></p>
            <?php for ($o = 1; $o <= 10; $o++) { ?>
                <h4 style="color:cornflowerblue;flex:1; word-spacing: 10px;border-bottom: 1px solid #ddd; text-align: center;padding:4px 8px"><?php echo "$i  ✕  $o  = " . ($i * $o) ?></h4>

            <?php } ?>


        </div>
    <?php } ?>



</div>