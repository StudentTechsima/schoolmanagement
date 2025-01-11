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
            <div class="admin-batchForm-container">
                <h2 class="admin-batchForm-text"><i class="fa fa-file"></i> MANAGE BATCH</h2>

                <form action="">
                    <table class="admin-batchForm-table">
                        <tbody class="admin-batchForm-tableBody">
                            <tr class="admin-batchForm-tableRow">
                                <td class="admin-batchForm-tableLabel">Batch Name :</td>
                                <td class="admin-batchForm-tableData">
                                    <input type="text" name="subject Name" class="admin-batchForm-input">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="admin-batchForm-form-group">
                        <button type="add new" class="admin-batchForm-submitButton">Add New</button>
                    </div>
                </form>
            </div>
        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>