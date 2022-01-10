<template>
  
    
      <div class="col-md-12">
        <div class="form-group">
          <label for="works_type">Nature des travaux</label>

          <select
            class="form-control "
            id="works_type"
            v-model="$store.state.pps_ps.works_type"
            :class="{ 'is-error': $store.getters.errors.includes('works_type') }"
            kamal-v-validate="'required'"
            name="works_type"
          >
            <option></option>
            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
            <option :value="lot" v-for="(lot, index) in lots" :key="index">
              {{ lot }}
            </option>
          </select>
        </div>

        <div class="form-group">
          <div class="custom-control custom-switch custom-control-success">
            <input
              type="checkbox"
              class="custom-control-input"
              id="works_is_cordination"
              v-model="$store.state.pps_ps.works_is_cordination"
              :class="{ 'is-error': $store.getters.errors.includes('works_is_cordination') }"
              kamal-v-validate="''"
              name="works_is_cordination"
            />
            <label class="custom-control-label" for="works_is_cordination"
              >Existe-t-il un plan général de coordination ?</label
            >
          </div>
        </div>

        <div class="form-group">
          <label for="works_delay">Délai global : </label>

          <input
            type="text"
            class="form-control  "
            v-model="$store.state.pps_ps.works_delay"
            id="works_delay"
            :class="{ 'is-error': $store.getters.errors.includes('works_delay') }"
            kamal-v-validate="'required'"
            name="works_delay"
          />
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="works_start_date">Démarrage des travaux :</label>
              <input
                type="text"
                class="js-datepicker form-control "
                data-week-start="1"
                data-autoclose="true"
                data-today-highlight="true"
                data-date-format="yyyy-mm-dd"
                id="works_start_date"
                :class="{ 'is-error': $store.getters.errors.includes('works_start_date') }"
                kamal-v-validate="'required'"
                name="works_start_date"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="works_ends_date">Fin des travaux :</label>
              <input
                type="text"
                class="js-datepicker form-control "
                data-week-start="1"
                data-autoclose="true"
                data-today-highlight="true"
                data-date-format="yyyy-mm-dd"
                id="works_ends_date"
                :class="{ 'is-error': $store.getters.errors.includes('works_ends_date') }"
                kamal-v-validate="'required'"
                name="works_ends_date"
              />
            </div>
          </div>
        </div>

        <!-- effectif inputs  -->

        <div class="form-inline">
          <label>Effectif prévisionnel :</label>

          <input
            type="text"
            class="form-control   ml-3"
            placeholder="Minimum"
            v-model="$store.state.pps_ps.works_effectif_min"
            id="works_effectif_min"
            :class="{ 'is-error': $store.getters.errors.includes('works_effectif_min') }"
            kamal-v-validate="'required'"
            name="works_effectif_min"
          />

          <input
            type="text"
            class="form-control   ml-3"
            placeholder="Maximum"
            v-model="$store.state.pps_ps.works_effectif_max"
            id="works_effectif_max"
            :class="{ 'is-error': $store.getters.errors.includes('works_effectif_max') }"
            kamal-v-validate="'required'"
            name="works_effectif_max"
          />
        </div>
      </div>
    </template>

<script>
export default {
  data() {
    return {
      lots: [],
    };
  },

  created() {
    this.lots = [
      "Terrassement / VRD ",
      "Démolition ",
      "Gros œuvre ",
      "Couverture / étanchéité ",
      "Charpente ",
      "Revêtement façade / Bardage",
      "Menuiserie Extérieures ",
      "Menuiseries Intérieures ",
      "Plâtrerie / Isolation / Faux plafonds ",
      "Revêtement Sol ",
      "Electricité ",
      "Chauffage / Ventilation /  climatisation ",
      "Plomberie ",
      "Nettoyage de chantier / Finitions",
    ];
  },

};
</script>
