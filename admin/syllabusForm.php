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
            <div class="admin-syllabusForm-container">
                <h2 class="admin-syllabusForm-text"><i class="fa fa-file"></i> SYLLABUS</h2>

                <form action="">
                    <table class="admin-syllabusForm-table">
                        <tbody class="admin-syllabusForm-tableBody">
                            <tr class="admin-syllabusForm-tableRow">
                                <td class="admin-syllabusForm-tableLabel">Program* :</td>
                                <td class="admin-syllabusForm-tableData">
                                    <select name="" id="" class="admin-syllabusForm-input">
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
                            <tr class="admin-syllabusForm-tableRow">
                                <td class="admin-syllabusForm-tableLabel">Courses* :</td>
                                <td class="admin-syllabusForm-tableData">
                                    <select name="" id="" class="admin-syllabusForm-input">
                                        <option value="">--Select Courses--</option>
                                        <option value="cash">MS Word </option>
                                        <option value="credit_card">MS Excel</option>
                                        <option value="bank_transfer">MS Office</option>
                                        <option value="credit_card">Photoshop</option>
                                        <option value="bank_transfer">Diploma</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-syllabusForm-tableRow">
                                <td class="admin-syllabusForm-tableLabel">Subject* :</td>
                                <td class="admin-syllabusForm-tableData">
                                    <select name="" id="" class="admin-syllabusForm-input">
                                        <option value="">--Select Subject--</option>
                                        <option value="cash">MS Excel</option>
                                        <option value="credit_card">MS Word</option>
                                        <option value="bank_transfer">Adove Photoshop</option>
                                        <option value="credit_card">INTERNET & EMAIL</option>
                                        <option value="bank_transfer">MS Powerpoint</option>
                                    </select>
                                </td>
                            </tr>


                            <tr class="admin-syllabusForm-tableRow">
                                <td class="admin-syllabusForm-tableLabel">File Name*:</td>
                                <td class="admin-syllabusForm-tableData">
                                    <input type="text" name="Class Name" class="admin-syllabusForm-input">
                                </td>
                            </tr>
                            <tr class="admin-syllabusForm-tableRow">
                                <td class="admin-syllabusForm-tableLabel">File*:</td>
                                <td class="admin-syllabusForm-tableData">
                                    <input type="file" name="File" class="admin-syllabusForm-input">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="admin-syllabusForm-form-group">
                        <button type="add new" class="admin-syllabusForm-submitButton">Add New</button>
                    </div>
                </form>
            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>