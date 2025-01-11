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
            <div class="admin-paperQuestion-container">
                <h2 class="admin-paperQuestion-text"><i class="fa fa-file"></i> MANAGE QUESTION</h2>

                <form action="" class="admin-paperQuestion-form">

                    <div class="admin-paperQuestion-formGroup">
                        <!-- <label for="Branch" class="admin-paperQuestion-formLabel">Select By Program:</label> -->
                        <select name="" id="" class="admin-paperQuestion-formInput">
                            <option value="">--ALL--</option>
                            <option value="">Basic Courses</option>
                            <option value="">Microsoft Excel</option>
                            <option value="">Microsoft Word</option>
                            <option value="">Adobe Photoshop</option>
                            <option value="">Certificate Basic Computer</option>
                            <option value="">Page Maker</option>
                            <option value="">Master In computer Science</option>
                            <option value="">Telly ERP 9</option>
                        </select>
                    </div>


                    <div class="admin-paperQuestion-formGroup">
                        <select name="" id="" class="admin-paperQuestion-formInput">
                            <option value="">--ALL--</option>
                        </select>
                    </div>
                    <div class="admin-paperQuestion-formGroup">
                        <select name="" id="" class="admin-paperQuestion-formInput">
                            <option value="">--ALL--</option>
                        </select>
                    </div>
                    <div class="admin-paperQuestion-formGroup">
                        <select name="" id="" class="admin-paperQuestion-formInput">
                            <option value="">--ALL--</option>
                            <option value="">Excel</option>
                        </select>
                    </div>


                </form>


                <table class="admin-paperQuestion-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-paperQuestion-tableHead">S.No</th>
                            <th class="admin-paperQuestion-tableHead">Question</th>
                            <th class="admin-paperQuestion-tableHead">Check</th>
                            <th class="admin-paperQuestion-tableHead">Details</th>
                            <th class="admin-paperQuestion-tableHead">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-paperQuestion-tableData">
                                <div class="admin-paperQuestion-containImg">
                                    1.
                                </div>
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                What is Volatile memory
                            </td>
                            <td class="admin-paperQuestion-tableData">
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                <a href="#">
                                    <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                </a>
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                <a href="" class="admin-paperQuestion-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/letter-f.png" class="admin-paperQuestion-tg-button">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </a>
                            </td>

                        </tr>

                        <tr>
                            <td class="admin-paperQuestion-tableData">
                                <div class="admin-paperQuestion-containImg">
                                    2.
                                </div>
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                What is Volatile memory
                            </td>
                            <td class="admin-paperQuestion-tableData">
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                <a href="#">
                                    <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                </a>
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                <a href="" class="admin-paperQuestion-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/letter-f.png" class="admin-paperQuestion-tg-button">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </a>
                            </td>

                        </tr>

                        <tr>
                            <td class="admin-paperQuestion-tableData">
                                <div class="admin-paperQuestion-containImg">
                                    3.
                                </div>
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                What is Volatile memory
                            </td>
                            <td class="admin-paperQuestion-tableData">
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                <a href="#">
                                    <button class="admin-studentReport-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                </a>
                            </td>
                            <td class="admin-paperQuestion-tableData">
                                <a href="" class="admin-paperQuestion-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <img src="/admin/imajes/letter-f.png" class="admin-paperQuestion-tg-button">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </a>
                            </td>

                        </tr>


                    </tbody>

                </table>
                <div class="admin-paperQuestion-tablePage">
                    <div class="admin-paperQuestion-tablePageinner">
                        <button class="admin-paperQuestion-tablePagebutton">First</button>
                        <button class="admin-paperQuestion-tablePagebutton">Page 1 | 2 | 3 | 4 |</button>
                        <button class="admin-paperQuestion-tablePagebutton">Next »</button>
                        <button class="admin-paperQuestion-tablePagebutton">Last</button>
                    </div>
                </div>

            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>