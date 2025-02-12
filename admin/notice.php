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
                    <div class="admin-notice-container">
                        <h2 class="admin-notice-text"><i class="fa fa-file"></i> NEWS & NOTICE</h2>
                        <form action="" class="admin-notice-form">


                            <div class="admin-notice-button">
                                <a href="noticeForm.php" class="admin-notice-bLink">Add New News</a>
                            </div>


                        </form>

                        <div class="table-wraper">
                            <table class="admin-notice-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-notice-tableHead">S. No.</th>
                                        <th class="admin-notice-tableHead" colspan="2">News Title</th>
                                        <th class="admin-notice-tableHead" colspan="2">Photo</th>
                                        <th class="admin-notice-tableHead">ACTION</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            Welcome to My Instiute
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            <p><a href="" class="admin-notice-innerData">ID</a></p>
                                        </td>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-actionLink">
                                                <a href="noticeUpdateform.php" class="admin-notice-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-notice-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-notice-tg-button">

                                            </div>
                                        </td>



                                    </tr>

                                    <tr>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-containImg">
                                                2.
                                            </div>
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            About Us
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            <p><a href="" class="admin-notice-innerData">ID</a></p>
                                        </td>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-actionLink">
                                                <a href="noticeUpdateform.php" class="admin-notice-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-notice-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-notice-tg-button">

                                            </div>
                                        </td>



                                    </tr>

                                    <tr>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-containImg">
                                                3.
                                            </div>
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            Suman
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            <p><a href="" class="admin-notice-innerData">NO</a></p>
                                        </td>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-actionLink">
                                                <a href="noticeUpdateform.php" class="admin-notice-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-notice-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-notice-tg-button">
                                            </div>
                                        </td>



                                    </tr>

                                    <tr>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-containImg">
                                                4.
                                            </div>
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            Today is Holiday
                                        </td>
                                        <td class="admin-notice-tableData" colspan="2">
                                            <p><a href="" class="admin-notice-innerData">NO</a></p>
                                        </td>
                                        <td class="admin-notice-tableData">
                                            <div class="admin-notice-actionLink">
                                                <a href="noticeUpdateform.php" class="admin-notice-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-notice-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-notice-tg-button">
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