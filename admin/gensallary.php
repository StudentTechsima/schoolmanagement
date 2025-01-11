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
            <div class="admin-genSallary-container">
                <h2 class="admin-genSallary-text"><i class="fa fa-file"></i> Salary Sheet of Members of STUDENT STUDY POINT & IT EDUCATION For The Month Of January,</h2>
                <form action="" class="admin-genSallary-form">

                    <div class="admin-genSallary-formGroup">
                        <input type="date" class="admin-genSallary-formInput">
                    </div>

                    <div class="admin-genSallary-formGroup">
                        <select name="" id="" class="admin-genSallary-formInput">
                            <option value="">ALL</option>
                            <option value="">STUDENT STUDY POINT & IT EDUCATION</option>
                            <option value="">kalki computers</option>
                            <option value="">Krishna computers</option>

                        </select>
                    </div>

                    <div class="admin-genSallary-formButton">
                        <a href="advReportform.html" class="admin-genSallary-formButtoninput">Print</a>
                    </div>


                </form>



                <table class="admin-genSallary-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-genSallary-tableHead">S.No.</th>
                            <th class="admin-genSallary-tableHead">Particulars</th>
                            <th class="admin-genSallary-tableHead">Emp ID</th>
                            <th class="admin-genSallary-tableHead">No. of Days</th>
                            <th class="admin-genSallary-tableHead">Scale</th>
                            <th class="admin-genSallary-tableHead">Basic Pay</th>
                            <th class="admin-genSallary-tableHead">DA @ 65%</th>
                            <th class="admin-genSallary-tableHead">H.R.A. @ 10%</th>
                            <th class="admin-genSallary-tableHead">Medical Allow.</th>
                            <th class="admin-genSallary-tableHead">Total Sallary</th>
                            <th class="admin-genSallary-tableHead">PF 10%</th>
                            <th class="admin-genSallary-tableHead">Insurance</th>
                            <th class="admin-genSallary-tableHead">University Lic</th>
                            <th class="admin-genSallary-tableHead">Advance Deductaion</th>
                            <th class="admin-genSallary-tableHead">Total Deduction</th>
                            <th class="admin-genSallary-tableHead">Net Payable Amount</th>


                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-genSallary-tableData">
                                <div class="admin-genSallary-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-genSallary-tableData">
                                Rk
                            </td>

                            <td class="admin-genSallary-tableData" colspan="15">
                                <p class="admin-genSallary-innerData">Attendance Not Available</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="admin-genSallary-tableData">
                                <div class="admin-genSallary-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-genSallary-tableData">
                                Rk
                            </td>

                            <td class="admin-genSallary-tableData" colspan="15">
                                <p class="admin-genSallary-innerData">Attendance Not Available</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="admin-genSallary-tableData">
                                <div class="admin-genSallary-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-genSallary-tableData">
                                Rk
                            </td>

                            <td class="admin-genSallary-tableData" colspan="15">
                                <p class="admin-genSallary-innerData">Attendance Not Available</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="admin-genSallary-tableData">
                                <div class="admin-genSallary-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-genSallary-tableData">
                                Rk
                            </td>

                            <td class="admin-genSallary-tableData" colspan="15">
                                <p class="admin-genSallary-innerData">Attendance Not Available</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="admin-genSallary-tableData">
                                <div class="admin-genSallary-containImg">
                                    5.
                                </div>
                            </td>
                            <td class="admin-genSallary-tableData">
                                Rk
                            </td>

                            <td class="admin-genSallary-tableData" colspan="15">
                                <p class="admin-genSallary-innerData">Attendance Not Available</p>
                            </td>

                        </tr>
                        <tr class="admin-genSallary-tableFooter">
                            <td class="admin-genSallary-tableData">
                                <div class="admin-genSallary-containImg">

                                </div>
                            </td>
                            <td class="admin-genSallary-tableData" colspan="3">
                                Total
                            </td>

                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>
                            <td class="admin-genSallary-tableData">0.00</td>

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