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
            <div class="admin-advanceReport-container">
                <h2 class="admin-advanceReport-text"><i class="fa fa-file"></i> MANAGE STAFF ADVANCE</h2>
                <form action="" class="admin-advanceReport-form">

                    <div class="admin-advanceReport-formGroup">
                        <label for="">Department Name</label>
                        <input type="date" class="admin-advanceReport-formInput">
                    </div>

                    <div class="admin-advanceReport-formButton">
                        <a href="advReportform.php" class="admin-advanceReport-formButtoninput">Pay Advance</a>
                    </div>


                </form>



                <table class="admin-advanceReport-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-advanceReport-tableHead">S.No.</th>
                            <th class="admin-advanceReport-tableHead">Employee</th>
                            <th class="admin-advanceReport-tableHead">Advance Due</th>
                            <th class="admin-advanceReport-tableHead">Deduct Advance This Month</th>
                            <th class="admin-advanceReport-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-advanceReport-tableData">
                                <div class="admin-advanceReport-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-advanceReport-tableData">
                                Rk
                            </td>
                            <td class="admin-advanceReport-tableData">
                                Rs. 10000/-
                            </td>
                            <td class="admin-advanceReport-tableData">
                                <input type="text" class="admin-advanceReport-formInput">
                            </td>

                            <td class="admin-advanceReport-tableData">
                                <a href="" class="admin-advanceReport-actionLink">
                                    <img src="/admin/imajes/serch.webp" class="admin-advanceReport-img">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="admin-advanceReport-tableData">
                                <div class="admin-advanceReport-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-advanceReport-tableData">
                                Rk
                            </td>
                            <td class="admin-advanceReport-tableData">
                                Rs. 10000/-
                            </td>
                            <td class="admin-advanceReport-tableData">
                                <input type="text" class="admin-advanceReport-formInput">
                            </td>

                            <td class="admin-advanceReport-tableData">
                                <a href="" class="admin-advanceReport-actionLink">
                                    <img src="/admin/imajes/serch.webp" class="admin-advanceReport-img">
                                </a>
                            </td>
                        </tr>




                    </tbody>


                </table>

                <div class="admin-advanceReport-deductButton ">
                    <a href="#" class="admin-advanceReport-deductBtn">Deduct Advance</a>
                </div>


            </div>


        </div>

    </section>


</main>



<?php
include('layout/footer.php');
?>