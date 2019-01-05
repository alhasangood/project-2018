
<!DOCTYPE html>

<html>
    <head>
        <title>JavaScript Get & Set Input Text Value</title>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




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
    </head>
        
<body style=" float: right; "  dir="rtl">

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

<br>
<div style="width: 75%; padding-right: 24% ; " >
<input type="submit" name="" class="btn btn-primary btn-block" value="حفظ وأنتقال " onclick="getz()">
</div>
</form>
<br><br><br><br><br><br><br><br>

</body>
</html>