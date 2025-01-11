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
            <div class="admin-paperSetform-container">
                <h2 class="admin-paperSetform-text"><i class="fa fa-file"></i> MANAGE PAPER SET</h2>
                <p class="admin-paperSet-notes">*Denotes required field</p>

                <form action="">
                    <table class="admin-paperSetform-table">
                        <tbody class="admin-paperSetform-tableBody">
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Course Category :</td>
                                <td class="admin-paperSetform-tableData">
                                    <select name="" id="" class="admin-paperSetform-input">
                                        <option value="">--Select Course Category--</option>
                                        <option value="">Basic Courses</option>
                                        <option value="">Diploma Courses</option>
                                        <option value="">Language Courses</option>
                                        <option value="">Typing Courses</option>
                                        <option value="">Professinol Courses</option>
                                        <option value="">CCC</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableData admin-paperSetform-payment">
                                    <select name="" id="" class="admin-paperSetform-input">
                                        <option value="">--Select--</option>
                                        <option value="cash">Photoshop(BC011) Rs- 1000- 1 Month</option>
                                        <option value="credit_card">Microsoft Excel(BC012)Rs- 1000- 1 Month</option>
                                        <option value="bank_transfer">Page Maker(BC013)Rs- 1000- 1 Month</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Paper Name* :</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="text" name="amount" class="admin-paperSetform-input">
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">No Of Question* :</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="text" class="admin-paperSetform-input">
                                    <span class="red">eg. 200</span>
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Per Question Marks* :</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="text" class="admin-paperSetform-input">
                                    <span class="red">eg. 3</span>
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Minus Marking*:</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="text" class="admin-paperSetform-input">
                                    <span class="red">eg. 1</span>
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Time Limit*:</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="text" class="admin-paperSetform-input">
                                    <span class="red">eg.120 (Time sould be in minute)</span>
                                </td>
                            </tr>

                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Available From:</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="date" name="date" class="admin-paperSetform-input">
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Available To:</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="date" name="date" class="admin-paperSetform-input">
                                </td>
                            </tr>
                            <tr class="admin-paperSetform-tableRow">
                                <td class="admin-paperSetform-tableLabel">Incomes Description :</td>
                                <td class="admin-paperSetform-tableData">
                                    <input type="radio" value="Demo Test" name="a">
                                    <label for="" class="admin-paperSetform-label">Demo Test</label>
                                    <input type="radio" value="Full  Test" name="a">
                                    <label for="" class="admin-paperSetform-label">Full Test</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="admin-paperSetform-form-group">
                        <button type="submit" class="admin-paperSetform-submitButton">Add New</button>
                    </div>
                </form>
            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>