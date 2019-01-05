<!DOCTYPE html>
<html>
<head>
	<title></title>
	    

        <?php require "LINKS.html"; ?>
        <link href="css/CSS.css" rel="stylesheet">
        <script>

            /*  MAN  */
        var gender='';
        function man(){
            var Man_var_D = document.getElementById('Man_ID')
                Man_var_D.src='img/vector/TEST_T.JPG';
                gender='MAN';  
 var Woman_var_D = document.getElementById('Woman_ID')
                Woman_var_D.src='img/vector/TEST_F.JPG';
       }
             /*  WOMAN  */
        
        function woman(){
            var Woman_var_D = document.getElementById('Woman_ID')
                Woman_var_D.src='img/vector/TEST_T.JPG';
                gender='WOMAN'; 
                var Man_var_D = document.getElementById('Man_ID')
                Man_var_D.src='img/vector/TEST_F.JPG'; 
       }

function getz(){
          

          var gender_M=this.gender;   
            document.write(gender_M + "<br><br><br>");

      
       }  
        </script>




<style>
    .pad{
        padding: 16%;
        padding-top: 0%;

    }
</style>
</head>

<body style=" float: right; "  dir="rtl">

<header>
    <?php require "./main_nav.html";  ?>
</header>
<br><br>
<h1 align="center"> معلومات أساسية  </h1>
<br><br>
<form>
<div class="row center-block">
    <div class="container">
        <div class="col-auto">
            
                <img src="img/vector/TEST_F.JPG" class="pad" id="Man_ID" onclick="man()" />
                <span> أو </span> 
                <img src="img/vector/TEST_F.JPG" class="pad" id="Woman_ID" onclick="woman()" />
                
        </div>
        
             
    </div>
</div>
<div class="row center-block" style="padding-left: 40%;">
    <div class="container">
        <div class="col" style="padding-top: 5%;">
             <label for="Length"> الطول  :</label>
             <input type="text" id="Length_ID" name="Length" " placeholder=" أدخل طولك الحالي هنا " >
        </div>
        <div class="col" style="padding-top: 5%;">
             <label for="weight"> الوزن  : </label>
             <input type="text" id="weight_ID" name="weight" placeholder="أكتب وزنك الحالي هنا ">
        </div>
        <div class="col" style="padding-top: 5%;">
             <label for="Target_weight">  الوزن المستهدف :</label>
             <input type="text" id="Target_weight_ID" name="Target_weight" placeholder="  أدخل الوزن الذي تريد الحصول عليه  ">
        </div>   
    </div>
</div>
<br>
<div style="width: 75%; padding-right: 24% ; " >
<input type="submit" name="" class="btn btn-primary btn-block" value="حفظ وأنتقال " onclick="getz()">
</div>
</form>
<br><br><br><br><br><br><br><br>
<?php require "footer_signup.html" ?>

</body>
</html>