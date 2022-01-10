<template>
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

      <div class="form-inline justify-content-between mb-3">
        <label>Nom :</label>
        <input
          type="text"
          class="form-control"
          kamal-v-validate="'required'"
          :class="{ 'is-error': $store.getters.errors.includes('name' + soutrait.id) }"
          :id="'name' + soutrait.id"
          :name="'name' + soutrait.id"
          v-model="soutrait.name"
        />
      </div>

      <div class="form-inline justify-content-between mb-3">
        <label>Adresse :</label>
        <input
          type="text"
          class="form-control"
          kamal-v-validate="'required'"
          :class="{ 'is-error': $store.getters.errors.includes('address' + soutrait.id) }"
          :id="'address' + soutrait.id"
          :name="'address' + soutrait.id"
          v-model="soutrait.address"
        />
      </div>

      <div class="form-group">
        <label for="soutrait.nature">Nature des travaux sous-traités :</label>
        <textarea
          class="form-control"
          kamal-v-validate="'required'"
          :class="{ 'is-error': $store.getters.errors.includes('nature' + soutrait.id) }"
          :id="'nature' + soutrait.id"
          :name="'nature' + soutrait.id"
          v-model="soutrait.nature"
        >
        </textarea>
      </div>

      <div class="custom-control custom-switch custom-control-success">
        <input
          type="checkbox"
          :class="{ 'is-error': $store.getters.errors.includes('diff_ppsps' + soutrait.id) }"
          :id="'diff_ppsps' + soutrait.id"
          class="custom-control-input"
          kamal-v-validate="''"
          :name="'diff_ppsps' + soutrait.id"
          v-model="soutrait.diff_ppsps"
        />
        <label class="custom-control-label" :for="'diff_ppsps' + soutrait.id">
          Diffusion du PPSPS (O/N) ?
        </label>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    validateForm() {
      let elements = document.querySelectorAll(". ");
      let ids = [];
      elements.forEach((elm) => ids.push(elm.id));
      this.$parent.validateForm(ids);
    },
  },
};
</script>
