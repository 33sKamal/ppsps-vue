<template>
  <div class="pt-3 pb-3 container">
    <div class="card">
      <div
        class="card-header d-flex align-items-center justify-content-between"
      >
        <h2 class="text-primary">{{ $store.getters.actvie_title }}</h2>
        <h2>
          <small class="text-war,">Page</small>
          {{ $store.state.form.actvie_step }} / 11
        </h2>
      </div>
      <div class="card-body">
        <div class="row">
          <step1 v-if="$store.state.form.actvie_step == 1" />
          <step2 v-if="$store.state.form.actvie_step == 2" />
          <step3 v-if="$store.state.form.actvie_step == 3" />
          <step4 v-if="$store.state.form.actvie_step == 4" />
          <step5 v-if="$store.state.form.actvie_step == 5" />
          <step6 v-if="$store.state.form.actvie_step == 6" />
          <step7 v-if="$store.state.form.actvie_step == 7" />
          <step8 v-if="$store.state.form.actvie_step == 8" />
          <step9 v-if="$store.state.form.actvie_step == 9" />
          <step10 v-if="$store.state.form.actvie_step == 10" />
          <step11 v-if="$store.state.form.actvie_step == 11" />
          <pdfFileTemplate ref="testHtml" />
        </div>
      </div>
      <div
        class="card-footer d-flex align-items-center justify-content-between"
      >
        <button
          type="button"
          :class="{ disabled: $store.state.form.actvie_step == 1 }"
          @click="previousStep()"
          class="btn btn-primary"
        >
          Précédent
        </button>

        <button
          type="button"
          v-if="$store.state.form.actvie_step < 11"
          @click="nextStep()"
          class="btn btn-primary"
        >
          Suivante
        </button>

        <button
          type="button"
          v-else
          @click="generatePdf()"
          class="btn btn-success"
        >
          Generate documentr
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import step1 from "./components/ppsps/Step01.vue";
import step2 from "./components/ppsps/Step02.vue";
import step3 from "./components/ppsps/Step03.vue";
import step4 from "./components/ppsps/Step04.vue";
import step5 from "./components/ppsps/Step05.vue";
import step6 from "./components/ppsps/Step06.vue";
import step7 from "./components/ppsps/Step07.vue";
import step8 from "./components/ppsps/Step08.vue";
import step9 from "./components/ppsps/Step09.vue";
import step10 from "./components/ppsps/Step10.vue";
import step11 from "./components/ppsps/Step11.vue";
import pdfFileTemplate from "./components/ppsps/PdfFileTemplate.vue";

export default {
  name: "App",

  methods: {
    previousStep() {
      this.$store.state.form.actvie_step--;
    },
    nextStep() {
      this.$store.state.form.actvie_step = 11;

      // this.validateForm()
      //   .then(() => this.$store.state.form.actvie_step++)
      //   .catch(() => {
      //     console.log(" Not Done ");
      //   });
    },
    generatePdf() {
      var element = document.getElementById("testHtml");

      window.html2pdf().set({
        pagebreak: { before: ".separator-3" },
      });

      window.html2pdf(element);
    },

    validateForm() {
      return new Promise((resolve, reject) => {
        let hasError = false;

        let inputs = document.getElementsByTagName("input");
        let textareas = document.getElementsByTagName("textarea");
        let selects = document.getElementsByTagName("select");

        // clear the errors
        for (const item of inputs) item.classList.remove("is-error");
        for (const item of textareas) item.classList.remove("is-error");
        for (const item of selects) item.classList.remove("is-error");

        for (const item of inputs) {
          let rules = item.dataset.validate;
          if (rules) {
            if (rules.includes("required") && item.value == "") {
              hasError = true;
              item.classList.add("is-error");
            }
          }
        }

        for (const item of textareas) {
          let rules = item.dataset.validate;
          if (rules) {
            if (rules.includes("required") && item.value == "") {
              hasError = true;
              item.classList.add("is-error");
            }
          }
        }

        for (const item of selects) {
          let rules = item.dataset.validate;
          if (rules) {
            if (rules.includes("required") && item.value == "") {
              hasError = true;
              item.classList.add("is-error");
            }
          }
        }

        return hasError ? reject() : resolve();
      });
    },
  },

  components: {
    step1,
    step2,
    step3,
    step4,
    step5,
    step6,
    step7,
    step8,
    step9,
    step10,
    step11,
    pdfFileTemplate,
  },
};
</script>

<style>
.card-body {
  height: 70vh;
  min-height: 400px;
  overflow: scroll;
}
.is-error {
  border: 1px #c51d1d solid !important;
  background: #ff000029 !important;
  transition: border 500ms !important;
  transition: background 500ms !important;
}

.f-small {
  font-size: 1rem;
}

.f-too-small {
  font-size: 0.8rem;
}

.disabled {
  color: currentColor !important;
  cursor: not-allowed !important;
  opacity: 0.5 !important;
  pointer-events: none !important;
}
.quantity-input {
  width: 100px;
  margin: 0 0.5rem;
}
</style>
