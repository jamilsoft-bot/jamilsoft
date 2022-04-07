  



<form action="?serve=sms&action=addedcs" method="post" enctype="multipart/form-data">

                <div class=" w3-margin">
                    <header class="w3-blue w3-container">
                        <h1>Course Registration form</h1>
                       
                    </header>
                   
                    <div class="w3-container w3-margin">
                        
                        <div class="row">
                            <div class="col-4">
                            </div>
                            <div class="col-4">
                               <div class="w3-container w3-card" style="text-align: center;border-left: 5pt solid blue;">
                                   <label class="w3-text-blue" >Course Name</label>
                                <input type="text" class="w3-input w3-margin-bottom" name="course-name" placeholder="">
                                <div class="w3-half">
                                    <label class="w3-text-blue">Course Price</label>
                                    <input type="number" class="w3-input w3-margin-bottom" name="course-price" placeholder="">
                                </div>
                                <div class="w3-half">
                                    <label class="w3-text-blue">Course Discount</label>
                                    <input type="number" class="w3-input w3-margin-bottom" name="course-discount" placeholder="">
                                </div>
                                <input type="submit" class="w3-input w3-btn w3-blue w3-margin-bottom" name="submit" value="Submit">
                               </div>
                            </div>
                            <div class="col-4">
                                
                            </div>
                        </div>
                        
                    </div>
                    
                
                </div>
                
         
          

</form>

   <script src="assets/js/countries.js"></script>
   <script src="assets/jq/jq.js"></script>
<script>
    
    var courses = [
        "Computer Operation",
        "Web design",
        "PHP/MySQL"
    ]

    var text;
    text = "";
    function cs(value){
        text += "<option value='" + value +"'>"+ value +"</option>"
    }
    text += "";

    courses.forEach(cs);
    var c  = document.getElementById("cid");
    
    c.innerHTML = text;
  
  

  

</script>
</body>
</html>