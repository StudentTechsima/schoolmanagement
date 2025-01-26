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

                    <div class="admin-admitCard-container">
                        <h2 class="admin-admitCard-text"><i class="fa fa-file"></i> MANAGE ADMIT CARD</h2>
                        <form action="" class="admin-admitCard-form">

                            <div class="admin-admitCard-formGroup">
                                <label for="Branch" class="admin-admitCard-formLabel">Search By Name</label>
                                <select name="" id="" class="admin-admitCard-formInput">
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


                            <div class="admin-admitCard-formGroup">
                                <label for="Branch" class="admin-admitCard-formLabel">Courses</label>
                                <select name="" id="" class="admin-admitCard-formInput">
                                    <option value="">--Select Courses--</option>
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


                            <div class="admin-admitCard-formButton">

                                <a href="admitCardform.php" class="admin-admitCard-formButtoninput">Add New</a>
                            </div>


                        </form>



                        <table class="admin-admitCard-tableOuter">
                            <thead>
                                <tr>
                                    <th class="admin-admitCard-tableHead">S.No.</th>
                                    <th class="admin-admitCard-tableHead">REG. NO</th>
                                    <th class="admin-admitCard-tableHead">DETAILS</th>
                                    <th class="admin-admitCard-tableHead">OPERATION</th>


                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="admin-admitCard-tableData">
                                        <div class="admin-admitCard-containImg">
                                            1.
                                        </div>
                                    </td>
                                    <td class="admin-admitCard-tableData">
                                        <div class="admin-admitCard-contain">
                                            <p>UP-99124002 - MUKESH KUMAR</p>
                                            <p>TALLY ERP 9</p>
                                        </div>
                                    </td>
                                    <td class="admin-admitCard-tableData">
                                        <button class="admin-admitCard-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                    </td>
                                    <td class="admin-admitCard-tableData">
                                        <div class="admin-admitCard-innerLink">
                                            <a href="" class="admin-admitCard-actionLink">
                                                <img src="/adminZone/admin/imajes/but_ban_small.png" class="admin-admitCard-tg-button">
                                            </a>
                                            <a href="" class="admin-admitCard-downloadBtn">
                                                <p>Admit Card</p>
                                            </a>
                                            <a href="" class="admin-admitCard-actionLink">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>




                            </tbody>

                        </table>

                    </div>

                </div>

            </section>


        </main>
    </div>
    <!-- main section end -->


    <?php
    include('layout/afooter.php');
    ?>