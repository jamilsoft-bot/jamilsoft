<div class="row w3-container ">
        <div class="col-2 md-2"></div>
        <div class="col-8 md-8">
            <center>
            <img src="../assets/images/jslogobird.png"  style="width: 100pt;">

            </center>
            <div class=" w3-card  w3-margin">
                
                <header class="w3-blue w3-center w3-container">
                    <h3>Create Your Admin Account</h3>
                </header>
                <br>
                <div class="w3-container ">
                    
                    <div class="row">
                        <div class="col-md-4 w3-margin-top">
                            <label class="w3-text-blue">Full Name</label>
                            <!-- <input type="hidden" name="uid" value="<br />
<b>Notice</b>:  Undefined variable: id in <b>C:\xampp\htdocs\jamilsoft\containers\users\signup.php</b> on line <b>36</b><br />
"> -->
                            <input type="text" name="name"  class="w3-input w3-border" id="name" placeholder="Full name" required>
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">Username</label>
                            <input type="text" name="username"  class="w3-input w3-border" id="username" placeholder="Username" required>
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">Password</label>
                            <input type="password" name="password"  class="w3-input w3-border" id="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">Email</label>
                            <input type="email" name="email"  class="w3-input w3-border" id="email" placeholder="Email Address" required>
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">Phone Number</label>
                            <input type="text" name="phone"  class="w3-input w3-border" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">Date of Birth</label>
                            <input type="date" name="dob" class="w3-input w3-border"  id="dob" placeholder="Date of Birth">
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">Gender</label>
                            <select class="w3-input w3-border">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <!-- <input type="text" name="gender" class="w3-input w3-border"  id="gender" placeholder="Gender"> -->
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">Home Address</label>
                            <input type="text" name="address" class="w3-input w3-border"  id="address" placeholder="Home Address">
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">State</label>
                            <input type="text" name="state" class="w3-input w3-border"  id="state" placeholder="State">
                        </div>
                        <div class="col-md-4 w3-margin-top"> 
                        <label class="w3-text-blue">Country</label>
                       
                       <select name="country" id="cid" class="w3-input w3-border"></select>
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">City/Hometown</label>
                            <input type="text" name="city" class="w3-input w3-border"  placeholder="City">
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <label class="w3-text-blue">User role</label>
                        
                        <select name="usertype" id="rl1" class="w3-input w3-border" >
                            <option value="admin">Admin</option>
                            <!-- <option value="Customer" selected>Customer</option>
                            <option value="Partner">Partner</option> -->
                        </select>

                        </div>
                        
                        <div class="col-md-4 w3-margin-top">
                            <input type="submit" name="submit"  class="w3-margin-bottom w3-blue w3-input w3-border w3-btn" value="Submit">
                        </div>
                        <div class="col-md-4 w3-margin-top">
                            <input type="reset" name="reset" class="w3-input w3-border w3-blue w3-btn"  value="Clear">
                        </div>
                        <div class="col-md-4 w3-margin-top">
                        <a href="login" class="w3-input w3-border w3-red w3-btn">Exit</a>

                        </div>
                        
                    </div>
                </div>
                
            
            </div>
            
        </div>
    </div>