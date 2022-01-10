<template>
  <div class="block-content">
    <div class="row justify-content-center py-sm-3">
      <div class="col-md-12">
        <div class="form-group">
          <label for="works_type"
            >Nombre de travailleurs secouristes sur chantier :</label
          >
          <input
            type="text"
            class="form-control form-control-alt input-validate"
            v-model="$store.state.pps_ps.works_secouristes_number"
            id="works_secouristes_number"
          />
        </div>

        <div class="form-group">
          <label> Horaire de travail : </label>

          <div class="form-inline  d-flex align-items-center mb-3">
            <div class="form-inline d-flex align-items-center  me-3">
              <label class="me-5 small">Du lundi au jeudi : </label>

              <select
                disabled
                style="width: 90px"
                class="form-control form-control-alt me-2"
                :class="{
                  'is-error': $store.getters.errors.includes(
                    'works_daily_morning_hour'
                  ),
                }"
                v-model="$store.state.pps_ps.works_daily_morning_hour"
                @change="$parent.clearError('works_daily_morning_hour')"
                data-validate="required"
                name="works_daily_morning_hour"
                id="works_daily_morning_hour"
              >
                <option
                  :value="hour"
                  v-for="(hour, index) in morning_hours"
                  :key="index"
                >
                  {{ hour }}
                </option>
              </select>

              <select
                style="width: 90px"
                disabled
                class="form-control form-control-alt input-validate"
                :class="{
                  'is-error': $store.getters.errors.includes(
                    'works_daily_morning_minutes'
                  ),
                }"
                v-model="$store.state.pps_ps.works_daily_morning_minutes"
                @change="$parent.clearError('works_daily_morning_minutes')"
                data-validate="required"
                name="works_daily_morning_minutes"
                id="works_daily_morning_minutes"
              >
                <option
                  :value="minute"
                  v-for="(minute, index) in minutes"
                  :key="index"
                >
                  {{ minute }}
                </option>
              </select>
            </div>

            <div class="form-inline d-flex align-items-center">
              <label class="me-3"> Au </label>

              <select
                style="width: 90px"
                class="form-control form-control-alt me-2"
                :class="{
                  'is-error': $store.getters.errors.includes(
                    'works_daily_evning_hour'
                  ),
                }"
                v-model="$store.state.pps_ps.works_daily_evning_hour"
                @change="$parent.clearError('works_daily_evning_hour')"
                data-validate="required"
                name="works_daily_evning_hour"
                id="works_daily_evning_hour"
              >
                <option
                  :value="hour"
                  v-for="(hour, index) in evening_hours"
                  :key="index"
                >
                  {{ hour }}
                </option>
              </select>

              <select
                style="width: 90px"
                class="form-control form-control-alt input-validate"
                :class="{
                  'is-error': $store.getters.errors.includes(
                    'works_daily_evning_minutes'
                  ),
                }"
                v-model="$store.state.pps_ps.works_daily_evning_minutes"
                @change="$parent.clearError('works_daily_evning_minutes')"
                data-validate="required"
                name="works_daily_evning_minutes"
                id="works_daily_evning_minutes"
              >
                <option
                  :value="minute"
                  v-for="(minute, index) in minutes"
                  :key="index"
                >
                  {{ minute }}
                </option>
              </select>
            </div>
          </div>

          <div class="form-inline d-flex align-items-center">
            <label class="me-2 small"> </label>

            <div class="form-inline d-flex align-items-center">
              <div class="form-inline me-3 d-flex align-items-center">
                <label class="me-5 small" style="width:105px" >Le vendredi :</label>
                <select
                style="width: 90px"

                  class="form-control form-control-alt me-2"
                  :class="{
                    'is-error': $store.getters.errors.includes(
                      'works_friday_morning_hour'
                    ),
                  }"
                  @change="$parent.clearError('works_friday_morning_hour')"
                  data-validate="required"
                  name="works_friday_morning_hour"
                  id="works_friday_morning_hour"
                  v-model="$store.state.pps_ps.works_friday_morning_hour"
                >
                  <option
                    :value="hour"
                    v-for="(hour, index) in morning_hours"
                    :key="index"
                  >
                    {{ hour }}
                  </option>
                </select>

                <select
                style="width: 90px"

                  class="form-control form-control-alt input-validate"
                  :class="{
                    'is-error': $store.getters.errors.includes(
                      'works_friday_morning_minutes'
                    ),
                  }"
                  @change="$parent.clearError('works_friday_morning_minutes')"
                  data-validate="required"
                  name="works_friday_morning_minutes"
                  id="works_friday_morning_minutes"
                  v-model="$store.state.pps_ps.works_friday_morning_minutes"
                >
                  <option
                    :value="minute"
                    v-for="(minute, index) in minutes"
                    :key="index"
                  >
                    {{ minute }}
                  </option>
                </select>
              </div>

              <div class="form-inline d-flex align-items-center">
                <label class="me-3"> Au </label>

                <select
                style="width: 90px"

                  class="form-control form-control-alt me-2"
                  :class="{
                    'is-error': $store.getters.errors.includes(
                      'works_friday_evning_hour'
                    ),
                  }"
                  @change="$parent.clearError('works_friday_evning_hour')"
                  data-validate="required"
                  name="works_friday_evning_hour"
                  id="works_friday_evning_hour"
                  v-model="$store.state.pps_ps.works_friday_evning_hour"
                >
                  <option
                    :value="hour"
                    v-for="(hour, index) in evening_hours"
                    :key="index"
                  >
                    {{ hour }}
                  </option>
                </select>

                <select
                style="width: 90px"

                  class="form-control form-control-alt input-validate"
                  :class="{
                    'is-error': $store.getters.errors.includes(
                      'works_friday_evning_minutes'
                    ),
                  }"
                  @change="$parent.clearError('works_friday_evning_minutes')"
                  data-validate="required"
                  id="works_friday_evning_minutes"
                  v-model="$store.state.pps_ps.works_friday_evning_minutes"
                  name="works_friday_evning_minutes"
                >
                  <option
                    :value="minute"
                    v-for="(minute, index) in minutes"
                    :key="index"
                  >
                    {{ minute }}
                  </option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Approvisionnement :   -->
        <div class="form-group">
          <label for="works_approvisionnement">Approvisionnement :</label>
          <textarea
            class="form-control form-control-alt input-validate"
            v-model="$store.state.pps_ps.works_approvisionnement"
            id="works_approvisionnement"
          >
          </textarea>
        </div>
      </div>
    </div>
  </div>
</template>
 



 <script>
export default {
  data() {
    return {
      morning_hours: [],
      evening_hours: [],
      minutes: [],
    };
  },

  mounted() {
    // fill morning_hours
    for (let hour = 8; hour < 12; hour++)
      hour < 10
        ? this.morning_hours.push("0" + hour)
        : this.morning_hours.push(hour);
    for (let hour = 13; hour < 19; hour++) this.evening_hours.push(hour);
    // fill minutes
    for (let minute = 0; minute < 60; minute += 5)
      minute < 10 ? this.minutes.push("0" + minute) : this.minutes.push(minute);
  },
};
</script>
 