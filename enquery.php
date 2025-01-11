<?php 
include 'layout/header.php';
?>
 <!-- hero section start -->
 <div class="hero1">
        <div class="hero1-img">
        </div>
        <div class="hero1-text">
            <h2>Get <span>Franchise Enquiry</span></h2>
            <p><a href="home.html" class="read-btn3">HOME  / others / franchise /</a> apply online</p>
        </div>
    </div>
    <!-- hero section end -->
    <form action="">
        <section class="franchies-enqueiry">

            <div class="franchies-student-registraiton">
                <!------ 1. personal-details form ---------->
                <div class="personal-details">
                    <p>PERSONAL INFORMATION</p>
                </div>
                <div class="franchies-form-group">

                    <div class="franchies-form-field">
                        <label>First Name <span>*</span></label>
                        <input type="text">
                    </div>
                    <div class="franchies-form-field">
                        <label>Last Name <span>*</span></label>
                        <input type="text">
                    </div>
                    <div class="franchies-form-field">
                        <label>Mob.Number</label>
                        <input type="text">
                    </div>
                    <div class="franchies-form-field">
                        <label>Gender <span>*</span></label>
                        <select>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>

                        </select>
                    </div>
                    <div class="franchies-form-field">
                        <label>Date Of Birth <span>*</span></label>
                        <input type="date">
                    </div>
                    <div class="franchies-form-field">
                        <label>Email</label>
                        <input type="email">
                    </div>
                </div>
                <div class="franchies-form-group">

                    <div class="personal-details">
                        <p>CONTACT INFORMATION</p>
                    </div>
                    <div class="franchies-form-field">
                        <label>Address/Village/Area/Location<span>*</span></label>
                        <textarea class="textarea" name="Address" id=""></textarea>
                    </div>
                    <div class="franchies-form-field">
                        <label>Address Block</label>
                        <textarea class="textarea" name="Address" id=""></textarea>
                    </div>

                    <div class="franchies-form-field">
                        <label>State</label>
                        <select>
                            <option value="">Select</option>
                            <option value="hindu">Uttar-Pradesh</option>
                            <option value="islam">Bihar</option>
                            <option value="Christian">Rajsthan</option>
                            <option value="AP">Andhra Pradesh</option>
                            <option value="AP">Arunanchal Pradesh</option>
                            <option value="assam">Assam</option>
                            <option value="other">other</option>

                        </select>
                    </div>
                    <div class="franchies-form-field">
                        <label>District</label>
                        <select>
                            <option value="">Select</option>
                            <option value="">Gorakhpur</option>
                            <option value="">Kushinagar</option>
                            <option value="">Ayodhya</option>
                            <option value="">Deoria</option>
                        </select>
                    </div>

                    <div class="franchies-form-field">
                        <label>Pin Code<span>*</span></label>
                        <input type="text">
                    </div>
                    <div class="franchies-form-field">
                        <label>Course<span>*</span></label>
                        <select>
                            <option value="">--Course--</option>
                            <option value="AP">Andhra Pradesh</option>
                            <option value="AP">Arunanchal Pradesh</option>
                            <option value="assam">Assam</option>
                            <option value="bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh (UT)</option>
                            <option value="others">Chhattisgarh</option>
                            <option value="others">Uttar Pradesh</option>

                         </select>
                    </div>
                </div>
                <!------- 2. COURSE DETAILS ------->
                <div class="personal-details">
                    <p>VERIFICATION</p>
                </div>
                <div class="franchies-form-group">

                    <div class="franchies-form-field">
                        <input type="text" placeholder="Enter verification code">
                    </div>
                   
                    <input type="submit" class="read-btn5">


                </div>
        </section>
    </form>
<?php 
include 'layout/footer.php';
?>