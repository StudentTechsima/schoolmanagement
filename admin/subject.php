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
                    <div class="admin-subject-container">
                        <h2 class="admin-subject-text"><i class="fa fa-file"></i> MANAGE SUBJECT</h2>
                        <form action="" class="admin-subject-form">

                            <div class="admin-subject-formGroup">
                                <select name="" id="" class="admin-subject-formInput">
                                    <option value="">---Select Program---</option>
                                    <option value="">Microsoft Excel</option>
                                    <option value="">Microsoft Word</option>
                                    <option value="">Adobe Photoshop</option>
                                    <option value="">Certificate Basic Computer</option>
                                    <option value="">Page Maker</option>
                                    <option value="">Master In computer Science</option>
                                    <option value="">Telly ERP 9</option>
                                </select>
                            </div>

                            <div class="admin-subject-formGroup">
                                <select name="" id="" class="admin-subject-formInput">
                                    <option value="">---Select Courses---</option>
                                    <option value="">Microsoft Excel</option>
                                    <option value="">Microsoft Word</option>
                                    <option value="">Adobe Photoshop</option>
                                    <option value="">Certificate Basic Computer</option>
                                    <option value="">Page Maker</option>
                                    <option value="">Master In computer Science</option>
                                    <option value="">Telly ERP 9</option>
                                </select>
                            </div>


                            <div class="admin-subject-formButton">

                                <a href="subjectForm.php" class="admin-subject-formButtoninput"> New Subject</a>
                            </div>


                        </form>



                        <div class="table-wraper">
                            <table class="admin-subject-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-subject-tableHead">S.No.</th>
                                        <th class="admin-subject-tableHead">Program Name</th>
                                        <th class="admin-subject-tableHead">Courses Name</th>
                                        <th class="admin-subject-tableHead">Subject Name</th>
                                        <th class="admin-subject-tableHead">Marks</th>
                                        <th class="admin-subject-tableHead">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-subject-tableData">
                                            <div class="admin-subject-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-subject-tableData">
                                            Professinal Courses
                                        </td>
                                        <td class="admin-subject-tableData">
                                            CERTIFICATE BASIC COMPUTER
                                        </td>
                                        <td class="admin-subject-tableData">
                                            Network Problem Terminal
                                        </td>

                                        <td class="admin-subject-tableData">
                                            100
                                        </td>


                                        <td class="admin-subject-tableData">
                                            <div class="admin-subject-actionLink">
                                                <a href="subjectUpdateform.php" class="admin-subject-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-subject-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a href="" class="admin-subject-actionLink">
                                                    <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-subject-actionLink-btn">
                                                </a>
                                            </div>
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