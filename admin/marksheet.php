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
                    <div class="admin-marksheet-container">
                        <h2 class="admin-marksheet-text"><i class="fa fa-file"></i> MANAGE MARKSHEET</h2>
                        <form action="" class="admin-marksheet-form">

                            <div class="admin-marksheet-formGroup">
                                <label for="Branch" class="admin-marksheet-formLabel">Branch</label>
                                <select name="" id="" class="admin-marksheet-formInput">
                                    <option value="">--Select Branch--</option>
                                    <option value="">(1901)Kalki Copmuters</option>
                                    <option value="">(Demo) CT</option>
                                    <option value="">(0001) Radha Krishna Computer</option>
                                    <option value="">(8401) Maa Sharde Computer Academy</option>
                                </select>
                            </div>


                            <div class="admin-marksheet-formGroup">
                                <label for="Branch" class="admin-marksheet-formLabel">Start Date</label>
                                <input type="date" class="admin-marksheet-formInput">
                            </div>
                            <div class="admin-marksheet-formGroup">
                                <label for="Branch" class="admin-marksheet-formLabel">End Date</label>
                                <input type="date" class="admin-marksheet-formInput">
                            </div>
                            <div class="admin-marksheet-formGroup">
                                <label for="Branch" class="admin-marksheet-formLabel">All</label>
                                <select name="" id="" class="admin-marksheet-formInput">
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

                            <div class="admin-marksheet-formGroup">
                                <label for="Branch" class="admin-marksheet-formLabel">Courses</label>
                                <select name="" id="" class="admin-marksheet-formInput">
                                    <option value="">--Select--</option>
                                    <option value="">Microsoft Excel</option>
                                    <option value="">Microsoft Word</option>
                                    <option value="">Adobe Photoshop</option>
                                    <option value="">Certificate Basic Computer</option>
                                    <option value="">Page Maker</option>
                                    <option value="">Master In computer Science</option>
                                    <option value="">Telly ERP 9</option>
                                </select>
                            </div>

                            <div class="admin-marksheet-formButton">
                                <input type="submit" value="Search" class="admin-marksheet-formButtoninput">
                            </div>


                        </form>

                        <div class="admin-marksheet-button">
                            <a href="" class="admin-marksheet-bLink">Export</a>
                            <a href="marksheetForm.php" class="admin-marksheet-bLink">Add New</a>

                        </div>

                        <div class="table-wraper">
                            <table class="admin-marksheet-tableOuter">
                                <tdead>
                                    <tr>
                                        <td class="admin-marksheet-tableHead">S. No.</td>
                                        <td class="admin-marksheet-tableHead">REG NO.</td>
                                        <td class="admin-marksheet-tableHead">COURSES</td>
                                        <td class="admin-marksheet-tableHead">MARKS</td>
                                        <td class="admin-marksheet-tableHead">OPERATION</td>

                                    </tr>
                                </tdead>

                                <tbody>
                                    <tr>
                                        <td class="admin-marksheet-tableData">
                                            1
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            HNIS16062 - Saleem Kowsar
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            CISCO CERTIFIED NETWORK ASSOCIATE
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            <button class="admin-marksheet-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            <a href="" class="admin-marksheet-actionLink">
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-marksheet-tg-button"><i class="fa fa-trash"></i>
                                            </a>
                                            <span class="admin-marksheet-pdf">
                                                <a href="#" class="admin-marksheet-pdfLink">Certificate</a>
                                                <a href="#" class="admin-marksheet-pdfLink">Marksheet</a>
                                            </span>
                                        </td>



                                    </tr>

                                    <tr>
                                        <td class="admin-marksheet-tableData">
                                            1
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            UP-000124002 - AMIT KUMAR
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            ADVANCE DIPLOMA IN COMPUTER APPLICATION - 1 YEAR
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            <button class="admin-marksheet-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                        </td>
                                        <td class="admin-marksheet-tableData">
                                            <a href="" class="admin-marksheet-actionLink">
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-marksheet-tg-button">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <span class="admin-marksheet-pdf">
                                                <a href="#" class="admin-marksheet-pdfLink">Certificate</a>
                                                <a href="#" class="admin-marksheet-pdfLink">Marksheet</a>
                                            </span>


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