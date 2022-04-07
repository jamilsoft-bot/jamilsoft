   



<form action="?serve=sms&action=applied" method="post" enctype="multipart/form-data">

                <div class="w3-card w3-margin">
                    <header class="w3-blue w3-container">
                        <h4>Application form | <a href="?serve=me"> <?php echo $Me->username();?></a></h4>
                       
                    </header>
                    <br>
                    <div class="w3-container">
                        
                        <div class="row">
                            <h4 class="w3-light-blue">Parent/Guardian Details</h4>
                            <div class="col-4 md-4 w3-margin-top">
                                <label class="w3-text-blue">Full Name</label>
                                <input type="text" name="Pfullname" class="w3-input"  placeholder="Parent/Guardian Full Name">

                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Job/Career</label>
                            <input type="text" name="Pjob" class="w3-input"  placeholder="Occupation, Job, Carreer">
                        </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Address</label>
                            <input type="text" name="Paddress" class="w3-input" placeholder="Full Address">
                        </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Email</label>
                            <input type="email" name="Pemail" class="w3-input"  placeholder="Email Address">
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Phone Number</label>
                            <input type="text" name="Pphone" class="w3-input"  placeholder="Phone Number">
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Date of Birth</label>
                            <input type="date" name="dob" class="w3-input"  placeholder="Phone Numbe">
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Gender</label>
                            <select name="gender" class="w3-input">
                                <option value="Male">Male</option>
                                <option value="female">female</option>

                            </select>
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Home Town</label>
                            <input type="text" name="city" class="w3-input"  placeholder="HomeTown / City">
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                                <input type="hidden" name="user-id" value="<?php global $Me; echo $Me->username();?>">
                            <label class="w3-text-blue">State</label>
                            <input type="text" name="state" class="w3-input"  placeholder="State">
                            </div>
                             <h4 class="w3-light-blue w3-margin-top w3-margin-bottom">Course Selection and Verification</h4>

                            <div class="col-4 md-4 w3-margin-top"> 
                            <label class="w3-text-blue">Select Your Course</label>
                            <select name="courses" id="cid" class="w3-input">
                            <?php
                                    foreach($dt as $s){
                                        echo "<option>". $s['coursename'] . "</option>";
                                    }
                            ?>
                                <option>Computer operation</option>
                            </select>
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                            <label class="w3-text-blue">Period</label>
                            <select name="period"  id="pid" class="w3-input">

                            </select>                            </div>
                            <div class="col-12 md-12 w3-margin-top">
                                <input class="w3-check" name="agreed" value="agreed" type="checkbox">
                                <label>I Hereby Declare that all the Above Information are true</label>

                            </div>

                            <div class="col-4 md-4 w3-margin-top">
                                <input type="submit" name="submit"  class="w3-margin-bottom w3-blue w3-input w3-btn" value="Submit">
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                                <input type="reset" name="reset" class="w3-input w3-green w3-btn"  value="Clear">
                            </div>
                            <div class="col-4 md-4 w3-margin-top">
                                <input type="button" name="cancel" class="w3-input w3-red w3-btn"  value="Cancel">
                            </div>
                            
                        </div>
                    </div>
                    
                
                </div>
                
         
          

</form>

  