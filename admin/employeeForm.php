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
                    <div class="add-staff">
                        <div class="add-head">
                            <h3>ADD STAFF</h3>
                        </div>
                        <!------ 1. personal-details form ---------->
                        <div class="form-group">

                            <div class="form-field">
                                <label class="employee-form-lebel">EMP ID (User Name) <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">password <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">Employee Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">Department <span>*</span></label>
                                <select>
                                    <option value="">choose Department</option>
                                    <option value="sc">COMPUTER TEACHERS</option>
                                    <option value="st">DEVLOPMENT</option>
                                    <option value="gen">TEACHER</option>
                                    <option value="obs">SUPORTIING STAFF</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">Gender <span>*</span></label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">Mobile No<span>*</span></label>
                                <input type="number">
                            </div>


                            <div class="form-field">
                                <label class="employee-form-lebel">Email<span>*</span></label>
                                <input type="email">
                            </div>

                            <div class="form-field">
                                <label class="employee-form-lebel">Address</label>
                                <textarea name="text" id=""></textarea>
                            </div>

                            <div class="form-field">
                                <label class="employee-form-lebel">Date Of Joining <span>*</span></label>
                                <input type="date">
                            </div>

                            <div class="form-field">
                                <label class="employee-form-lebel">Basic Salary(Scale)<span>*</span></label>
                                <input type="text"><span>Rs/-per month</span>
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">TA<span>*</span></label>
                                <input type="text"><span>% of basic salary</span>
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">H.R.A.<span>*</span></label>
                                <input type="text"><span>% of basic salary</span>
                            </div>
                            <div class="form-field">
                                <label class="employee-form-lebel">Casual Leave</label>
                                <input type="text">
                            </div>

                        </div>

                        <div class="form-group">
                            <!-- <div class="form-field"> -->
                            <button type="submit" class="employee-green">Submit</button>
                            <!-- </div> -->
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