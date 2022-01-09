<template>

    <div class="block-content">
        <div class="row justify-content-center py-sm-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="title">Un titre n  {{this.$store.state.form.active_step}}</label>
                    <input type="text" class="form-control form-control-alt input-validate" >
                </div>
                <div class="form-group">
                    <label for="title">Une description n  {{this.$store.state.form.active_step}}</label>
                    <input type="text" class="form-control form-control-alt input-validate" >
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {

}
</script>