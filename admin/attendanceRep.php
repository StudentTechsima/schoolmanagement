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
            <div class="admin-attendanceRep-container">
                <h2 class="admin-attendanceRep-text"><i class="fa fa-file"></i> MANAGE STAFF ATTENDANCE</h2>
                <form action="" class="admin-attendanceRep-form">

                    <div class="admin-attendanceRep-formGroup">
                        <label for="" class="admin-attendanceRep-formLabel">Attendance On</label>
                        <input type="date" class="admin-attendanceRep-formInput">
                    </div>
                </form>



                <table class="admin-attendanceRep-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-attendanceRep-tableHead">S.No.</th>
                            <th class="admin-attendanceRep-tableHead">Employee Name</th>
                            <th class="admin-attendanceRep-tableHead">Department</th>
                            <th class="admin-attendanceRep-tableHead">Designation</th>
                            <th class="admin-attendanceRep-tableHead">Attendance</th>
                            <th class="admin-attendanceRep-tableHead">C.L. Balance</th>
                            <th class="admin-attendanceRep-tableHead">Adjust C.L.</th>
                            <th class="admin-attendanceRep-tableHead"></th>



                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-attendanceRep-tableData">
                                <div class="admin-attendanceRep-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                Rk
                            </td>

                            <td class="admin-attendanceRep-tableData">Sals Department</td>
                            <td class="admin-attendanceRep-tableData"></td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                200
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData"></td>
                        </tr>
                        <tr>
                            <td class="admin-attendanceRep-tableData">
                                <div class="admin-attendanceRep-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                Rk
                            </td>

                            <td class="admin-attendanceRep-tableData">Sals Department</td>
                            <td class="admin-attendanceRep-tableData"></td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                1
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData"></td>
                        </tr>
                        <tr>
                            <td class="admin-attendanceRep-tableData">
                                <div class="admin-attendanceRep-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                Rk
                            </td>

                            <td class="admin-attendanceRep-tableData">Sals Department</td>
                            <td class="admin-attendanceRep-tableData"></td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                5
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData"></td>
                        </tr>
                        <tr>
                            <td class="admin-attendanceRep-tableData">
                                <div class="admin-attendanceRep-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                Rk
                            </td>

                            <td class="admin-attendanceRep-tableData">Sals Department</td>
                            <td class="admin-attendanceRep-tableData"></td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                2
                            </td>
                            <td class="admin-attendanceRep-tableData">
                                <input type="text" class="admin-attendanceRep-innerInput">
                            </td>
                            <td class="admin-attendanceRep-tableData"></td>
                        </tr>
                    </tbody>


                </table>
                <div class="admin-attendanceRep-deductButton ">
                    <a href="#" class="admin-attendanceRep-deductBtn">Update</a>
                </div>
            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>