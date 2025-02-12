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
                    <div class="aProfile-container">
                        <div class="aProfile-header-container">
                            <div class="aProfile-header">Profile</div>
                            <div class="aProfile-breadcrumb">
                                <a href="#"><i class="fa fa-dashboard"></i> Home</a> &gt; <a href="#">Profile</a>
                            </div>
                        </div>


                        <table class="aProfile-profile-info">
                            <tr class="aProfile-info-top">
                                <td class="aProfile-td">Centre & Personal Information</td>
                            </tr>

                            <tr>
                                <th class="aProfile-th">Centre Code</th>
                                <td class="aProfile-td">HNIS</td>
                            </tr>
                            <tr>
                                <th class="aProfile-th">Centre Name</th>
                                <td class="aProfile-td">STUDENT STUDY POINT & IT EDUCATION</td>
                            </tr>
                            <tr>
                                <th class="aProfile-th">Centre Address</th>
                                <td class="aProfile-td">House No B-28, Part of Plot No B-28 Gate No 12 Gudamba Nirmal Homes Lucknow UP 226021 IN</td>
                            </tr>
                            <tr>
                                <th class="aProfile-th">Director's Name</th>
                                <td class="aProfile-td">Narendra Kumar</td>
                            </tr>
                            <tr>
                                <th class="aProfile-th">Mob. NO</th>
                                <td class="aProfile-td">+91 9044877444</td>
                            </tr>
                            <tr>
                                <th class="aProfile-th">E-MAIL</th>
                                <td class="aProfile-td"></td>
                            </tr>
                        </table>
                        <a href="#" class="aProfile-download-btn">Authorisation Certificate Download</a>
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