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
                    <div class="admin-zoomForm-container">
                        <h2 class="admin-zoomForm-text"><i class="fa fa-file"></i> ZOOM LIVE CLASSES</h2>

                        <form action="">
                            <table class="admin-zoomForm-table">
                                <tbody class="admin-zoomForm-tableBody">
                                    <tr class="admin-zoomForm-tableRow">
                                        <td class="admin-zoomForm-tableLabel">Program* :</td>
                                        <td class="admin-zoomForm-tableData">
                                            <select name="" id="" class="admin-zoomForm-input">
                                                <option value="">--Choose Head--</option>
                                                <option value="">Basic Courses</option>
                                                <option value="">Diploma Courses</option>
                                                <option value="">Excel</option>
                                                <option value="">Ms Office</option>
                                                <option value="">O Lavel</option>
                                                <option value="">A Level</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="admin-zoomForm-tableRow">
                                        <td class="admin-zoomForm-tableLabel">Courses* :</td>
                                        <td class="admin-zoomForm-tableData">
                                            <select name="" id="" class="admin-zoomForm-input">
                                                <option value="">--Select Courses--</option>
                                                <option value="cash">MS Word </option>
                                                <option value="credit_card">MS Excel</option>
                                                <option value="bank_transfer">MS Office</option>
                                                <option value="credit_card">Photoshop</option>
                                                <option value="bank_transfer">Diploma</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="admin-zoomForm-tableRow">
                                        <td class="admin-zoomForm-tableLabel">Subject* :</td>
                                        <td class="admin-zoomForm-tableData">
                                            <select name="" id="" class="admin-zoomForm-input">
                                                <option value="">--Select Subject--</option>
                                                <option value="cash">MS Excel</option>
                                                <option value="credit_card">MS Word</option>
                                                <option value="bank_transfer">Adove Photoshop</option>
                                                <option value="credit_card">INTERNET & EMAIL</option>
                                                <option value="bank_transfer">MS Powerpoint</option>
                                            </select>
                                        </td>
                                    </tr>


                                    <tr class="admin-zoomForm-tableRow">
                                        <td class="admin-zoomForm-tableLabel">Class Name*:</td>
                                        <td class="admin-zoomForm-tableData">
                                            <input type="text" name="Class Name" class="admin-zoomForm-input">
                                        </td>
                                    </tr>
                                    <tr class="admin-zoomForm-tableRow">
                                        <td class="admin-zoomForm-tableLabel">Class Code*:</td>
                                        <td class="admin-zoomForm-tableData">
                                            <input type="text" name="Class Code" class="admin-zoomForm-input">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="admin-zoomForm-form-group">
                                <button type="add new" class="admin-zoomForm-submitButton">Add New</button>
                            </div>
                        </form>
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