<style>
a:link {
    text-decoration: none;
    font-family: 'Colfax';
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 30px;
    color: black;
}
a:visited {
    text-decoration: none;
    color: black;
}
a:hover {
    text-decoration: underline;
    cursor: pointer;
}
/* -----------------------------------------nav---------------------------- */
nav {
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #F5F5F5;
    width: 100%;
    height: 156px;
    min-width: 320px;
}
/* Header logo section */
.h-logo-section {
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
.h-toggle-section {
    display: flex;
    align-items: center;
    justify-content: center;
    /* width: 82px; */
    height: 82px;
    margin: 0;
}
.h-toggle-section>.btn {
    display: none;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    /* padding: 10px auto; */
    gap: 10px;
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
.toggle-icon {
    font-size: 40px;
    margin-right: 40px;
}
.menue-list {
    display: none;
    list-style: none;
    width: 100%;
    gap: 20px;
    font-family: 'Colfax';
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 30px;



}
.menue>.btn {
    width: 248px;
    height: 70px;
    background: #10827B;
    border: none;
    shape-outside: none;
    display: none;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    /* padding: 10px auto; */
    gap: 10px;
    font-family: 'Colfax';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    color: white;
    margin-right: 20px;
}
/* overlay style start*/
.overlay {
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

/*  header toggle section */
/* -----------------------------------------nav---------------------------- */
@media screen and (max-width: 940px) and (min-width: 600px) {
    .menue>.btn {
        display: flex;
    }
}
@media screen and (min-width: 941px) {
    .menue>.btn {
        display: none;
    }

    .h-toggle-section>.btn {
        display: flex;
    }

    .h-toggle-section>.toggle-icon {
        display: none;
    }

    .menue-list {
        display: flex;
    }
}
@media screen and (min-width: 1100px) {
    .menue-list {
        gap: 50px;
    }

    .h-logo-section {
        margin: 0 0 0 100px;
    }

    .h-toggle-section {
        margin: 0 77px 0 0;
    }
}
</style>
<nav> 

        <section class="h-logo-section">
        <img src="{{url('/images/ONE-logo-black.png')}}" alt="logo image"/>
        </section>

        <section class="menue">
            <button class="btn">DOWNLOAD REPORT</button>
            <ul class="menue-list">
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT REPORT</a></li>
                <li><a href="#">DATA & DOCUMENTATION</a></li>
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
    </nav>
     <!-- javascript for menue -->
     <script>
        function openNav() { document.getElementById("menue_icon").style.width = "100%"; } function closeNav() { document.getElementById("menue_icon").style.width = "0%"; }
    </script>
    <!-- javascript for menue  -->