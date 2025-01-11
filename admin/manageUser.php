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
            <div class="admin-manageUser-container">
                <h2 class="admin-manageUser-text"><i class="fa fa-file"></i> MANAGE STAFF</h2>
                <div class="admin-manageUser-button">
                    <a href="manageUserform.php" class="admin-manageUser-bLink">Add New User</a>
                </div>

                <table class="admin-manageUser-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-manageUser-tableHead">S.No</th>
                            <th class="admin-manageUser-tableHead">User Name</th>
                            <th class="admin-manageUser-tableHead">Name</th>
                            <th class="admin-manageUser-tableHead">manageUser</th>
                            <th class="admin-manageUser-tableHead">Password</th>
                            <th class="admin-manageUser-tableHead">Permission</th>
                            <th class="admin-manageUser-tableHead">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-manageUser-tableData">
                                5454
                            </td>
                            <td class="admin-manageUser-tableData">
                                RK
                            </td>
                            <td class="admin-manageUser-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-manageUser-tableData">
                                9313697579
                            </td>
                            <td class="admin-manageUser-tableData">
                                user
                            </td>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-innerLink">
                                    <a href="" class="admin-manageUser-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-manageUser-actionLink">
                                        <span>ON</span>
                                    </a>
                                    <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-manageUser-tableData">
                                5454
                            </td>
                            <td class="admin-manageUser-tableData">
                                Rajan Kushwaha
                            </td>
                            <td class="admin-manageUser-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-manageUser-tableData">
                                9313697579
                            </td>
                            <td class="admin-manageUser-tableData">
                                user
                            </td>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-innerLink">
                                    <a href="" class="admin-manageUser-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-manageUser-actionLink">
                                        <span>ON</span>
                                    </a>
                                    <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-manageUser-tableData">
                                5454
                            </td>
                            <td class="admin-manageUser-tableData">
                                Rajan Kushwaha
                            </td>
                            <td class="admin-manageUser-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-manageUser-tableData">
                                9313697579
                            </td>
                            <td class="admin-manageUser-tableData">
                                user
                            </td>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-innerLink">
                                    <a href="" class="admin-manageUser-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-manageUser-actionLink">
                                        <span>ON</span>
                                    </a>
                                    <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-manageUser-tableData">
                                5454
                            </td>
                            <td class="admin-manageUser-tableData">
                                Rajan Kushwaha
                            </td>
                            <td class="admin-manageUser-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-manageUser-tableData">
                                9313697579
                            </td>
                            <td class="admin-manageUser-tableData">
                                user
                            </td>
                            <td class="admin-manageUser-tableData">
                                <div class="admin-manageUser-innerLink">
                                    <a href="" class="admin-manageUser-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-manageUser-actionLink">
                                        <span>ON</span>
                                    </a>
                                    <button class="admin-manageUser-buttonmanageUser"><a href="permission.php" class="admin-manageUser-buttonLink">Permission</a> </button>
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