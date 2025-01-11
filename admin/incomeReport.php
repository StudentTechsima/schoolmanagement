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
            <div class="admin-incomeReport-container">
                <h2 class="admin-incomeReport-text"><i class="fa fa-file"></i> MANAGE CASHIN</h2>
                <form action="" class="admin-incomeReport-form">

                    <div class="admin-incomeReport-formGroup">
                        <label for="Branch" class="admin-incomeReport-formLabel">Branch</label>
                        <select name="" id="" class="admin-incomeReport-formInput">
                            <option value="">--Select Branch--</option>
                            <option value="">(1901)Kalki Copmuters</option>
                            <option value="">(Demo) CT</option>
                            <option value="">(0001) Radha Krishna Computer</option>
                            <option value="">(8401) Maa Sharde Computer Academy</option>
                        </select>
                    </div>
                    <div class="admin-incomeReport-formGroup">
                        <label for="Branch" class="admin-incomeReport-formLabel">Choose Head</label>
                        <select name="" id="" class="admin-incomeReport-formInput">
                            <option value="">--Choose Head--</option>
                            <option value="">--All--</option>
                            <option value="">Dev Shankar</option>
                            <option value="">Installement</option>
                            <option value="">Late Fee</option>
                            <option value="">Other Fine</option>
                            <option value="">Late Fee</option>
                        </select>
                    </div>


                    <div class="admin-incomeReport-formGroup">
                        <label for="Branch" class="admin-incomeReport-formLabel">Start Date</label>
                        <input type="date" class="admin-incomeReport-formInput">
                    </div>
                    <div class="admin-incomeReport-formGroup">
                        <label for="Branch" class="admin-incomeReport-formLabel">End Date</label>
                        <input type="date" class="admin-incomeReport-formInput">
                    </div>

                    <div class="admin-incomeReport-formButton">
                        <input type="submit" value="Search" class="admin-incomeReport-formButtoninput">
                    </div>


                </form>

                <div class="admin-incomeReport-button">
                    <a href="incomeReportform.php" class="admin-incomeReport-bLink">Add New Cashin</a>

                </div>

                <table class="admin-incomeReport-tableOuter">
                    <tdead>
                        <tr>
                            <td class="admin-incomeReport-tableHead" style="background:#088000">S. No.</td>
                            <td class="admin-incomeReport-tableHead" style="background:#088000">HEAD NAME</td>
                            <td class="admin-incomeReport-tableHead" colspan="2" style="background:#088000">AMOUNT (Rs.)</td>
                            <td class="admin-incomeReport-tableHead" style="background:#088000">DATE</td>
                            <td class="admin-incomeReport-tableHead" style="background:#088000">PAYMENT MODE</td>
                            <td class="admin-incomeReport-tableHead" style="background:#088000">ACTION</td>

                        </tr>
                        <tr>
                            <td class="admin-incomeReport-tableHead">TOTAL(Rs.)</td>
                            <td class="admin-incomeReport-tableHead"></td>
                            <td class="admin-incomeReport-tableHead" colspan="5">0.00/-</td>

                        </tr>
                    </tdead>

                    <tbody>
                        <!-- <tr> 
                    <td class="admin-incomeReport-tableData">
                        <div class="admin-incomeReport-containImg">
                            17-12-2024
                        </div>
                    </td>
                    <td class="admin-incomeReport-tableData">
                        
                    </td>
                    <td class="admin-incomeReport-tableData" colspan="5">
                       
                    </td>
                   
                   
                </tr>  -->


                    </tbody>


                </table>
                <p style="padding: 10px;">No Record Found...Add First</p>

            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>