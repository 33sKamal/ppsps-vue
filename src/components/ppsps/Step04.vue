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
