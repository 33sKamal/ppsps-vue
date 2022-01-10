<template>    
    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="chantier_name">Nom chantier</label>
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="$store.state.pps_ps.chantier_name"
                    disabled
                    >
                </div>

                <div class="form-group">
                    <label for="address">Aedresse</label>
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="$store.state.pps_ps.address" 
                    disabled
                    >
                </div>

                <!-- <div class="form-group" v-if="$store.state.pps_ps.address_two" >
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="$store.state.pps_ps.address_two" 
                    disabled
                    >
                </div> -->


                <!-- <div class="form-group">
                    <label for="chantier_phone">Téléphone :</label>
                    <input 
                    type="text" 
                    class="form-control form-control-alt input-validate"
                    v-model="$store.state.pps_ps.chantier_phone" 
                                        
                    id="chantier_phone"
                    :class="{ 'is-error': $store.getters.errors.includes('chantier_phone')}"
                    data-validate="required"
                    name="chantier_phone"

                    >
                </div> -->
            </div>
        </div>
    </div>
</template>
 