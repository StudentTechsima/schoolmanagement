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
            <div class="admin-studyMaterials-container">
                <h2 class="admin-studyMaterials-text"><i class="fa fa-file"></i> STUDY MATERIALS</h2>
                <form action="" class="admin-studyMaterials-form">

                    <div class="admin-studyMaterials-formGroup">
                        <label for="Branch" class="admin-studyMaterials-formLabel">Search By Program</label>
                        <select name="" id="" class="admin-studyMaterials-formInput">
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


                    <div class="admin-studyMaterials-formGroup">
                        <label for="Branch" class="admin-studyMaterials-formLabel">Courses</label>
                        <select name="" id="" class="admin-studyMaterials-formInput">
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
                    <div class="admin-studyMaterials-formGroup">
                        <label for="Branch" class="admin-studyMaterials-formLabel">Subject</label>
                        <select name="" id="" class="admin-studyMaterials-formInput">
                            <option value="">--Select Subject--</option>

                        </select>
                    </div>

                    <div class="admin-studyMaterials-formButton">

                        <a href="studyMaterialsform.php" class="admin-studyMaterials-formButtoninput">Create New</a>
                    </div>


                </form>



                <table class="admin-studyMaterials-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-studyMaterials-tableHead">S.No.</th>
                            <th class="admin-studyMaterials-tableHead">File</th>
                            <th class="admin-studyMaterials-tableHead">Program Name</th>
                            <th class="admin-studyMaterials-tableHead">Course Name</th>
                            <th class="admin-studyMaterials-tableHead">Subject</th>
                            <th class="admin-studyMaterials-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-studyMaterials-tableData">
                                <div class="admin-studyMaterials-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-studyMaterials-tableData">
                                Class 1
                            </td>
                            <td class="admin-studyMaterials-tableData">
                                Basic Courses
                            </td>
                            <td class="admin-studyMaterials-tableData">
                                MS Excel
                            </td>

                            <td class="admin-studyMaterials-tableData">
                                Lab Project
                            </td>


                            <td class="admin-studyMaterials-tableData">
                                <a href="" class="admin-studyMaterials-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <button class="admin-studyMaterials-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                    <img src="/admin/imajes/but_ban_small.png" class="admin-paperSet-tg-button">
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