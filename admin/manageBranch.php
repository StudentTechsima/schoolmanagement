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
            <div class="admin-manageBranch-container">
                <h2 class="admin-manageBranch-text"><i class="fa fa-file"></i> BRANCH</h2>
                <div class="admin-manageBranch-button">
                    <a href="manageBranchform.php" class="admin-manageBranch-bLink">Add New Center</a>
                </div>

                <table class="admin-manageBranch-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-manageBranch-tableHead">S.No</th>
                            <th class="admin-manageBranch-tableHead">Branch Name</th>
                            <th class="admin-manageBranch-tableHead">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="admin-manageBranch-tableData">
                                <div class="admin-manageBranch-containImg">
                                    1.
                                    <img src="../imajes/adminLogo.png" alt="" class="admin-manageBranch-img">
                                </div>
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <strong class="admin-manageBranch-tdText">STUDENT STUDY POINT & IT EDUCATION</strong><br>
                                <strong class="admin-manageBranch-tdText">Codes: </strong>HNIS<br>
                                <strong class="admin-manageBranch-tdText">Address: </strong>House No B-28,Part of Plot No B-28 Gate No 12 <br> Gudamba Nirmal Homes Lucknow Lucknow UP 226021 IN
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <a href="" class="admin-manageBranch-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <span>ON</span>
                                </a>
                                <span class="admin-manageBranch-mBranch">Main Branch</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="admin-manageBranch-tableData">
                                <div class="admin-manageBranch-containImg">
                                    1.
                                    <img src="../imajes/adminLogo.png" alt="" class="admin-manageBranch-img">
                                </div>
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <strong class="admin-manageBranch-tdText">STUDENT STUDY POINT & IT EDUCATION</strong><br>
                                <strong class="admin-manageBranch-tdText">Codes: </strong>HNIS<br>
                                <strong class="admin-manageBranch-tdText">Address: </strong>House No B-28,Part of Plot No B-28 Gate No 12 <br> Gudamba Nirmal Homes Lucknow Lucknow UP 226021 IN
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <a href="" class="admin-manageBranch-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <span>ON</span>
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <td class="admin-manageBranch-tableData">
                                <div class="admin-manageBranch-containImg">
                                    1.
                                    <img src="../imajes/adminLogo.png" alt="" class="admin-manageBranch-img">
                                </div>
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <strong class="admin-manageBranch-tdText">STUDENT STUDY POINT & IT EDUCATION</strong><br>
                                <strong class="admin-manageBranch-tdText">Codes: </strong>HNIS<br>
                                <strong class="admin-manageBranch-tdText">Address: </strong>House No B-28,Part of Plot No B-28 Gate No 12 <br> Gudamba Nirmal Homes Lucknow Lucknow UP 226021 IN
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <a href="" class="admin-manageBranch-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <span>ON</span>
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tr>

                        <tr>
                            <td class="admin-manageBranch-tableData">
                                <div class="admin-manageBranch-containImg">
                                    1.
                                    <img src="../imajes/adminLogo.png" alt="" class="admin-manageBranch-img">
                                </div>
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <strong class="admin-manageBranch-tdText">STUDENT STUDY POINT & IT EDUCATION</strong><br>
                                <strong class="admin-manageBranch-tdText">Codes: </strong>HNIS<br>
                                <strong class="admin-manageBranch-tdText">Address: </strong>House No B-28,Part of Plot No B-28 Gate No 12 <br> Gudamba Nirmal Homes Lucknow Lucknow UP 226021 IN
                            </td>
                            <td class="admin-manageBranch-tableData">
                                <a href="" class="admin-manageBranch-actionLink">
                                    <i class="fa fa-edit"></i>
                                    <span>ON</span>
                                    <i class="fa-solid fa-trash"></i>
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