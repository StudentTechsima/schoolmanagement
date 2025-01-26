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
                    <div class="admin-manageUserform-container">
                        <h2 class="admin-manageUserform-text"><i class="fa fa-file"></i> Add User</h2>



                        <form action="" class="admin-manageUserform-form">

                            <div class="admin-manageUserform-formGroup">
                                <label for="code" class="admin-manageUserform-formLabel">USER TYPE*</label>
                                <select name="" id="" class="admin-manageUserform-formInput">
                                    <option value="">--Select--</option>
                                    <option value="">user</option>

                                </select>
                            </div>

                            <div class="admin-manageUserform-formGroup">
                                <label for="code" class="admin-manageUserform-formLabel">Name*</label>
                                <input type="text" name="Name" class="admin-manageUserform-formInput">
                            </div>

                            <div class="admin-manageUserform-formGroup">
                                <label for="code" class="admin-manageUserform-formLabel">Contact*</label>
                                <input type="text" name="Contact" class="admin-manageUserform-formInput">
                            </div>

                            <div class="admin-manageUserform-formGroup">
                                <label for="code" class="admin-manageUserform-formLabel">manageUserform*</label>
                                <select name="" id="" class="admin-manageUserform-formInput">
                                    <option value="">--Select--</option>
                                    <option value="">(Hanis) STUDENT STUDY POINT & IT EDUCATION </option>
                                    <option value="">(1901) KALAI COMPUTERS</option>
                                    <option value="">(DEMO)CT</option>
                                    <option value="">(1902)RADAH KRISHNA COMPUTER</option>
                                </select>
                            </div>
                            <div class="admin-manageUserform-formGroup">
                                <label for="code" class="admin-manageUserform-formLabel">Login ID*</label>
                                <input type="text" name="Login ID" class="admin-manageUserform-formInput">
                            </div>
                            <div class="admin-manageUserform-formGroup">
                                <label for="code" class="admin-manageUserform-formLabel">Password*</label>
                                <input type="text" name="Password" class="admin-manageUserform-formInput">
                            </div>

                        </form>




                        <div class="admin-manageUserform-buttonGroup">
                            <button class="admin-manageUserform-button" value="">Exit</button>
                            <button class="admin-manageUserform-button" value="">Submit</button>
                        </div>

                        <hr>
                        <div class="admin-manageUser-notes">
                            <p>* denotes required field ❌ denotes Form No. already Exist or less than 2 digits ✔️ denotes OK</p>
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