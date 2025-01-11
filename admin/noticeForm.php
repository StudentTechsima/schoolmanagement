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
            <div class="admin-noticeForm-container">
                <h2 class="admin-noticeForm-text"><i class="fa fa-file"></i> MANAGE NEWS & NOTICE</h2>

                <form action="">
                    <table class="admin-noticeForm-Table">
                        <tbody class="admin-noticeForm-Tablebody">
                            <tr class="admin-noticeForm-Tablerow">
                                <td class="admin-noticeForm-Tablelebal">News Title :</td>
                                <td class="admin-noticeForm-Tabledata">
                                    <input type="url" name="noticeForm- URL" class="admin-noticeForm-Input">
                                </td>
                            </tr>
                            <tr class="admin-noticeForm-Tablerow">
                                <td class="admin-noticeForm-Tablelebal">Description :</td>
                                <td class="admin-noticeForm-Tabledata">
                                    <textarea name="" id="mytextarea"  class="admin-noticeForm-Input"></textarea>
                                </td>
                            </tr>
                            <tr class="admin-noticeForm-Tablerow">
                                <td class="admin-noticeForm-Tablelebal">News Photo :</td>
                                <td class="admin-noticeForm-Tabledata">
                                    <input type="file" class="admin-noticeForm-Input">
                                </td>
                            </tr>
                        </tbody>


                    </table>
                    <div class="admin-noticeForm-Form-group">
                        <button type="submit" class="admin-noticeForm-Upadtebutton">ADD PAGE</button>
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