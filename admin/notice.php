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
            <div class="admin-notice-container">
                <h2 class="admin-notice-text"><i class="fa fa-file"></i> NEWS & NOTICE</h2>
                <form action="" class="admin-notice-form">


                    <div class="admin-notice-button">
                        <a href="noticeForm.php" class="admin-notice-bLink">Add New News</a>
                    </div>


                </form>




                <table class="admin-notice-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-notice-tableHead">S. No.</th>
                            <th class="admin-notice-tableHead" colspan="2">News Title</th>
                            <th class="admin-notice-tableHead" colspan="2">Photo</th>
                            <th class="admin-notice-tableHead">ACTION</th>

                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-notice-tableData">
                                <div class="admin-notice-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                Welcome to My Instiute
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                <p><a href="" class="admin-notice-innerData">ID</a></p>
                            </td>
                            <td class="admin-notice-tableData">
                                <a href="" class="admin-notice-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-notice-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-notice-tableData">
                                <div class="admin-notice-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                About Us
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                <p><a href="" class="admin-notice-innerData">ID</a></p>
                            </td>
                            <td class="admin-notice-tableData">
                                <a href="" class="admin-notice-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-notice-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-notice-tableData">
                                <div class="admin-notice-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                Suman
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                <p><a href="" class="admin-notice-innerData">NO</a></p>
                            </td>
                            <td class="admin-notice-tableData">
                                <a href="" class="admin-notice-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-notice-tg-button">
                                </a>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-notice-tableData">
                                <div class="admin-notice-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                Today is Holiday
                            </td>
                            <td class="admin-notice-tableData" colspan="2">
                                <p><a href="" class="admin-notice-innerData">NO</a></p>
                            </td>
                            <td class="admin-notice-tableData">
                                <a href="" class="admin-notice-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-notice-tg-button">
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