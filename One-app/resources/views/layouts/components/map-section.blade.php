<style>
    .map_section {
  display: flex;
  flex-direction: column;
  width: 100%;
  background: #f5f5f5;
  margin: 0% 0;
}

#map_bars {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  align-items: center;
}

.bar {
  display: flex;
}

.l_bar {
  display: flex;
  justify-content: center;
  font-family: "Colfax";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  line-height: 21px;
  text-align: center;
  align-items: center;
  color: black;
  width: 87px;
  height: 40px;
  background: #dee5e4;
  border-radius: 20px 0px 0px 20px;
}

.r_bar {
  width: 260px;
  height: 40px;
  background: #10837b;
  border-radius: 0px 20px 20px 0px;
  -webkit-border-radius: 0px 20px 20px 0px;
  -moz-border-radius: 0px 20px 20px 0px;
  -ms-border-radius: 0px 20px 20px 0px;
  -o-border-radius: 0px 20px 20px 0px;
}

.state_no {
  font-family: "Colfax";
  margin-left: 5px;
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 21px;
  color: #000000;
}

#map {
  background-image: url(../images/map.png);
  height: 70vh;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
}

.bar1 {
  margin: 0 auto;
  width: 80%;
  height: 26px;
  background: #dee5e4;
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
}
.bar1a {
  width: 50%;
  height: 26px;
  background: #b51472;
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
}
.bar2 {
  margin: 20px auto;
  width: 80%;
  height: 26px;
  background: #10837b;
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
}
.bar2a {
  width: 50%;
  height: 26px;
  background: #dee5e4;
  border-radius: 20px;
}

.map_section {
  flex-direction: row;
  flex-wrap: wrap-;
}

@media screen and (min-width: 1000px) {
  .map_section {
    flex-direction: row;
    flex-wrap: wrap;
    padding: 150px 0 0 0;
    display: flex;
    flex-direction: row;
  }
  .map_tag {
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .assesment_retangle {
    display: flex;
    justify-content: center;
    min-width: 300px;
    max-width: 500px;
    height: 173px;
    position: absolute;
    left: 15%;
    top: 48%;
  }
  .assesment_p {
    margin: 10px auto;
    font-size: 26px;
    line-height: 25px;
  }

  #single_bar_r {
    background: #10827b;
    width: 100%;
    height: 20px;
  }
  #single_bar_l {
    background: #00ffd9;
    width: 50%;
    height: 20px;
  }
}


</style>
<div id="single_bar_r">
    <div id="single_bar_l">.</div>
</div>
<section class="map_section">
    <div id="map_bars">
        <div class="bar">
            <div class="l_bar">
                <p class="states">FCT</p>
            </div>
            <div class="r_bar"></div>
            <p class="state_no">65</p>
        </div>

        <div class="bar">
            <div class="l_bar">
                <p class="states">Enugu</p>
            </div>
            <div class="r_bar"></div>
            <p class="state_no">66</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Anambra</p></div>
            <div class="r_bar"></div>
            <p class="state_no">65</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Ekiti</p></div>
            <div class="r_bar"></div>
            <p class="state_no">63</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Delta</p></div>
            <div class="r_bar"></div>
            <p class="state_no">61</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Abia</p></div>
            <div class="r_bar"></div>
            <p class="state_no">65</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Anambra</p></div>
            <div class="r_bar"></div>
            <p class="state_no">65</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Anambra</p></div>
            <div class="r_bar"></div>
            <p class="state_no">66</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Anambra</p></div>
            <div class="r_bar"></div>
            <p class="state_no">65</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Anambra</p></div>
            <div class="r_bar"></div>
            <p class="state_no">68</p>
        </div>

        <div class="bar">
            <div class="l_bar"><p class="states">Anambra</p></div>
            <div class="r_bar"></div>
            <p class="state_no">69</p>
        </div>

    </div>
    <div class="map_tag">
        <div id="map"></div>
        <div class="map_bar2">
            <div class="bar1"><div class="bar1a"></div></div>
        </div>
        <div class="bar2"><div class="bar2a"></div></div>
    </div>
</section>

<!-- /* -------------------------map_section ------------------- */ -->
