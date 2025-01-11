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
            <div class="admin-manageHead-container">
                <h2 class="admin-manageHead-text"><i class="fa fa-file"></i> MANAGE HEAD</h2>


                <div class="admin-manageHead-button">
                    <a href="manageHeadform.php" class="admin-manageHead-bLink">Add New Head</a>

                </div>

                <table class="admin-manageHead-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-manageHead-tableHead">S. No.</th>
                            <th class="admin-manageHead-tableHead" colspan="2">HEAD NAME</th>
                            <th class="admin-manageHead-tableHead">ACTION</th>

                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-manageHead-tableData">
                                <div class="admin-manageHead-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-manageHead-tableData" colspan="2">
                                testing 1
                            </td>
                            <td class="admin-manageHead-tableData">
                                <a href="" class="admin-manageHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-manageHead-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-manageHead-tableData">
                                <div class="admin-manageHead-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-manageHead-tableData" colspan="2">
                                testing 2
                            </td>
                            <td class="admin-manageHead-tableData">
                                <a href="" class="admin-manageHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-manageHead-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-manageHead-tableData">
                                <div class="admin-manageHead-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-manageHead-tableData" colspan="2">
                                Salary
                            </td>
                            <td class="admin-manageHead-tableData">
                                <a href="" class="admin-manageHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-manageHead-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-manageHead-tableData">
                                <div class="admin-manageHead-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-manageHead-tableData" colspan="2">
                                Rent
                            </td>
                            <td class="admin-manageHead-tableData">
                                <a href="" class="admin-manageHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <span>
                                        <img src="/admin/imajes/but_ban_small.png" class="admin-manageHead-tg-button">
                                    </span>
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