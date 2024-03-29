<style>
  body {
    margin: 0;
    padding: 0;
}  
.s-slider {
  /* position:absolute; */
  /* top:200px; */
  display: flex;
  flex-direction: column;
  width: 100%;
  /* background: blue; */
  margin:0;
padding: 0;
}

/* row-1 image slider start */
.s-slider>#row-1 {
   margin:0;
  padding: 0;
  display: flex;
  width: 100%;
  min-width: 300px;
  height: 90vh;
  min-width: 320px;
  background: green;
}
.s-slider>#row-1 > img {
  height: 100%;
  width: 100%;
}
.mySlides {display:none;}
/* row-1 image slider End */

/* <!-- row-2 start --> */
.s-slider>.row-2 {
  /* position: relative; */
  /* top: 235px; */
  display: flex;
  min-width: 320px;
  flex-direction: column;
  width: 100%;
  background:red;
}
/* <!-- row-2-col1 start --> */
.s-slider>.row-2>.row-2-col1 {
  display: flex;
  flex-direction: row;
  /* align-items: center; */
  /* justify-content: center; */
  width: 100%;
  min-width: 320px;
  height: 300px;
  background: #10827b;
  gap: 10px;
}
.s-slider>.row-2>.row-2-col2 {
  ontent: center; */
  width: 100%;
  min-width: 320px;
  height: 300px;
  
  gap: 10px;
}

.row-2-col1>.no-percent{
  display: flex;
  justify-content: right;
  /* min-width: 150px; */
  margin-top:50px;
  /* background: red; */
  width: 27%;
  height: 90%;
  font-family: 'Italian Plate No2';
  font-style: normal;
  font-weight: 400;
  font-size: 60px;
  text-transform: uppercase;
color: #FFFFFF;
}
.no-percent>sup{
font-size: 35px; 
}

.row-2-col1>.details{
  position:relative;
  top:0;
  flex-direction: column;
  height:90%;
  min-width: 200px;
  max-width: 270px;
  /* background: blue; */
  /* width: 65%; */

  /* height: 90%; */
}
.row-2-col1>.details>p{
  display: flex;
  margin:40px 0 0px 0;
  padding: 0;
  /* background: red; */
  font-family: 'Colfax';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 25px;
color: #FFFFFF;
  width: 100%;
  text-align: left;

  /* height: 90%; */
}

.details>p>span{
  display: none;
}

.details>button{
  position: relative;
  /* top:100px; */
  box-sizing: border-box;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 10px 20px;
gap: 10px;
width: 170px;
height: 46.37px;
font-family: 'Colfax';
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 20px;
/* identical to box height, or 125% */
text-transform: uppercase;
background: #10827B;
border: 1px solid #000000;
}

.details>button:hover{
  background:white;
        color:#10827B;
        cursor: pointer;
}

/* <!-- row-2-col2 Start --> */
.row-2-col2 {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 200px;
  min-width: 300px;
  background: #000000;
}
.row-2-col2 > p {
    width: 250px;
  /* height: 100px; */
  font-family: "Italian Plate No2";
  font-style: Bold;
  font-weight: 400;
  font-size: 30px;
  line-height: 40px;
  text-transform: uppercase;
  color: #ffffff;
  margin: 0;
  padding: 0;
}
.rang {
  width: 235px;
  font-family: "Italian Plate No2";
  font-style: Bold;
  font-weight: 400;
  font-size: 30px;
  line-height: 40px;
  text-transform: uppercase;
  color: #ffffff;
}
.row-2-col2 > p > .in {
  width: 30px;
  height: 30px;
  background: #b51472;
  border-radius: 100px;
  font-family: "Italian Plate No2";
  font-style: Bold;
  font-weight: 400;
  font-size: 30px;
  color: #ffffff;
}
.hr {
  width: 285px;
  height: 2px;
  background: #b51472;
  margin: 10px 0;
}
.add{
    color: #b51472;
}
/* <!-- row-2-col2 End --> */

/* <!-- row-2 End --> */

@media screen and (min-width: 410px) {
  .details>p{
    font-size: 14px;
line-height: 22px;
  }
  .details>p>span{
    display:contents;
  }
}
@media screen and (min-width: 640px) {
     .s-slider>.row-2{
        flex-direction: row;
        width: 100%;
        height: 300px;
    }
     .row2>.row-2-col1{
        width: 50%;
        height: 100%;
        background:red;
      }
      .row2>.row-2-col2{
        width: 50%;
        height: 100%;
        background:red;
    }

    .row-2-col1>.no-percent{
      margin-top: 30px;
    }
    .row-2-col1>.details>p{
      margin-top:15px;
      font-size: 18px;
  line-height: 25px;
    }
    .details>button{margin-top: 0;}
}
@media screen and (min-width: 733px) {
.no-percent{  /* button{margin-top: 0;  top:-35px;} */
width: 138px;
/* height: 132px; */
font-family: 'Italian Plate No2';
font-style: normal;
font-weight: 400;
font-size: 200px;
/* line-height: 150px; */
color:red;
text-transform: uppercase;}
}
@media screen and (min-width: 785px) {
  .details>button{margin-top: 0;  top:25px;}
}
</style>
<body>
    <div class="s-slider">
        <div class="w3-content w3-section" id="row-1">
        <img class="mySlides" src="images/about_top_pic.png" style="width:100%">
        <img class="mySlides" src="images/git_DP.png" style="width:100%">
        <img class="mySlides" src="images/d_state_of_primary_health_care.png" style="width:100%">    
        </div>
         <div class="row-2">
             <div class="row-2-col1">
                <div class="no-percent">
                    80<sup>%</sup>
                </div>
                <div class="details">
                    <p>
                        For this report, the gold standard is that less than 
                        5% of eligible health facilities used instead  
                         <span> of month based on the reporting systems available), the state has adequate </span>
                    </p>
                    <button>Read More &nbsp; ></button>
                </div>
            </div>
             <!-- row-2-col1 End -->

             <!-- row-2-col2 Start -->
            <div class="row-2-col2">
                <p>
                    THE STate of primary
                    health care service delivery <span class="in">&nbsp;in&nbsp;</span>&nbsp;nigeria
                    <div class="hr">&nbsp;</div>
                    <p>
                        <span class="add">+ &nbsp;</span>
                        &nbsp;2019 -2021
                    </p>
                </p>
            </div>
            <!-- row-2-col2 End -->

        </div>
        <!-- row-2 End -->


    </div>
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
    <!-- small slider component for landing page and about page End -->
