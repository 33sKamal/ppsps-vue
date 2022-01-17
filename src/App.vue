<template>
  <div class="pt-3 pb-3 container">
    <div class="card">
      <div
        v-if="$store.state.form.actvie_step > 0"
        class="card-header d-flex align-items-center justify-content-between"
      >
        <h2 class="text-primary">{{ $store.getters.actvie_title }}</h2>
        <h2>
          <small class="text-war,">Page</small>
          {{ $store.state.form.actvie_step }} / 12
        </h2>
      </div>

      <div
        v-else
        class="card-header d-flex align-items-center justify-content-center"
      >
        <h2 class="text-primary">
          Bienvenue dans le générateur des documents <strong>PPSPS</strong>
        </h2>
      </div>

      <div
        class="card-body"
        :class="{
          'card-body-height-limited': $store.state.form.actvie_step != 0,
        }"
      >
        <welcome v-if="$store.state.form.actvie_step == 0" />
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
          <pdfFileTemplate />
        </div>
      </div>
      <div
        v-if="$store.state.form.actvie_step > 0"
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
          v-if="$store.state.form.actvie_step < 12"
          @click="nextStep()"
          class="btn btn-primary"
        >
          Suivante
        </button>

        <button
          type="button"
          v-if="$store.state.form.actvie_step == 12"
          @click="resetThedocument"
          class="btn btn-danger"
        >
          Re faire nouveau PPSPS
        </button>

        <button
          type="button"
          v-if="$store.state.form.actvie_step == 12"
          @click="generatePdf()"
          class="btn btn-success"
        >
          Télécharger document pdf
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
import welcome from "./components/ppsps/Welcome.vue";

export default {
  name: "App",

  methods: {
    resetThedocument() {
      this.$store.state.pps_ps.soutraits = [];

      this.$store.state.pps_ps.first_name = "";
      this.$store.state.pps_ps.last_name = "";
      this.$store.state.pps_ps.email = "";
      this.$store.state.pps_ps.phone = "";
      this.$store.state.pps_ps.chantier_name = "";
      this.$store.state.pps_ps.chantier_phone = "";
      this.$store.state.pps_ps.logo_path = null;
      this.$store.state.pps_ps.address = "";
      this.$store.state.pps_ps.address_two = "";
      this.$store.state.pps_ps.city = "";
      this.$store.state.pps_ps.chantier_id = "";

      this.$store.state.pps_ps.chantier_lot = [
        "Terrassement / VRD",
        "Démolition",
        "Gros œuvre",
        "Couverture / étanchéité",
        "Charpente",
        "Revêtement façade / Bardage",
      ];

      this.$store.state.pps_ps.chantier_description = "";

      this.$store.state.pps_ps.responsable_name = "";
      this.$store.state.pps_ps.responsable_phone = "";
      this.$store.state.pps_ps.responsable_visa = "";
      this.$store.state.pps_ps.responsable_indice_ppsps = "";

      this.$store.state.pps_ps.entreprise_name = "";
      this.$store.state.pps_ps.entreprise_address_one = "";
      this.$store.state.pps_ps.entreprise_address_two = "";
      this.$store.state.pps_ps.entreprise_phone = "";
      this.$store.state.pps_ps.entreprise_fax = "";
      this.$store.state.pps_ps.entreprise_qualifications = "";
      this.$store.state.pps_ps.entreprise_ste_responsable_name = "";
      this.$store.state.pps_ps.entreprise_chantier_responsable_name = "";

      this.$store.state.pps_ps.works_type = "";
      this.$store.state.pps_ps.works_is_cordination = "";

      this.$store.state.pps_ps.works_delay = "";
      this.$store.state.pps_ps.works_start_date = "";
      this.$store.state.pps_ps.works_ends_date = "";

      this.$store.state.pps_ps.works_effectif_min = "";
      this.$store.state.pps_ps.works_effectif_max = "";

      this.$store.state.pps_ps.works_secouristes_number = "";

      this.$store.state.pps_ps.works_approvisionnement = "";
      this.$store.state.pps_ps.works_daily_morning_hour = "08";
      this.$store.state.pps_ps.works_daily_morning_minutes = "00";
      this.$store.state.pps_ps.works_daily_evning_hour = "17";
      this.$store.state.pps_ps.works_daily_evning_minutes = "00";
      this.$store.state.pps_ps.works_friday_morning_hour = "08";
      this.$store.state.pps_ps.works_friday_morning_minutes = "00";
      this.$store.state.pps_ps.works_friday_evning_hour = "17";
      this.$store.state.pps_ps.works_friday_evning_minutes = "00";

      this.$store.state.pps_ps.maitre_ouvrage_name = "";
      this.$store.state.pps_ps.maitre_ouvrage_address = "";
      this.$store.state.pps_ps.maitre_ouvrage_address_two = "";
      this.$store.state.pps_ps.maitre_ouvrage_phone = "";
      this.$store.state.pps_ps.maitre_ouvrage_fax = "";

      this.$store.state.pps_ps.maitrise_ouvrage_name = "";
      this.$store.state.pps_ps.maitrise_ouvrage_address = "";
      this.$store.state.pps_ps.maitrise_ouvrage_address_two = "";
      this.$store.state.pps_ps.maitrise_ouvrage_phone = "";
      this.$store.state.pps_ps.maitrise_ouvrage_fax = "";

      this.$store.state.pps_ps.coordinateur_sps_name = "";
      this.$store.state.pps_ps.coordinateur_sps_address = "";
      this.$store.state.pps_ps.coordinateur_sps_address_two = "";
      this.$store.state.pps_ps.coordinateur_sps_phone = "";
      this.$store.state.pps_ps.coordinateur_sps_fax = "";

      this.$store.state.pps_ps.oppbtp = "";
      this.$store.state.pps_ps.inspection_du_travail = "";
      this.$store.state.pps_ps.cram = "";
      this.$store.state.pps_ps.médecine_du_travail = "";

      this.$store.state.pps_ps.chantier_emplacement = "";
      this.$store.state.pps_ps.chantier_installations = [];
      this.$store.state.pps_ps.dhol = "";
      this.$store.state.pps_ps.chantier_parking = false;
      this.$store.state.pps_ps.chantier_plan_circulation = false;
      this.$store.state.pps_ps.chantier_organisation_livraison = "";
      this.$store.state.pps_ps.chantier_livraison_morning = "8H00 à 12H00";
      this.$store.state.pps_ps.chantier_livraison_evening = "8H00 à 12H00";

      this.$store.state.pps_ps.has_soutrait = true;
      this.$store.state.pps_ps.soutraits_number = 0;
      this.$store.state.pps_ps.payment_method = "card-payment";

      this.$store.state.form.actvie_step = 1;
    },
    previousStep() {
      this.$store.state.form.actvie_step--;
    },

    nextStep() {
      this.$store.state.form.actvie_step++;

      // this.validateForm()
      //   .then(() => this.$store.state.form.actvie_step++)
      //   .catch(() => {
      //     console.log(" Not Done ");
      //   });
    },
    generatePdf() {
      let element = document.getElementById("testHtml");

      let opt = {
        filename: "pps-ps-file.pdf",
      };

      window.html2pdf(element).set(opt);
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
    welcome,
  },
};
</script>

<style>
.card-body-height-limited {
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
