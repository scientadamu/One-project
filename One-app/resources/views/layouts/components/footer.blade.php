<style>
    a:visited, a:link{
        text-decoration:none;
    }
    .f-container{
        position:relative;
        /* top:130px; */
        width:100%;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        background:black;
        min-width:320px;
    }
    .f-col-1{
        height: 250px;
        width:80%;
        display:flex;
        /* flex-direction:column; */
        align-items:center;
        justify-content:center;
        /* background:red; */
    }
    .f-col-1-contents{
        display:flex; 
        flex-direction:column; 
        align-items:center;
        justify-content:space-between;
        width:100%;
        max-width:350px;
        /* background:blue; */
    }
    .f-col-3-contents-hide{
        height: 100%;
        display:none; 
        margin:0 50px 0 0;
        min-width:270px;
        align-items:flex-end;
        text-align:right;
        flex-direction:column; 
        /* background:blue; */
    }
    .list-title{
        display:flex;
        align-self:flex-start;
        font-family: 'Colfax';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 21px;
        color: #FFFFFF;
        margin-top:0px;
    }
    .f-list-container{
        width:100%;
        display:flex;
        /* gap:5rem; */
        justify-content:space-between;
        /* max-width: 300px; */
    }
    .f-list{
        list-style-type: none;
        margin:0;
        padding:0;
    }
    .f-list>li,.f-list>li>a {
        margin:0;
        padding:0;
        height: 30px;
        font-family: 'Colfax';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 30px;
        color: #FFFFFF;}

        .f-list>li>a:hover{
        color:#00FFD9;
        /* color:red; */
        cursor: pointer;}

    .f-btn{
        margin:40px 0 5px 0;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px 20px;
        gap: 10px;
        width: 198px;
        height: 40px;
        background: #00FFD9;
    }
    .f-btn:hover{
        background:#FFFFFF;
        color:#00FFD9;;
        cursor: pointer;}

    .f-col-2-hide{
        display:none;
        /* width:100%; */
        flex-direction:column;
        align-items:center;
        justify-content:flex-end;
        /* background:grey; */
        text-align:center;
        height:100%;
        /* height:200px; */
        min-width:320px;
    }
    .f-col-2{
        display:flex;
        width:80%;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        /* background:grey; */
        color:white;
        /* height:200px; */
        /* min-width:320px; */
    }
    .f-col-2>img{
        width:100px;
        height:100px;
    }
    .f-col-2>p{
        font-family: 'Colfax';
        font-style: normal;
        text-align:center;
        font-weight: 400;
        font-size: 22px;
        line-height: 30px;
        color: #FFFFFF;
    }
    .f-col-2-hide>p{
        height: 30px;
        font-family: 'Colfax';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 30px;
        text-align:center;
        color: #FFFFFF;
        margin:0 0 40px 0;
        }
        .f-col-3{
        height: 100%;
        width:80%;
        display:flex; 
        flex-direction:column; 
        align-items:center;
        justify-content:center;
        justify-content:center;
        /* background:red; */
        min-width:320px;
        text-align:center;
        padding:0 0 30px 0;
        }
       
        @media screen and (min-width: 650px) and (max-width: 999px) {
            .f-container{min-width:650px;}
            .f-col-1{width:100%;justify-content:space-between;}
            .f-col-1-contents{
                height:100%;
                /* background:yellow; */
                justify-content:center;
                margin:0 20px 0 50px;
                min-width:250px;
            }
        .f-btn{position:relative; left:-1rem;}
        .f-col-3{display:none}
        .f-col-3-contents-hide{display:flex;}
        }

        @media screen and (min-width: 1000px){
            .f-container{min-width:1000px; flex-direction:row;height:250px;}
            .f-col-1{display:flex; width:30%; height:100%;  min-width:20%; }
            .f-col-2{display:flex; width:35%; height:65%; padding:30px 0 0 0}
            .f-col-1-contents{
                height:100%;
                /* background:yellow; */
                justify-content:center;
            }
            .f-col-2>p{font-size:18px;}
            .f-col-3{display:flex; width:17%; height:50%; align-items:flex-start; min-width:17%; text-align:left;}
             .f-list>li,.f-list>li>a {font-size:20px;}
             .f-col-3{
                /* background:green; */
                flex-direction:column;
                margin:0;
                justify-content:space-between;
             }
             .f-btn{margin:10px 0 0 0;}

        }
        
</style>

<div class='f-container'>
    <section class="f-col-1" >
        <div class="f-col-1-contents">
            <p class="list-title">QUICK LINKS</p>
            <div class='f-list-container'>
                <ul class="f-list">
                <li><a href="#" class="f-a">Home</a></li>
                <li><a href="#" class="f-a">Issues</a></li>
                <li><a href="#" class="f-a">Media</a></li>
                <li><a href="#" class="f-a">News</a></li>
                </ul>
                <ul class="f-list">
                <li><a href="#" l-item>Get Involved</a></li>
                <li><a href="#">Volunteer</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Events</a></li>
                </ul>
            </div>
        </div>
    
        <section class="f-col-2-hide" >
            <img src="images/ONE-logo-white 1.png">
            <p>Copyright © 2022 All Rights Reserved</p>          
        </section>
    
        <div class="f-col-3-contents-hide">
        <button class='f-btn'> BHCPF REPORT &gt;</button>
            <div class='f-list-container'>
                <ul class="f-list">
                <li><a href="#" class="f-a">Phone: (234) 733-3390</a></li>
                <li><a href="#" class="f-a">E-mail: info@one.org</a></li>
                </ul>
            </div>
        </div>       
        </section>
  
    <section class="f-col-2" >
      <img src="images/ONE-logo-white 1.png">
        <p>Copyright © 2022 All Rights Reserved</p>          
    </section>
  
    <div class="f-col-3">
       <button class='f-btn'> BHCPF REPORT &gt;</button>
        <ul class="f-list">
            <li><a href="#" class="f-a">Phone: (234) 733-3390</a></li>
            <li><a href="#" class="f-a">E-mail: info@one.org</a></li>
        </ul>
    </div>
     
</div>
          
        