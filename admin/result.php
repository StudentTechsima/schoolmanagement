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
                    <div class="admin-paperResult-container">
                        <h2 class="admin-paperResult-text"><i class="fa fa-file"></i> MANAGE RESULT</h2>


                        <form action="" class="admin-paperResult-form">

                            <div class="admin-paperResult-formGroup">
                                <select name="" id="" class="admin-paperResult-formInput">
                                    <option value="">--BRANCH--</option>
                                    <option value="">Student Study Point & it Education</option>
                                    <option value="">Kalki Computers</option>
                                    <option value="">CT</option>
                                    <option value="">Radha Krishna Computer</option>

                                </select>
                            </div>



                        </form>



                        <div class="table-wraper">
                            <table class="admin-paperResult-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-paperResult-tableHead">S.No</th>
                                        <th class="admin-paperResult-tableHead">Name</th>
                                        <th class="admin-paperResult-tableHead">Date</th>
                                        <th class="admin-paperResult-tableHead">Test Name</th>
                                        <th class="admin-paperResult-tableHead">Tot. Q.</th>
                                        <th class="admin-paperResult-tableHead">Attempted</th>
                                        <th class="admin-paperResult-tableHead">L.Q.</th>
                                        <th class="admin-paperResult-tableHead">R.Q.</th>
                                        <th class="admin-paperResult-tableHead">W.Q.</th>
                                        <th class="admin-paperResult-tableHead">(-M.)</th>
                                        <th class="admin-paperResult-tableHead">Tot. M.</th>
                                    </tr>
                                </thead>

                                <tbody>
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