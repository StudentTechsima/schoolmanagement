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
            <div class="admin-branchWallet-container">
                <h2 class="admin-branchWallet-text"><i class="fa fa-file"></i> MANAGE BRANCH PAYMENT : (NET PAYMENT:11000)</h2>
                <form action="" class="admin-branchWallet-form">

                    <div class="admin-branchWallet-formGroup">
                        <label for="Branch" class="admin-branchWallet-formLabel">Branch</label>
                        <select name="" id="" class="admin-branchWallet-formInput">
                            <option value="">--Select Branch--</option>
                            <option value="">(1901)Kalki Copmuters</option>
                            <option value="">(Demo) CT</option>
                            <option value="">(0001) Radha Krishna Computer</option>
                            <option value="">(8401) Maa Sharde Computer Academy</option>
                        </select>
                    </div>

                    <div class="admin-branchWallet-formGroup">
                        <label for="Branch" class="admin-branchWallet-formLabel">From Date</label>
                        <input type="date" class="admin-branchWallet-formInput">
                    </div>
                    <div class="admin-branchWallet-formGroup">
                        <label for="Branch" class="admin-branchWallet-formLabel">To Date</label>
                        <input type="date" class="admin-branchWallet-formInput">
                    </div>

                    <div class="admin-branchWallet-formButton">
                        <input type="submit" value="Search" class="admin-branchWallet-formButtoninput">
                    </div>


                </form>

                <div class="admin-branchWallet-button">
                    <a href="managePaymentform.php" class="admin-branchWallet-bLink">Add Payment</a>
                </div>

                <table class="admin-branchWallet-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-branchWallet-tableHead">S.No</th>
                            <th class="admin-branchWallet-tableHead">BRANCH</th>
                            <th class="admin-branchWallet-tableHead">AMT</th>
                            <th class="admin-branchWallet-tableHead">DATE</th>
                            <th class="admin-branchWallet-tableHead">DESCR</th>
                            <th class="admin-branchWallet-tableHead">PAYMENT MODE</th>
                            <th class="admin-branchWallet-tableHead">ACTION</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-branchWallet-tableData">
                                <div class="admin-branchWallet-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-branchWallet-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-branchWallet-tableData">
                                3000
                            </td>
                            <td class="admin-branchWallet-tableData">
                                13/12/2024
                            </td>

                            <td class="admin-branchWallet-tableData">
                                Test
                            </td>
                            <td class="admin-branchWallet-tableData">
                                Online
                            </td>
                            <td class="admin-branchWallet-tableData">
                                <a href="" class="admin-branchWallet-actionLink">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="admin-branchWallet-tableData">
                                <div class="admin-branchWallet-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-branchWallet-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-branchWallet-tableData">
                                2000
                            </td>
                            <td class="admin-branchWallet-tableData">
                                13/12/2024
                            </td>

                            <td class="admin-branchWallet-tableData">
                                abc
                            </td>
                            <td class="admin-branchWallet-tableData">
                                Cash
                            </td>
                            <td class="admin-branchWallet-tableData">
                                <a href="" class="admin-branchWallet-actionLink">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <td class="admin-branchWallet-tableData">
                                <div class="admin-branchWallet-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-branchWallet-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-branchWallet-tableData">
                                1000
                            </td>
                            <td class="admin-branchWallet-tableData">
                                13/12/2024
                            </td>

                            <td class="admin-branchWallet-tableData">
                                Test
                            </td>
                            <td class="admin-branchWallet-tableData">
                                Online
                            </td>
                            <td class="admin-branchWallet-tableData">
                                <a href="" class="admin-branchWallet-actionLink">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <td class="admin-branchWallet-tableData">
                                <div class="admin-branchWallet-containImg">
                                    4.
                                </div>
                            </td>
                            <td class="admin-branchWallet-tableData">
                                STUDENT STUDTY POINT & IT EDUCATION
                            </td>
                            <td class="admin-branchWallet-tableData">
                                5000
                            </td>
                            <td class="admin-branchWallet-tableData">
                                13/12/2024
                            </td>

                            <td class="admin-branchWallet-tableData">
                                abc
                            </td>
                            <td class="admin-branchWallet-tableData">
                                Cash
                            </td>
                            <td class="admin-branchWallet-tableData">
                                <a href="" class="admin-branchWallet-actionLink">
                                    <i class="fa-solid fa-trash"></i>
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