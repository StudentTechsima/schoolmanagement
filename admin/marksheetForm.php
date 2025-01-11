<?php
include('layout/header.php');
?>


<main class="admin-main-section">

    <?php
    include('layout/aside.php');
    ?>

    <section class="admin-container-panel" id="admin-panel">
        <div class="admin-containerPanel-header">
            <h3 class="admin-containerPanel-text">Control Panel</h3>
            <h2 class="admin-containerPanel-controlText"><a href="" class="controlText-link"><i class="fa-solid fa-gauge"></i>
                    Home ›</a><span class="admin-containerPanel-spanText">Dashboard</span></h2>
        </div>

        <div class="admin-containerPanel-content">
            <div class="admin-marksheet-container">
                <h2 class="admin-marksheet-text"><i class="fa fa-file"></i> MANAGE MARKSHEET</h2>
                <form action="" class="admin-marksheet-form">

                    <div class="admin-marksheet-formGroup">
                        <label for="Branch" class="admin-marksheet-formLabel">STUDENT REG. NO. </label>
                        <input type="text" class="admin-marksheet-formInput">
                    </div>

                    <div class="admin-marksheet-formButton">
                        <input type="submit" value="Search" class="admin-marksheet-formButtoninput">
                    </div>

                </form>



            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>