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
                    <div class="admin-idCard-container">
                        <h2 class="admin-idCard-text"><i class="fa fa-file"></i> MANAGE STUDENT</h2>
                        <form action="" class="admin-idCard-form">

                            <div class="admin-idCard-formGroup">
                                <input type="text" class="admin-idCard-formInput" placeholder="USERNAME">
                            </div>
                            <div class="admin-idCard-formGroup">
                                <input type="text" class="admin-idCard-formInput" placeholder="TYPE STUDENT NAME">
                            </div>
                            <div class="admin-idCard-formGroup">
                                <input type="text" class="admin-idCard-formInput" placeholder="TYPE CONTACT NO">
                            </div>

                        </form>

                        <div class="table-wraper">
                            <table class="admin-idCard-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-idCard-tableHead">Sr. No.</th>
                                        <th class="admin-idCard-tableHead">NAME</th>
                                        <th class="admin-idCard-tableHead">COURSES</th>
                                        <th class="admin-idCard-tableHead">CONTACT</th>
                                        <th class="admin-idCard-tableHead">ACTION</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-idCard-tableData">

                                        </td>
                                        <td class="admin-idCard-tableData" colspan="2">
                                            <div class="admin-idCard-innerLink">
                                                <a href="" class="admin-idCard-downloadBtn">
                                                    <p>Print</p>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="admin-idCard-tableData" colspan="2">
                                            <div class="admin-idCard-innerLink">
                                                <a href="" class="admin-idCard-downloadBtn" style="background-color: red;">
                                                    <p>Clear ID All</p>
                                                </a>
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