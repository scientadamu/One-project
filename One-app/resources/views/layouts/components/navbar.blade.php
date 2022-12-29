<style>
    body {
        margin: 0;
        padding: 0;
    }
    nav {
        position:fixed;
        left:0;
        top:0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #F5F5F5;
        width: 100%;
        height: 140px;
        min-width: 320px;
    }
    /* Header logo section */.h-logo-section {
        display: flex;
        align-items: center;
        width: 82px;
        height: 82px;
        margin: 0 0 0 40px;
    }
    .h-logo-section>img {
        width: 100%;
        height: 100%;
    }
    /* Menue section */.menue-list {
        display: none;
        width: 100%;
        gap: 20px;
        font-family: 'Colfax';
        font-style: normal;
        font-weight: 400;
        font-size: 22px;
        line-height: 30px;
    }
    .menue>.menue-list>li, .menue>.menue-list>li>a{
        color:black;
        text-decoration: none;
        list-style: none;
        cursor: pointer;
    }
    .menue>.menue-list>li{
     color:#10827B;
    }
    .menue>.menue-list>li>a:hover{
        background: #10827B;
        color: white;
    }
    .menue>.btn {
        width: 248px;
        height: 70px;
        background: #10827B;
        border: none;
        display: none;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        font-family: 'Colfax';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 20px;
        color: white;
        margin-right: 20px;
    }
    .menue>.btn:hover{
        background:white;
        color:#10827B;
        cursor: pointer;
    }
    /* toggle section */.h-toggle-section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 82px;
        margin: 0;
     }
     .h-toggle-section>.btn {
        display: none;
        justify-content: center;
        align-items: center;
        width: 198px;
        height: 50px;
        font-family: 'Colfax';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 20px;
        background: #10827B;
        color: white;
        border: none;
        margin-right: 20px;
     }
     .h-toggle-section>.btn:hover{
        background: white;
        color:#10827B;
        cursor: pointer;
     }
     .toggle-icon {
        font-size: 40px;
        margin-right: 40px;
        color: #10827B;
        cursor: pointer;
      }
     .toggle-icon:hover{
        /* background: white; */
        color:white;
    }
    /* overlay style start*/.overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
        overflow-x: hidden;
        transition: 0.5s;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -ms-transition: 0.5s;
        -o-transition: 0.5s;
     }
     .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
     }
     .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
     }
     .overlay a:hover,
     .overlay a:focus {
        color: #f1f1f1;
     }
     .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
     }
     .overlay a {
        font-size: 20px
     }
     .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
     }
    /* overlay style End*/
    /* -----------------------------------------nav---------------------------- */
    @media screen and (min-width: 600px) {
        .menue>.btn {
            display: flex;
        }
    }
    @media screen and (min-width: 921px) {
        nav{
        top:0;
        left:0;
        width:100%;
        height:130px;
        /* background:red; */
        min-width: 921px;
        margin-right:0;
        padding-right:0;
        }
    }
    @media screen and (min-width: 941px) {
        .menue>.btn {display: none;}
        .h-toggle-section>.btn { display: flex;}
        .h-toggle-section>.toggle-icon { display: none;}
        .menue-list {display: flex;}}

    @media screen and (min-width: 1100px) {
        .menue-list {gap: 50px;}
        .h-logo-section {margin: 0 0 0 100px;}
        .h-toggle-section {margin: 0 77px 0 0;}}
</style>

<nav>
        <section class="h-logo-section">
            <img src="images/ONE-logo-black.png" alt="h-logo">
        </section>
        <section class="menue">
            <button class="btn">DOWNLOAD REPORT</button>
            <ul class="menue-list">
                <li><a href="#" class="menue-item">HOME</a></li>
                <li><a href="#" class="menue-item">ABOUT REPORT</a></li>
                <li><a href="#" class="menue-item">DATA & DOCUMENTATION</a></li>
            </ul>
        </section>
        <section class="h-toggle-section">
            <button class="btn">DOWNLOAD REPORT</button>
            <span class='toggle-icon' onclick="openNav()">&#9776; </span>
            <div id="menue_icon" class="overlay"><a href="javascript:void(0)" class="closebtn"
                    onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="#">HOME</a>
                    <a href="#">ABOUT REPORT</a>
                    <a href="#">DATA & DOCUMENTATION</a>
        </section>
         <!-- javascript for menue -->
        <script> function openNav() { document.getElementById("menue_icon").style.width = "100%"; } function closeNav() { document.getElementById("menue_icon").style.width = "0%"; }</script>
        <!-- javascript for menue  -->
    </nav>

</div>
