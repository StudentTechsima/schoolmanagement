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
                    <div class="admin-attendanceRep-container">
                        <h2 class="admin-attendanceRep-text"><i class="fa fa-file"></i> MANAGE STAFF ATTENDANCE</h2>
                        <form action="" class="admin-attendanceRep-form">

                            <div class="admin-attendanceRep-formGroup">
                                <label for="" class="admin-attendanceRep-formLabel">Attendance On</label>
                                <input type="date" class="admin-attendanceRep-formInput">
                            </div>
                        </form>



                        <div class="table-wraper">
                            <table class="admin-attendanceRep-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-attendanceRep-tableHead">S.No.</th>
                                        <th class="admin-attendanceRep-tableHead">Employee Name</th>
                                        <th class="admin-attendanceRep-tableHead">Department</th>
                                        <th class="admin-attendanceRep-tableHead">Designation</th>
                                        <th class="admin-attendanceRep-tableHead">Attendance</th>
                                        <th class="admin-attendanceRep-tableHead">C.L. Balance</th>
                                        <th class="admin-attendanceRep-tableHead">Adjust C.L.</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-attendanceRep-tableData">
                                            <div class="admin-attendanceRep-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            Rk
                                        </td>

                                        <td class="admin-attendanceRep-tableData">Sals Department</td>
                                        <td class="admin-attendanceRep-tableData"></td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            200
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="admin-attendanceRep-tableData">
                                            <div class="admin-attendanceRep-containImg">
                                                2.
                                            </div>
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            Rk
                                        </td>

                                        <td class="admin-attendanceRep-tableData">Sals Department</td>
                                        <td class="admin-attendanceRep-tableData"></td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            1
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="admin-attendanceRep-tableData">
                                            <div class="admin-attendanceRep-containImg">
                                                3.
                                            </div>
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            Rk
                                        </td>

                                        <td class="admin-attendanceRep-tableData">Sals Department</td>
                                        <td class="admin-attendanceRep-tableData"></td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            5
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="admin-attendanceRep-tableData">
                                            <div class="admin-attendanceRep-containImg">
                                                4.
                                            </div>
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            Rk
                                        </td>

                                        <td class="admin-attendanceRep-tableData">Sals Department</td>
                                        <td class="admin-attendanceRep-tableData"></td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            2
                                        </td>
                                        <td class="admin-attendanceRep-tableData">
                                            <input type="text" class="admin-attendanceRep-innerInput">
                                        </td>

                                    </tr>
                                </tbody>


                            </table>
                        </div>
                        <div class="admin-attendanceRep-deductButton ">
                            <a href="#" class="admin-attendanceRep-deductBtn">Update</a>
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