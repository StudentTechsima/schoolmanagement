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
            <div class="admin-expensesReportform-container">
                <h2 class="admin-expensesReportform-text"><i class="fa fa-file"></i> CASHOUT ADD</h2>

                <form action="">
                    <table class="admin-expensesReportform-table">
                        <tbody class="admin-expensesReportform-tableBody">
                            <tr class="admin-expensesReportform-tableRow">
                                <td class="admin-expensesReportform-tableLabel">Head Name :</td>
                                <td class="admin-expensesReportform-tableData">
                                    <select name="" id="" class="admin-expensesReportform-input">
                                        <option value="">--Choose Head--</option>
                                        <option value="">Milk</option>
                                        <option value="">Office Expenses</option>
                                        <option value="">Marker</option>
                                        <option value="">Ink</option>
                                        <option value="">Sugar</option>
                                        <option value="">Gas</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-expensesReportform-tableRow">
                                <td class="admin-expensesReportform-tableLabel">Payment Mode :</td>
                                <td class="admin-expensesReportform-tableData">
                                    <select name="" id="" class="admin-expensesReportform-input">
                                        <option value="">--Select Payment Mode--</option>
                                        <option value="cash">Cash</option>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="bank_transfer">Bank Transfer</option>
                                        <option value="credit_card">Online Mode</option>
                                        <option value="bank_transfer">Chaque</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-expensesReportform-tableRow">
                                <td class="admin-expensesReportform-tableLabel">Incomes Amount(Rs.)* :</td>
                                <td class="admin-expensesReportform-tableData">
                                    <input type="text" name="amount" class="admin-expensesReportform-input">
                                </td>
                            </tr>
                            <tr class="admin-expensesReportform-tableRow">
                                <td class="admin-expensesReportform-tableLabel">Payment Mode Description :</td>
                                <td class="admin-expensesReportform-tableData">
                                    <textarea class="admin-expensesReportform-input" rows="3" name="details"></textarea>
                                </td>
                            </tr>

                            <tr class="admin-expensesReportform-tableRow">
                                <td class="admin-expensesReportform-tableLabel">Incomes Date:</td>
                                <td class="admin-expensesReportform-tableData">
                                    <input type="date" name="date" class="admin-expensesReportform-input">
                                </td>
                            </tr>
                            <tr class="admin-expensesReportform-tableRow">
                                <td class="admin-expensesReportform-tableLabel">Incomes Description :</td>
                                <td class="admin-expensesReportform-tableData">
                                    <textarea class="admin-expensesReportform-input" rows="3" name="details"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="admin-expensesReportform-form-group">
                        <button type="submit" class="admin-expensesReportform-submitButton">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>