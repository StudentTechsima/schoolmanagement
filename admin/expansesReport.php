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
                    <div class="admin-expensesReport-container">
                        <h2 class="admin-expensesReport-text"><i class="fa fa-file"></i> MANAGE CASHOUT</h2>
                        <form action="" class="admin-expensesReport-form">

                            <div class="admin-expensesReport-formGroup">
                                <label for="Branch" class="admin-expensesReport-formLabel">Choose Head</label>
                                <select name="" id="" class="admin-expensesReport-formInput">
                                    <option value="">--Choose Head--</option>
                                    <option value="">--All--</option>
                                    <option value="">Dev Shankar</option>
                                    <option value="">Installement</option>
                                    <option value="">Late Fee</option>
                                    <option value="">Other Fine</option>
                                    <option value="">Late Fee</option>
                                </select>
                            </div>


                            <div class="admin-expensesReport-formGroup">
                                <label for="Branch" class="admin-expensesReport-formLabel">Start Date</label>
                                <input type="date" class="admin-expensesReport-formInput">
                            </div>
                            <div class="admin-expensesReport-formGroup">
                                <label for="Branch" class="admin-expensesReport-formLabel">End Date</label>
                                <input type="date" class="admin-expensesReport-formInput">
                            </div>

                            <div class="admin-expensesReport-formButton">
                                <input type="submit" value="Search" class="admin-expensesReport-formButtoninput">
                            </div>


                        </form>

                        <div class="admin-expensesReport-button">
                            <a href="expensesReportform.php" class="admin-expensesReport-bLink">Add New Cashout</a>

                        </div>

                        <div class="table-wraper">
                            <table class="admin-expensesReport-tableOuter">
                                <tdead>
                                    <tr>
                                        <td class="admin-expensesReport-tableHead">S. No.</td>
                                        <td class="admin-expensesReport-tableHead">HEAD NAME</td>
                                        <td class="admin-expensesReport-tableHead">AMOUNT (Rs.)</td>
                                        <td class="admin-expensesReport-tableHead">DATE</td>
                                        <td class="admin-expensesReport-tableHead">PAYMENT MODE</td>
                                        <td class="admin-expensesReport-tableHead">ACTION</td>

                                    </tr>
                                </tdead>

                                <tbody>
                                    <tr>
                                        <td class="admin-expensesReport-tableData">
                                            1
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            tea
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            500 /-
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            18/12/2024
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            Cash
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td class="admin-expensesReport-tableData">
                                            1
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            tea
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            500 /-
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            18/12/2024
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            Cash
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td class="admin-expensesReport-tableData">
                                            1
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            tea
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            500 /-
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            18/12/2024
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            Cash
                                        </td>
                                        <td class="admin-expensesReport-tableData">
                                            <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                        </td>


                                    </tr>
                                    <tr style="background: #153450; ">
                                        <td class="admin-expensesReport-tableData" style="color:#fff">
                                            Total(Rs.)
                                        </td>
                                        <td class="admin-expensesReport-tableData">

                                        </td>
                                        <td class="admin-expensesReport-tableData" colspan="5" style="color:#fff">
                                            1500 /-
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