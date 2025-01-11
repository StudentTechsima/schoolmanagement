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
            <div class="admin-employee-container">
                <h2 class="admin-employee-text"><i class="fa fa-file"></i> MANAGE STAFF</h2>



                <div class="admin-employee-button">
                    <p>OUR STAFF :</p>
                    <a href="incomeHeadform.html" class="admin-employee-bLink">Add New Employee</a>

                </div>

                <table class="admin-employee-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-employee-tableHead">Emp ID</th>
                            <th class="admin-employee-tableHead">Employee</th>
                            <th class="admin-employee-tableHead">Contact No</th>
                            <th class="admin-employee-tableHead">Basic Salary</th>
                            <th class="admin-employee-tableHead">Department</th>
                            <th class="admin-employee-tableHead">ACTION</th>

                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-employee-tableData">
                                <div class="admin-employee-containImg">
                                    1001
                                </div>
                            </td>
                            <td class="admin-employee-tableData">
                                Rajan
                            </td>
                            <td class="admin-employee-tableData">
                                9865234656
                            </td>
                            <td class="admin-employee-tableData">
                                20000/-
                            </td>
                            <td class="admin-employee-tableData">
                                Computer Teachers
                            </td>
                            <td class="admin-employee-tableData">
                                <div class="admin-employee-innerData">
                                    <a href="" class="admin-employee-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <img src="/adminZone/admin/imajes/p.png" class="admin-employee-tg-button">

                                    <a href="" class="admin-employee-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    <img src=" /adminZone/admin/imajes/but_ban_small.png" class="admin-employee-tg-button">
                                </div>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-employee-tableData">
                                <div class="admin-employee-containImg">
                                    1001
                                </div>
                            </td>
                            <td class="admin-employee-tableData">
                                Rajan
                            </td>
                            <td class="admin-employee-tableData">
                                9865234656
                            </td>
                            <td class="admin-employee-tableData">
                                20000/-
                            </td>
                            <td class="admin-employee-tableData">
                                Computer Teachers
                            </td>
                            <td class="admin-employee-tableData">
                                <div class="admin-employee-innerData">
                                    <a href="" class="admin-employee-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <img src="/adminZone/admin/imajes/p.png" class="admin-employee-tg-button">

                                    <a href="" class="admin-employee-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    <img src=" /adminZone/admin/imajes/but_ban_small.png" class="admin-employee-tg-button">
                                </div>
                            </td>



                        </tr>

                        <tr>
                            <td class="admin-employee-tableData">
                                <div class="admin-employee-containImg">
                                    1001
                                </div>
                            </td>
                            <td class="admin-employee-tableData">
                                Rajan
                            </td>
                            <td class="admin-employee-tableData">
                                9865234656
                            </td>
                            <td class="admin-employee-tableData">
                                20000/-
                            </td>
                            <td class="admin-employee-tableData">
                                Computer Teachers
                            </td>
                            <td class="admin-employee-tableData">
                                <div class="admin-employee-innerData">
                                    <a href="" class="admin-employee-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <img src="/adminZone/admin/imajes/p.png" class="admin-employee-tg-button">

                                    <a href="" class="admin-employee-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    <img src=" /adminZone/admin/imajes/but_ban_small.png" class="admin-employee-tg-button">
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