<template>
  <div class="block-content">
    <div class="row py-sm-3">
      <div
        class="col-md-6 mb-5 pb-5 border border-light"
        v-for="soutrait in $store.state.pps_ps.soutraits"
        :key="soutrait.id"
      >
        <div class="block-header">
          <h3 class="block-title">
            Entreprise N: <small>{{ soutrait.id }}</small>
          </h3>
        </div>
        <div class="block-content">
          <div class="form-inline justify-content-between mb-3">
            <label>Nom :</label>
            <input
              type="text"
              class="form-control form-control-alt"
              data-validate="required"
              :class="{
                'is-error': $store.getters.errors.includes(
                  'name' + soutrait.id
                ),
              }"
              :id="'name' + soutrait.id"
              :name="'name' + soutrait.id"
              v-model="soutrait.name"
            />
          </div>

          <div class="form-inline justify-content-between mb-3">
            <label>Adresse :</label>
            <input
              type="text"
              class="form-control form-control-alt"
              data-validate="required"
              :class="{
                'is-error': $store.getters.errors.includes(
                  'address' + soutrait.id
                ),
              }"
              :id="'address' + soutrait.id"
              :name="'address' + soutrait.id"
              v-model="soutrait.address"
            />
          </div>

          <div class="form-group">
            <label for="soutrait.nature"
              >Nature des travaux sous-traités :</label
            >
            <textarea
              class="form-control form-control-alt"
              data-validate="required"
              :class="{
                'is-error': $store.getters.errors.includes(
                  'nature' + soutrait.id
                ),
              }"
              :id="'nature' + soutrait.id"
              :name="'nature' + soutrait.id"
              v-model="soutrait.nature"
            >
            </textarea>
          </div>

          <div class="form-check form-switch">
            <input
              type="checkbox"
              :class="{
                'is-error': $store.getters.errors.includes(
                  'diff_ppsps' + soutrait.id
                ),
              }"
              :id="'diff_ppsps' + soutrait.id"
              class="form-check-input"
              :name="'diff_ppsps' + soutrait.id"
              v-model="soutrait.diff_ppsps"
            />
            <label class="form-check-label" :for="'diff_ppsps' + soutrait.id">
              Diffusion du PPSPS (O/N) ?
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
 


 <script>
export default {
  created() {
    this.$store.state.pps_ps.soutraits = [];
    console.log(this.$store.state.pps_ps.soutraits);
    console.log(this.$store.state.pps_ps.soutraits_number);
 
      for (let i = 1; i <= this.$store.state.pps_ps.soutraits_number; i++) {
        this.$store.state.pps_ps.soutraits.push({
          id: i,
          name: "name " + i,
          address: "address " + i,
          nature: "nature " + i,
          diff_ppsps: true,
        });
      }
  },
};
</script>
 