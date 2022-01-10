<template>
  <div class="col-md-12">
    <div class="form-group">
      <label for="responsable_name">Nom :</label>
      <input
        type="text"
        class="form-control"
        v-model="$store.state.pps_ps.responsable_name"
        id="responsable_name"
        :class="{ 'is-error': $store.getters.errors.includes('responsable_name') }"
        kamal-v-validate="'required'"
        name="responsable_name"
      />
    </div>
    <div class="form-group">
      <label for="responsable_phone">Tél :</label>
      <input
        type="text"
        class="form-control"
        v-model="$store.state.pps_ps.responsable_phone"
        id="responsable_phone"
        :class="{ 'is-error': $store.getters.errors.includes('responsable_phone') }"
        kamal-v-validate="'required'"
        name="responsable_phone"
      />
    </div>

    <div class="form-group">
      <label for="responsable_indice_ppsps">Indice N° (ppsps modifié) :</label>
      <input
        type="text"
        class="form-control"
        v-model="$store.state.pps_ps.responsable_indice_ppsps"
        id="responsable_indice_ppsps"
        :class="{ 'is-error': $store.getters.errors.includes('responsable_indice_ppsps') }"
        kamal-v-validate="'required'"
        name="responsable_indice_ppsps"
      />
    </div>
  </div>
</template>



<script>
export default {};
</script>