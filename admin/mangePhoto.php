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
                    <div class="admin-managePhoto-container">
                        <h2 class="admin-managePhoto-text"><i class="fa fa-file"></i> MANAGE PHOTOS</h2>
                        <form action="" class="admin-ManagePhoto-form">

                            <div class="admin-managePhoto-button">
                                <a href="manPhotoform.php" class="admin-managePhoto-bLink">Add Photot Category</a>

                            </div>


                        </form>

                        <div class="table-wraper">
                            <table class="admin-managePhoto-tableOuter">
                                <thead>
                                    <tr>
                                        <th class="admin-managePhoto-tableHead">S. No.</th>
                                        <th class="admin-managePhoto-tableHead">Photo Gallery Category Name</th>
                                        <th class="admin-managePhoto-tableHead">Photo Add Link</th>
                                        <th class="admin-managePhoto-tableHead">No. of Photo</th>
                                        <th class="admin-managePhoto-tableHead">ACTION</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            Logo
                                        </td>

                                        <td class="admin-managePhoto-tableData">
                                            <button type="submit" class="admin-managePhoto-buttonInner">Add Photo</button>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            1
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-actionLink">
                                                <a href="manphotoUpdateform.php" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-managePhoto-tg-button">

                                            </div>
                                        </td>



                                    </tr>

                                    <tr>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            Logo
                                        </td>

                                        <td class="admin-managePhoto-tableData">
                                            <button type="submit" class="admin-managePhoto-buttonInner">Add Photo</button>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            1
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-actionLink">
                                                <a href="manphotoUpdateform.php" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-managePhoto-tg-button">

                                            </div>
                                        </td>



                                    </tr>

                                    <tr>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            Logo
                                        </td>

                                        <td class="admin-managePhoto-tableData">
                                            <button type="submit" class="admin-managePhoto-buttonInner">Add Photo</button>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            1
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-actionLink">
                                                <a href="manphotoUpdateform.php" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-managePhoto-tg-button">

                                            </div>
                                        </td>



                                    </tr>

                                    <tr>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-containImg">
                                                1.
                                            </div>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            Logo
                                        </td>

                                        <td class="admin-managePhoto-tableData">
                                            <button type="submit" class="admin-managePhoto-buttonInner">Add Photo</button>
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            1
                                        </td>
                                        <td class="admin-managePhoto-tableData">
                                            <div class="admin-managePhoto-actionLink">
                                                <a href="manphotoUpdateform.php" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="admin-managePhoto-actionLink">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <img src="/schoolmanagement/admin/images/but_ban_small.png" class="admin-managePhoto-tg-button">

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