<!-- /*FOOTER start*/ -->
<style>
.f-container{
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: black;
  /* color: white; */
  min-width: 350px;
}
ul {
  list-style: none;
  font-family: 'Colfax';
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 30px;}
.l-item{
font-weight: 500;
font-size: 18px;
line-height: 21px;
background:blue;
  }
.l-container{
  gap: 5rem;
  width: 100%;
  display: flex;
  justify-content: center;
  /* background: blue; */
  /* min-width: 250px; */
}
/* f-list, links & others styles */
/* f-column1  */
#f-col1 {
  min-width: 250px;
  background: black;}
/* f-column1 end */
/* f-column2 start  */
#f-col2{
  position: relative;
  left: 0;
  display: flex;
  /* background: blue; */
  justify-content: center;
  align-items: center;
   min-width: 350px;
 }
.f-list2{
  margin: 0;
  padding: 0;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-width: 350px;
  text-align:center;
  /* background: red; */
}
  /* f-column2  end*/
/* f-column3 start  */
#f-col3-hide{
  display: flex;
  margin: 0;
  padding: 0;
  background: red;
  justify-content: center;
  align-items: center;}
#f-col3{
  margin: 0;
  padding: 0;
  background: black;
  justify-content: center;
  align-items: center;}
.f-list3{
  margin: 0;
  padding: 0;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: center;
  /* background:red; */
}
.f-list3>li>h5>button{
  display: flex;
  flex-direction: row;
  /* padding: 10px auto; */
  gap: 10px;
  width: 198px;
  height: 40px;
  font-family: 'Colfax';
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 20px;
  /* background: #00FFD9; */
  /* background: red; */
  justify-content: center;
  align-items: center;}
#f-col3-hide{display: none;}
  /* f-column3  */
 /* styles for footer responsiveness  start */
 @media screen and (max-width: 920px) and (min-width: 650px) {
  .f-container{
    min-width: 500px;
    max-width: 900px;
    /* background: red; */
  }
/* f-column1  */
#f-col1 {
  width: 95%;
  display: flex;
  min-width: 600px;
  justify-content: center;
  align-items: center;
  margin-left: 0px;
  background: green;
}
/* f-column1 end */
#l-container-1{
  display: flex;
  justify-content: center;
  align-items: center;
  /* background: blue; */
  width: 100%;
}
#l-container-1>#f-col3-hide{ position: relative;top: 0rem;
  display: flex;
  width: 30%;
  margin-top: 0;}
  #f-col2{
    margin-top: 2rem;
  }
  #f-col3{
    display: none;
  }
}
 @media screen and (min-width: 921px) {
  .f-container{
    width: 100%;
    flex-direction: row;
    justify-content: space-between;
    padding: 0 0 20px 0;
    gap: 1rem;
    min-width: 950px;
  }
#f-col1{
  margin-left: 30px;
  background:red;
  min-width:320px
}
.l-item{
  /* font-size:30px; */
}
#f-col3{
  margin-right: 100px;
}
 }
/*FOOTER end*/
</style>

<footer class="f-container">
     <!-- footer start -->
        <!-- column1 start -->
        <section class="f-col" id="f-col1">
            <div class="l-container" id="l-container-1">
                <ul class="f-list">
                    <li>
                        <h5 class="l-item">QUICK LINKS</h5>
                    </li>
                    <li><a href="#" class="f-a">Home</a></li>
                    <li><a href="#">Issues</a></li>
                    <li><a href="#">Media</a></li>
                    <li><a href="#">News</a></li>
                </ul>
                <ul class="f-list">
                    <li>
                        <h5>&nbsp;</h5>
                    </li>
                    <li><a href="#" l-item>Get Involved</a></li>
                    <li><a href="#">Volunteer</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
                 <ul class="f-list3" id="f-col3-hide">
                    <li>
                        <h5><button>BHCPF REPORT &gt;</button></h5>
                    </li>
                    <li>Phone: (234) 733-3390</li>
                    <li>E-mail: info@one.org</li>
                </ul>
            </div>
        </section>
        <!-- column1 end -->

          <!-- column2 start-->
        <section class="f-col" id="f-col2">
            <div class="l-container" id="l-container2">
                <ul class="f-list2">
                    <li>
                        <img src="images/ONE-logo-white 1.png"> 
                    </li>
                    <li>
                        Copyright © 2022 All Rights Reserved
                    </li>
                   
                </ul>
            </div>
        </section>
        <!-- column2 end-->

        <!-- column3 start-->
        <section class="f-col" id="f-col3">
            <div class="l-container" id="l-container3">
                <ul class="f-list3">
                    <li>
                        <h5><button>BHCPF REPORT &gt;</button></h5>
                    </li>
                    <li>Phone: (234) 733-3390</li>
                    <li>E-mail: info@one.org</li>
                </ul>
            </div>
        </section>
          <!-- column3 end-->
    </footer>
        <!-- footer end -->
