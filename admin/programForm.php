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
            <div class="admin-programForm-container">
                <h2 class="admin-programForm-text"><i class="fa fa-file"></i> MANAGE PROGRAM</h2>

                <form action="">
                    <table class="admin-programForm-Table">
                        <tbody class="admin-programForm-Tablebody">
                            <tr class="admin-programForm-Tablerow">
                                <td class="admin-programForm-Tablelebal">Program Name:</td>
                                <td class="admin-programForm-Tabledata">
                                    <input type="url" name="programForm- URL" class="admin-programForm-Input">
                                </td>
                            </tr>
                            <tr class="admin-programForm-Tablerow">
                                <td class="admin-programForm-Tablelebal">Description :</td>
                                <td class="admin-programForm-Tabledata">
                                    <textarea name="" id="mytextarea" class="admin-programForm-Input"></textarea>
                                </td>
                            </tr>
                            <tr class="admin-programForm-Tablerow">
                                <td class="admin-programForm-Tablelebal">Program Photo :</td>
                                <td class="admin-programForm-Tabledata">
                                    <input type="file" class="admin-programForm-Input">
                                </td>
                            </tr>
                        </tbody>


                    </table>
                    <div class="admin-programForm-Form-group">
                        <button type="submit" class="admin-programForm-Upadtebutton">ADD PAGE</button>
                    </div>

                </form>


            </div>


        </div>
        <script src="/adminZone/admin/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>

    </section>


</main>


<?php
include('layout/footer.php');
?>