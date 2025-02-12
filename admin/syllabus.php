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
                    <div class="admin-syllabus-container">
                        <h2 class="admin-syllabus-text"><i class="fa fa-file"></i> SYLLABUS</h2>
                        <form action="" class="admin-syllabus-form">

                            <div class="admin-syllabus-formGroup">
                                <label for="Branch" class="admin-syllabus-formLabel">Search By Program</label>
                                <select name="" id="" class="admin-syllabus-formInput">
                                    <option value="">--Select By Program--</option>
                                    <option value="">Microsoft Excel</option>
                                    <option value="">Microsoft Word</option>
                                    <option value="">Adobe Photoshop</option>
                                    <option value="">Certificate Basic Computer</option>
                                    <option value="">Page Maker</option>
                                    <option value="">Master In computer Science</option>
                                    <option value="">Telly ERP 9</option>
                                </select>
                            </div>


                            <div class="admin-syllabus-formGroup">
                                <label for="Branch" class="admin-syllabus-formLabel">Courses</label>
                                <select name="" id="" class="admin-syllabus-formInput">
                                    <option value="">--Select Branch--</option>
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
                            <div class="admin-syllabus-formGroup">
                                <label for="Branch" class="admin-syllabus-formLabel">Subject</label>
                                <select name="" id="" class="admin-syllabus-formInput">
                                    <option value="">--Select Subject--</option>

                                </select>
                            </div>

                            <div class="admin-syllabus-formButton">

                                <a href="syllabusForm.php" class="admin-syllabus-formButtoninput">Create New</a>
                            </div>


                        </form>



                        <div class="table-wraper">
                            <table class="admin-syllabus-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-syllabus-tableHead">S.No.</th>
                                        <th class="admin-syllabus-tableHead">File</th>
                                        <th class="admin-syllabus-tableHead">Program Name</th>
                                        <th class="admin-syllabus-tableHead">Course Name</th>
                                        <th class="admin-syllabus-tableHead">Subject</th>
                                        <th class="admin-syllabus-tableHead">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-syllabus-tableData">
                                            <div class="admin-syllabus-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-syllabus-tableData">
                                            Class 1
                                        </td>
                                        <td class="admin-syllabus-tableData">
                                            Basic Courses
                                        </td>
                                        <td class="admin-syllabus-tableData">
                                            MS Excel
                                        </td>

                                        <td class="admin-syllabus-tableData">
                                            Lab Project
                                        </td>


                                        <td class="admin-syllabus-tableData">
                                            <div class="admin-syllabus-innerData">
                                                <a href="syllabusUpdateform.php" class="admin-syllabus-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-syllabus-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <button class="admin-syllabus-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                                <img src=" /adminZone/admin/imajes/but_ban_small.png" class="admin-syllabus-tg-button">
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