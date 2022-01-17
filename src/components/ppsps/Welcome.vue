<template>
  <div
    class="block-content"
    style="height: 80vh; width: 100%"
    :class="{
      'bg-warning d-flex align-items-center justify-content-center ':
        !accessApp,
    }"
  >
    <video autoplay id="my-video" v-if="accessApp">
      <source
        :src="require('../../../src/assets/ppsps.mp4')"
        type="video/mp4"
      />
    </video>

    <button
      v-if="!accessApp"
      @click="accessToApp"
      class="
        btn btn-primary btn-lg
        d-flex
        align-items-center
        justify-content-center
      "
    >
      <span class="mr-2">Access to app </span>
      <img
        :src="require('../../../src/assets/arrow.svg')"
        alt=""
        style="height: 10vh"
      />
    </button>
  </div>
</template>


<script>
export default {
  data() {
    return {
      accessApp: false,
    };
  },
  methods: {
    accessToApp() {
      this.accessApp = true;

      setTimeout(() => {
        this.$store.state.form.actvie_step = 1;
      }, 1000);
    },
  },
};
</script>


<style scoped>
#my-video {
  height: 90vh;
  width: 100%;
}
</style>