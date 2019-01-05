<!DOCTYPE html>
<html>
<head>
	<title></title>
	    

        <?php require "LINKS.html"; ?>
        <link href="css/CSS.css" rel="stylesheet">
 

<script>

  /*  START Gastrointestinal problems   */ 

// create an array
var  Gastrointestinal_problems_message = ['Good_health'];

/*  Nausea_vomiting  */
        var Nausea_vomiting_message='Nausea_vomiting_F';
        function Nausea_vomiting_Fun(){
           var Nausea_vomiting_var_D = document.getElementById('Nausea_vomiting_ID')
            if(Nausea_vomiting_message == 'Nausea_vomiting_T'){
                  Nausea_vomiting_var_D.src='img/vector/TEST_F.JPG';
                  Nausea_vomiting_message='Nausea_vomiting_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Nausea_vomiting");       
                    if(index_V !== -1 )
                      {
                        Gastrointestinal_problems_message.splice(index_V,1);
                      }
            }else{
                Nausea_vomiting_var_D.src='img/vector/TEST_T.JPG';
                Nausea_vomiting_message='Nausea_vomiting_T';
                Gastrointestinal_problems_message.push("Nausea_vomiting");                
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }


/*  Gastritis  */
        var Gastritis_message='Gastritis_F';
        function Gastritis_Fun(){
           var Gastritis_var_D = document.getElementById('Gastritis_ID')
            if(Gastritis_message == 'Gastritis_T'){
                    Gastritis_var_D.src='img/vector/TEST_F.JPG';
                    Gastritis_message='Gastritis_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Gastritis");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                    }
            }else{
                Gastritis_var_D.src='img/vector/TEST_T.JPG';
                Gastritis_message='Gastritis_T';
                Gastrointestinal_problems_message.push("Gastritis");
                
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }



/*  Constipation  */
                var Constipation_message='Constipation_F';
        function Constipation_Fun(){
           var Constipation_var_D = document.getElementById('Constipation_ID')
            if(Constipation_message == 'Constipation_T'){
                    Constipation_var_D.src='img/vector/TEST_F.JPG';
                    Constipation_message='Constipation_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Constipation");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                    }
            }else{
                Constipation_var_D.src='img/vector/TEST_T.JPG';
                Constipation_message='Constipation_T';
                Gastrointestinal_problems_message.push("Constipation");  
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }


/*  Diarrhea  */
        var Diarrhea_message='Diarrhea_F';
        function Diarrhea_Fun(){
           var Diarrhea_var_D = document.getElementById('Diarrhea_ID')
            if(Diarrhea_message == 'Diarrhea_T'){
                    Diarrhea_var_D.src='img/vector/TEST_F.JPG';
                    Diarrhea_message='Diarrhea_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Diarrhea");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                    }
            }else{
                Diarrhea_var_D.src='img/vector/TEST_T.JPG';
                Diarrhea_message='Diarrhea_T';
                Gastrointestinal_problems_message.push("Diarrhea");
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }


/*  Gluten_Intolerance  */
        var Gluten_Intolerance_message='Gluten_Intolerance_F';
        function Gluten_Intolerance_Fun(){
           var Gluten_Intolerance_var_D = document.getElementById('Gluten_Intolerance_ID')
            if(Gluten_Intolerance_message == 'Gluten_Intolerance_T'){
                    Gluten_Intolerance_var_D.src='img/vector/TEST_F.JPG';
                    Gluten_Intolerance_message='Gluten_Intolerance_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Gluten_Intolerance");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                    }
            }else{
                Gluten_Intolerance_var_D.src='img/vector/TEST_T.JPG';
                Gluten_Intolerance_message='Gluten_Intolerance_T';
                Gastrointestinal_problems_message.push("Gluten_Intolerance");
                
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }


/*  Lactose_Intolerance  */
        var Lactose_Intolerance_message='Lactose_Intolerance_F';
        function Lactose_Intolerance_Fun(){
           var Lactose_Intolerance_var_D = document.getElementById('Lactose_Intolerance_ID')
            if(Lactose_Intolerance_message == 'Lactose_Intolerance_T'){
                    Lactose_Intolerance_var_D.src='img/vector/TEST_F.JPG';
                    Lactose_Intolerance_message='Lactose_Intolerance_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Lactose_Intolerance");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                    }
            }else{
                Lactose_Intolerance_var_D.src='img/vector/TEST_T.JPG';
                Lactose_Intolerance_message='Lactose_Intolerance_T';
                Gastrointestinal_problems_message.push("Lactose_Intolerance");
                
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }


/*  Ulcer  */
        var Ulcer_message='Ulcer_F';
        function Ulcer_Fun(){
           var Ulcer_var_D = document.getElementById('Ulcer_ID')
            if(Ulcer_message == 'Ulcer_T'){
                    Ulcer_var_D.src='img/vector/TEST_F.JPG';
                    Ulcer_message='Ulcer_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Ulcer");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                    }
            }else{
                Ulcer_var_D.src='img/vector/TEST_T.JPG';
                Ulcer_message='Ulcer_T';
                Gastrointestinal_problems_message.push("Ulcer");
                
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }


/*  Swallowing_Difficulties  */
        var Swallowing_Difficulties_message='Swallowing_Difficulties_F';
        function Swallowing_Difficulties_Fun(){
           var Swallowing_Difficulties_var_D = document.getElementById('Swallowing_Difficulties_ID')
            if(Swallowing_Difficulties_message == 'Swallowing_Difficulties_T'){
                    Swallowing_Difficulties_var_D.src='img/vector/TEST_F.JPG';
                    Swallowing_Difficulties_message='Swallowing_Difficulties_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Swallowing_Difficulties");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                    }
            }else{
                Swallowing_Difficulties_var_D.src='img/vector/TEST_T.JPG';
                Swallowing_Difficulties_message='Swallowing_Difficulties_T';
                Gastrointestinal_problems_message.push("Swallowing_Difficulties");
                }
          var Good_health = document.getElementById('Good_health_ID');
              Good_health.src='img/vector/TEST_F.JPG';
          var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
              if(index_V !== -1 )
                {
                  Gastrointestinal_problems_message.splice(index_V,1);
                }
        }


/* Good_health */

var Good_health_message='Good_health_T';
function Good_health_Fun(){
   Gastrointestinal_problems_message=[];
            
                   var Good_health_var_D = document.getElementById('Good_health_ID')
            if(Good_health_message == 'Good_health_F'){
                    Good_health_var_D.src='img/vector/TEST_F.JPG';
                    Good_health_message='Good_health_F';
                var index_V = Gastrointestinal_problems_message.indexOf("Good_health");       
                    if(index_V !== -1 )
                    {
                        Gastrointestinal_problems_message.splice(index_V,1);
                        
                    }
            }else{
                Good_health_var_D.src='img/vector/TEST_T.JPG';
                Good_health_message='Good_health_T';
                Gastrointestinal_problems_message.push("Good_health");

                }


        var Nausea_vomiting = document.getElementById('Nausea_vomiting_ID');
            Nausea_vomiting.src='img/vector/TEST_F.JPG';
    
        var Gastritis = document.getElementById('Gastritis_ID');
            Gastritis.src='img/vector/TEST_F.JPG';

        var Diarrhea = document.getElementById('Diarrhea_ID');
            Diarrhea.src='img/vector/TEST_F.JPG';
    
        var Constipation = document.getElementById('Constipation_ID');
            Constipation.src='img/vector/TEST_F.JPG';
    
        var Gluten_Intolerance = document.getElementById('Gluten_Intolerance_ID');
            Gluten_Intolerance.src='img/vector/TEST_F.JPG';  

        var Lactose_Intolerance = document.getElementById('Lactose_Intolerance_ID');
            Lactose_Intolerance.src='img/vector/TEST_F.JPG';   

        var Ulcer = document.getElementById('Ulcer_ID');
            Ulcer.src='img/vector/TEST_F.JPG'; 

        var Swallowing_Difficulties = document.getElementById('Swallowing_Difficulties_ID');
            Swallowing_Difficulties.src='img/vector/TEST_F.JPG'; 
 
}

/*  END Gastrointestinal problems  */ 




function getz(){
        var Gastrointestinal_problems_M=this.Gastrointestinal_problems_message;
            document.write(Gastrointestinal_problems_M + "<br>");
      
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

<h1 align="center">    مشاكل  الجهاز الهضمي   </h1>
<br><br>

<form>

<div class="container-fluid">
 <h3 style="text-align: center;">  أمراض مزمنة  </h3>
  <div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
       <img src="img/vector/TEST_F.JPG" id="Nausea_vomiting_ID" onclick="Nausea_vomiting_Fun()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
         <img src="img/vector/TEST_F.JPG" id="Gastritis_ID" onclick="Gastritis_Fun()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
        <img src="img/vector/TEST_F.JPG" id="Diarrhea_ID" onclick="Diarrhea_Fun()"/>
    </div>
     <!--  -->
    <div class="col" style="text-align: center;">
       <img src="img/vector/TEST_F.JPG" id="Constipation_ID" onclick="Constipation_Fun()"/>
    </div> 
  </div>

<br>

  <div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
       <img src="img/vector/TEST_F.JPG" id="Gluten_Intolerance_ID" onclick="Gluten_Intolerance_Fun()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
         <img src="img/vector/TEST_F.JPG" id="Lactose_Intolerance_ID" onclick="Lactose_Intolerance_Fun()"/>
    </div>
    <!--  -->
    <div class="col" style="text-align: center;">
        <img src="img/vector/TEST_F.JPG" id="Ulcer_ID" onclick="Ulcer_Fun()"/>
    </div>
     <!--  -->
    <div class="col" style="text-align: center;">
       <img src="img/vector/TEST_F.JPG" id="Swallowing_Difficulties_ID" onclick="Swallowing_Difficulties_Fun()"/>
    </div>
  </div>

<br>

<div class="row">
    <!--  -->
    <div class="col" style="text-align: center;">
       <img src="img/vector/TEST_T.JPG" id="Good_health_ID" onclick="Good_health_Fun()"/>
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


</body>
</html>


