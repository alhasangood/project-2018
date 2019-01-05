<!DOCTYPE html>
<html>
<head>
	<title></title>
	    

        <?php require "LINKS.html"; ?>
        <link href="css/CSS.css" rel="stylesheet">
 

<script>


function getz(){

      
       }  

</script>

<style>
  
</style>
</head>

<body style=" float: right;" dir="rtl" >

<header>
    <?php require "./main_nav.html";  ?>
</header>
<br><br>

<h1 align="center">    التشخيص   </h1>
<br><br>

<form>

<div class="container-fluid">
 <h3 style="text-align: center;">  أمراض مزمنة  </h3>
  <div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
       <img src="img/vector/TEST_F.JPG" id="" onclick="()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
         <img src="img/vector/TEST_T.JPG" id="" onclick="()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
        <img src="img/vector/TEST_F.JPG" id="" onclick="()"/>
    </div> 
  </div>

<br>

  <div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
       <img src="img/vector/TEST_F.JPG" id="" onclick="()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
         <img src="img/vector/TEST_T.JPG" id="" onclick="()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
        <img src="img/vector/TEST_F.JPG" id="" onclick="()"/>
    </div>
  </div>

<br>

  <div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
        <label for="extar">  أمراض أخرى : </label>
        <input type="text" id="extar" name="extar" placeholder="  أكتب اي مرض  أخر أن وجد   ">
    </div>
  </div>

<br>

  <div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
        <label for="extar">  أدوية   : </label>
        <input type="text" id="extar" name="extar" placeholder="     أكتب  أي أدوية  تتناولها   ">
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
        <label for="extar">  فيتامينات  : </label>
        <input type="text" id="extar" name="extar" placeholder="  كتب  أي    فيتامينات تتناولها    ">
    </div>
  </div>

<br>

  <div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
        <label for="textarea">  العمليات الجراحية   : </label>
        <textarea id="textarea" cols="20" rows="3"  placeholder="  أكتب اي عمليات جراحية قمت بها من قبل   ">
أكتب اي عمليات جراحية قمت بها من قبل   
        </textarea>
    </div>
  </div>

</div>




<br>
<hr style="width: 90%; height: 1px; background-color: red; ">
<br>   


<br><br><br><br>
<input type="submit" name="" class="btn btn-primary btn-block" value="حفظ وأنتقال " onclick="getz()">

</form>
<br><br><br><br><br><br><br><br>
<?php require "footer_signup.html" ?>

</body>
</html>