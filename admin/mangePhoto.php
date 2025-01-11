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
            <div class="admin-managePhoto-container">
                <h2 class="admin-managePhoto-text"><i class="fa fa-file"></i> MANAGE PHOTOS</h2>
                <form action="" class="admin-ManagePhoto-form">

                    <div class="admin-managePhoto-button">
                        <a href="manPhotoform.php" class="admin-managePhoto-bLink">Add Photot Category</a>

                    </div>


                </form>
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
                                <a href="" class="admin-managePhoto-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePhoto-tg-button">
                                </a>
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
                                <a href="" class="admin-managePhoto-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePhoto-tg-button">
                                </a>
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
                                <a href="" class="admin-managePhoto-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePhoto-tg-button">
                                </a>
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
                                <a href="" class="admin-managePhoto-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-managePhoto-tg-button">
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