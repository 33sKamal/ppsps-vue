<template>
    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">

                 <div class="form-group">
                    <label for="oppbtp">OPPBTP</label>
                    <input
                    type="text"
                    class="form-control form-control-alt mb-3"
                    v-model="$store.state.pps_ps.oppbtp"
                    placeholder=""
                    
                    id="oppbtp"
                    :class="{ 'is-error': $store.getters.errors.includes('oppbtp')}"
                    data-validate="required"
                    name="oppbtp"

                    >
                </div>

                 <div class="form-group">
                    <label for="inspection_du_travail">INSPECTION DU TRAVAIL </label>
                    <input
                    type="text"
                    class="form-control form-control-alt mb-3"
                    v-model="$store.state.pps_ps.inspection_du_travail"
                    placeholder=""
                    
                    id="inspection_du_travail"
                    :class="{ 'is-error': $store.getters.errors.includes('inspection_du_travail')}"
                    data-validate="required"
                    name="inspection_du_travail"

                    >
                </div>

                 <div class="form-group">
                    <label for="cram">CRAM</label>
                    <input
                    type="text"
                    class="form-control form-control-alt mb-3"
                    v-model="$store.state.pps_ps.cram"
                    placeholder=""
                    
                    id="cram"
                    :class="{ 'is-error': $store.getters.errors.includes('cram')}"
                    data-validate="required"
                    name="cram"

                    >
                </div>



                 <div class="form-group">
                    <label for="médecine_du_travail">MÉDECINE DU TRAVAIL</label>
                    <input
                    type="text"
                    class="form-control form-control-alt mb-3"
                    v-model="$store.state.pps_ps.médecine_du_travail"
                    placeholder=""
                    
                    id="médecine_du_travail"
                    :class="{ 'is-error': $store.getters.errors.includes('médecine_du_travail')}"
                    data-validate="required"
                    name="médecine_du_travail"

                    >
                </div>

            </div>
        </div>
    </div>
</template>
 