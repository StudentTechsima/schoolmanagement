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
            <div class="admin-videoClassform-container">
                <h2 class="admin-videoClassform-text"><i class="fa fa-file"></i> STUDY MATERIALS</h2>

                <form action="">
                    <table class="admin-videoClassform-table">
                        <tbody class="admin-videoClassform-tableBody">
                            <tr class="admin-videoClassform-tableRow">
                                <td class="admin-videoClassform-tableLabel">Program* :</td>
                                <td class="admin-videoClassform-tableData">
                                    <select name="" id="" class="admin-videoClassform-input">
                                        <option value="">--Select--</option>
                                        <option value="">Basic Courses</option>
                                        <option value="">Diploma Courses</option>
                                        <option value="">Excel</option>
                                        <option value="">Ms Office</option>
                                        <option value="">O Lavel</option>
                                        <option value="">A Level</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-videoClassform-tableRow">
                                <td class="admin-videoClassform-tableLabel">Courses* :</td>
                                <td class="admin-videoClassform-tableData">
                                    <select name="" id="" class="admin-videoClassform-input">
                                        <option value="">--Select Courses--</option>
                                        <option value="cash">MS Word </option>
                                        <option value="credit_card">MS Excel</option>
                                        <option value="bank_transfer">MS Office</option>
                                        <option value="credit_card">Photoshop</option>
                                        <option value="bank_transfer">Diploma</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-videoClassform-tableRow">
                                <td class="admin-videoClassform-tableLabel">Subject* :</td>
                                <td class="admin-videoClassform-tableData">
                                    <select name="" id="" class="admin-videoClassform-input">
                                        <option value="">--Select Subject--</option>
                                        <option value="cash">MS Excel</option>
                                        <option value="credit_card">MS Word</option>
                                        <option value="bank_transfer">Adove Photoshop</option>
                                        <option value="credit_card">INTERNET & EMAIL</option>
                                        <option value="bank_transfer">MS Powerpoint</option>
                                    </select>
                                </td>
                            </tr>


                            <tr class="admin-videoClassform-tableRow">
                                <td class="admin-videoClassform-tableLabel">File Name*:</td>
                                <td class="admin-videoClassform-tableData">
                                    <input type="text" name="Class Name" class="admin-videoClassform-input">
                                </td>
                            </tr>
                            <tr class="admin-videoClassform-tableRow">
                                <td class="admin-videoClassform-tableLabel">Video Code*:</td>
                                <td class="admin-videoClassform-tableData">
                                    <input type="text" name="video code" class="admin-videoClassform-input">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="admin-videoClassform-form-group">
                        <button type="add new" class="admin-videoClassform-submitButton">Add New</button>
                    </div>
                </form>
            </div>


        </div>

    </section>


</main>

<?php
include('layout/footer.php');
?>