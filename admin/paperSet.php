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
                    <div class="admin-paperSet-container">
                        <h2 class="admin-paperSet-text"><i class="fa fa-file"></i> MANAGE PAPERSET</h2>

                        <p class="admin-paperSet-notes">*Denotes required field</p>
                        <form action="" class="admin-paperSet-form">

                            <div class="admin-paperSet-formGroup">
                                <label for="Branch" class="admin-paperSet-formLabel">Select By Program:</label>
                                <select name="" id="" class="admin-paperSet-formInput">
                                    <option value="">--Select Program--</option>
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


                            <div class="admin-paperSet-formGroup">
                                <label for="Branch" class="admin-paperSet-formLabel">Select By Courses</label>
                                <select name="" id="" class="admin-paperSet-formInput">
                                    <option value="">--Select Courses--</option>
                                </select>
                            </div>


                        </form>

                        <div class="admin-paperSet-button">
                            <a href="paperSetform.php" class="admin-paperSet-bLink">Create New</a>
                        </div>

                        <div class="table-wraper">
                            <table class="admin-paperSet-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-paperSet-tableHead">S.No</th>
                                        <th class="admin-paperSet-tableHead">Course Name</th>
                                        <th class="admin-paperSet-tableHead">Paper Name</th>
                                        <th class="admin-paperSet-tableHead">Duration</th>
                                        <th class="admin-paperSet-tableHead">Number Of Question</th>
                                        <th class="admin-paperSet-tableHead">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-paperSet-tableData">
                                            <div class="admin-paperSet-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Microsoft Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Advanced Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            2024-10-17 <br>
                                            2024-10-19
                                        </td>

                                        <td class="admin-paperSet-tableData">
                                            50
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            <a href="" class="admin-paperSet-actionLink">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa-solid fa-trash"></i>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-paperSet-tg-button">
                                            </a>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="admin-paperSet-tableData">
                                            <div class="admin-paperSet-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Microsoft Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Advanced Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            2024-10-17 <br>
                                            2024-10-19
                                        </td>

                                        <td class="admin-paperSet-tableData">
                                            50
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            <div class="admin-paperSet-actionLink">
                                                <a href="papersetUpdateform.php" class="admin-paperSet-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-paperSet-actionLink">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-paperSet-tg-button">

                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="admin-paperSet-tableData">
                                            <div class="admin-paperSet-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Microsoft Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Advanced Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            2024-10-17 <br>
                                            2024-10-19
                                        </td>

                                        <td class="admin-paperSet-tableData">
                                            50
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            <a href="" class="admin-paperSet-actionLink">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa-solid fa-trash"></i>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-paperSet-tg-button">
                                            </a>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="admin-paperSet-tableData">
                                            <div class="admin-paperSet-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Microsoft Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            Advanced Excel
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            2024-10-17 <br>
                                            2024-10-19
                                        </td>

                                        <td class="admin-paperSet-tableData">
                                            50
                                        </td>
                                        <td class="admin-paperSet-tableData">
                                            <a href="" class="admin-paperSet-actionLink">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa-solid fa-trash"></i>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-paperSet-tg-button">
                                            </a>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div class="admin-paperSet-tablePage">
                            <div class="admin-paperSet-tablePageinner">
                                <button class="admin-paperSet-tablePagebutton">First</button>
                                <button class="admin-paperSet-tablePagebutton">Page 1 | 2 | 3 | 4 |</button>
                                <button class="admin-paperSet-tablePagebutton">Next »</button>
                                <button class="admin-paperSet-tablePagebutton">Last</button>
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