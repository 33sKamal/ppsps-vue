<template>
  <div class="block-content">
    <div class="row justify-content-center py-sm-3">
      <div class="col-md-12">
        <div class="form-group">
          <label for="works_type">Nature des travaux</label>

          <select
            class="form-control form-control-alt"
            id="works_type"
            v-model="$store.state.pps_ps.works_type"
            :class="{
              'is-error': $store.getters.errors.includes('works_type'),
            }"
            data-validate="required"
            name="works_type"
          >
            <option></option>
            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
            <option :value="lot" v-for="(lot, index) in $store.state.lots" :key="index">
              {{ lot }}
            </option>
          </select>
        </div>

        <div class="form-group">
          <div class="form-check form-switch">
            <input
              type="checkbox"
              class="form-check-input"
              id="works_is_cordination"
              v-model="$store.state.pps_ps.works_is_cordination"
              :class="{
                'is-error': $store.getters.errors.includes(
                  'works_is_cordination'
                ),
              }"
              
              name="works_is_cordination"
            />
            <label class="form-check-label" for="works_is_cordination"
              >Existe-t-il un plan général de coordination ?</label
            >
          </div>
        </div>

        <div class="form-group">
          <label for="works_delay">Délai global : </label>

          <input
            type="text"
            class="form-control form-control-alt input-validate"
            v-model="$store.state.pps_ps.works_delay"
            id="works_delay"
            :class="{
              'is-error': $store.getters.errors.includes('works_delay'),
            }"
            data-validate="required"
            name="works_delay"
          />
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="works_start_date">Démarrage des travaux :</label>
              <input
                type="text"
                class="js-datepicker form-control form-control-alt"
                data-week-start="1"
                data-autoclose="true"
                data-today-highlight="true"
                data-date-format="yyyy-mm-dd"
                id="works_start_date"
                :class="{
                  'is-error':
                    $store.getters.errors.includes('works_start_date'),
                }"
                data-validate="required"
                name="works_start_date"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="works_ends_date">Fin des travaux :</label>
              <input
                type="text"
                class="js-datepicker form-control form-control-alt"
                data-week-start="1"
                data-autoclose="true"
                data-today-highlight="true"
                data-date-format="yyyy-mm-dd"
                id="works_ends_date"
                :class="{
                  'is-error': $store.getters.errors.includes('works_ends_date'),
                }"
                data-validate="required"
                name="works_ends_date"
              />
            </div>
          </div>
        </div>

        <!-- effectif inputs  -->

        <div class="form row">
          <label class="col-md-3">Effectif prévisionnel :</label>

          <div class="col-md-3">
          <input
            type="text"
            class="form-control form-control-alt "
            placeholder="Minimum"
            v-model="$store.state.pps_ps.works_effectif_min"
            id="works_effectif_min"
            :class="{
              'is-error': $store.getters.errors.includes('works_effectif_min'),
            }"
            data-validate="required"
            name="works_effectif_min"
          />
        </div>

          <div class="col-md-3">
          <input
            type="text"
            class="form-control form-control-alt "
            placeholder="Maximum"
            v-model="$store.state.pps_ps.works_effectif_max"
            id="works_effectif_max"
            :class="{
              'is-error': $store.getters.errors.includes('works_effectif_max'),
            }"
            data-validate="required"
            name="works_effectif_max"
          />
        </div>

        </div>
      </div>
    </div>
  </div>
</template>
 


 <script>
export default {
  data() {
      return{
        
      }
  },
};
</script>
 