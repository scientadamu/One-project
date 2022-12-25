<style>
.building-block{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
    min-width: 320px;
    background: #F5F5F5;
    /* padding: 20px 10px 10px 10px; */
}
.row-1{
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-between;
/* background: red; */
width: 100%;
height: 400px;
}
.row-1>p{
position: relative;
height: 56px;
font-family: 'Italian Plate No2';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 36px;
text-align: center;
text-transform: uppercase;
color: #000000;
}

.row-1>img{width: 102px;
    height: 102px;}

.row-2{
    display: flex;
    align-items: center;
    /* justify-content: space-between; */
    flex-direction: column;
    align-items: center;
    /* background: red; */
     width: 100%;
}
.row-2-row{
    display: flex;
    flex-direction: row;
    width: 90%;
    justify-content: space-between;
    margin: 20px;

}
.services{
    display: flex;
    flex-direction: column;
    align-items: center;
    
}
.circle{
    box-sizing: border-box;
    position: relative;
    width: 100px;
    height: 104px;
    background: #A9E1E4;
    border: 4px solid #FFFFFF;
    border-radius: 100%;
}
.circle>img{width:100%; height:100%}
.s-name{
position: relative;
/* width: 133px; */
/* height: 56px; */
font-family: 'Italian Plate No2';
font-style: normal;
font-weight: 400;
font-size: 20px;
/* line-height: 56px; */
text-align: center;
text-transform: capitalize;
color: #000000;
}
#service-3,#service-6,#service-9{display: none;}

@media screen and (min-width: 400px) {
    #row-2-row-3{display: none;}
    #service-3,#service-6,#service-9{display: flex;}
}

@media screen and (min-width: 800px) {
    .building-block{
        flex-direction: row;
        align-items:center;
        justify-content: space-between;
        height: 100%;
        min-width: 800px;
    }
    .row-1{
        margin-top: 40px;
        height: 80%;
    }
}

</style>
<div class="building-block">
        <div class="row-1">
            <p>
                The BUILDING BLOCKS <br />
                OF A HEALTH SYSTEM
            </p>
            <img src="{{url('images/networking.png')}}" alt="networking img">
            <p>
                PEOPLE
            </p>
        </div>
        <div class="row-2">
            <div class="row-2-row">

                <div class="services" id="service-1">
                    <div class="circle">
                    <img src="{{url('images/governance.png')}}" alt="governance img">
                    </div>
                    <span class="s-name">Governance</span>
                </div>

                <div class="services"  id="service-2">
                    <div class="circle">
                    <img src="{{url('images/medicin.png')}}" alt="medicin img">
                    </div>
                    <span class="s-name">Medicine <br/> & Technology</span>
                </div>

                <div class="services" id="service-3">
                    <div class="circle">
                    <img src="{{url('images/infor.png')}}" alt="infor img">
                    </div>
                    <span class="s-name">Information</span>
                </div>
            </div>
         
            <div class="row-2-row">
                <div class="services" id="service-4">
                    <div class="circle">
                     <img src="{{url('images/hr.png')}}" alt="hr img">
                    </div>
                    <span class="s-name">Human Resources</span>
                </div>

                <div class="services"  id="service-5">
                    <div class="circle">
                     <img src="{{url('images/delivery.png')}}" alt="delivery img">
                    </div>
                    <span class="s-name">Service <br/> Delivery</span>
                </div>

                <div class="services" id="service-6">
                    <div class="circle">
                    <img src="{{url('images/finance.png')}}" alt="finance img">
                    </div>
                    <span class="s-name">Finance1</span>
                </div>
            </div>

            <div class="row-2-row" id="row-2-row-3">
                <div class="services" id="service-7">
                    <div class="circle">
                    <img src="{{url('images/infor.png')}}" alt="infor img">
                    </div>
                    <span class="s-name">Information</span>
                </div>

                <div class="services"  id="service-8">
                    <div class="circle">
                    <img src="{{url('images/finance.png')}}" alt="finance img">
                    </div>
                    <span class="s-name">Finance2</span>
                </div>

                <div class="services" id="service-6">
                    <div class="circle">
                    <img src="{{url('images/finance.png')}}" alt="finance img">
                    </div>
                    <span class="s-name">Finance2</span>
                </div>
            </div>
        </div>
    </div>
