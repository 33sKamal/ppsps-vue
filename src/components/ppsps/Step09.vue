<template>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="maitre_ouvrage_name">MAITRE D'OUVRAGE</label>
        <input
          type="text"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitre_ouvrage_name"
          placeholder="Nom"
          :class="{ 'is-error': $store.getters.errors.includes('maitre_ouvrage_name') }"
          kamal-v-validate="'required'"
          name="maitre_ouvrage_name"
          id="maitre_ouvrage_name"
        />
        <input
          type="text"
          placeholder="Adresse"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitre_ouvrage_address"
          :class="{ 'is-error': $store.getters.errors.includes('maitre_ouvrage_address') }"
          kamal-v-validate="'required'"
          name="maitre_ouvrage_address"
          id="maitre_ouvrage_address"
        />
        <input
          type="text"
          placeholder="Adresse (optionnelle)"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitre_ouvrage_address_two"
          :class="{ 'is-error': $store.getters.errors.includes('maitre_ouvrage_address_two') }"
          kamal-v-validate="''"
          name="maitre_ouvrage_address_two"
          id="maitre_ouvrage_address_two"
        />
        <input
          type="text"
          placeholder="Téléphone"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitre_ouvrage_phone"
          :class="{ 'is-error': $store.getters.errors.includes('maitre_ouvrage_phone') }"
          kamal-v-validate="'required'"
          name="maitre_ouvrage_phone"
          id="maitre_ouvrage_phone"
        />
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="maitre_ouvrage_name">MAITRISE D'ŒUVRE</label>
        <input
          type="text"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitrise_ouvrage_name"
          placeholder="Nom"
          :class="{ 'is-error': $store.getters.errors.includes('maitre_ouvrage_name') }"
          kamal-v-validate="'required'"
          name="maitre_ouvrage_name"
          id="maitre_ouvrage_name"
        />
        <input
          type="text"
          placeholder="Adresse"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitrise_ouvrage_address"
          :class="{ 'is-error': $store.getters.errors.includes('maitre_ouvrage_address') }"
          kamal-v-validate="'required'"
          name="maitre_ouvrage_address"
          id="maitre_ouvrage_address"
        />
        <input
          type="text"
          placeholder="Adresse (optionnelle)"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitrise_ouvrage_address_two"
          :class="{ 'is-error': $store.getters.errors.includes('maitre_ouvrage_address_two') }"
          kamal-v-validate="''"
          name="maitre_ouvrage_address_two"
          id="maitre_ouvrage_address_two"
        />
        <input
          type="text"
          placeholder="Téléphone"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.maitrise_ouvrage_phone"
          :class="{ 'is-error': $store.getters.errors.includes('maitrise_ouvrage_phone') }"
          kamal-v-validate="'required'"
          name="maitrise_ouvrage_phone"
          id="maitrise_ouvrage_phone"
        />
        <!-- <input 
                    type="text"
                    placeholder="Fax" 
                    class="form-control   mb-3"
                    v-model="$store.state.pps_ps.maitrise_ouvrage_fax"
                    
                    :class="{'is-error':$store.getters.errors.includes('maitrise_ouvrage_fax')}"
                    kamal-v-validate="'required'"
                    name="maitrise_ouvrage_fax"
                    id="maitrise_ouvrage_fax" 
                    > -->
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="maitre_ouvrage_name">COORDINATEUR SPS</label>
        <input
          type="text"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.coordinateur_sps_name"
          placeholder="Nom"
          :class="{ 'is-error': $store.getters.errors.includes('coordinateur_sps') }"
          kamal-v-validate="'required'"
          name="coordinateur_sps"
          id="coordinateur_sps"
        />
        <input
          type="text"
          placeholder="Adresse"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.coordinateur_sps_address"
          :class="{ 'is-error': $store.getters.errors.includes('coordinateur_sps_address') }"
          kamal-v-validate="'required'"
          name="coordinateur_sps_address"
          id="coordinateur_sps_address"
        />
        <input
          type="text"
          placeholder="Adresse (optionnelle)"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.coordinateur_sps_address_two"
          :class="{ 'is-error': $store.getters.errors.includes('coordinateur_sps_address_two') }"
          kamal-v-validate="''"
          name="coordinateur_sps_address_two"
          id="coordinateur_sps_address_two"
        />
        <input
          type="text"
          placeholder="Téléphone"
          class="form-control mb-3"
          v-model="$store.state.pps_ps.coordinateur_sps_phone"
          :class="{ 'is-error': $store.getters.errors.includes('coordinateur_sps_phone') }"
          kamal-v-validate="'required'"
          name="coordinateur_sps_phone"
          id="coordinateur_sps_phone"
        />
      </div>
    </div>
  </div>
</template>