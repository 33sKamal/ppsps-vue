<template>
    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="chantier_emplacement">Emplacement des installations de chantier :</label>
                    <input
                    type="text"
                    class="form-control form-control-alt input-validate"
                    
                    v-model="$store.state.pps_ps.chantier_emplacement"
                    id="chantier_emplacement"
                    :class="{'is-error':[].includes('chantier_emplacement')}"
                    kamal-v-validate="'required'"
                    name="chantier_emplacement"

                    >
                </div>


                <div class="form-group">
                    <label for="works_is_cordination">
                        Installations de chantier
                    </label>

                    <div class="custom-control custom-switch custom-control-success">
                        <input
                        type="checkbox"
                        class="custom-control-input"
                        value="bungalow"
                        id="bungalow"
                        :class="{'is-error':[].includes('bungalow')}"
                    kamal-v-validate="''"
                    name="bungalow"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="custom-control-label" for="bungalow">
                            bungalow
                        </label>
                    </div>


                    <div class="custom-control custom-switch custom-control-success">
                        <input
                        type="checkbox"
                        class="custom-control-input"
                        value="sanitaires"
                        id="sanitaires"
                        :class="{'is-error':[].includes('sanitaires')}"
                    kamal-v-validate="''"
                    name="sanitaires"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="custom-control-label" for="sanitaires">
                            sanitaires
                        </label>
                    </div>

                    <div class="custom-control custom-switch custom-control-success">
                        <input
                        type="checkbox"
                        class="custom-control-input"
                        value="réfectoire"
                        id="réfectoire"
                        :class="{'is-error':[].includes('réfectoire')}"
                    kamal-v-validate="''"
                    name="réfectoire"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="custom-control-label" for="réfectoire">
                            réfectoire
                        </label>
                    </div>


                    <div class="custom-control custom-switch custom-control-success">
                        <input
                        type="checkbox"
                        class="custom-control-input"
                        value="bureau"
                        id="bureau"
                        :class="{'is-error':[].includes('bureau')}"
                    kamal-v-validate="''"
                    name="bureau"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="custom-control-label" for="bureau">
                            bureau
                        </label>
                    </div>

                    <div class="custom-control custom-switch custom-control-success">
                        <input
                        type="checkbox"
                        class="custom-control-input"
                        value="autres_préciser"
                        id="autres_préciser"
                        :class="{'is-error':[].includes('autres_préciser')}"
                    kamal-v-validate="''"
                    name="autres_préciser"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="custom-control-label" for="autres_préciser">
                            autres, à préciser
                        </label>
                    </div>

                </div>

                <div class="form-group">
                    <label for="works_is_cordination">
                        Conditions de circulation et de stationnement sur le chantier :
                    </label>

                    <div class="form-inline">

                        <div class="custom-control custom-switch custom-control-success mr-3">
                            <input
                            type="checkbox"
                            class="custom-control-input"
                            id="chantier_parking"
                            :class="{'is-error':[].includes('chantier_parking')}"
                    kamal-v-validate="''"
                    name="chantier_parking"

                            v-model="$store.state.pps_ps.chantier_parking"
                            >
                            <label class="custom-control-label" for="chantier_parking">
                                Parking ( {{pps_ps.chantier_parking ? 'Oui' : 'Non'}} )
                            </label>
                        </div>

                        <div class="custom-control custom-switch custom-control-success">
                            <input
                            type="checkbox"
                            class="custom-control-input"
                            id="chantier_plan_circulation"
                            :class="{'is-error':[].includes('chantier_plan_circulation')}"
                    kamal-v-validate="''"
                    name="chantier_plan_circulation"

                            v-model="$store.state.pps_ps.chantier_plan_circulation"
                            >
                            <label class="custom-control-label" for="chantier_plan_circulation">
                                Plan de circulation ( {{pps_ps.chantier_plan_circulation ? 'Oui' : 'Non'}} )
                            </label>
                        </div>
                    </div>

                </div>



                <div class="form-group">
                    <label for="chantier_organisation_livraison">Organisation des livraisons :</label>
                    <textarea
                    class="form-control form-control-alt input-validate"
                    
                    v-model="$store.state.pps_ps.chantier_organisation_livraison"
                    id="chantier_organisation_livraison"
                    :class="{'is-error':[].includes('chantier_organisation_livraison')}"
                    kamal-v-validate="'required'"
                    name="chantier_organisation_livraison"

                    >
                    </textarea>
                </div>

                <div class="form-group">
                    <label>
                        Horaire de livraison :
                    </label>
                        <div class="form-inline">
                            <input
                                type="text"
                                class="form-control form-control-alt input-validate mb-2 mr-3"
                                v-model="$store.state.pps_ps.chantier_livraison_morning"
                                
                                id="chantier_livraison_morning"
                                        :class="{'is-error':[].includes('chantier_livraison_morning')}"
                            kamal-v-validate="'required'"
                            name="chantier_livraison_morning"

                                >


                            <input
                                type="text"
                                class="form-control form-control-alt input-validate mb-2 mr-3"
                                v-model="$store.state.pps_ps.chantier_livraison_evening"
                                
                                id="chantier_livraison_evening"
                                :class="{'is-error':[].includes('chantier_livraison_evening')}"
                    kamal-v-validate="'required'"
                    name="chantier_livraison_evening"

                                >

                        </div>
                </div>


                <div class="form-group">
                    <label>
                        DHOL :
                    </label>


                        <div class="custom-control custom-switch custom-control-success mr-3">
                            <input
                            type="checkbox"
                            class="custom-control-input"
                            id="non_existant"
                            :class="{'is-error':[].includes('non_existant')}"
                            kamal-v-validate="''"
                            name="non_existant"
                            @change="updateDHOL"

                            v-model="dhol_non_existant"
                            >
                            <label class="custom-control-label" for="non_existant">
                                Non-existant
                            </label>
                        </div>

                        <div class="custom-control custom-switch custom-control-success mr-3">
                            <input
                            type="checkbox"
                            class="custom-control-input"
                            id="existant"
                            :class="{'is-error':[].includes('existant')}"
                            kamal-v-validate="''"
                            @change="updateDHOL"
                            name="existant"

                            v-model="dhol_existant"
                            >
                            <label class="custom-control-label" for="existant">
                                Existant
                            </label>
                        </div>


                </div>


            </div>
        </div>
    </div>
</template>

<script>




export default {

    data(){
        return{
            organisme:[],
            dhol_non_existant : false,
            dhol_existant : false,
        }
    },

       computed:{
        

    },

    watch:{

    dhol_non_existant(value){
        if(value){
            this.dhol_existant = false
        }

    },

    dhol_existant(value){
        if(value){
        this.dhol_non_existant = false
        }
    }

    },

    created(){
        this.organisme.push('INSPECTION DU TRAVAIL')
        this.organisme.push('CRAM')
        this.organisme.push('OPPBTP')
        this.organisme.push('MÉDECINE DU TRAVAIL')
    },

    mounted(){

        

    },

    methods:{
        updateDHOL(){
            setTimeout(() => {
                if(this.dhol_existant){
                    this.$store.state.pps_ps.dhol = 'Existant.'
                }else if(this.dhol_non_existant){
                    this.$store.state.pps_ps.dhol = 'Non-existant.'
                }else{
                    this.$store.state.pps_ps.dhol = ''
                }

            }, 300);

        },
    }

}
</script>
