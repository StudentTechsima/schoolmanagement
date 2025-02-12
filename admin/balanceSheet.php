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
                    <div class="admin-balanceSheet-container">
                        <h2 class="admin-balanceSheet-text"><i class="fa fa-file"></i> REPORT BOTH</h2>
                        <form action="" class="admin-balanceSheet-form">



                            <div class="admin-balanceSheet-formGroup">
                                <label for="Branch" class="admin-balanceSheet-formLabel">Start Date</label>
                                <input type="date" class="admin-balanceSheet-formInput">
                            </div>
                            <div class="admin-balanceSheet-formGroup">
                                <label for="Branch" class="admin-balanceSheet-formLabel">End Date</label>
                                <input type="date" class="admin-balanceSheet-formInput">
                            </div>

                            <div class="admin-balanceSheet-formButton">
                                <input type="submit" value="Search" class="admin-balanceSheet-formButtoninput">
                            </div>


                        </form>

                        <div class="admin-balanceSheet-button">
                            <a href="#" class="admin-balanceSheet-bLink">Export</a>

                        </div>

                        <div class="table-wraper">
                            <table class="admin-balanceSheet-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-balanceSheet-tableHead">DATE</th>
                                        <th class="admin-balanceSheet-tableHead" colspan="2">CASH IN (FEE)</th>
                                        <th class="admin-balanceSheet-tableHead" colspan="5">CASH OUT</th>

                                    </tr>
                                    <tr>
                                        <th class="admin-balanceSheet-tableHead"></th>
                                        <th class="admin-balanceSheet-tableHead">Cash Deposite</th>
                                        <th class="admin-balanceSheet-tableHead">Chaque/Bank</th>
                                        <th class="admin-balanceSheet-tableHead">Cash</th>
                                        <th class="admin-balanceSheet-tableHead">Details</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-balanceSheet-tableData">
                                            <div class="admin-balanceSheet-containImg">
                                                17-12-2024
                                            </div>
                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>


                                    </tr>

                                    <tr>
                                        <td class="admin-balanceSheet-tableData">
                                            <div class="admin-balanceSheet-containImg">
                                                17-12-2024
                                            </div>
                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>


                                    </tr>

                                    <tr>
                                        <td class="admin-balanceSheet-tableData">
                                            <div class="admin-balanceSheet-containImg">
                                                17-12-2024
                                            </div>
                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="admin-balanceSheet-tableData">
                                            <div class="admin-balanceSheet-containImg">
                                                17-12-2024
                                            </div>
                                        </td>
                                        <td class="admin-balanceSheet-tableData">
                                            Rajneesh Prajapati 3000rs
                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="admin-balanceSheet-tableData">
                                            <div class="admin-balanceSheet-containImg">
                                                17-12-2024
                                            </div>
                                        </td>
                                        <td class="admin-balanceSheet-tableData">
                                            Naveen Kumar 1000rs
                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="admin-balanceSheet-tableData">
                                            <div class="admin-balanceSheet-containImg">

                                            </div>
                                        </td>
                                        <td class="admin-balanceSheet-tableData">
                                            4000 Rs
                                        </td>
                                        <td class="admin-balanceSheet-tableData">

                                        </td>
                                        <td class="admin-balanceSheet-tableData">
                                            Rs.
                                        </td>
                                        <td class="admin-balanceSheet-tableData">
                                            Balance Amt:4000
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