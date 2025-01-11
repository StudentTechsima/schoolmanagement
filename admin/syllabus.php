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
            <div class="admin-syllabus-container">
                <h2 class="admin-syllabus-text"><i class="fa fa-file"></i> SYLLABUS</h2>
                <form action="" class="admin-syllabus-form">

                    <div class="admin-syllabus-formGroup">
                        <label for="Branch" class="admin-syllabus-formLabel">Search By Program</label>
                        <select name="" id="" class="admin-syllabus-formInput">
                            <option value="">--Select By Program--</option>
                            <option value="">Microsoft Excel</option>
                            <option value="">Microsoft Word</option>
                            <option value="">Adobe Photoshop</option>
                            <option value="">Certificate Basic Computer</option>
                            <option value="">Page Maker</option>
                            <option value="">Master In computer Science</option>
                            <option value="">Telly ERP 9</option>
                        </select>
                    </div>


                    <div class="admin-syllabus-formGroup">
                        <label for="Branch" class="admin-syllabus-formLabel">Courses</label>
                        <select name="" id="" class="admin-syllabus-formInput">
                            <option value="">--Select Branch--</option>
                            <option value="">Shanti Institue Technology and Management (SITM) </option>
                            <option value="">CCC</option>
                            <option value="">CCA</option>
                            <option value="">Artificial Intelligence</option>
                            <option value="">Diploma Courses</option>
                            <option value="">CCA</option>
                            <option value="">Artificial Intelligence</option>
                            <option value="">Diploma Courses</option>
                        </select>
                    </div>
                    <div class="admin-syllabus-formGroup">
                        <label for="Branch" class="admin-syllabus-formLabel">Subject</label>
                        <select name="" id="" class="admin-syllabus-formInput">
                            <option value="">--Select Subject--</option>

                        </select>
                    </div>

                    <div class="admin-syllabus-formButton">

                        <a href="syllabusForm.php" class="admin-syllabus-formButtoninput">Create New</a>
                    </div>


                </form>



                <table class="admin-syllabus-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-syllabus-tableHead">S.No.</th>
                            <th class="admin-syllabus-tableHead">File</th>
                            <th class="admin-syllabus-tableHead">Program Name</th>
                            <th class="admin-syllabus-tableHead">Course Name</th>
                            <th class="admin-syllabus-tableHead">Subject</th>
                            <th class="admin-syllabus-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-syllabus-tableData">
                                <div class="admin-syllabus-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-syllabus-tableData">
                                Class 1
                            </td>
                            <td class="admin-syllabus-tableData">
                                Basic Courses
                            </td>
                            <td class="admin-syllabus-tableData">
                                MS Excel
                            </td>

                            <td class="admin-syllabus-tableData">
                                Lab Project
                            </td>


                            <td class="admin-syllabus-tableData">
                                <div class="admin-syllabus-innerData">
                                    <a href="" class="admin-syllabus-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-syllabus-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <button class="admin-syllabus-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                    <img src=" /adminZone/admin/imajes/but_ban_small.png" class="admin-syllabus-tg-button">
                                </div>

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