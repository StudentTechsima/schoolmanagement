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
            <div class="admin-incomeHeadform-container">
                <h2 class="admin-incomeHeadform-text"><i class="fa fa-file"></i> MANAGE INCOME HEAD</h2>
                <form action="">
                    <table class="admin-incomeHeadform-table">
                        <tbody class="admin-incomeHeadform-tableBody">


                            <tr class="admin-incomeHeadform-tableRow">
                                <td class="admin-incomeHeadform-tableLabel">Head Name* :</td>
                                <td class="admin-incomeHeadform-tableData">
                                    <input type="text" name="amount" class="admin-incomeHeadform-input">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="admin-incomeHeadform-form-group">
                        <button type="submit" class="admin-incomeHeadform-submitButton">Add New</button>
                    </div>
                </form>
            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>