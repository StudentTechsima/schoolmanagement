<?php 
include 'layout/header.php';
?>
<div class="hero1">
        <div class="hero1-img">
        </div>
        <div class="hero1-text">
            <h2>Your account details</h2>
            <p><a href="home.php" class="read-btn3"><span>HOME</span>  / Others /  </a> accountdetail</p>
        </div>
    </div>
    <!-- hero section end -->
    <!-- Account detail page start -->
    <form>
        <section class="account-detail-page">
            <div class="student-registraiton">
                <div class="stu-registn-head">
                    <p> YOUR ACCOUNT DETAILS (have an account : <span>*</span>)</p>

                </div>
                <!------ 1.details form ---------->
                <div class="personal-details">
                    <p> DETAILS</p>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label>Name <span>*</span></label>
                        <input type="text" placeholder="enter your name">
                    </div>
                    <div class="form-field">
                        <label>Country <span>*</span></label>
                        <select>
                    <option value="">Select country</option>
                    <option value="2010">India</option>
                    <option value="2011">Japan</option>
                    <option value="2012">Pakistan</option>

                </select>
                    </div>
                    <div class="form-field">
                        <label>Date Of Birth <span>*</span></label>
                        <input type="datetime-local" placeholder="enter your name">
                    </div>
                    <div class="form-field">
                        <label>Time-Zone <span>*</span></label>
                        <select>
                    <option value="">Select Time Zone</option>
                    <option value="">India</option>
                    <option value="">Japan</option>
                    <option value="">Pakistan</option>

                   </select>
                    </div>

                    <div class="form-field">
                        <label>Language <span>*</span></label>
                        <select>
                    <option value="">Select Language</option>
                    <option value="">English</option>
                    <option value="">Hindi</option>
                    <option value="">Urdu</option>
                   </select>
                    </div>

                    <div class="form-field">
                        <label>Message <span>*</span></label>
                        <textarea name="textarea" id=""> 
                        </textarea>
                    </div>
            </div>
            <div class="form-group1">
                <div class="account-empty">
                        <label>Gender<span>*</span></label>
                        <div class="form-field-gender">
                        <input type="radio" value="Male" name="gender">Male
                        <input type="radio" value="Female" name="gender"> Female
                    </div>
                    </div>
                    <div class="account-empty">
                        <label>Upload </label>
                        <div class="form-field-gender">
                        <input type="file">
                    </div>
                    </div>
                </div>
                <div class="form-field">
                        <input type="submit" class="read-btn5">
                    </div>
</div>
        </section>
    </form>
    <!-- Account detail page end -->
<?php 
include 'layout/footer.php';
?>