<template>    
    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">

                  <div class="form-group">
                      <div class="custom-control custom-switch custom-control-success">
                          <input 
                          type="checkbox" 
                          class="custom-control-input" 
                          id="has_soutrait" 
                          v-model="$store.state.pps_ps.has_soutrait"
                          >
                          <label class="custom-control-label" for="has_soutrait">
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
                          v-model="$store.state.pps_ps.soutraits_number"
                          id="soutraits_number"
                          >
                  </div>

            </div>
        </div>
    </div>
</template>

<script>





export default {
    
   
    data(){
        return{
            soutraits_number:0
        }
    },

    computed:{
        

    },

    watch:{

        'pps_ps.soutraits_number'(){
            this.$parent.generateSoutraits()
        },

        'pps_ps.has_soutrait'(value){
            if(!value) this.$store.state.pps_ps.soutraits_number = 0
            console.log(value)
            console.log(this.$store.state.pps_ps.soutraits_number)
        },

    },

    methods:{
        validateForm(){
            let elements  = document.querySelectorAll('.input-validate ')
            let ids=[]
            elements.forEach(elm =>ids.push(elm.id))
            this.$parent.validateForm(ids)
        },

        
    }
    
}
</script>
