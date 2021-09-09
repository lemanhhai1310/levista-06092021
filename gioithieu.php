<?php $data["title"] = "GIỚI THIỆU"; ?>
<?php $fullPage = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div>
    <div id="fullpage">
        <div class="section">Some section</div>
        <div class="section">Some section</div>
        <div class="section">Some section</div>
        <div class="section">
            <?php require "template-parts/layouts/footer1.php"; ?>
        </div>
    </div>
</div>

<script>
    new fullpage('#fullpage', {
        //options here
        autoScrolling:true,
        scrollHorizontally: true
    });

    //methods

</script>
<?php require "template-parts/layouts/footer.php"; ?>