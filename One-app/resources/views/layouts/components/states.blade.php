<style>
    
.status {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  background: black;
  min-width: 300px;
}
.status-title {
  display: flex;
  /* background: red; */
  margin: 30px 0px 0px 30px;
}
.status-title > p {
  margin: 0;
  padding: 0;
  /* position: relative; */
  font-family: "Colfax";
  font-style: normal;
  font-weight: 500;
  font-size: 35px;
  line-height: 54px;
  text-transform: capitalize;
  color: #ffffff;
  /* background: blue; */
}

.status-states {
  /* position: relative; */
  margin: 30px 0 0 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  /* background: rgb(241, 17, 17); */
  gap: 40px;
  /* height: 230px; */
}
.state1-2, .state3-4 {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: center;
    gap: 40px;
    /* position: relative; */
  }
.state{
  display: flex;
  /* flex-direction: column; */
  align-items: center;
  gap: 40px;
  /* position: relative; */
  width: 250px;
  height: 120px;
  background: #00ffd9;
}

.state:hover{
  background:white;
        color:#10827B;
        cursor: pointer;
}

#state-4{display: none;}

.state-img {
  display: flex;
  align-items: center;
  justify-content: center;
  /* position: relative; */
  left: 20px;
  width: 105px;
  height: 100px;
  background: black;
  /* background: red; */
  border-radius: 100px;
  color: white;
}

.state-img>img{
  width:65px;
  height:70px;
}
.state-name {
  /* position: relative; */
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Colfax";
  font-style: normal;
  font-weight: 500;
  font-size: 30px;
  line-height: 36px;
  text-transform: capitalize;
  color: #000000;
}
.status-btn{display: flex;
    /* position: relative; */
    top: 18px;
    align-items: center;
    justify-content: center;
    background: black;
    /* background: red; */
    width: 100%;
    padding:0;
    
}
.status-btn>button{
  display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    gap: 10px;
    /* position: relative;   */
    width: 170px;
    height: 50px;  
    left: 42px;  
    font-family: 'Colfax';
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    text-transform: uppercase;
    color: #000000;
    background: #00FFD9;
    margin:20px 0px 25px 80px;
}
.status-btn>button:hover{
  background:white;
        color:#10827B;
        cursor: pointer;
}

@media screen and (min-width: 640px) {
    .status{position:relative; min-width:640px;}
    .state1-2, .state3-4{flex-direction: row;}
    #state-4{display: flex;}
    .status-btn>button{margin-left: 370px;}
  }
  
  @media screen and (min-width: 900px) {
    .status-states{flex-direction: row; justify-content: center;}
    #state-4{display: none;}
    .status-btn>button{left: 335px;}
    
    .status-btn>button{margin-left: 670px;}
}

</style>
<div class="status">
        
        <div class="status-title">
          <p>
            Status of <br />
            health care <br />provision funds
          </p>
        </div>
  
        <div class="status-states">
          <div class="state1-2">
              <div class="state" id="state-1">
              <div class="state-img">
                  <img src="images/abia.png" alt="abia.png" />
              </div>
              <span class="state-name">Abia State</span>
              </div>
  
              <div class="state" id="state-2">
              <div class="state-img">
                  <img src="images/abia.png" alt="abia.png" />
              </div>
              <span class="state-name">Abia State</span>
              </div>
      </div>
      <div class="state3-4">
          <div class="state" id="state-3">
            <div class="state-img">
              <img src="images/abia.png" alt="abia.png" />
            </div>
            <span class="state-name">Abia State</span>
          </div>
          <div class="state" id="state-4">
              <div class="state-img">
                <img src="images/abia.png" alt="abia.png" />
              </div>
              <span class="state-name">Abia State</span>
            </div>
      </div>
        </div>
        <div class="status-btn">
          <button>READ MORE ></button>
        </div>
  
      </div>