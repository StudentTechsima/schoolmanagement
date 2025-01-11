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
            <div class="admin-program-container">
                <h2 class="admin-program-text"><i class="fa fa-file"></i> MANAGE PROGRAM</h2>

                <div class="admin-program-button">
                    <a href="programForm.php" class="admin-program-bLink">Add New Program</a>

                </div>



                <table class="admin-program-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-program-tableHead">S.No.</th>
                            <th class="admin-program-tableHead"></th>
                            <th class="admin-program-tableHead" colspan="3">Program Name</th>
                            <th class="admin-program-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-program-tableData">
                                <div class="admin-program-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-program-tableData" colspan="3">
                                <img src="/admin/imajes/adminLogo.png" alt="" class="admin-program-img">
                            </td>
                            <td class="admin-program-tableData">
                                Basic Courses
                            </td>



                            <td class="admin-program-tableData">
                                <a href="" class="admin-program-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png">
                                </a>
                            </td>
                        </tr>




                    </tbody>

                </table>

            </div>
        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>