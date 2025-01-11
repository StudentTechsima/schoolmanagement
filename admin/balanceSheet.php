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
            <div class="admin-balanceSheet-container">
                <h2 class="admin-balanceSheet-text"><i class="fa fa-file"></i> REPORT BOTH</h2>
                <form action="" class="admin-balanceSheet-form">



                    <div class="admin-balanceSheet-formGroup">
                        <label for="Branch" class="admin-balanceSheet-formLabel">Start Date</label>
                        <input type="date" class="admin-balanceSheet-formInput">
                    </div>
                    <div class="admin-balanceSheet-formGroup">
                        <label for="Branch" class="admin-balanceSheet-formLabel">End Date</label>
                        <input type="date" class="admin-balanceSheet-formInput">
                    </div>

                    <div class="admin-balanceSheet-formButton">
                        <input type="submit" value="Search" class="admin-balanceSheet-formButtoninput">
                    </div>


                </form>

                <div class="admin-balanceSheet-button">
                    <a href="#" class="admin-balanceSheet-bLink">Export</a>

                </div>

                <table class="admin-balanceSheet-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-balanceSheet-tableHead">DATE</th>
                            <th class="admin-balanceSheet-tableHead" colspan="2">CASH IN (FEE)</th>
                            <th class="admin-balanceSheet-tableHead" colspan="5">CASH OUT</th>

                        </tr>
                        <tr>
                            <th class="admin-balanceSheet-tableHead"></th>
                            <th class="admin-balanceSheet-tableHead">Cash Deposite</th>
                            <th class="admin-balanceSheet-tableHead">Chaque/Bank</th>
                            <th class="admin-balanceSheet-tableHead">Cash</th>
                            <th class="admin-balanceSheet-tableHead">Details</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-balanceSheet-tableData">
                                <div class="admin-balanceSheet-containImg">
                                    17-12-2024
                                </div>
                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>


                        </tr>

                        <tr>
                            <td class="admin-balanceSheet-tableData">
                                <div class="admin-balanceSheet-containImg">
                                    17-12-2024
                                </div>
                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>


                        </tr>

                        <tr>
                            <td class="admin-balanceSheet-tableData">
                                <div class="admin-balanceSheet-containImg">
                                    17-12-2024
                                </div>
                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>


                        </tr>
                        <tr>
                            <td class="admin-balanceSheet-tableData">
                                <div class="admin-balanceSheet-containImg">
                                    17-12-2024
                                </div>
                            </td>
                            <td class="admin-balanceSheet-tableData">
                                Rajneesh Prajapati 3000rs
                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>


                        </tr>
                        <tr>
                            <td class="admin-balanceSheet-tableData">
                                <div class="admin-balanceSheet-containImg">
                                    17-12-2024
                                </div>
                            </td>
                            <td class="admin-balanceSheet-tableData">
                                Naveen Kumar 1000rs
                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>


                        </tr>
                        <tr>
                            <td class="admin-balanceSheet-tableData">
                                <div class="admin-balanceSheet-containImg">

                                </div>
                            </td>
                            <td class="admin-balanceSheet-tableData">
                                4000 Rs
                            </td>
                            <td class="admin-balanceSheet-tableData">

                            </td>
                            <td class="admin-balanceSheet-tableData">
                                Rs.
                            </td>
                            <td class="admin-balanceSheet-tableData">
                                Balance Amt:4000
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