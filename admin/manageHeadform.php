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
            <div class="admin-manageHeadform-container">
                <h2 class="admin-manageHeadform-text"><i class="fa fa-file"></i> MANAGE HEAD</h2>
                <form action="">
                    <table class="admin-manageHeadform-table">
                        <tbody class="admin-manageHeadform-tableBody">


                            <tr class="admin-manageHeadform-tableRow">
                                <td class="admin-manageHeadform-tableLabel">Head Name* :</td>
                                <td class="admin-manageHeadform-tableData">
                                    <input type="text" name="amount" class="admin-manageHeadform-input">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="admin-manageHeadform-form-group">
                        <button type="submit" class="admin-manageHeadform-submitButton">Add New</button>
                    </div>
                </form>
            </div>
        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>