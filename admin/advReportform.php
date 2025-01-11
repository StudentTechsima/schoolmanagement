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
            <div class="admin-advReportform-container">
                <h2 class="admin-advReportform-text"><i class="fa fa-file"></i> MANAGE STAFF ADVANCE PAYMENT</h2>

                <form action="">
                    <table class="admin-advReportform-table">
                        <tbody class="admin-advReportform-tableBody">
                            <tr class="admin-advReportform-tableRow">
                                <td class="admin-advReportform-tableLabel">Employee :</td>
                                <td class="admin-advReportform-tableData">
                                    <select name="" id="" class="admin-advReportform-input">
                                        <option value="">--Choose Employee--</option>
                                        <option value="">Rajan Kushawaha</option>
                                        <option value="">Rajeev Patel</option>
                                        <option value="">Rajneesh</option>
                                        <option value="">Vansh</option>

                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-advReportform-tableRow">
                                <td class="admin-advReportform-tableLabel">Date :</td>
                                <td class="admin-advReportform-tableData">
                                    <input type="date" class="admin-advReportform-input">
                                </td>
                            </tr>

                            <tr class="admin-advReportform-tableRow">
                                <td class="admin-advReportform-tableLabel">Advance :</td>
                                <td class="admin-advReportform-tableData">
                                    <input type="text" name="advance" class="admin-advReportform-input"> Rs/-
                                </td>
                            </tr>
                            <tr class="admin-advReportform-tableRow">
                                <td class="admin-advReportform-tableLabel">Advance :</td>
                                <td class="admin-advReportform-tableData">
                                    <textarea name="" id="" cols="30" class="admin-advReportform-input"></textarea>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="admin-advReportform-form-group">
                        <button type="add new" class="admin-advReportform-submitButton">Submit</button>
                    </div>
                </form>
            </div>


        </div>

    </section>


</main>

<?php
include('layout/footer.php');
?>