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
            <div class="admin-subjectForm-container">
                <h2 class="admin-subjectForm-text"><i class="fa fa-file"></i> MANAGE SUBJECTS</h2>

                <form action="">
                    <table class="admin-subjectForm-table">
                        <tbody class="admin-subjectForm-tableBody">
                            <tr class="admin-subjectForm-tableRow">
                                <td class="admin-subjectForm-tableLabel">Program Name :</td>
                                <td class="admin-subjectForm-tableData">
                                    <select name="" id="" class="admin-subjectForm-input">
                                        <option value="">-- Program --</option>
                                        <option value="">Basic Courses</option>
                                        <option value="">Diploma Courses</option>
                                        <option value="">Excel</option>
                                        <option value="">Ms Office</option>
                                        <option value="">O Lavel</option>
                                        <option value="">A Level</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-subjectForm-tableRow">
                                <td class="admin-subjectForm-tableLabel">Courses :</td>
                                <td class="admin-subjectForm-tableData">
                                    <select name="" id="" class="admin-subjectForm-input">
                                        <option value="">--Select Courses--</option>
                                        <option value="cash">MS Word </option>
                                        <option value="credit_card">MS Excel</option>
                                        <option value="bank_transfer">MS Office</option>
                                        <option value="credit_card">Photoshop</option>
                                        <option value="bank_transfer">Diploma</option>
                                    </select>
                                </td>
                            </tr>



                            <tr class="admin-subjectForm-tableRow">
                                <td class="admin-subjectForm-tableLabel">Subject Code :</td>
                                <td class="admin-subjectForm-tableData">
                                    <input type="text" name="Class Name" class="admin-subjectForm-input">
                                </td>
                            </tr>
                            <tr class="admin-subjectForm-tableRow">
                                <td class="admin-subjectForm-tableLabel">Subject Name :</td>
                                <td class="admin-subjectForm-tableData">
                                    <input type="text" name="subject Name" class="admin-subjectForm-input">
                                </td>
                            </tr>
                            <tr class="admin-subjectForm-tableRow">
                                <td class="admin-subjectForm-tableLabel">Total Marks :</td>
                                <td class="admin-subjectForm-tableData">
                                    <input type="text" name="subject Name" class="admin-subjectForm-input">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="admin-subjectForm-form-group">
                        <button type="add new" class="admin-subjectForm-submitButton">Add New</button>
                    </div>
                </form>
            </div>
        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>