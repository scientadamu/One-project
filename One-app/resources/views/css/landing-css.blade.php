body {
    font-family: "Nunito", sans-serif;
    margin: 0;
    padding: 0;
}
.s-slider {
    display: flex;
    flex-direction: column;
    width: 100%;
    /* background: blue; */
}

/* row-1 image slider start */
.row-1 {
    margin: 0;
    padding: 0;
    display: flex;
    width: 100%;
    min-width: 300px;
    height: 400px;
    min-width: 320px;
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

.no-percent {
    display: flex;
    justify-content: right;
    /* min-width: 150px; */
    margin-top: 80px;
    /* background: red; */
    width: 27%;
    height: 90%;
    font-family: "Italian Plate No2";
    font-style: normal;
    font-weight: 400;
    font-size: 80px;
    text-transform: uppercase;
    color: #ffffff;
    /* color: red; */
}
.no-percent > sup {
    font-size: 35px;
    /* color:red; */
}

.details {
    display: flex;
    flex-direction: column;
    min-width: 200px;
    max-width: 270px;
    /* background: blue; */
    width: 65%;
    height: 90%;
}
.details > p {
    display: flex;
    margin: 40px 0 0 0;
    padding: 0;
    /* background: red; */
    font-family: "Colfax";
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 25px;
    color: #ffffff;
    width: 100%;
    text-align: left;
    height: 90%;
}

.details > p > span {
    display: none;
}

.details > button {
    position: relative;
    top: 0px;
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
    font-family: "Colfax";
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    /* identical to box height, or 125% */
    text-transform: uppercase;
    background: #10827b;
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
.add {
    color: #b51472;
}
/* <!-- row-2-col2 End --> */

/* <!-- row-2 End --> */

@media screen and (min-width: 410px) {
    .details > p {
        font-size: 14px;
        line-height: 22px;
    }
    .details > p > span {
        display: contents;
    }
}
@media screen and (min-width: 600px) {
    .row-2 {
        flex-direction: row;
        width: 100%;
        height: 300px;
    }
    .row-2-col1 {
        width: 50%;
        height: 100%;
    }
    .row-2-col2 {
        width: 50%;
        height: 100%;
    }

    .no-percent {
        margin-top: 30px;
    }
    .details > p {
        margin-top: 15px;
        font-size: 18px;
        line-height: 25px;
    }
    button {
        margin-top: 0;
    }
}
@media screen and (min-width: 733px) {
    button {
        margin-top: 0;
        top: -35px;
    }
    .row-1 {
        height: 500px;
    }
}
@media screen and (min-width: 785px) {
    button {
        margin-top: 0;
        top: -35px;
    }
    .row-1 {
        height: 600px;
    }
    .row-2 {
        top: 450px;
    }
}
