<template>


    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea
                    class="form-control form-control-alt input-validate"
                    v-model="$store.state.pps_ps.chantier_description"
                    id="chantier_description"
                    :class="{'is-error':[].includes('chantier_description')}"
                    
                    kamal-v-validate="'required'"
                    name="chantier_description"
                    >
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="chantier_lot">Lot(s) retenu(s) :</label>
                    <select
                     style="width: 100%;"
                        class="form-control input-validate"
                        multiple
                        kamal-v-validate="'required'"
                        id="chantier_lot"
                    >

                        <option :value="lot" v-for="(lot,index) in lots" :key="index" >
                            {{
                                lot
                            }}
                        </option>
                    </select>
                </div>


            </div>
        </div>
    </div>


</template>



<script>

export default {

    data(){
        return{
            lots:[],
        }
    },

    created(){

        // event to validate validateChantierLot
        // vue_bus.$on('validateChantierLot',()=>this.validateChantierLot())

        this.lots = [

            'Terrassement / VRD',
            'Démolition',
            'Gros œuvre',
            'Couverture / étanchéité',
            'Charpente',
            'Revêtement façade / Bardage',
            'Menuiserie Extérieures',
            'Menuiseries Intérieures',
            'Plâtrerie / Isolation / Faux plafonds',
            'Revêtement Sol',
            'Electricité',
            'Chauffage / Ventilation / Climatisation',
            'Plomberie',
            'Nettoyage de chantier / Finitions',

        ];

    },

    methods:{

        // costume valiade for chantier_lot attribute
        validateChantierLot(){

            let count  = this.$store.state.pps_ps.chantier_lot.length
            if(!count){
                // $('#chantier_lot').select2({
                //   containerCssClass:'is-error'
                //   })
            }else{
                //  $('#chantier_lot').select2({
                //   containerCssClass:''
                //   })
                this.$parent.clearError('chantier_lot')
            }

        }
    }



}
</script>

<style scoped>
</style>
