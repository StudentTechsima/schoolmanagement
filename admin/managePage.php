<?php
include('layout/header.php');
?>


<main class="admin-main-section">

    <?php
    include('layout/aside.php');
    ?>

    <section class="admin-container-panel" id="admin-panel">
        <div class="admin-containerPanel-header">
            <h3 class="admin-containerPanel-text">Control Panel</h3>
            <h2 class="admin-containerPanel-controlText"><a href="" class="controlText-link"><i class="fa-solid fa-gauge"></i>
                    Home ›</a><span class="admin-containerPanel-spanText">Dashboard</span></h2>
        </div>

        <div class="admin-containerPanel-content">
            <div class="admin-managePage-container">
                <h2 class="admin-managePage-text"><i class="fa fa-file"></i> MANAGE PAGE</h2>
                <form action="" class="admin-ManagePage-form">
                    <div class="admin-managePage-formGroup">
                        <label for="Branch" class="admin-managePage-formLabel">Select Main Page:</label>
                        <select name="" id="" class="admin-managePage-formInput">
                            <option value="">TOP</option>
                            <option value="">ABOUT US</option>
                            <option value="">HOME PAGE BOX</option>
                            <option value="">HOME PAGE SECOND SECTION</option>
                            <option value="">WELCOME TO HYPERNET</option>
                        </select>
                    </div>

                    <div class="admin-managePage-button">
                        <a href="managePageform.php" class="admin-managePage-bLink">Add New Head</a>

                    </div>


                </form>




                <table class="admin-managePage-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-managePage-tableHead">S. No.</th>
                            <th class="admin-managePage-tableHead" colspan="2">Page Title</th>
                            <th class="admin-managePage-tableHead" colspan="2">Images</th>
                            <th class="admin-managePage-tableHead">ACTION</th>

                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-managePage-tableData">
                                <div class="admin-managePage-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                About Us
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                <img src="/admin/imajes/adminLogo.png" alt="" class="admin-managePage-img">
                            </td>
                            <td class="admin-managePage-tableData">
                                <a href="" class="admin-managePage-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePage-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-managePage-tableData">
                                <div class="admin-managePage-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                Home Page Box
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                <img src="/admin/imajes/adminLogo.png" alt="" class="admin-managePage-img">
                            </td>
                            <td class="admin-managePage-tableData">
                                <a href="" class="admin-managePage-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePage-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-managePage-tableData">
                                <div class="admin-managePage-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                testing 1
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                <img src="/admin/imajes/adminLogo.png" alt="" class="admin-managePage-img">
                            </td>
                            <td class="admin-managePage-tableData">
                                <a href="" class="admin-managePage-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePage-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-managePage-tableData">
                                <div class="admin-managePage-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                testing 1
                            </td>
                            <td class="admin-managePage-tableData" colspan="2">
                                <img src="/admin/imajes/adminLogo.png" alt="" class="admin-managePage-img">
                            </td>
                            <td class="admin-managePage-tableData">
                                <a href="" class="admin-managePage-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePage-tg-button">
                                </a>
                            </td>



                        </tr>


                    </tbody>

                </table>

            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>