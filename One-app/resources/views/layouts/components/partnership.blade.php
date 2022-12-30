<style>
     .partnership {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-width: 320px;
        background:#FFFFFF;
        /* background:red; */
    }

    .partnership>.col-1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        width: 100%;
        /* height:329px; */
        background:#FFFFFF;
    }

    .partnership>.col-2 {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        justify-content: center;
        width: 100%;
        /* background: blue; */
        background:#FFFFFF;
        
        margin:0 0 50px 0;
    }

    .partnership>.col-1>p {
        display: flex;
        flex-direction: column;
        /* margin-left: 100px; */
        height: 76px;
        font-family: 'Colfax';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 30px;
        text-transform: uppercase;
        color: #10827B;
    }

    .partnership>.col-1>p>span {
        color: black;
    }

    .partner-logo {
        width: 200px;
        min-width: 200px;
        height: 90px;
        background: orange;
    }
    .partner-logo:hover{
        background:white;
        /* color:red; */
        cursor: pointer;
    }
    .p-logo{
        width:100%;
        height:100%;
    }

    .col-2>.col-2-row {
        width: 90%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        /* margin: 0 100px; */
        /* background: red; */
    }

    #partner-3,
    #partner-6,
    #partner-9 {
        display: none;
    }

    @media screen and (min-width: 550px) {
        .col-2>.col-2-row {
            flex-direction: row;
            margin: 0 100px;
            justify-content: center;
            gap: 20%;
            /* background: red; */
        }
    }

    @media screen and (min-width: 750px) {
        #col-2-row3 {
            display: none
        }

        #partner-3,
        #partner-6,
        #partner-9 {
            display: flex;
        }

        .col-2>.col-2-row {
            flex-direction: row;
            margin: 0 50px;
            justify-content: center;
            gap: 50px;
            /* background: red; */
        }
    }

    @media screen and (min-width: 1040px) {
        .partnership {
            flex-direction: row;
            align-items: center;
        }
    }
</style>

<section class='partnership'>
    <div class="col-1">
        <p>
            COLLABORATIONS
            <span>& PARTNERSHIPS</span>

        </p>
    </div>
    <div class="col-2">
        <div class="col-2-row" id="col-2-row1">
            <div class="partner-logo" id="partner-1"><img class='p-logo' src="images/wordbank.png" alt="p-logo1"></div>
            <div class="partner-logo" id="partner-2"><img class='p-logo' src="images/nhw.png" alt="p-logo2"></div>
            <div class="partner-logo" id="partner-3"><img class='p-logo' src="images/prdc.png" alt="p-logo3"></div>
        </div>
        <div class="col-2-row" id="col-2-row2">
            <div class="partner-logo" id="partner-4"><img class='p-logo' src="images/fhbn.png" alt="p-logo3"></div>
            <div class="partner-logo" id="partner-5"><img class='p-logo' src="images/na4h.png" alt="p-logo4"></div>
            <div class="partner-logo" id="partner-6"><img class='p-logo' src="images/cms.png" alt="p-logo6"></div>
        </div>
        <div class="col-2-row" id="col-2-row3">
            <div class="partner-logo" id="partner-7"><img class='p-logo' src="images/prdc.png" alt="p-logo5"></div>
            <div class="partner-logo" id="partner-8"><img class='p-logo' src="images/cms.png" alt="p-logo6"></div>
            <div class="partner-logo" id="partner-9"><img class='p-logo' src="images/cms.png" alt="p-logo1"></div>
        </div>
    </div>
    </section>