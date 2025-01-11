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
            <div class="admin-manageBanner-container">
                <h2 class="admin-manageBanner-text"><i class="fa fa-file"></i> MANAGE HEAD</h2>


                <div class="admin-manageBanner-button">
                    <a href="manageHeadform.html" class="admin-manageBanner-bLink">Add New Image</a>

                </div>




                <table class="admin-manageBanner-tableOuter">

                    <tr>
                        <td class="admin-manageBanner-tableData">
                            <img src="/admin/imajes/adminLogo.png" alt="" class="admin-manageBanner-img">
                    <tr>
                        <td class="admin-manageBanner-tableData">
                            <a href="" class="admin-manageBanner-actionLink">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    </td>

                    </tr>
                    <tr>
                        <td class="admin-manageBanner-tableData">
                            <img src="/admin/imajes/adminLogo.png" alt="" class="admin-manageBanner-img">
                    <tr>
                        <td class="admin-manageBanner-tableData">
                            <a href="" class="admin-manageBanner-actionLink">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    </td>

                    </tr>


                </table>

            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>