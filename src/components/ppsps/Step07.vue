<template>    
    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">



                <div class="form-group">
                    <label for="works_type">Nombre de travailleurs secouristes sur chantier :</label>
                    <input 
                        type="text" 
                        class="form-control form-control-alt input-validate"
                        v-model="$store.state.pps_ps.works_secouristes_number"
                        id="works_secouristes_number" 
                        >
                </div>

 
                <div class="form-group">
                    <label>
                        Horaire de travail :
                    </label>


                        <div class="form-inline mb-3">

                            <div class="form-inline mr-3">

                                <label class="mr-2 small">
                                    Du lundi au jeudi :
                                </label>
                                
                                <select 
                                disabled
                                class="disabled-timer form-control form-control-alt input-validate mr-1" 
                                :class="{'is-error':[].includes('works_daily_morning_hour')}"
                                v-model="$store.state.pps_ps.works_daily_morning_hour"
                                @change="$parent.clearError('works_daily_morning_hour')"                 
                                kamal-v-validate="'required'"
                                name="works_daily_morning_hour"  
                                id="works_daily_morning_hour"
                                >
                                
                                    <option :value="hour" v-for="(hour,index) in morning_hours" :key="index" >
                                        {{
                                            hour
                                        }}
                                    </option>
                                </select>


                                <select 
                                disabled
                                class="disabled-timer form-control form-control-alt input-validate" 
                                :class="{'is-error':[].includes('works_daily_morning_minutes')}"
                                v-model="$store.state.pps_ps.works_daily_morning_minutes"
                                @change="$parent.clearError('works_daily_morning_minutes')"                    
                                kamal-v-validate="'required'"
                                name="works_daily_morning_minutes"  
                                id="works_daily_morning_minutes"
                                >
                                
                                    <option :value="minute" v-for="(minute,index) in minutes" :key="index" >
                                        {{
                                            minute
                                        }}
                                    </option>
                                </select>
                            </div>


                            <div class="form-inline">

                                <label class="mr-3">
                                    Au
                                </label>

                                <select 
                                disabled
                                class="disabled-timer form-control form-control-alt input-validate mr-1" 
                                :class="{'is-error':[].includes('works_daily_evning_hour')}"
                                v-model="$store.state.pps_ps.works_daily_evning_hour"
                                @change="$parent.clearError('works_daily_evning_hour')"                    
                                kamal-v-validate="'required'"
                                name="works_daily_evning_hour"  
                                id="works_daily_evning_hour"
                                >
                                
                                    <option :value="hour" v-for="(hour,index) in evening_hours" :key="index" >
                                        {{
                                            hour
                                        }}
                                    </option>
                                </select>


                                <select 
                                disabled
                                class="disabled-timer form-control form-control-alt input-validate" 
                                :class="{'is-error':[].includes('works_daily_evning_minutes')}"
                                v-model="$store.state.pps_ps.works_daily_evning_minutes"
                                @change="$parent.clearError('works_daily_evning_minutes')"                    
                                kamal-v-validate="'required'"
                                name="works_daily_evning_minutes"   
                                id="works_daily_evning_minutes"
                                >
                                
                                    <option :value="minute" v-for="(minute,index) in minutes" :key="index" >
                                        {{
                                            minute
                                        }}
                                    </option>
                                </select>
                            </div>
                             
                        </div>   

                        <div class="form-inline">
                            <label class="mr-2 small">
                               
                            </label>

                            
                            <div class="form-inline">

                                <div class="form-inline mr-3">

                                    <label class="mr-2 small">
                                         Le vendredi :
                                    </label> 
                                    <select 
                                    class="form-control form-control-alt input-validate mr-1" 
                                    :class="{'is-error':[].includes('works_friday_morning_hour')}"
                                    @change="$parent.clearError('works_friday_morning_hour')"                 
                                    kamal-v-validate="'required'"
                                    name="works_friday_morning_hour"  
                                    id="works_friday_morning_hour"
                                    v-model="$store.state.pps_ps.works_friday_morning_hour"  
                                    >
                                    
                                        <option :value="hour" v-for="(hour,index) in morning_hours" :key="index" >
                                            {{
                                                hour
                                            }}
                                        </option>
                                    </select>


                                    <select 
                                    class="form-control form-control-alt input-validate" 
                                    :class="{'is-error':[].includes('works_friday_morning_minutes')}"
                                    @change="$parent.clearError('works_friday_morning_minutes')"                    
                                    kamal-v-validate="'required'"
                                    name="works_friday_morning_minutes"  
                                    id="works_friday_morning_minutes"
                                    v-model="$store.state.pps_ps.works_friday_morning_minutes"    
                                    >
                                    
                                        <option :value="minute" v-for="(minute,index) in minutes" :key="index" >
                                            {{
                                                minute
                                            }}
                                        </option>
                                    </select>
                                </div>


                                <div class="form-inline">

                                    <label class="mr-3">
                                        Au
                                    </label>
                                    
                                    <select 
                                    class="form-control form-control-alt input-validate mr-1" 
                                    :class="{'is-error':[].includes('works_friday_evning_hour')}"
                                    @change="$parent.clearError('works_friday_evning_hour')"                    
                                    kamal-v-validate="'required'"
                                    name="works_friday_evning_hour"  
                                    id="works_friday_evning_hour"
                                    v-model="$store.state.pps_ps.works_friday_evning_hour"    
                                    >
                                    
                                        <option :value="hour" v-for="(hour,index) in evening_hours" :key="index" >
                                            {{
                                                hour
                                            }}
                                        </option>
                                    </select>


                                    <select 
                                    class="form-control form-control-alt input-validate" 
                                    :class="{'is-error':[].includes('works_friday_evning_minutes')}"
                                    @change="$parent.clearError('works_friday_evning_minutes')"
                                    kamal-v-validate="'required'"
                                    id="works_friday_evning_minutes"
                                    v-model="$store.state.pps_ps.works_friday_evning_minutes"    
                                    name="works_friday_evning_minutes"  
                                    >
                                    
                                        <option :value="minute" v-for="(minute,index) in minutes" :key="index" >
                                            {{
                                                minute
                                            }}
                                        </option>
                                    </select>
                                </div>
                                
                            </div>   
                        </div>   
                </div>


                <!-- Approvisionnement :   -->
                <div class="form-group">
                    <label for="works_approvisionnement">Approvisionnement :</label> 
                    <textarea 
                        class="form-control form-control-alt input-validate"
                        v-model="$store.state.pps_ps.works_approvisionnement"
                        
                        id="works_approvisionnement" 
                        >
                        </textarea>
                </div>

            </div>
        </div>
    </div>
</template>

<script>





export default {
    data(){
        return{
            morning_hours:[],
            evening_hours:[],
            minutes:[],
        }
    },
   
    computed:{
        

    },

    mounted(){ 

        // fill morning_hours
        for (let hour = 8; hour < 12; hour++) hour < 10 ? this.morning_hours.push('0'+hour) : this.morning_hours.push(hour)          
        for (let hour = 13; hour < 19; hour++)  this.evening_hours.push(hour)          
        // fill minutes
        for (let minute = 0; minute < 60; minute+=5)  minute < 10 ? this.minutes.push('0'+minute) : this.minutes.push(minute)       
    },

}
</script>



<style>
.disabled-timer{
    background-color: #b3b3b3!important;
}

</style>