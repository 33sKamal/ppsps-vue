<template>

    
        
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Un titre n  {{this.$store.state.form.active_step}}</label>
                    <input type="text" class="form-control  " >
                </div>
                <div class="form-group">
                    <label for="title">Une description n  {{this.$store.state.form.active_step}}</label>
                    <input type="text" class="form-control  " >
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {

}
</script>