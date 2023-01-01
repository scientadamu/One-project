<style>
.abt-s-slider {
  /* position:; */
  top:140px;
  display: flex;
  flex-direction: column;
  width: 100%;
  min-width:320px;
  margin:0;
    padding: 0;
}

/* row-1 image slider start */
.abt-s-slider>#row-1 {
   margin:0;
  padding: 0;
  display: flex;
  width: 100%;
  /* min-width: 300px; */
  min-height: 100vh;
  /* min-width: 320px; */
  /* background: green; */
}
.abt-s-slider>#row-1 > img {
  height: 100vh;
  width: 100%;
}
.mySlides {display:none;}
/* row-1 image slider End */

/* <!-- row-2 start --> */
.abt-s-slider>.row-2 {
  /* position: relative; */
  top: -35px;
  display: flex;
  min-width: 320px;
  flex-direction: column;
  /* width: 100%; */
  /* height: 200px; */
}
/* <!-- row-2-col1 start --> */
.abt-s-slider>.row-2>.row-2-col1 {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 250px;
  background: #10827b;

}
.row-2>.row-2-col1>p{
    width: 80%;
    /* height: 95%; */
    max-width:400px;
font-family: 'Italian Plate No2';
font-style: normal;
font-weight: 400;
font-size: 22px;
line-height: 30px;
text-transform: capitalize;
color: #FFFFFF;
/* background: blue; */
max-height:80%;

}

.abt-s-slider>.row-2>.row-2-col2 {
    margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 250px;
  min-width: 300px;
  background: #000000;
}
/* <!-- row-2-col2 Start --> */
.row-2-col2 > p{
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

@media screen and (min-width: 500px) {
    .row-2>.row-2-col1>p{
        font-size:30;
        line-height:38px;
    }
}
@media screen and (min-width: 640px) {
  .abt-s-slider{margin:0; padding:0;}
     .abt-s-slider>.row-2{
        flex-direction: row;
        width: 100%;
        height: 300px;
        background:green;
    }
    .abt-s-slider>.row2>.row-2-col1{
        
        width: 50%;
        height: 100%;
        /* background:red; */
      }
      .abt-s-slider>.row2>.row-2-col2{
        width: 50%;
        height: 100%;
        /* background:red; */
    }

}

@media screen and (min-width: 785px) {
}
</style>
    <div class="abt-s-slider">
        <div class="w3-content w3-section" id="row-1">
            <img class="mySlides" src="images/about_top_pic.png" style="width:100%">
            <img class="mySlides" src="images/git_DP.png" style="width:100%">
            <img class="mySlides" src="images/d_state_of_primary_health_care.png" style="width:100%">    
        </div>

        <!-- <div class="row-2">
            <div class="row-2-col1">
            <p>
            Since 2001,nigeria has consistently committed less than 7% of the total
            national annual budget to health, leaving a
            major gap in the financial resources
            required to drive the  health system.
            </p>
            </div>
             
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
            </div> -->
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

