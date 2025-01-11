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
            <div class="admin-wallet-container">
                <h2 class="admin-wallet-text"><i class="fa fa-file"></i> ADD BRANCH PAYMENT</h2>

                <form action="">
                    <table class="admin-walletTable">
                        <tbody class="admin-walletTablebody">
                            <tr class="admin-walletTablerow">
                                <td class="admin-walletTablelabel">Branch* :</td>
                                <td class="admin-walletTabledata">
                                    <select name="" id="" class="admin-walletInput">
                                        <option value="">--Select Branch--</option>
                                        <option value="1901">Kalki Computers</option>
                                        <option value="Demo">CT</option>
                                        <option value="0001">Radha Krishna Computer</option>
                                        <option value="8401">Maa Sharde Computer Academy</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-walletTablerow">
                                <td class="admin-walletTablelabel">Payment Mode* :</td>
                                <td class="admin-walletTabledata">
                                    <select name="" id="" class="admin-walletInput">
                                        <option value="">--Select Payment Mode--</option>
                                        <option value="cash">Cash</option>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="bank_transfer">Bank Transfer</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-walletTablerow">
                                <td class="admin-walletTablelabel">Amt* :</td>
                                <td class="admin-walletTabledata">
                                    <input type="text" name="amount" class="admin-walletInput">
                                </td>
                            </tr>
                            <tr class="admin-walletTablerow">
                                <td class="admin-walletTablelabel">Date* :</td>
                                <td class="admin-walletTabledata">
                                    <input type="date" name="date" class="admin-walletInput">
                                </td>
                            </tr>
                            <tr class="admin-walletTablerow">
                                <td class="admin-walletTablelabel">Details :</td>
                                <td class="admin-walletTabledata">
                                    <textarea class="admin-walletInput" rows="3" name="details"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="admin-walletForm-group">
                        <button type="submit" class="admin-walletSubmitbutton">SUBMIT</button>
                    </div>
                </form>
            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>