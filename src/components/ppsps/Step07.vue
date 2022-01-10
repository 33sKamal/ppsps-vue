<template>
  <div class="block-content">
    <div class="row justify-content-center py-sm-3">
      <div class="col-md-12">
        <div class="form-group">
          <div class="form-check form-switch">
            <input
              type="checkbox"
              class="form-check-input"
              id="has_soutrait"
              v-model="$store.state.pps_ps.has_soutrait"
            />
            <label class="form-check-label" for="has_soutrait">
              L'entreprise confie-t-elle des travaux à un sous-traitant ?
            </label>
          </div>
        </div>

        <div class="form-group" v-if="$store.state.pps_ps.has_soutrait">
          <label for="soutraits_number">Nombre des entreprises</label>
          <input
            type="number"
            min="0"
            max="4"
            class="form-control form-control-alt"
            @change="updateSoutriatant"
            v-model="$store.state.pps_ps.soutraits_number"
            id="soutraits_number"
          />
        </div>
      </div>
    </div>
  </div>
</template>

 