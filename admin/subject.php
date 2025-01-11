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
            <div class="admin-subject-container">
                <h2 class="admin-subject-text"><i class="fa fa-file"></i> MANAGE SUBJECT</h2>
                <form action="" class="admin-subject-form">

                    <div class="admin-subject-formGroup">
                        <select name="" id="" class="admin-subject-formInput">
                            <option value="">---Select Program---</option>
                            <option value="">Microsoft Excel</option>
                            <option value="">Microsoft Word</option>
                            <option value="">Adobe Photoshop</option>
                            <option value="">Certificate Basic Computer</option>
                            <option value="">Page Maker</option>
                            <option value="">Master In computer Science</option>
                            <option value="">Telly ERP 9</option>
                        </select>
                    </div>

                    <div class="admin-subject-formGroup">
                        <select name="" id="" class="admin-subject-formInput">
                            <option value="">---Select Courses---</option>
                            <option value="">Microsoft Excel</option>
                            <option value="">Microsoft Word</option>
                            <option value="">Adobe Photoshop</option>
                            <option value="">Certificate Basic Computer</option>
                            <option value="">Page Maker</option>
                            <option value="">Master In computer Science</option>
                            <option value="">Telly ERP 9</option>
                        </select>
                    </div>


                    <div class="admin-subject-formButton">

                        <a href="subjectForm.php" class="admin-subject-formButtoninput"> New Subject</a>
                    </div>


                </form>



                <table class="admin-subject-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-subject-tableHead">S.No.</th>
                            <th class="admin-subject-tableHead">Program Name</th>
                            <th class="admin-subject-tableHead">Courses Name</th>
                            <th class="admin-subject-tableHead">Subject Name</th>
                            <th class="admin-subject-tableHead">Marks</th>
                            <th class="admin-subject-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-subject-tableData">
                                <div class="admin-subject-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-subject-tableData">
                                Professinal Courses
                            </td>
                            <td class="admin-subject-tableData">
                                CERTIFICATE BASIC COMPUTER
                            </td>
                            <td class="admin-subject-tableData">
                                Network Problem Terminal
                            </td>

                            <td class="admin-subject-tableData">
                                100
                            </td>


                            <td class="admin-subject-tableData">
                                <a href="" class="admin-subject-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <img src="/admin/imajes/but_ban_small.png">
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