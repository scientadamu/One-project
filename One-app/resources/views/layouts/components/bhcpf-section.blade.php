<style>
  .bhcpf_section {
    margin:150px 0 50px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.bhcpf_p {
  margin:0;
  padding:0;
  font-size: 30px;
}
.primary_helth_pic {
  width: 100%;
  height: 70vh;
}
.bhcpf_section img {
  width: 100%;
  height: 70vh;
}
@media screen and (min-width:670px) {
  .bhcpf_section{
    flex-direction:row;
    align-items:flex-start;
  }
  .bhcpf_report{
    width:45%; 
    /* height:100%; */
    /* background:red; */
  }
  .bhcpf_report>p{
    
  }
  .primary_helth_pic{width:40%}
}

</style>
<section class="bhcpf_section">
    <div class="bhcpf_report"><p class="bhcpf_p">BHCPF REPORT</p></div>
    <div class="primary_helth_pic">
        <img src="../images/d_state_of_primary_health_care.png" />
    </div>
</section>
