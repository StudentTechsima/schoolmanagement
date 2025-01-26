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
                    <div class="admin-manageBranch-container">
                        <h2 class="admin-manageBranch-text"><i class="fa fa-file"></i> BRANCH</h2>
                        <div class="admin-manageBranch-button">
                            <a href="manageBranchform.php" class="admin-manageBranch-bLink">Add New Center</a>
                        </div>


                        <div class="table-wraper">
                            <table class="admin-manageBranch-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-manageBranch-tableHead">S.No</th>
                                        <th class="admin-manageBranch-tableHead">Branch Name</th>
                                        <th class="admin-manageBranch-tableHead">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="admin-manageBranch-tableData">
                                            <div class="admin-manageBranch-containImg">
                                                1.
                                                <img src="/schoolmanagement/admin/images/adminLogo.png" alt="" class="admin-manageBranch-img">
                                            </div>
                                        </td>
                                        <td class="admin-manageBranch-tableData">
                                            <strong class="admin-manageBranch-tdText">STUDENT STUDY POINT & IT EDUCATION</strong><br>
                                            <strong class="admin-manageBranch-tdText">Codes: </strong>HNIS<br>
                                            <strong class="admin-manageBranch-tdText">Address: </strong>House No B-28,Part of Plot No B-28 Gate No 12 <br> Gudamba Nirmal Homes Lucknow Lucknow UP 226021 IN
                                        </td>
                                        <td class="admin-manageBranch-tableData">
                                            <a href="manageBranchedit.php" class="admin-manageBranch-actionLink">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <span>ON</span>
                                            <span class="admin-manageBranch-mBranch">Main Branch</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-manageBranch-tableData">
                                            <div class="admin-manageBranch-containImg">
                                                1.
                                                <img src="/schoolmanagement/admin/images/adminLogo.png" alt="" class="admin-manageBranch-img">
                                            </div>
                                        </td>
                                        <td class="admin-manageBranch-tableData">
                                            <strong class="admin-manageBranch-tdText">STUDENT STUDY POINT & IT EDUCATION</strong><br>
                                            <strong class="admin-manageBranch-tdText">Codes: </strong>HNIS<br>
                                            <strong class="admin-manageBranch-tdText">Address: </strong>House No B-28,Part of Plot No B-28 Gate No 12 <br> Gudamba Nirmal Homes Lucknow Lucknow UP 226021 IN
                                        </td>
                                        <td class="admin-manageBranch-tableData">
                                            <a href="manageBranchedit.php" class="admin-manageBranch-actionLink">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <span>ON</span>
                                            <a href="" class="admin-manageBranch-actionLink">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-manageBranch-tableData">
                                            <div class="admin-manageBranch-containImg">
                                                1.
                                                <img src="/schoolmanagement/admin/images/adminLogo.png" alt="" class="admin-manageBranch-img">
                                            </div>
                                        </td>
                                        <td class="admin-manageBranch-tableData">
                                            <strong class="admin-manageBranch-tdText">STUDENT STUDY POINT & IT EDUCATION</strong><br>
                                            <strong class="admin-manageBranch-tdText">Codes: </strong>HNIS<br>
                                            <strong class="admin-manageBranch-tdText">Address: </strong>House No B-28,Part of Plot No B-28 Gate No 12 <br> Gudamba Nirmal Homes Lucknow Lucknow UP 226021 IN
                                        </td>
                                        <td class="admin-manageBranch-tableData">
                                            <a href="manageBranchedit.php" class="admin-manageBranch-actionLink">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <span>ON</span>
                                            <a href="" class="admin-manageBranch-actionLink">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>

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