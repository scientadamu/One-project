<style>
    /* feature style */
        .features{
        position:relative;
        top:364px;
        left:0;
        margin: 0;
        padding: 0;
        background: #FFFFFF;
        /* background: blue; */
        display: flex;
        flex-direction:column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 320px;
        min-width: 320px;
         }

         .building-block{
            background:red;
            width:100%;
            height:100px;
         }
        .features-block-diagram{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80%;
        height: 90%;
        min-width: 300px;
        background: white;
        /* background: red; */
        }

        .features>.features-block-diagram>img{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 200px;
        width: 300px;
        /* position: relative; */
        /* background: red; */
        }

/* feature style end */


@media screen and (min-width: 500px) {
    .features{
        display: flex;
        height: 500px;
        min-width: 500px;
    }
     .features-block-diagram{
        width: 80%;
        height: 90%;
        /* background: gray; */
    }
    .features>.features-block-diagram>img{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 400px;
        width: 90%;
        min-width: 500px;
        /* position: relative; */
        /* background: red; */
    }
} 

@media screen and (min-width: 620px) {
    .features{top:213px;
    }
}

@media screen and (min-width: 900px) {
    .features{top:170px;
    }
}

</style>
<div class="features">

    <div class="building-block">
        
          
              
            </div>
    

    <div class="features-block-diagram">
            <img src="../../images/BHCPF_block_diagram.png" alt="features-b-diagram">
        </div>
    </div>