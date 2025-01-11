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
            <div class="admin-incomeReportform-container">
                <h2 class="admin-incomeReportform-text"><i class="fa fa-file"></i> CASHIN ADD</h2>

                <form action="">
                    <table class="admin-incomeReportform-table">
                        <tbody class="admin-incomeReportform-tableBody">
                            <tr class="admin-incomeReportform-tableRow">
                                <td class="admin-incomeReportform-tableLabel">Head Name :</td>
                                <td class="admin-incomeReportform-tableData">
                                    <select name="" id="" class="admin-incomeReportform-input">
                                        <option value="">--Choose Head--</option>
                                        <option value="">--All--</option>
                                        <option value="">Dev Shankar</option>
                                        <option value="">Installement</option>
                                        <option value="">Late Fee</option>
                                        <option value="">Other Fine</option>
                                        <option value="">Late Fee</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-incomeReportform-tableRow">
                                <td class="admin-incomeReportform-tableLabel">Payment Mode :</td>
                                <td class="admin-incomeReportform-tableData">
                                    <select name="" id="" class="admin-incomeReportform-input">
                                        <option value="">--Select Payment Mode--</option>
                                        <option value="cash">Cash</option>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="bank_transfer">Bank Transfer</option>
                                        <option value="credit_card">Online Mode</option>
                                        <option value="bank_transfer">Chaque</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-incomeReportform-tableRow">
                                <td class="admin-incomeReportform-tableLabel">Incomes Amount(Rs.)* :</td>
                                <td class="admin-incomeReportform-tableData">
                                    <input type="text" name="amount" class="admin-incomeReportform-input">
                                </td>
                            </tr>
                            <tr class="admin-incomeReportform-tableRow">
                                <td class="admin-incomeReportform-tableLabel">Payment Mode Description :</td>
                                <td class="admin-incomeReportform-tableData">
                                    <textarea class="admin-incomeReportform-input" rows="3" name="details"></textarea>
                                </td>
                            </tr>

                            <tr class="admin-incomeReportform-tableRow">
                                <td class="admin-incomeReportform-tableLabel">Incomes Date:</td>
                                <td class="admin-incomeReportform-tableData">
                                    <input type="date" name="date" class="admin-incomeReportform-input">
                                </td>
                            </tr>
                            <tr class="admin-incomeReportform-tableRow">
                                <td class="admin-incomeReportform-tableLabel">Incomes Description :</td>
                                <td class="admin-incomeReportform-tableData">
                                    <textarea class="admin-incomeReportform-input" rows="3" name="details"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="admin-incomeReportform-form-group">
                        <button type="submit" class="admin-incomeReportform-submitButton">SUBMIT</button>
                    </div>
                </form>
            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>