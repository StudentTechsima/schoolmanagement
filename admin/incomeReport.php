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
                    <div class="admin-incomeReport-container">
                        <h2 class="admin-incomeReport-text"><i class="fa fa-file"></i> MANAGE CASHIN</h2>
                        <form action="" class="admin-incomeReport-form">

                            <div class="admin-incomeReport-formGroup">
                                <label for="Branch" class="admin-incomeReport-formLabel">Branch</label>
                                <select name="" id="" class="admin-incomeReport-formInput">
                                    <option value="">--Select Branch--</option>
                                    <option value="">(1901)Kalki Copmuters</option>
                                    <option value="">(Demo) CT</option>
                                    <option value="">(0001) Radha Krishna Computer</option>
                                    <option value="">(8401) Maa Sharde Computer Academy</option>
                                </select>
                            </div>
                            <div class="admin-incomeReport-formGroup">
                                <label for="Branch" class="admin-incomeReport-formLabel">Choose Head</label>
                                <select name="" id="" class="admin-incomeReport-formInput">
                                    <option value="">--Choose Head--</option>
                                    <option value="">--All--</option>
                                    <option value="">Dev Shankar</option>
                                    <option value="">Installement</option>
                                    <option value="">Late Fee</option>
                                    <option value="">Other Fine</option>
                                    <option value="">Late Fee</option>
                                </select>
                            </div>


                            <div class="admin-incomeReport-formGroup">
                                <label for="Branch" class="admin-incomeReport-formLabel">Start Date</label>
                                <input type="date" class="admin-incomeReport-formInput">
                            </div>
                            <div class="admin-incomeReport-formGroup">
                                <label for="Branch" class="admin-incomeReport-formLabel">End Date</label>
                                <input type="date" class="admin-incomeReport-formInput">
                            </div>

                            <div class="admin-incomeReport-formButton">
                                <input type="submit" value="Search" class="admin-incomeReport-formButtoninput">
                            </div>


                        </form>

                        <div class="admin-incomeReport-button">
                            <a href="incomeReportform.php" class="admin-incomeReport-bLink">Add New Cashin</a>

                        </div>

                        <div class="table-wraper">
                            <table class="admin-incomeReport-tableOuter">
                                <tdead>
                                    <tr>
                                        <td class="admin-incomeReport-tableHead" style="background:#088000">S. No.</td>
                                        <td class="admin-incomeReport-tableHead" style="background:#088000">HEAD NAME</td>
                                        <td class="admin-incomeReport-tableHead" colspan="2" style="background:#088000">AMOUNT (Rs.)</td>
                                        <td class="admin-incomeReport-tableHead" style="background:#088000">DATE</td>
                                        <td class="admin-incomeReport-tableHead" style="background:#088000">PAYMENT MODE</td>
                                        <td class="admin-incomeReport-tableHead" style="background:#088000">ACTION</td>

                                    </tr>
                                    <tr>
                                        <td class="admin-incomeReport-tableHead">TOTAL(Rs.)</td>
                                        <td class="admin-incomeReport-tableHead"></td>
                                        <td class="admin-incomeReport-tableHead" colspan="5">0.00/-</td>

                                    </tr>
                                </tdead>

                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <p style="padding: 10px;">No Record Found...Add First</p>

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