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
            <div class="admin-ytClass-container">
                <h2 class="admin-ytClass-text"><i class="fa fa-file"></i> YOUTUBE LIVE CLASSES</h2>
                <form action="" class="admin-ytClass-form">

                    <div class="admin-ytClass-formGroup">
                        <label for="Branch" class="admin-ytClass-formLabel">Search By Program</label>
                        <select name="" id="" class="admin-ytClass-formInput">
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


                    <div class="admin-ytClass-formGroup">
                        <label for="Branch" class="admin-ytClass-formLabel">Courses</label>
                        <select name="" id="" class="admin-ytClass-formInput">
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
                    <div class="admin-ytClass-formGroup">
                        <label for="Branch" class="admin-ytClass-formLabel">Subject</label>
                        <select name="" id="" class="admin-ytClass-formInput">
                            <option value="">--Select Subject--</option>

                        </select>
                    </div>

                    <div class="admin-ytClass-formButton">

                        <a href="ytClassform.php" class="admin-ytClass-formButtoninput">Create New</a>
                    </div>


                </form>



                <table class="admin-ytClass-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-ytClass-tableHead">S.No</th>
                            <th class="admin-ytClass-tableHead">Youtube Class</th>
                            <th class="admin-ytClass-tableHead">Program Name</th>
                            <th class="admin-ytClass-tableHead">Course Name</th>
                            <th class="admin-ytClass-tableHead">Subject</th>
                            <th class="admin-ytClass-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-ytClass-tableData">
                                <div class="admin-ytClass-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-ytClass-tableData">
                                Class 1

                                <button class="admin-ytClass-btn"><a href="" class="admin-ytClass-btnText">Go To Class</a></button>
                            </td>
                            <td class="admin-ytClass-tableData">
                                Basic Courses
                            </td>
                            <td class="admin-ytClass-tableData">
                                MS Excel
                            </td>

                            <td class="admin-ytClass-tableData">
                                Lab Project
                            </td>


                            <td class="admin-ytClass-tableData">
                                <a href="" class="admin-ytClass-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash"></i>
                                    <button class="admin-ytClass-buttonIcon"><i class="fa-solid fa-user"></i></button>
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