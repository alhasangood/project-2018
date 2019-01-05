<!DOCTYPE html>
<html>
<head>
	<title></title>
	    

		<?php require "LINKS.html"; ?>
</head>

<body id="page-top" style="background-color: #E3F1E5; float: right;" dir="rtl">



	<?php require "./main_nav.html";  ?>

<style>



.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}
/* */


input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

/* */
.btnb {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btnb:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

.fb {
  background-color: #3B5998;
  color: white;
  width: 30%
}

.twitter {
  background-color: #55ACEE;
  color: white;
  width: 30%
}

.google {
  background-color: #dd4b39;
  color: white;
  width: 30%
}
</style>

<br><br><br>
<div class="row ">
  
    <div class="container ">
       <h3  style="text-align: center ;">   للأشتراك أدخل البيانات التالية </h3>  
      <form action="/action_page.php">
      
        <div class="row"  style="text-align: right ;">
            <div class="col-50">
               
                
                <label for="fname"><i class="fa fa-user"></i>  الأسم الاول  </label>
                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">

                <label for="email"><i class="fa fa-envelope"></i>  البريد الألكتروني  </label>
                <input type="text" id="email" name="email" placeholder="john@example.com">

                <label for="adr"><i class="fa fa-address-card-o"></i> كلمة المرور </label>
                <input type="text" id="adr" name="address" placeholder="***************">

                <label for="birth"><i class="fa fa-institution"></i> تاريخ الميلاد </label>
                <input type="date" id="birth" name="city" placeholder="00/00/0000">
            </div>

            <div class="col-50">
                
                <label for="lname"><i class="fa fa-user" ></i>  الأسم الاخير  </label>
                <input type="text" id="lname" name="firstname" placeholder="John M. Doe">

                <label for="adr"><i class="fa fa-address-card-o"></i> عنوان السكن </label>
                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">

               
                <label for="adr"><i class="fa fa-address-card-o"></i> أعد كلمة المرور </label>
                <input type="text" id="adr" name="address" placeholder="***************">
            
          </div>
          
        </div>
       <p></p>
        <input type="submit" value="أشتراك" class="btnb">

        <h1 style="text-align: center ; color: yellow; font-size:75px" >أو</h1>
        <div class="col" style="text-align: center ;">

            <a href="#" class="fb btn" style="margin: 1.5%; "> تسجيل الدخول باستخدام الفيسبوك </a>
            <a href="#" class="twitter btn" style="margin: 1.5%;">   تسجيل الدخول باستخدام التويتر  </a>
            <a href="#" class="google btn" style="margin: 1.5%;">    </i> تسجيل الدخول باستخدام القوقل+ </a>
      </div>
      </form>
    </div>
  </div>
  
</div>

<br><br><br>
</body>
</html>