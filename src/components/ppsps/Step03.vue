<template>


    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="responsable_name">Nom :</label>
                    <input 
                    type="text" 
                    class="form-control form-control-alt input-validate" 
                    
                    v-model="$store.state.pps_ps.responsable_name" 
                    id="responsable_name" 
                    :class="{ 'is-error': $store.getters.errors.includes('responsable_name')}"
                    data-validate="required"
                    name="responsable_name"
                    >
                </div>
                <div class="form-group">
                    <label for="responsable_phone">Tél :</label>
                    <input 
                    type="text" 
                    class="form-control form-control-alt input-validate" 
                    
                    v-model="$store.state.pps_ps.responsable_phone" 
                    id="responsable_phone" 
                    :class="{ 'is-error': $store.getters.errors.includes('responsable_phone')}"
                    data-validate="required"
                    name="responsable_phone"

                    >
                </div>
 
                <div class="form-group">
                    <label for="responsable_indice_ppsps">Indice N° (ppsps modifié) :</label>
                    <input 
                    type="text" 
                    class="form-control form-control-alt input-validate" 
                    
                    v-model="$store.state.pps_ps.responsable_indice_ppsps" 
                    id="responsable_indice_ppsps"
                    :class="{ 'is-error': $store.getters.errors.includes('responsable_indice_ppsps')}"
                    data-validate="required"
                    name="responsable_indice_ppsps"

                    >
                </div>
            </div>
        </div>
    </div>


</template>


 