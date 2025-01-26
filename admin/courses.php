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
                    <div class="admin-courses-container">
                        <h2 class="admin-courses-text"><i class="fa fa-file"></i> MANAGE COURSES</h2>
                        <form action="" class="admin-courses-form">

                            <div class="admin-courses-formGroup">
                                <select name="" id="" class="admin-courses-formInput">
                                    <option value="">TOP</option>
                                    <option value="">Microsoft Excel</option>
                                    <option value="">Microsoft Word</option>
                                    <option value="">Adobe Photoshop</option>
                                    <option value="">Certificate Basic Computer</option>
                                    <option value="">Page Maker</option>
                                    <option value="">Master In computer Science</option>
                                    <option value="">Telly ERP 9</option>
                                </select>
                            </div>

                            <div class="admin-courses-formButton">

                                <a href="courseForm.php" class="admin-courses-formButtoninput">Add New Courses</a>
                            </div>


                        </form>



                        <div class="table-wraper">
                            <table class="admin-courses-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-courses-tableHead">S.No.</th>
                                        <th class="admin-courses-tableHead">Courses Name</th>
                                        <th class="admin-courses-tableHead">Fee</th>
                                        <th class="admin-courses-tableHead">Duration</th>
                                        <th class="admin-courses-tableHead">Admision Fee Per Student</th>
                                        <th class="admin-courses-tableHead">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-courses-tableData">
                                            <div class="admin-courses-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-courses-tableData">
                                            CERTIFICATE BASIC COMPUTER
                                        </td>
                                        <td class="admin-courses-tableData">
                                            INR. 10000
                                        </td>
                                        <td class="admin-courses-tableData">
                                            3 Month
                                        </td>

                                        <td class="admin-courses-tableData">
                                            INR. 200
                                        </td>


                                        <td class="admin-courses-tableData">
                                            <div class="admin-courses-actionLink">
                                                <a href="courseUpdateform.php" class="admin-courses-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-courses-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a href="" class="admin-courses-actionLink">
                                                    <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-courses-actionLink-btn">
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