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
            <div class="admin-managePageform-container">
                <h2 class="admin-managePageform-text"><i class="fa fa-file"></i> MANAGE PAGES</h2>

                <form action="">
                    <table class="admin-managePageform-Table">
                        <tbody class="admin-managePageform-Tablebody">
                            <tr class="admin-managePageform-Tablerow">
                                <td class="admin-managePageform-Tablelebal">SELECT TOP PAGE:</td>
                                <td class="admin-managePageform-Tabledata">
                                    <select name="" id="" class="admin-managePageform-Input">
                                        <option value="">Top</option>
                                        <option value="">About Us</option>
                                        <option value="">Home Page</option>
                                        <option value="">Home Page Second Section</option>
                                        <option value="">Welcome To Hypernet</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-managePageform-Tablerow">
                                <td class="admin-managePageform-Tablelebal">PAGE TITLE :</td>
                                <td class="admin-managePageform-Tabledata">
                                    <input type="url" name="managePageform- URL" class="admin-managePageform-Input">
                                </td>
                            </tr>
                            <tr class="admin-managePageform-Tablerow">
                                <td class="admin-managePageform-Tablelebal">POSITION :</td>
                                <td class="admin-managePageform-Tabledata">
                                    <input type="text" name="ADMIN TITLE" class="admin-managePageform-Input">
                                </td>
                            </tr>
                            <tr class="admin-managePageform-Tablerow">
                                <td class="admin-managePageform-Tablelebal">FILE HEIGHT :</td>
                                <td class="admin-managePageform-Tabledata">
                                    <input type="email" name="EMAIL ID" class="admin-managePageform-Input">
                                </td>
                            </tr>
                            <tr class="admin-managePageform-Tablerow">
                                <td class="admin-managePageform-Tablelebal">UPLOAD IMAGE :</td>
                                <td class="admin-managePageform-Tabledata">
                                    <input type="file" class="admin-managePageform-Input">
                                </td>
                            </tr>
                            <tr class="admin-managePageform-Tablerow">
                                <td class="admin-managePageform-Tablelebal">COURSES PAGE DESCRIPTION :</td>
                                <td class="admin-managePageform-Tabledata">
                                    <textarea name="" rows="3" class="admin-managePageform-Input"></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td class="admin-managePageform-Tabledata">
                                    <textarea name="" id="mytextarea" rows="3" class="admin-managePageform-Input"></textarea>
                                </td>
                            </tr>




                        </tbody>


                    </table>
                    <div class="admin-managePageform-Form-group">
                        <button type="submit" class="admin-managePageform-Upadtebutton">ADD PAGE</button>
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