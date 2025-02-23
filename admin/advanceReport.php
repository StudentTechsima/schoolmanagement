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
                    <div class="admin-advanceReport-container">
                        <h2 class="admin-advanceReport-text"><i class="fa fa-file"></i> MANAGE STAFF ADVANCE</h2>
                        <form action="" class="admin-advanceReport-form">

                            <div class="admin-advanceReport-formGroup">
                                <label for="">Department Name</label>
                                <input type="date" class="admin-advanceReport-formInput">
                            </div>

                            <div class="admin-advanceReport-formButton">
                                <a href="advReportform.php" class="admin-advanceReport-formButtoninput">Pay Advance</a>
                            </div>


                        </form>



                        <div class="table-wraper">
                            <table class="admin-advanceReport-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-advanceReport-tableHead">S.No.</th>
                                        <th class="admin-advanceReport-tableHead">Employee</th>
                                        <th class="admin-advanceReport-tableHead">Advance Due</th>
                                        <th class="admin-advanceReport-tableHead">Deduct Advance This Month</th>
                                        <th class="admin-advanceReport-tableHead">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-advanceReport-tableData">
                                            <div class="admin-advanceReport-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-advanceReport-tableData">
                                            Rk
                                        </td>
                                        <td class="admin-advanceReport-tableData">
                                            Rs. 10000/-
                                        </td>
                                        <td class="admin-advanceReport-tableData">
                                            <input type="text" class="admin-advanceReport-formInput">
                                        </td>

                                        <td class="admin-advanceReport-tableData">
                                            <a href="" class="admin-advanceReport-actionLink">
                                                <img src="/schoolmanagement/admin/images/serch.webp" class="admin-advanceReport-img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="admin-advanceReport-tableData">
                                            <div class="admin-advanceReport-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-advanceReport-tableData">
                                            Rk
                                        </td>
                                        <td class="admin-advanceReport-tableData">
                                            Rs. 10000/-
                                        </td>
                                        <td class="admin-advanceReport-tableData">
                                            <input type="text" class="admin-advanceReport-formInput">
                                        </td>

                                        <td class="admin-advanceReport-tableData">
                                            <a href="" class="admin-advanceReport-actionLink">
                                                <img src="/schoolmanagement/admin/images/serch.webp" class="admin-advanceReport-img">
                                            </a>
                                        </td>
                                    </tr>




                                </tbody>


                            </table>
                        </div>

                        <div class="admin-advanceReport-deductButton ">
                            <a href="#" class="admin-advanceReport-deductBtn">Deduct Advance</a>
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