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
            <div class="admin-batch-container">
                <h2 class="admin-batch-text"><i class="fa fa-file"></i> MANAGE BATCH</h2>

                <div class="admin-batch-button">
                    <a href="batchForm.php" class="admin-batch-bLink">Create New Batch</a>
                </div>



                <table class="admin-batch-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-batch-tableHead">S.No.</th>
                            <th class="admin-batch-tableHead" colspan="3">Batch Name</th>
                            <th class="admin-batch-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-batch-tableData">
                                <div class="admin-batch-containImg">
                                    1.
                                </div>
                            </td>

                            <td class="admin-batch-tableData" colspan="3">
                                Basic Courses
                            </td>



                            <td class="admin-batch-tableData">
                                <a href="" class="admin-batch-actionLink">
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