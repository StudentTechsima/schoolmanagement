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
            <div class="admin-incomeHead-container">
                <h2 class="admin-incomeHead-text"><i class="fa fa-file"></i> MANAGE INCOME HEAD</h2>


                <div class="admin-incomeHead-button">
                    <a href="incomeHeadform.php" class="admin-incomeHead-bLink">Add New Head</a>

                </div>

                <table class="admin-incomeHead-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-incomeHead-tableHead">S. No.</th>
                            <th class="admin-incomeHead-tableHead">HEAD NAME</th>
                            <th class="admin-incomeHead-tableHead">ACTION</th>

                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-incomeHead-tableData">
                                <div class="admin-incomeHead-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-incomeHead-tableData">
                                Rajan
                            </td>
                            <td class="admin-incomeHead-tableData">
                                <a href="" class="admin-incomeHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-incomeHead-tableData">
                                <div class="admin-incomeHead-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-incomeHead-tableData">
                                Rajneesh
                            </td>
                            <td class="admin-incomeHead-tableData">
                                <a href="" class="admin-incomeHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-incomeHead-tableData">
                                <div class="admin-incomeHead-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-incomeHead-tableData">
                                Rajeev
                            </td>
                            <td class="admin-incomeHead-tableData">
                                <a href="" class="admin-incomeHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-incomeHead-tableData">
                                <div class="admin-incomeHead-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-incomeHead-tableData">
                                Vansh
                            </td>
                            <td class="admin-incomeHead-tableData">
                                <a href="" class="admin-incomeHead-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <span>
                                        <img src="/admin/imajes/but_ban_small.png" class="admin-incomeHead-tg-img">
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