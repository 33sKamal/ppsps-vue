<template>
  <img alt="Vue logo" src="./assets/logo.png" />

    <step1 />
  <step2 />
  <step3 />

  <step5 />
  <step6 />
  <step7 />
  <step8 />
  <step9 />
  <step10 />
  <step11 />
  <step12 /> 


  <stepPayment />
</template>

<script>

import step1 from "./components/ppsps/Step01.vue";
import step2 from "./components/ppsps/Step02.vue";
import step3 from "./components/ppsps/Step03.vue";
import step5 from "./components/ppsps/Step05.vue";
import step6 from "./components/ppsps/Step06.vue";
import step7 from "./components/ppsps/Step07.vue";
import step8 from "./components/ppsps/Step08.vue";
import step9 from "./components/ppsps/Step09.vue";
import step10 from "./components/ppsps/Step10.vue";
import step11 from "./components/ppsps/Step11.vue";
import step12 from "./components/ppsps/Step12.vue";
import stepPayment from "./components/ppsps/StepPayment.vue";


export default {
  name: "App",
  components: {
    step1,
    step2,
    step3,
   step5,
   step6,
   step7,
   step8,
   step9,
   step10,
   step11,
   step12,
   stepPayment,
  },

  mounted(){

    console.log(
      this.$store.state.pps_ps.address
    )

    setTimeout(() => {
      this.$store.state.pps_ps.address = 'mlkjh'

    console.log(
      this.$store.state.pps_ps.address
    )
      
    }, 1000);
  }



};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
