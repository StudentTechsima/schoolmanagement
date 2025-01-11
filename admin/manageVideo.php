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
            <div class="admin-manageVideo-container">
                <h2 class="admin-manageVideo-text"><i class="fa fa-file"></i> MANAGE WEBSITE VIDEO</h2>
                <form action="" class="admin-ManageVideo-form">

                    <div class="admin-manageVideo-button">
                        <a href="manVideoform.php" class="admin-manageVideo-bLink">Add Video Category</a>

                    </div>


                </form>

                <table class="admin-manageVideo-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-manageVideo-tableHead">S. No.</th>
                            <th class="admin-manageVideo-tableHead">Video Gallery Category Name</th>
                            <th class="admin-manageVideo-tableHead">Video Add Link</th>
                            <th class="admin-manageVideo-tableHead">No. of Video</th>
                            <th class="admin-manageVideo-tableHead">Video Category ID</th>
                            <th class="admin-manageVideo-tableHead">ACTION</th>

                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-manageVideo-tableData">
                                <div class="admin-manageVideo-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-manageVideo-tableData">
                                Logo
                            </td>

                            <td class="admin-manageVideo-tableData">
                                <button type="submit" class="admin-manageVideo-buttonInner">Add Video</button>

                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                <a href="" class="admin-manageVideo-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-manageVideo-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-manageVideo-tableData">
                                <div class="admin-manageVideo-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-manageVideo-tableData">
                                Logo
                            </td>

                            <td class="admin-manageVideo-tableData">
                                <button type="submit" class="admin-manageVideo-buttonInner">Add Video</button>

                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                <a href="" class="admin-manageVideo-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-manageVideo-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-manageVideo-tableData">
                                <div class="admin-manageVideo-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-manageVideo-tableData">
                                Logo
                            </td>

                            <td class="admin-manageVideo-tableData">
                                <button type="submit" class="admin-manageVideo-buttonInner">Add Video</button>

                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                <a href="" class="admin-manageVideo-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-manageVideo-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-manageVideo-tableData">
                                <div class="admin-manageVideo-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-manageVideo-tableData">
                                Logo
                            </td>

                            <td class="admin-manageVideo-tableData">
                                <button type="submit" class="admin-manageVideo-buttonInner">Add Video</button>

                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                1
                            </td>
                            <td class="admin-manageVideo-tableData">
                                <a href="" class="admin-manageVideo-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-manageVideo-tg-button">
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