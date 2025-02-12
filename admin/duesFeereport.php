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
                    <div class="admin-dueFeereport-container">

                        <h2 class="admin-dueFeereport-text"><i class="fa fa-file"></i> DUES FEE REPORT</h2>
                        <p class="admin-dueFeereport-text">Search By :</p>
                        <form action="" class="admin-dueFeereport-form">

                            <div class="admin-dueFeereport-formGroup">
                                <label for="Branch" class="admin-dueFeereport-formLabel">From Date</label>
                                <input type="date" class="admin-dueFeereport-formInput">
                            </div>
                            <div class="admin-dueFeereport-formGroup">
                                <label for="Branch" class="admin-dueFeereport-formLabel">To Date</label>
                                <input type="date" class="admin-dueFeereport-formInput">
                            </div>


                            <div class="admin-dueFeereport-formButton">
                                <input type="submit" value="Search" class="admin-dueFeereport-formButtoninput">
                            </div>


                        </form>



                        <div class="table-wraper">
                            <table class="admin-dueFeereport-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-dueFeereport-tableHead">S.ID</th>
                                        <th class="admin-dueFeereport-tableHead">Name</th>
                                        <th class="admin-dueFeereport-tableHead">Contact No.</th>
                                        <th class="admin-dueFeereport-tableHead">Course</th>
                                        <th class="admin-dueFeereport-tableHead">Total Paid</th>
                                        <th class="admin-dueFeereport-tableHead">Dues(Rs.)</th>
                                        <th class="admin-dueFeereport-tableHead">Due Date</th>
                                        <th class="admin-dueFeereport-tableHead">Remarks</th>
                                        <th class="admin-dueFeereport-tableHead"><a href="#" class="admin-dueFeereport-bLink">Export</a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!--show here dues fee report/ data  -->
                                </tbody>

                            </table>
                        </div>
                        <p class="admin-duesFeereport-text">No Records Found</p>

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