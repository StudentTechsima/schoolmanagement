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
            <div class="admin-paperResult-container">
                <h2 class="admin-paperResult-text"><i class="fa fa-file"></i> MANAGE RESULT</h2>


                <form action="" class="admin-paperResult-form">

                    <div class="admin-paperResult-formGroup">
                        <select name="" id="" class="admin-paperResult-formInput">
                            <option value="">--BRANCH--</option>
                            <option value="">Student Study Point & it Education</option>
                            <option value="">Kalki Computers</option>
                            <option value="">CT</option>
                            <option value="">Radha Krishna Computer</option>

                        </select>
                    </div>



                </form>


                <table class="admin-paperResult-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-paperResult-tableHead">S.No</th>
                            <th class="admin-paperResult-tableHead">Name</th>
                            <th class="admin-paperResult-tableHead">Date</th>
                            <th class="admin-paperResult-tableHead">Test Name</th>
                            <th class="admin-paperResult-tableHead">Tot. Q.</th>
                            <th class="admin-paperResult-tableHead">Attempted</th>
                            <th class="admin-paperResult-tableHead">L.Q.</th>
                            <th class="admin-paperResult-tableHead">R.Q.</th>
                            <th class="admin-paperResult-tableHead">W.Q.</th>
                            <th class="admin-paperResult-tableHead">(-M.)</th>
                            <th class="admin-paperResult-tableHead">Tot. M.</th>
                            <th class="admin-paperResult-tableHead"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- <tr>
                    <td class="admin-paperResult-tableData">
                        <div class="admin-paperResult-containImg">
                            1.
                        </div>
                    </td>
                    <td class="admin-paperResult-tableData">
                       Microsoft Excel
                    </td>
                    <td class="admin-paperResult-tableData">
                        Advanced Excel
                    </td>
                    <td class="admin-paperResult-tableData">
                       2024-10-17 <br>
                       2024-10-19
                    </td>

                    <td class="admin-paperResult-tableData">
                        50
                    </td>
                    <td class="admin-paperResult-tableData">
                        <a href="" class="admin-paperResult-actionLink">
                            <i class="fa fa-edit"></i>
                            <i class="fa-solid fa-trash"></i>
                            <img src="/admin/imajes/but_ban_small.png" class="admin-paperResult-tg-button">
                        </a>
                    </td>
                    
                </tr> -->


                    </tbody>

                </table>
                <!-- <div class="admin-paperResult-tablePage">
            <div class="admin-paperResult-tablePageinner">
                <button class="admin-paperResult-tablePagebutton">First</button> 
                <button class="admin-paperResult-tablePagebutton">Page 1 | 2 | 3 | 4 |</button>
                <button class="admin-paperResult-tablePagebutton">Next »</button>
                <button class="admin-paperResult-tablePagebutton">Last</button> 
            </div>
        </div> -->

            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>