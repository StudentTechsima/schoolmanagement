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
            <div class="admin-courses-container">
                <h2 class="admin-courses-text"><i class="fa fa-file"></i> MANAGE COURSES</h2>
                <form action="" class="admin-courses-form">

                    <div class="admin-courses-formGroup">
                        <select name="" id="" class="admin-courses-formInput">
                            <option value="">TOP</option>
                            <option value="">Microsoft Excel</option>
                            <option value="">Microsoft Word</option>
                            <option value="">Adobe Photoshop</option>
                            <option value="">Certificate Basic Computer</option>
                            <option value="">Page Maker</option>
                            <option value="">Master In computer Science</option>
                            <option value="">Telly ERP 9</option>
                        </select>
                    </div>

                    <div class="admin-courses-formButton">

                        <a href="courseForm.php" class="admin-courses-formButtoninput">Add New Courses</a>
                    </div>


                </form>



                <table class="admin-courses-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-courses-tableHead">S.No.</th>
                            <th class="admin-courses-tableHead">Courses Name</th>
                            <th class="admin-courses-tableHead">Fee</th>
                            <th class="admin-courses-tableHead">Duration</th>
                            <th class="admin-courses-tableHead">Admision Fee Per Student</th>
                            <th class="admin-courses-tableHead">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-courses-tableData">
                                <div class="admin-courses-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-courses-tableData">
                                CERTIFICATE BASIC COMPUTER
                            </td>
                            <td class="admin-courses-tableData">
                                INR. 10000
                            </td>
                            <td class="admin-courses-tableData">
                                3 Month
                            </td>

                            <td class="admin-courses-tableData">
                                INR. 200
                            </td>


                            <td class="admin-courses-tableData">
                                <a href="" class="admin-courses-actionLink">
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