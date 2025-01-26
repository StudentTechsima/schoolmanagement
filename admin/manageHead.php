<?php
include('layout/aheader.php');
?>

<!-- sidebar section start -->
<?php
include('layout/aaside.php');
?>

<!-- sidebar section end -->

<!-- main section start -->
<div class="admin-dashboard">
    <!-- header section start -->
    <div class="admin-dashboard-header">
        <div class="toggle-btn"><i class="fa fa-bars"></i></div>
        <div class="admin-headerRight-header-left">
            <div class="admin-headerRight-wallet">
                <h4>Branch Wallet<span class="admin-headerRight-walletMoney">&#8377;7800</span></h4>
            </div>
            <div class="admin-headerRight-logo">
                <img src="/schoolmanagement/admin/images/adminLogo.png" alt="" id="admin-profileImage">
                <div id="admin-profileImage-popup" class="admin-headerRight-profileImage-popup">
                    <div class="admin-headerRight-popupContent">
                        <h2 class="admin-headerRight-popup-contentText">Webadmin</h2>
                        <h3 class="admin-headerRight-popup-contentText">Student Study Point & IT Education
                        </h3>

                        <div class="admin-headerRight-popupButton">
                            <button class="admin-headerRight-profileButton">
                                <a href="" class="admin-headerRight-profileButton-text">Profile</a>
                            </button>
                            <button class="admin-headerRight-profileButton">
                                <a href="" class="admin-headerRight-profileButton-text">Sign Out</a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- dashboard Data -->
    <div class="admin-dashboard-main">
        <main class="admin-main-section">
            <section class="admin-container-panel" id="admin-panel">
                <div class="admin-containerPanel-header">
                    <h3 class="admin-containerPanel-text">Control Panel</h3>
                    <h2 class="admin-containerPanel-controlText"><a href="" class="controlText-link"><i
                                class="fa-solid fa-gauge"></i>
                            Home ›</a><span class="admin-containerPanel-spanText">Dashboard</span></h2>
                </div>

                <div class="admin-containerPanel-content">

                    <!-- copy and paste section start -->
                    <div class="admin-manageHead-container">
                        <h2 class="admin-manageHead-text"><i class="fa fa-file"></i> MANAGE HEAD</h2>


                        <div class="admin-manageHead-button">
                            <a href="manageHeadform.php" class="admin-manageHead-bLink">Add New Head</a>

                        </div>

                        <div class="table-wraper">
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
                                            <div class="admin-manageHead-actionLink">
                                                <a href="manageheadUpdateform.php" class="admin-manageHead-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-manageHead-tg-button">
                                            </div>
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
                                            <div class="admin-manageHead-actionLink">
                                                <a href="manageheadUpdateform.php" class="admin-manageHead-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-manageHead-tg-button">
                                            </div>
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
                                            <div class="admin-manageHead-actionLink">
                                                <a href="manageheadUpdateform.php" class="admin-manageHead-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-manageHead-tg-button">
                                            </div>
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
                                            <div class="admin-manageHead-actionLink">
                                                <a href="manageheadUpdateform.php" class="admin-manageHead-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-manageHead-tg-button">
                                            </div>
                                        </td>



                                    </tr>


                                </tbody>

                            </table>
                        </div>

                    </div>
                    <!-- copy and paste section start -->

                </div>

            </section>


        </main>
    </div>
    <!-- main section end -->


    <?php
    include('layout/afooter.php');
    ?>