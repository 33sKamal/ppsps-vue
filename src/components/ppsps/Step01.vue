<template>
  <div class="block-content">
    <div class="row justify-content-center py-sm-3">
      <div class="col-md-12">
        <div class="row">
          <div class="form-group col-md-6 w-50">
            <label for="last_name">Nom</label>
            <input
              type="text"
              class="form-control form-control-alt input-validate"
              :class="{
                'is-error': $store.getters.errors.includes('last_name'),
              }"
              v-model="$store.state.pps_ps.last_name"
              id="last_name"
              data-validate="required"
              name="last_name"
            />
          </div>

          <div class="form-group col-md-6 w-50">
            <label for="first_name">Prénom</label>
            <input
              type="text"
              class="form-control form-control-alt input-validate"
              :class="{
                'is-error': $store.getters.errors.includes('first_name'),
              }"
              v-model="$store.state.pps_ps.first_name"
              id="first_name"
              data-validate="required"
              name="first_name"
            />
          </div>
        </div>

        <div class="form-group">
          <label for="email">Adresse email</label>
          <input
            type="text"
            class="form-control form-control-alt input-validate"
            :class="{ 'is-error': $store.getters.errors.includes('email') }"
            v-model="$store.state.pps_ps.email"
            id="email"
            data-validate="required"
            name="email"
          />
        </div>

        <div class="form-group">
          <label for="phone">Téléphone</label>
          <input
            type="phone"
            class="form-control form-control-alt input-validate"
            :class="{ 'is-error': $store.getters.errors.includes('phone') }"
            v-model="$store.state.pps_ps.phone"
            id="phone"
            data-validate="required"
            name="phone"
          />
        </div>

        <div class="form-group">
          <label for="chantier_name">Nom chantier</label>
          <input
            type="text"
            class="form-control form-control-alt input-validate"
            :class="{
              'is-error': $store.getters.errors.includes('chantier_name'),
            }"
            v-model="$store.state.pps_ps.chantier_name"
            id="chantier_name"
            data-validate="required"
            name="chantier_name"
          />
        </div>

        <div class="form-group">
          <label for="file">Logo</label>
          <input
            type="file"
            class="form-control form-control-alt input-validate"
            :class="{ 'is-error': $store.getters.errors.includes('logo_path') }"
            id="logo_path"
            @change="uploadLogo($event)"
            name="logo_path"
          />
        </div>

        <div class="form-group">
          <label for="address">Adresse</label>
          <input
            type="text"
            class="form-control form-control-alt input-validate"
            :class="{ 'is-error': $store.getters.errors.includes('address') }"
            v-model="$store.state.pps_ps.address"
            id="address"
            data-validate="required"
            name="address"
          />
        </div>

        <div class="form-group">
          <label for="city">Ville</label>
          <input
            type="text"
            class="form-control form-control-alt input-validate"
            :class="{ 'is-error': $store.getters.errors.includes('city') }"
            v-model="$store.state.pps_ps.city"
            id="city"
            data-validate="required"
            name="city"
          />
        </div>
      </div>
    </div>
  </div>
</template>

 


 <script>
export default {
  methods: {
    uploadLogo(event) {
      let file = event.target.files[0];
      let reader = new FileReader();
      reader.onloadend = () => {
        this.$store.state.pps_ps.logo_path = reader.result;
      };
      reader.readAsDataURL(file);
    },
  },
};
</script>