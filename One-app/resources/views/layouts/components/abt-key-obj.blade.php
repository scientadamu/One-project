<style>
    body{margin:0; padding:0;background:black }
    .abt-details{
        /* display:flex;
        flex-direction:column; */
        width:100%;
        /* background:blue; */
        margin:0;
    min-width: 100%;
        
    }
    .abt-details-col-1{
        display:flex;
        align-items:center;
        justify-content:center;
        width:100%;
        height:300px;
        background:#10827B;
    }
    .abt-details-col-1>p{
        display:flex;
        align-items:center;
        justify-content:center;
        position: absolute;
        width: 85%;
        height: 280px;
        font-family: 'Italian Plate No2';
        font-style: normal;
        font-weight: 400;
        font-size: 22px;
        line-height: 36px;
         text-transform: capitalize;
        color: #FFFFFF;
    }
    .abt-details-col-2{
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        width:100%;
        height:300px;
        background:black;
    }
    .abt-details-col-2>p{
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
.abt-details-col-2> p> .in {
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
.abt-key-ob{
        display:flex;align-items:center;
        justify-content:center;
        width:100%;
        height:100vh;
        background:red;
        margin:0;
        min-width:300px;
    }
.abt-key-obt >img{
        width:100%;
        height:100%;
        /* background:red; */
        margin:0;
        /* min-width:200px; */
    }

@media screen and (min-width: 600px) {
    .abt-details{display:flex; flex-direction:row; height:300px;}
    .abt-details-col-1{display:flex; justify-content:center; align-items:center;height:100%; width:50%;}
    .abt-details-col-1>p{width:290px;max-width:290px;}
    .abt-details-col-2{height:100%; width:50%;}

    .abt-key-obt{
        /* position:relative; */
        /* top:-50px; */
    height:100vh;
 }
}
</style>

<div class="abt-details">
    <div class="abt-details-col-1">
        <p>
            Since 2001,nigeria has consistently committed less than 7% of the total
            national annual budget to health, leaving a
            major gap in the financial resources
            required to drive the  health system.
        </p>
    </div>
    <div class="abt-details-col-2">
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
</div>
<div class="abt-key-obt">
    <img src="images/abt-objective-pic.png" alt="abt-key-ob-img">
</div>
