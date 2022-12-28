<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>One</title>
<style>
    body {
    font-family: 'Nunito', sans-serif;
    margin:0;
    padding:0;
    }

/* <!--S-slider css start--> */
    .s-slider {
    display: flex;
    flex-direction: column;
    width: 100%;
    min-width: 320px;
    /* background: blue; */
    }
    /* row-1 image slider start */
    .row-1 {
    margin:0;
    padding: 0;
    display: flex;
    width: 100%;
    min-width: 300px;
    height: 400px;
    background: green;
    }
    .row-1 > img {
    height: 100%;
    width: 100%;
    }
    /* row-1 image slider End */

    /* <!-- row-2 start --> */
    .row-2 {
    position: absolute;
    top: 435px;
    display: flex;
    min-width: 320px;
    flex-direction: column;
    width: 100%;
    }
    /* <!-- row-2-col1 start --> */
    .row-2-col1 {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 100%;
    min-width: 320px;
    height: 250px;
    background: #10827b;
    gap: 10px;
    }

    .no-percent{
    display: flex;
    justify-content: right;
    /* min-width: 150px; */
    margin-top:80px;
    /* background: red; */
    width: 27%;
    height: 90%;
    font-family: 'Italian Plate No2';
    font-style: normal;
    font-weight: 400;
    font-size: 80px;
    text-transform: uppercase;
    color: #FFFFFF;
    /* color: red; */
    }
    .no-percent>sup{
    font-size: 35px; 
    /* color:red; */
    }

    .details{
    display: flex;
    flex-direction: column;
    min-width: 200px;
    max-width: 270px;
    /* background: blue; */
    width: 65%;
    height: 90%;
    }
    .details>p{
    display: flex;
    margin:40px 0 0 0;
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
    height: 90%;
    }

    .details>p>span{
    display: none;
    }

    .details>button{
    position: relative;
    top:0px;
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    gap: 10px;
    position: relative;
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
    /* <!-- row-2-col1 End --> */

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

    
/* <!--S-slider start--> */

/* <!--State- Status css start--> */
    .status {
    position: relative;
    top: 345px;
    display: flex;
    flex-direction: column;
    width: 100%;
    /* height: 100%; */
    background: black;
    min-width: 320px;
  }
  .status-title {
    display: flex;
    /* background: red; */
    margin: 30px 0px 0px 30px;
  }
  .status-title > p {
    margin: 0;
    padding: 0;
    position: relative;
    font-family: "Colfax";
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    line-height: 54px;
    text-transform: capitalize;
    color: #ffffff;
    /* background: blue; */
  }

  .status-states {
    position: relative;
    margin: 30px 0 0 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    /* background: rgb(241, 17, 17); */
    gap: 40px;
    /* height: 230px; */
  }
  .state1-2,
  .state3-4 {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: center;
    gap: 40px;
    position: relative;
  }
  .states-containner {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    /* background:green; */
  }
  .state {
    display: flex;
    /* flex-direction: column; */
    align-items: center;
    gap: 40px;
    position: relative;
    width: 250px;
    height: 120px;
    background: #00ffd9;
  }
  #state-4 {
    display: none;
  }

  .state-img {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    left: 20px;
    width: 110px;
    height: 102px;
    background: black;
    
    color: white;
  }

  .state-img >img{
    border-radius: 100px;
    width:90%;
    height:90%;
  }
  .state-name {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: "Colfax";
    font-style: normal;
    font-weight: 500;
    font-size: 30px;
    line-height: 36px;
    text-transform: capitalize;
    color: #000000;
  }
  .status-btn {
    display: flex;
    position: relative;
    top: 20px;
    align-items: center;
    justify-content: center;
    background: black;
    width: 100%;
    padding-bottom: 20px;
  }
  .status-btn > button {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    gap: 10px;
    position: relative;
    width: 170px;
    height: 50px;
    left: 42px;
    font-family: "Colfax";
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    text-transform: uppercase;
    color: #000000;
    background: #00ffd9;
  }

/* <!--State- Status css start--> */

/* <!--Responsiveness--> */

  @media screen and (min-width: 620px) {
        .row-2{
            flex-direction: row;
            /* width: 50%; */
            height: 300px;
            min-width:620px;
            background:red;
            flex-direction:row;
            width:100%;
        }
        .row-2-col1{
            width: 50%;
            height: 100%;
            /* background:yellow; */
        }
        .row-2-col2{
            width: 50%;
            height: 100%;
        }

        .no-percent{
        margin-top: 20px;
        /* background:red; */
        width:30%;
        }
        .details{
        width:60%;
        /* background:green; */
        }
        .details>p{
        margin-top:15px;
        font-size: 18px;
        line-height: 22px;
        width:100%;
        /* color:red; */
        }
        .details>p>span{
          display:contents;
      }
        button{margin-top: 0;}
    .status {
      top: 194px;
      min-width: 600px;
      /* background:red; */
    }
    .state1-2,
    .state3-4 {
      flex-direction: row;
    }
    #state-4 {
      display: flex;
    }
    .status-btn > button {
      left: 185px;
    }
  }
j                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  @media screen and (min-width: 733px) {
    button{margin-top: 0;  top:-35px;}
    .row-1 {height:500px;}
    .status {
      top: 50px;
      /* background:red; */
    }
  }

  @media screen and (min-width: 921px) {
    .status {
      top:150px;
      min-width: 921px;
      /* background: red; */
    }}
  @media screen and (min-width: 1000px) {
    .status {
      top:150px;
      min-width: 1000px;
      /* background: red; */
    }

    #state-4 {
      display: none;
    }
    .states-containner {
      flex-direction: row;
    }
    .status-btn > button {
      display: flex;
      left: 333px;
    }
  }   
  @media screen and (min-width: 785px) {
      button{margin-top: 0;  top:-35px;}
      .row-1 {height:600px;}
      .row-2 {top: 450px;}
    }

      /* <!--Responsiveness--> */
   

</style>

    </head>
    <body class="antialiased">
    @include('layouts.components.navbar')
   
     <!--S-slider start-->
        <div class="s-slider">
            <!-- row-1 image slider start -->
            <div class="row-1">
                <img src="images/about_top_pic.png">
            </div>
            <!-- row-1 image slider End -->
            <!-- row-2 start -->
            <div class="row-2">
                <!-- row-2-col1 start -->
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
    <!--S-slider end-->

    <!--State status start-->
    <div class="status">
        <div class="status-title">
            <p>
            Status of <br />
            health care <br />provision funds
            </p>
        </div>
        <div class="status-states">
            <div class="states-containner">
            <div class="state1-2">
                <div class="state" id="state-1">
                <div class="state-img">
                    <img src="images/abia.png" alt="abia.png" />
                </div>
                <span class="state-name">Abia State</span>
                </div>
                <div class="state" id="state-2">
                <div class="state-img">
                    <img src="images/abia.png" alt="abia.png" />
                </div>
                <span class="state-name">Abia State</span>
                </div>
            </div>
            <div class="state3-4">
                <div class="state" id="state-3">
                <div class="state-img">
                    <img src="images/abia.png" alt="abia.png" />
                </div>
                <span class="state-name">Abia State</span>
                </div>
                <div class="state" id="state-4">
                <div class="state-img">
                    <img src="images/abia.png" alt="abia.png" />
                </div>
                <span class="state-name">Abia State</span>
                </div>
            </div>
            </div>
            <div class="status-btn">
            <button>READ MORE ></button>
            </div>
        </div>
    </div>
     <!--State status end-->
     
     @include('layouts.components.features')


     </body>
</html>
