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
                    <div class="admin-advReportform-container">
                        <h2 class="admin-advReportform-text"><i class="fa fa-file"></i> MANAGE STAFF ADVANCE PAYMENT</h2>

                        <form action="">
                            <table class="admin-advReportform-table">
                                <tbody class="admin-advReportform-tableBody">
                                    <tr class="admin-advReportform-tableRow">
                                        <td class="admin-advReportform-tableLabel">Employee :</td>
                                        <td class="admin-advReportform-tableData">
                                            <select name="" id="" class="admin-advReportform-input">
                                                <option value="">--Choose Employee--</option>
                                                <option value="">Rajan Kushawaha</option>
                                                <option value="">Rajeev Patel</option>
                                                <option value="">Rajneesh</option>
                                                <option value="">Vansh</option>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="admin-advReportform-tableRow">
                                        <td class="admin-advReportform-tableLabel">Date :</td>
                                        <td class="admin-advReportform-tableData">
                                            <input type="date" class="admin-advReportform-input">
                                        </td>
                                    </tr>

                                    <tr class="admin-advReportform-tableRow">
                                        <td class="admin-advReportform-tableLabel">Advance :</td>
                                        <td class="admin-advReportform-tableData">
                                            <input type="text" name="advance" class="admin-advReportform-input"> Rs/-
                                        </td>
                                    </tr>
                                    <tr class="admin-advReportform-tableRow">
                                        <td class="admin-advReportform-tableLabel">Advance :</td>
                                        <td class="admin-advReportform-tableData">
                                            <textarea name="" id="" cols="30" class="admin-advReportform-input"></textarea>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="admin-advReportform-form-group">
                                <button type="add new" class="admin-advReportform-submitButton">Submit</button>
                            </div>
                        </form>
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