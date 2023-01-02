<style>
  .map_section{
    position:relative;
    top:120px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
  /* background:grey; */
  width:100%;

  min-width:320px;
}
  .map-section-top-border{
    display:flex; 
    justify-content:space-between; 
    align-items:center; 
    width:100%; 
    height:20px;
    /* background:yellow; */
  }
  .map-section-top-border-r{ background: #10827B; width: 50%; height:100%;}
  .map-section-top-border-l{ background: #00FFD9; width: 50%; height:100%;}
  main{
    display:flex;
    flex-direction:column-reverse;
    /* background:red; */
    width:100%;
    margin:0px 0;
    gap:15px;
    height:70%
  }  
  .map-bars{
    display:flex;
    flex-direction:column;
    width:100%;
    /* background:blue; */
  }
  .all-bars{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    gap:15px;
    width:100%;
    /* background:red; */
  }
  .bar{
    display:flex;
    flex-direction:row;
    justify-content:center;
    width:90%;
    height:40px;
    /* background:yellow; */
  }
  .state{
    display:flex;
    align-items:center;
    justify-content:center;
    width: 87px;
    height: 40px;
    background: #DEE5E4;
    border-radius: 20px 0px 0px 20px;
  }

  .progress-bar{
    min-width:100px;
    width: 260px;
    background: #10837B;
    border-radius: 0px 20px 20px 0px;
  }
  .states-name{
    font-family: 'Colfax';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 21px;
    color: #000000;
  }
  .statee-no{
    /* background: white; */
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 0 0 5px;
  }
  .statee-no>.no{
    font-family: 'Colfax';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 21px;
  }

  .main-map{
    display:flex;
    width:100%;
    height:200px;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    min-width:320px;
    min-height:500px;
    /* background:green; */
  }
  .map{
    display:flex;
    justify-content:center;
    align-items:center;
    width:85%;
    height:90%;
    /* background:blue;    */
  }
  .main-map>.map>img{
    width:100%;
    height:80%;
  }
  .map-section-button-border-responsive{
    display:flex; 
    flex-direction:column;
    justify-content:center; 
    align-items:center; 
    width:80%; 
    gap:15px;
    /* height:40px; */
    /* margin:0 50px; */
    /* background:red; */
    
  }
  .map-section-button-border{
    display:flex;
    flex-direction:column;
    align-items:center;
    width:90%;
    height:40px;
    gap:20px;
    /* margin:0 50px; */
    /* background:red; */
  }
  .map-buttom-border-top{
    display:flex;  
    /* flex-direction:column; */
    align-items:center; 
    width:100%; 
    height:10px;
    margin:0 50px;
    background:yellow;
  }
  .map-buttom-border-buttom{
    display:flex;  
    /* flex-direction:column; */
    align-items:center; 
    width:100%; 
    height:10px;
    margin:0 50px;
    background:yellow;
  }
  .map-buttom-border-top>.map-buttom-border-l{ background: #B51472; width: 50%; height:100%;}
  .map-buttom-border-top>.map-buttom-border-r{ background: #DEE5E4; width: 50%; height:100%;}
  
  .map-buttom-border-buttom>.map-buttom-border-l{ background: #B51472; width: 50%; height:100%;}
  .map-buttom-border-buttom>.map-buttom-border-r{ background: #DEE5E4; width: 50%; height:100%;}
  .map-buttom-border-buttom>#l-green{ background: #10837B; width: 50%; height:100%;}

  .map-buttom-border{
    display:none; 
    justify-content:flex-end; 
    align-items:center; 
    width:100%; 
    height:10px;
    margin:0 50px;
    /* background:yellow; */
  }
  .map-buttom-border-l{ background: #B51472; width: 20%; height:100%;}
  .map-buttom-border-r{ background: #DEE5E4; width: 20%; height:100%;}
  #l-green{ background: #10837B;; width: 20%; height:100%;}
  

  @media screen and (min-width:670px) {
    
    main{
    display:flex;
    flex-direction:row;
    align-items:center;
    margin:50px 0 50px 0;
    /* background:red; */
  }
  .main-map{
    width:50%;
    height:100%;
  }
    .map-bars{
      width:50%;
      height:100%;
    }
    .map-section-button-border-responsive{
    display:none; 
  }
    .map-buttom-border{
    display:flex; }
  }

</style>
<section class="map_section">
  <div class="map-section-top-border">
    <div class="map-section-top-border-l"></div>
    <div class="map-section-top-border-r"></div>
  </div>
  
  <main>
   <div class="map-bars">
      <div class="all-bars"> 
        <div class="bar"> 
          <div class="state">
            <span class="states-name" >FCT</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >68</span> 
          </div>
        </div> 

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Enugu</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >66</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Anambra</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >65</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Ekiti</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >63</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Delta</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >61</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Abia</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >65</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Anambra</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >65</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Anambra</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >65</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Anambra</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >65</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Anambra</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >65</span> 
          </div>
        </div>

        <div class="bar"> 
          <div class="state">
            <span class="states-name" >Anambra</span> 
          </div>

          <div class="progress-bar">
            </div>

          <div class="statee-no">
            <span class="no" >65</span> 
          </div>
        </div>
      </div>
    </div>

    <div class="main-map">
      <div class="map">
        <img src="images/map.png"alt="map">
      </div> 
      <div class="map-section-button-border-responsive">
          <div class="map-buttom-border-top">
            <div class="map-buttom-border-l"></div>
            <div class="map-buttom-border-r"></div>
          </div>
          <div class="map-buttom-border-buttom">
            <div class="map-buttom-border-r"></div>
            <div class="map-buttom-border-l" id="l-green"></div>
          </div>
        

      </div>
    </div>
  </main>

  <div class="map-section-button-border">
    <div class="map-buttom-border top">
      <div class="map-buttom-border-l"></div>
      <div class="map-buttom-border-r"></div>
    </div>
    <div class="map-buttom-border buttom">
      <div class="map-buttom-border-r"></div>
      <div class="map-buttom-border-l" id="l-green"></div>
    </div>
  </div> 
</section>