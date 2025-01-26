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
                    <div class="admin-manageUser-container">
                        <h2 class="admin-manageUser-text"><i class="fa fa-file"></i> MANAGE STAFF</h2>
                        <div class="admin-manageUser-button">
                            <a href="manageUserform.php" class="admin-manageUser-bLink">Add New User</a>
                        </div>

                        <div class="table-wraper">
                            <table class="admin-manageUser-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-manageUser-tableHead">S.No</th>
                                        <th class="admin-manageUser-tableHead">User Name</th>
                                        <th class="admin-manageUser-tableHead">Name</th>
                                        <th class="admin-manageUser-tableHead">manageUser</th>
                                        <th class="admin-manageUser-tableHead">Password</th>
                                        <th class="admin-manageUser-tableHead">Permission</th>
                                        <th class="admin-manageUser-tableHead">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            5454
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            RK
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            STUDENT STUDTY POINT & IT EDUCATION
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            9313697579
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            user
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-innerLink">
                                                <a href="manageUserupdate.php" class="admin-manageUser-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-manageUser-actionLink">
                                                    <span>ON</span>
                                                </a>
                                                <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-containImg">
                                                2.
                                            </div>
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            5454
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            Rajan Kushwaha
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            STUDENT STUDTY POINT & IT EDUCATION
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            9313697579
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            user
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-innerLink">
                                                <a href="" class="admin-manageUser-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-manageUser-actionLink">
                                                    <span>ON</span>
                                                </a>
                                                <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-containImg">
                                                3.
                                            </div>
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            5454
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            Rajan Kushwaha
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            STUDENT STUDTY POINT & IT EDUCATION
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            9313697579
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            user
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-innerLink">
                                                <a href="" class="admin-manageUser-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-manageUser-actionLink">
                                                    <span>ON</span>
                                                </a>
                                                <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-containImg">
                                                4.
                                            </div>
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            5454
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            Rajan Kushwaha
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            STUDENT STUDTY POINT & IT EDUCATION
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            9313697579
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            user
                                        </td>
                                        <td class="admin-manageUser-tableData">
                                            <div class="admin-manageUser-innerLink">
                                                <a href="" class="admin-manageUser-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-manageUser-actionLink">
                                                    <span>ON</span>
                                                </a>
                                                <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
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