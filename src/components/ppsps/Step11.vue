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
                    :class="{ 'is-error': $store.getters.errors.includes('chantier_emplacement')}"
                    data-validate="required"
                    name="chantier_emplacement"

                    >
                </div>


                <div class="form-group">
                    <label for="works_is_cordination">
                        Installations de chantier
                    </label>

                    <div class="form-check form-switch">
                        <input
                        type="checkbox"
                        class="form-check-input"
                        value="bungalow"
                        id="bungalow"
                        :class="{ 'is-error': $store.getters.errors.includes('bungalow')}"
                    
                    name="bungalow"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="form-check-label" for="bungalow">
                            bungalow
                        </label>
                    </div>


                    <div class="form-check form-switch">
                        <input
                        type="checkbox"
                        class="form-check-input"
                        value="sanitaires"
                        id="sanitaires"
                        :class="{ 'is-error': $store.getters.errors.includes('sanitaires')}"
                    
                    name="sanitaires"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="form-check-label" for="sanitaires">
                            sanitaires
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input
                        type="checkbox"
                        class="form-check-input"
                        value="réfectoire"
                        id="réfectoire"
                        :class="{ 'is-error': $store.getters.errors.includes('réfectoire')}"
                    
                    name="réfectoire"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="form-check-label" for="réfectoire">
                            réfectoire
                        </label>
                    </div>


                    <div class="form-check form-switch">
                        <input
                        type="checkbox"
                        class="form-check-input"
                        value="bureau"
                        id="bureau"
                        :class="{ 'is-error': $store.getters.errors.includes('bureau')}"
                    
                    name="bureau"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="form-check-label" for="bureau">
                            bureau
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input
                        type="checkbox"
                        class="form-check-input"
                        value="autres_préciser"
                        id="autres_préciser"
                        :class="{ 'is-error': $store.getters.errors.includes('autres_préciser')}"
                    
                    name="autres_préciser"

                        v-model="$store.state.pps_ps.chantier_installations"
                        >
                        <label class="form-check-label" for="autres_préciser">
                            autres, à préciser
                        </label>
                    </div>

                </div>

                <div class="form-group">
                    <label for="works_is_cordination">
                        Conditions de circulation et de stationnement sur le chantier :
                    </label>

                    <div class="form-inline">

                        <div class="form-check form-switch me-3">
                            <input
                            type="checkbox"
                            class="form-check-input"
                            id="chantier_parking"
                            :class="{ 'is-error': $store.getters.errors.includes('chantier_parking')}"
                    
                    name="chantier_parking"

                            v-model="$store.state.pps_ps.chantier_parking"
                            >
                            <label class="form-check-label" for="chantier_parking">
                                Parking ( {{$store.state.pps_ps.chantier_parking ? 'Oui' : 'Non'}} )
                            </label>
                        </div>

                        <div class="form-check form-switch">
                            <input
                            type="checkbox"
                            class="form-check-input"
                            id="chantier_plan_circulation"
                            :class="{ 'is-error': $store.getters.errors.includes('chantier_plan_circulation')}"
                    
                    name="chantier_plan_circulation"

                            v-model="$store.state.pps_ps.chantier_plan_circulation"
                            >
                            <label class="form-check-label" for="chantier_plan_circulation">
                                Plan de circulation ( {{$store.state.pps_ps.chantier_plan_circulation ? 'Oui' : 'Non'}} )
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
                    :class="{ 'is-error': $store.getters.errors.includes('chantier_organisation_livraison')}"
                    data-validate="required"
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
                                class="form-control form-control-alt mb-2 me-3"
                                v-model="$store.state.pps_ps.chantier_livraison_morning"
                                
                                id="chantier_livraison_morning"
                                        :class="{ 'is-error': $store.getters.errors.includes('chantier_livraison_morning')}"
                            data-validate="required"
                            name="chantier_livraison_morning"

                                >


                            <input
                                type="text"
                                class="form-control form-control-alt mb-2 me-3"
                                v-model="$store.state.pps_ps.chantier_livraison_evening"
                                
                                id="chantier_livraison_evening"
                                :class="{ 'is-error': $store.getters.errors.includes('chantier_livraison_evening')}"
                    data-validate="required"
                    name="chantier_livraison_evening"

                                >

                        </div>
                </div>


                <div class="form-group">
                    <label>
                        DHOL :
                    </label>


                        <div class="form-check form-switch me-3">
                            <input
                            type="checkbox"
                            class="form-check-input"
                            id="non_existant"
                            :class="{ 'is-error': $store.getters.errors.includes('non_existant')}"
                            
                            name="non_existant"
                            @change="updateDHOL"

                            v-model="dhol_non_existant"
                            >
                            <label class="form-check-label" for="non_existant">
                                Non-existant
                            </label>
                        </div>

                        <div class="form-check form-switch me-3">
                            <input
                            type="checkbox"
                            class="form-check-input"
                            id="existant"
                            :class="{ 'is-error': $store.getters.errors.includes('existant')}"
                            
                            @change="updateDHOL"
                            name="existant"

                            v-model="dhol_existant"
                            >
                            <label class="form-check-label" for="existant">
                                Existant
                            </label>
                        </div>


                </div>


            </div>
        </div>
    </div>
</template>
 