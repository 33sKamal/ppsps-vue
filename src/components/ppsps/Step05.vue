<template>    
    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="entreprise_name">Nom</label>
                    <input 
                    type="text" 
                    class="form-control form-control-alt input-validate"
                    v-model="$store.state.pps_ps.entreprise_name"
                    
                    id="entreprise_name" 
                     :class="{'is-error':[].includes('entreprise_name')}"
                    kamal-v-validate="'required'"
                    name="entreprise_name"
                    >
                </div>



                <div class="form-group">
                    <label for="entreprise_address_one">Adresse</label>
                    <input 
                    type="text" 
                    class="form-control form-control-alt input-validate"
                    v-model="$store.state.pps_ps.entreprise_address_one"
                    
                    id="entreprise_address_one"
                    
                     :class="{'is-error':[].includes('entreprise_address_one')}"
                    kamal-v-validate="'required'"
                    name="entreprise_address_one" 
                    >
                </div>


                <!-- <div class="form-group">
                    <input 
                    type="text" 
                    class="form-control form-control-alt input-validate"
                    v-model="$store.state.pps_ps.entreprise_address_two"
                    
                    id="entreprise_address_two" 

                     :class="{'is-error':[].includes('entreprise_address_two')}"
                    kamal-v-validate="'required'"
                    name="entreprise_address_two" 
                    >
                </div> -->


                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="entreprise_phone">Tél</label>
                            <input 
                            type="text" 
                            class="form-control form-control-alt input-validate"
                            v-model="$store.state.pps_ps.entreprise_phone"
                            
                            id="entreprise_phone" 

                            :class="{'is-error':[].includes('entreprise_phone')}"
                            kamal-v-validate="'required'"
                            name="entreprise_phone" 
                            >
                        </div>
                    </div>
                    <div class="col-md-6">

                        <!-- <div class="form-group">
                            <label for="entreprise_fax">Fax</label>
                            <input 
                            type="text" 
                            class="form-control form-control-alt input-validate"
                            v-model="$store.state.pps_ps.entreprise_fax"
                            
                            id="entreprise_fax" 

                            :class="{'is-error':[].includes('entreprise_fax')}"
                            kamal-v-validate="'required'"
                            name="entreprise_fax"
                            >
                        </div> -->

                    </div>
                </div>

                    <div class="form-group">
                        <label for="entreprise_qualifications">Qualifications: </label>
                        <textarea
                        class="form-control form-control-alt input-validate"
                        v-model="$store.state.pps_ps.entreprise_qualifications"
                        
                        id="entreprise_qualifications"
                        
                        :class="{'is-error':[].includes('entreprise_qualifications')}"
                        kamal-v-validate="'required'"
                        name="entreprise_qualifications" 
                        ></textarea>
                    </div>

                
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="entreprise_ste_responsable_name">Responsable de la société : </label>
                            <input 
                            type="text" 
                            class="form-control form-control-alt input-validate"
                            v-model="$store.state.pps_ps.entreprise_ste_responsable_name"
                            
                            id="entreprise_ste_responsable_name" 
                            :class="{'is-error':[].includes('entreprise_ste_responsable_name')}"
                            kamal-v-validate="'required'"
                            name="entreprise_ste_responsable_name"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="entreprise_chantier_responsable_name">Responsable de chantier : </label>
                            <input 
                            type="text" 
                            class="form-control form-control-alt input-validate"
                            v-model="$store.state.pps_ps.entreprise_chantier_responsable_name"
                            id="entreprise_chantier_responsable_name" 
                            
                            :class="{'is-error':[].includes('entreprise_chantier_responsable_name')}"
                            kamal-v-validate="'required'"
                            name="entreprise_chantier_responsable_name"
                            >
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>





export default {
    
   
    computed:{
        

    },

    methods:{
      

    }
    
}
</script>
