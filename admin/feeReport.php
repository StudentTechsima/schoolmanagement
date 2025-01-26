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
                    <div class="admin-feeReport-container">
                        <h2 class="admin-feeReport-text"><i class="fa fa-file"></i> FEE REPORT</h2>
                        <form action="" class="admin-feeReport-form">

                            <div class="admin-feeReport-formGroup">

                                <select name="" id="" class="admin-feeReport-formInput">
                                    <option value="">--Select Branch--</option>
                                    <option value="">(1901)Kalki Copmuters</option>
                                    <option value="">(Demo) CT</option>
                                    <option value="">(0001) Radha Krishna Computer</option>
                                    <option value="">(8401) Maa Sharde Computer Academy</option>
                                </select>
                            </div>

                            <div class="admin-feeReport-formGroup">

                                <input type="date" class="admin-feeReport-formInput">
                            </div>
                            <div class="admin-feeReport-formGroup">

                                <input type="date" class="admin-feeReport-formInput">
                            </div>
                            <div class="admin-feeReport-formGroup">

                                <select name="" id="" class="admin-feeReport-formInput" placeholder="ALL">
                                    <option value="">ALL</option>
                                    <option value="">Shanti Institue Technology and Management (SITM) </option>
                                    <option value="">CCC</option>
                                    <option value="">CCA</option>
                                    <option value="">Artificial Intelligence</option>
                                    <option value="">Diploma Courses</option>
                                    <option value="">CCA</option>
                                    <option value="">Artificial Intelligence</option>
                                    <option value="">Diploma Courses</option>
                                </select>
                            </div>

                            <div class="admin-feeReport-formButton">
                                <input type="submit" value="Search" class="admin-feeReport-formButtoninput">
                            </div>


                        </form>

                        <div class="admin-feeReport-button">
                            <a href="#" class="admin-feeReport-bLink">Export</a>

                        </div>

                        <div class="table-wraper">
                            <table class="admin-feeReport-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-feeReport-tableHead">S.No</th>
                                        <th class="admin-feeReport-tableHead">Form No.</th>
                                        <th class="admin-feeReport-tableHead">Student Name</th>
                                        <th class="admin-feeReport-tableHead">Course</th>
                                        <th class="admin-feeReport-tableHead">Batch</th>
                                        <th class="admin-feeReport-tableHead">Fee</th>
                                        <th class="admin-feeReport-tableHead">Cheque</th>
                                        <th class="admin-feeReport-tableHead">Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-feeReport-tableData">
                                            <div class="admin-feeReport-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            HNIS22061
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Bapan Sarkar
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Page Maker
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            1000
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            2024-12-03
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-feeReport-tableData">
                                            <div class="admin-feeReport-containImg">
                                                2.
                                            </div>
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            HNIS22061
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Bapan Sarkar
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Page Maker
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            1000
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            2024-12-03
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-feeReport-tableData">
                                            <div class="admin-feeReport-containImg">
                                                3.
                                            </div>
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            HNIS22061
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Bapan Sarkar
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Page Maker
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            1000
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            2024-12-03
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="admin-feeReport-tableData">
                                            <div class="admin-feeReport-containImg">
                                                4.
                                            </div>
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            HNIS22061
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Bapan Sarkar
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            Page Maker
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            1000
                                        </td>
                                        <td class="admin-feeReport-tableData">

                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            2024-12-03
                                        </td>
                                    </tr>
                                    <tr style="background: #8eea8e;">
                                        <td class="admin-feeReport-tableData" colspan="4"></td>

                                        <td class="admin-feeReport-tableData">
                                            Total
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                            4000
                                        </td>
                                        <td class="admin-feeReport-tableData">
                                        </td>
                                        <td class="admin-feeReport-tableData">
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