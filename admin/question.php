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
                    <div class="admin-paperQuestion-container">
                        <h2 class="admin-paperQuestion-text"><i class="fa fa-file"></i> MANAGE QUESTION</h2>

                        <form action="" class="admin-paperQuestion-form">

                            <div class="admin-paperQuestion-formGroup">
                                <!-- <label for="Branch" class="admin-paperQuestion-formLabel">Select By Program:</label> -->
                                <select name="" id="" class="admin-paperQuestion-formInput">
                                    <option value="">--ALL--</option>
                                    <option value="">Basic Courses</option>
                                    <option value="">Microsoft Excel</option>
                                    <option value="">Microsoft Word</option>
                                    <option value="">Adobe Photoshop</option>
                                    <option value="">Certificate Basic Computer</option>
                                    <option value="">Page Maker</option>
                                    <option value="">Master In computer Science</option>
                                    <option value="">Telly ERP 9</option>
                                </select>
                            </div>


                            <div class="admin-paperQuestion-formGroup">
                                <select name="" id="" class="admin-paperQuestion-formInput">
                                    <option value="">--ALL--</option>
                                </select>
                            </div>
                            <div class="admin-paperQuestion-formGroup">
                                <select name="" id="" class="admin-paperQuestion-formInput">
                                    <option value="">--ALL--</option>
                                </select>
                            </div>
                            <div class="admin-paperQuestion-formGroup">
                                <select name="" id="" class="admin-paperQuestion-formInput">
                                    <option value="">--ALL--</option>
                                    <option value="">Excel</option>
                                </select>
                            </div>


                        </form>




                        <div class="table-wraper">
                            <table class="admin-paperQuestion-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-paperQuestion-tableHead">S.No</th>
                                        <th class="admin-paperQuestion-tableHead">Question</th>
                                        <th class="admin-paperQuestion-tableHead">Check</th>
                                        <th class="admin-paperQuestion-tableHead">Details</th>
                                        <th class="admin-paperQuestion-tableHead">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-paperQuestion-tableData">
                                            <div class="admin-paperQuestion-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            What is Volatile memory
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            <a href="#">
                                                <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                            </a>
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            <a href="" class="admin-paperQuestion-actionLink">
                                                <i class="fa fa-edit"></i>
                                                <img src="/schoolmanagement/admin/images/letter-f.png" class="admin-paperQuestion-tg-button">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </a>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="admin-paperQuestion-tableData">
                                            <div class="admin-paperQuestion-containImg">
                                                2.
                                            </div>
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            What is Volatile memory
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            <a href="#">
                                                <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                            </a>
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            <a href="" class="admin-paperQuestion-actionLink">
                                                <i class="fa fa-edit"></i>
                                                <img src="/schoolmanagement/admin/images/letter-f.png" class="admin-paperQuestion-tg-button">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </a>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="admin-paperQuestion-tableData">
                                            <div class="admin-paperQuestion-containImg">
                                                3.
                                            </div>
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            What is Volatile memory
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            <a href="#">
                                                <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                            </a>
                                        </td>
                                        <td class="admin-paperQuestion-tableData">
                                            <a href="" class="admin-paperQuestion-actionLink">
                                                <i class="fa fa-edit"></i>
                                                <img src="/schoolmanagement/admin/images/letter-f.png" class="admin-paperQuestion-tg-button">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </a>
                                        </td>

                                    </tr>


                                </tbody>

                            </table>
                        </div>
                        <div class="admin-paperQuestion-tablePage">
                            <div class="admin-paperQuestion-tablePageinner">
                                <button class="admin-paperQuestion-tablePagebutton">First</button>
                                <button class="admin-paperQuestion-tablePagebutton">Page 1 | 2 | 3 | 4 |</button>
                                <button class="admin-paperQuestion-tablePagebutton">Next »</button>
                                <button class="admin-paperQuestion-tablePagebutton">Last</button>
                            </div>
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