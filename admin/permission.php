


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
                <img src="block-bg-5.jpg" alt="" id="admin-profileImage">
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
                    <div class="admin-permission-container">
                        <h2 class="admin-permission-text"><i class="fa fa-file"></i> MANAGE PERMISSION</h2>

                        <table class="admin-permission-tableOuter">


                            <tbody>
                                <tr>
                                    <td class="admin-permission-tableData">
                                        1.
                                    </td>
                                    <td class="admin-permission-tableData tdWidth">
                                        Manage User
                                    </td>

                                    <td class="admin-permission-tableData">
                                        <div class="admin-permission-innerLink">
                                            <a href="" class="admin-permission-actionLink">
                                                <img src="/adminZone/admin/imajes/check.png" class="admin-permission-tg-button">
                                            </a>

                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td class="admin-permission-tableData">
                                        2.
                                    </td>
                                    <td class="admin-permission-tableData tdWidth">
                                        Staff/Emp
                                    </td>

                                    <td class="admin-permission-tableData">
                                        <div class="admin-permission-innerLink">
                                            <a href="" class="admin-permission-actionLink">
                                                <img src="/adminZone/admin/imajes/check.png" class="admin-permission-tg-button">
                                            </a>

                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td class="admin-permission-tableData">
                                        3.
                                    </td>
                                    <td class="admin-permission-tableData tdWidth">
                                        Student
                                    </td>

                                    <td class="admin-permission-tableData">
                                        <div class="admin-permission-innerLink">
                                            <a href="" class="admin-permission-actionLink">
                                                <img src="/adminZone/admin/imajes/check.png" class="admin-permission-tg-button">
                                            </a>

                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td class="admin-permission-tableData">
                                        4.
                                    </td>
                                    <td class="admin-permission-tableData tdWidth">
                                        Courses
                                    </td>

                                    <td class="admin-permission-tableData">
                                        <div class="admin-permission-innerLink">
                                            <a href="" class="admin-permission-actionLink">
                                                <img src="/adminZone/admin/imajes/check.png" class="admin-permission-tg-button">
                                            </a>

                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td class="admin-permission-tableData">
                                        5.
                                    </td>
                                    <td class="admin-permission-tableData tdWidth">
                                        study Material
                                    </td>

                                    <td class="admin-permission-tableData">
                                        <div class="admin-permission-innerLink">
                                            <a href="" class="admin-permission-actionLink">
                                                <img src="/adminZone/admin/imajes/check.png" class="admin-permission-tg-button">
                                            </a>

                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td class="admin-permission-tableData">
                                        6.
                                    </td>
                                    <td class="admin-permission-tableData tdWidth">
                                        Online Exam
                                    </td>

                                    <td class="admin-permission-tableData">
                                        <div class="admin-permission-innerLink">
                                            <a href="" class="admin-permission-actionLink">
                                                <img src="/adminZone/admin/imajes/check.png" class="admin-permission-tg-button">
                                            </a>

                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td class="admin-permission-tableData">
                                        7.
                                    </td>
                                    <td class="admin-permission-tableData tdWidth">
                                        Marksheet/Certificate
                                    </td>

                                    <td class="admin-permission-tableData">
                                        <div class="admin-permission-innerLink">
                                            <a href="" class="admin-permission-actionLink">
                                                <img src="/adminZone/admin/imajes/check.png" class="admin-permission-tg-button">
                                            </a>

                                        </div>
                                    </td>


                                </tr>

                            </tbody>

                        </table>


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