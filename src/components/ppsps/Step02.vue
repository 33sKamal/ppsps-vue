<template>


    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea
                    class="form-control form-control-alt input-validate"
                    v-model="$store.state.pps_ps.chantier_description"
                    id="chantier_description"
                    :class="{ 'is-error': $store.getters.errors.includes('chantier_description')}"
                    
                    data-validate="required"
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
                        data-validate="required"
                        id="chantier_lot"
                    >

                        <option :value="lot" v-for="(lot,index) in $store.state.lots" :key="index" >
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


 