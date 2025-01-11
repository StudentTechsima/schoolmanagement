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
            <div class="admin-student-container">
                <h2 class="admin-student-text"><i class="fa fa-file"></i> MANAGE STUDENT</h2>
                <form action="" class="admin-student-form">

                    <div class="admin-student-formGroup">
                        <input type="text" class="admin-student-formInput" placeholder="USERNAME">
                    </div>
                    <div class="admin-student-formGroup">
                        <input type="text" class="admin-student-formInput" placeholder="TYPE STUDENT NAME">
                    </div>
                    <div class="admin-student-formGroup">
                        <input type="text" class="admin-student-formInput" placeholder="TYPE CONTACT NO">
                    </div>

                </form>
                <div class="admin-student-formButton">
                    <a href="studentForm.php" class="admin-student-formButtoninput">+ Register Student</a>
                </div>




                <table class="admin-student-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-student-tableHead">REG. & PASS</th>
                            <th class="admin-student-tableHead">NAME</th>
                            <th class="admin-student-tableHead">COURSES</th>
                            <th class="admin-student-tableHead">CONTACT</th>
                            <th class="admin-student-tableHead">FEE</th>
                            <th class="admin-student-tableHead">ACTION</th>
                            <th class="admin-student-tableHead">EXAM</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-student-tableData">
                                <div class="admin-student-contain">
                                    <p>HNIS16062</p>
                                    <p>9682685416</p>
                                </div>
                            </td>
                            <td class="admin-student-tableData">
                                RK
                            </td>
                            <td class="admin-student-tableData">
                                CISCO CERTIFIED NETWORK ASSOCIATE
                            </td>
                            <td class="admin-student-tableData">
                                9682685416
                            </td>

                            <td class="admin-student-tableData">
                                <p class="admin-student-innerText">PAID</p>
                            </td>


                            <td class="admin-student-tableData">
                                <div class="admin-student-innerLink">
                                    <button class="admin-student-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                    <a href="" class="admin-student-actionLink">
                                        <img src="/adminZone/admin/imajes/but_ban_small.png" class="admin-student-tg-button">
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-print"></i>
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-folder"></i>
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>

                            <td class="admin-student-tableData">
                                <div class="admin-student-innerLink">
                                    <button class="admin-student-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                    <a href="" class="admin-student-actionLink">
                                        <img src="/adminZone/admin/imajes/but_ban_small.png" class="admin-student-tg-button">
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="admin-student-tableData">
                                <div class="admin-student-contain">
                                    <p>HNIS16062</p>
                                    <p>9682685416</p>
                                </div>
                            </td>
                            <td class="admin-student-tableData">
                                RK
                            </td>
                            <td class="admin-student-tableData">
                                CISCO CERTIFIED NETWORK ASSOCIATE
                            </td>
                            <td class="admin-student-tableData">
                                9682685416
                            </td>

                            <td class="admin-student-tableData">
                                <p class="admin-student-innerText">PAID</p>
                            </td>


                            <td class="admin-student-tableData">
                                <div class="admin-student-innerLink">
                                    <button class="admin-student-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                    <a href="" class="admin-student-actionLink">
                                        <img src="/adminZone/admin/imajes/but_ban_small.png" class="admin-student-tg-button">
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-print"></i>
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-folder"></i>
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="admin-student-actionLink">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>

                            <td class="admin-student-tableData">
                                <div class="admin-student-innerLink">
                                    <button class="admin-student-buttonIcon"><i class="fa-solid fa-user"></i></button>
                                    <a href="" class="admin-student-actionLink">
                                        <img src="/adminZone/admin/imajes/but_ban_small.png" class="admin-student-tg-button">
                                    </a>
                                </div>
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