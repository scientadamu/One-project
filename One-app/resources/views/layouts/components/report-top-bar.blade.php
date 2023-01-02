<style>
.top_report {
  position:relative;
  top:130px;
  height: 70vh;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 100%;
  background-image: url(../images/top.png);
  background-size: cover;
  background-position: center;
  margin: 0px;
  min-width: 320px;
}
.assesment_retangle {
  position: absolute;
  left: 10%;
  bottom: 6%;
  box-sizing: border-box;
  min-width: 200px;
  height: 40%;
  background: #b51472;
  border: 5px solid #ffffff;
  border-radius: 50px 0px;
  align-self: flex-end;
}

.assesment_p {
  max-width: 250px;
  max-height: 200px;
  font-family: "Italian Plate No2";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 20px;
  text-align: center;
  text-transform: capitalize;
  color: #ffffff;
}


@media screen and (min-width:1000px) {    
    .top_report{height: 80vh;}
}

</style>
<section class="top_report">
    <div class="assesment_retangle">
        <p class="assesment_p">
            Finding  from the assessment unfortunately reflect a
            stark reality in Nigeria and for many states
        </p>
    </div>
</section>