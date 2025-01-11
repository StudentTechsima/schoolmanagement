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
            <div class="admin-branch-container">
                <h2 class="admin-branch-text"><i class="fa fa-file"></i> MANGE BATCH</h2>
                <div class="admin-branch-button">
                    <a href="empDepform.php" class="admin-branch-bLink">Add New Department</a>
                </div>

                <table class="admin-branch-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-branch-tableHead">S.No</th>
                            <th class="admin-branch-tableHead">Department Name</th>
                            <th class="admin-branch-tableHead">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="admin-branch-tableData">
                                <div class="admin-branch-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-branch-tableData">
                                Computer Teachers
                            </td>
                            <td class="admin-branch-tableData">
                                <div class="admin-branch-innerData">
                                    <a href="" class="admin-branch-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-branch-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <img src=" /adminZone/admin/imajes/but_ban_small.png" class="admin-syllabus-tg-button">
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td class="admin-branch-tableData">
                                <div class="admin-branch-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-branch-tableData">
                                Computer Teachers
                            </td>
                            <td class="admin-branch-tableData">

                                <div class="admin-branch-innerData">
                                    <a href="" class="admin-branch-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-branch-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <img src=" /adminZone/admin/imajes/but_ban_small.png" class="admin-syllabus-tg-button">
                                </div>


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