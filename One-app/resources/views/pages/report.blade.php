<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Report</title>
</head>

<body>
<style>
    body{margin:0; padding:0;}        
</style>
<!--------------------------map_section----------------------- -->
@include('layouts\components\report-top-bar')
<!----------------------------map_section -------------------->
<!--------------------------map_section----------------------- -->
@include('layouts\components\map-section')
<!----------------------------map_section -------------------->

<!--------------------------BHCPF REPORT----------------------- -->
@include('layouts\components\bhcpf-section')
<!--------------------------BHCPF REPORT----------------------- -->


<!--------------------------footer----------------------- -->
@include('layouts\components\Footer')
<!--------------------------footer----------------------- -->
<!--------------------------Navbar----------------------- -->
@include('layouts\components\navbar')
<!--------------------------Navbar----------------------- -->
</body>
</html>