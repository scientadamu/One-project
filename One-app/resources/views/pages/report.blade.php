<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report page</title>
</head>

<body>
    <style>
body{margin:0; padding:0;}        

/* -----------------------top_report--------------------- */



  @media screen and (min-width:1000px) {    
  
  .top_report{height: 80vh;}
  .map_section{flex-direction: row; flex-wrap: wrap-;}
  .assesment_retangle{display:flex;  justify-content: center; min-width: 300px; max-width: 500px;height: 173px; position: absolute; left:15%; top: 48%;}
  .assesment_p{  margin: 10px auto; font-size: 26px; line-height: 25px;}
 
  #single_bar_r{ background: #10827B; width: 100%; height: 20px;}
  #single_bar_l{ background: #00FFD9;; width: 50%; height: 20px;}



  .map_section{padding: 150px 0 0 0;  display: flex; flex-direction: row; }
  .map_tag{display:flex; flex-direction: column; width: 100%; }
  .bhcpf_section{display: flex; flex-direction: row; align-items: center; justify-content: center;}
  .bhcpf_report{ height: 80vh; width: 40%; }
 .primary_helth_pic{width: 40%; height: 70vh;}
 .bhcpf_section img{width: 100%; height:80vh;}

  }
    </style>
    <div class="report">
    <!-----------------------------------------nav------------------------------->
    @include('layouts\components\navbar')
    <!-----------------------------------------nav------------------------------->
    
    <!-------------------------------------- top_report -------------------->      
    @include('layouts\components\report-top-bar')
    <!-- -------------------------------top_report----------------- -->

<!--------------------------map_section----------------------- -->
@include('layouts\components\map-section')
<!----------------------------map_section -------------------->
<!---------------------------------- bhcpf_section------------------->
@include('layouts\components\bhcpf-section')
   
    <!-- ----------------------bhcpf_section-------------------- -->
        

    <!---------------------------------- footer -------------------->
    @include('layouts\components\Footer')
    <!---------------------------------- footer -------------------->
</body>
</html>