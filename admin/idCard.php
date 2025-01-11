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
            <div class="admin-idCard-container">
                <h2 class="admin-idCard-text"><i class="fa fa-file"></i> MANAGE STUDENT</h2>
                <form action="" class="admin-idCard-form">

                    <div class="admin-idCard-formGroup">
                        <input type="text" class="admin-idCard-formInput" placeholder="USERNAME">
                    </div>
                    <div class="admin-idCard-formGroup">
                        <input type="text" class="admin-idCard-formInput" placeholder="TYPE STUDENT NAME">
                    </div>
                    <div class="admin-idCard-formGroup">
                        <input type="text" class="admin-idCard-formInput" placeholder="TYPE CONTACT NO">
                    </div>

                </form>





                <table class="admin-idCard-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-idCard-tableHead">Sr. No.</th>
                            <th class="admin-idCard-tableHead">NAME</th>
                            <th class="admin-idCard-tableHead">COURSES</th>
                            <th class="admin-idCard-tableHead">CONTACT</th>
                            <th class="admin-idCard-tableHead">ACTION</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="admin-idCard-tableData">

                            </td>
                            <td class="admin-idCard-tableData" colspan="2">
                                <div class="admin-idCard-innerLink">
                                    <a href="" class="admin-idCard-downloadBtn">
                                        <p>Print</p>
                                    </a>
                                </div>
                            </td>
                            <td class="admin-idCard-tableData" colspan="2">
                                <div class="admin-idCard-innerLink">
                                    <a href="" class="admin-idCard-downloadBtn" style="background-color: red;">
                                        <p>Clear ID All</p>
                                    </a>
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