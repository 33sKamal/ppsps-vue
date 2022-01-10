<template>
    <form id="card-form" @submit="passPayment($event)"  :class="{'disabled' : this.isAdmin}" >
        <div class="form-group row p-2">
            <div class="col-md-4">
                <div class="custom-control custom-block custom-control-primary mb-1">
                    <input type="radio" class="form-check-input" id="card-payment" value="card-payment" v-model="$store.state.pps_ps.payment_method">
                    <label class="form-check-label" for="card-payment">
                        <span class="d-block font-w400 text-info text-center">
                            <span class="">Par C-bancaire {{$parent.$data.isAdmin}}</span>
                        </span>
                    </label>
                </div>
            </div>

              <div class="col-md-4">
                <div class="custom-control custom-block custom-control-primary mb-1">
                    <input type="radio" class="form-check-input" id="paypal-payment" value="paypal-payment" v-model="$store.state.pps_ps.payment_method">
                    <label class="form-check-label" for="paypal-payment">
                        <span class="d-block font-w400 text-info text-center">
                            <span class="">Par Paypal</span>
                        </span>
                    </label>
                </div>
            </div>
        </div>


        <!-- Card Payment -->
        <div class="form-group col-md-12" v-show="$store.state.pps_ps.payment_method == 'card-payment'" >
            <div id="card-element"  class="form-control  ">
            </div>
            <div id="card-errors" role="alert"></div>
        </div>

        <!-- Paypal Payment -->
        <div class="form-group col-md-12" v-show="$store.state.pps_ps.payment_method == 'paypal-payment'" >
                <input
                    type="submit"
                    value="J'utilise paypal"
                    class="btn btn-info"
                    >
            <!-- class="form-control" -->
            <!-- placeholder="Adresse email de compte paypal" -->
        </div>

    </form>
</template>

<script>
import axios from "axios";





export default {

    props:['isAdmin'],

    data(){
        return{
            card:{},
            stripe:{},
             payment_btn:{
                text:'Payer',
                disabled:false,
                font:'btn-info',
            }
        }
    },

  methods:{
 

        // pass payment of Stripe and Paypal
        passPayment(event){
            event.preventDefault()
            if(this.$store.state.pps_ps.payment_method == 'card-payment') this.stripePayment()
            else if(this.$store.state.pps_ps.payment_method == 'paypal-payment') this.paypalPayment()
        },

        // Generate the docuemnt
        formatDocument(){

            let data = new FormData()

            Object.keys(this.$store.state.pps_ps).forEach(key => {

                if(key == 'soutraits'){
                    this.$store.state.pps_ps.soutraits.forEach(soutrait=>{
                        Object.keys(soutrait).forEach(st_key=>{
                            data.append(`soutraits_${st_key}[]`, soutrait[st_key])
                        })
                    })
                }else if(key == 'chantier_lot'){
                    this.$store.state.pps_ps.chantier_lot.forEach(chantier_lot=> data.append(`chantier_lot[]`, chantier_lot))
                }else{
                    data.append(key,this.$store.state.pps_ps[key])
                }

            })

            return data

        },
        
        async downlaodFile(file){

           await axios({
            url:file.path,
            method: 'GET',
            responseType: 'blob',
            }).then(response=> {
                const url = window.URL.createObjectURL(new Blob([response.data]));
                const link = document.createElement('a');
                link.href = url;
                link.setAttribute('download', file.file_name);
                document.body.appendChild(link);
                link.click();
            })
        },
        // handle teh stripe Payment gateway
        stripePayment(){

            if(this.isAdmin){
                let data = this.formatDocument()
                this.proccessCharge(data)
                return
            }

            let app = this
            this.stripe.createToken(this.card).then(function(result) {
                     if (result.error) {
                         app.formOnSubmit(false)

                    // Inform the customer that there was an error.
                     var errorElement = document.getElementById('card-errors');
                     errorElement.textContent = result.error.message;
                     } else {
                         let data = app.formatDocument()
                         data.append('stripe_token',result.token.id)
                         app.proccessCharge(data)
                     }
                 });

        },


        // handle teh stripe Payment gateway
        paypalPayment(){
            let data = this.formatDocument()
            this.proccessChargePaypal(data)

        },
    // proccess the charge after getting the token from stripe
        proccessChargePaypal(data) {
            axios.post('/ppsps/checkout/paypal',data)
            .then(response=>{
                window.location = response.data
            })
            .catch(error=>{
                console.log(error.response)
            })
            .finally(()=>this.formOnSubmit(false))

        },

        // proccess the charge after getting the token from stripe
        proccessCharge(data) {

            this.$swal.fire({
                title: 'Paiement en cours de traitement',
                allowEscapeKey: false,
                allowOutsideClick: false,
                onOpen: () => {
                this.$swal.showLoading();
                }
            })

            axios.post('/ppsps/checkout',data)
            .then(response=>{

                 this.downlaodFile(response.data)

                this.$swal.close()

                setTimeout(() => location.reload(), 5000);

                 this.$swal.fire({
                     type: 'success',
                    html: `
                    <h4>
                    Nous avons bien reçu votre paiement et nous vous remercions - Un email vous a été envoyé avec la Facture et le Votre document PPSPSType a message
                    </h4>
                     `  ,
                    showConfirmButton: false,
                    timer: 6000,
                })

            })
            .catch(error=>{
                console.log(error.response)
            })
            .finally(()=>this.formOnSubmit(false))

        },

        // make form on submit mode
        formOnSubmit(value=true){
            if(value){
                this.payment_btn.text = 'Encore de paiement ...'
                this.payment_btn.disabled = true
                this.payment_btn.font = 'fa-secondary'
            }else{
                this.payment_btn.text = 'Payer'
                this.payment_btn.disabled = false
                this.payment_btn.font = 'btn-info'
            }
        },

        // pay with Paypal
        addpaypalOrder(){
            let app = this
                this.$swal({
                    title:'Vérification des données ...',
                    allowEscapeKey:false,
                    allowOutsideClick:false,
                        onOpen: function () {
                            this.$swal.enableLoading()
                            // Send the Token + Datat To server
                            axios.post('/order/paypal',app.user)
                            .then(response=>{
                                this.$swal({
                                title:response.data,
                                allowEscapeKey:false,
                                allowOutsideClick:false,
                                    onOpen: function () {
                                    this.$swal.enableLoading()
                                    let form = document.getElementById('checkout_form')
                                    form.submit()
                                    }
                                })
                            }).catch(error=>{
                            app.errors_fields.set(error.response.data)
                            this.$swal.close()
                            })
                        }
                })
        },

        verifyNumber(event){
            isNaN(event.key)?event.preventDefault():false
            this.errors=[]
        },

        updatePrice(){
            let price_element= document.querySelector('.checkout-cart-details').children[2].children[1]
            let total_element =document.querySelector('.checkout-cart-details').children[4].children[1]
            let new_price = (this.delevery_options.find(option => option.id == this.user.idDeleveryOption)).price
            new_price = parseFloat(new_price)
            price_element.innerHTML = '&euro; '+new_price
            total_element.innerHTML = '&euro; ' +(new_price + this.total).toFixed(2)
        }

  }

}
</script>


<style>

.StripeElement {
  box-sizing: border-box!important;

  height: 40px!important;

  padding: 10px 12px!important;

  border: 1px solid transparent;
  border-radius: 4px!important;
  background-color: white!important;

  box-shadow: 0 1px 3px 0 #e6ebf1!important;
  -webkit-transition: box-shadow 150ms ease!important;
  transition: box-shadow 150ms ease!important;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df!important;
}

.StripeElement--invalid {
  border-color: #fa755a!important;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
#card-errors{
    color: #fa755a!important
}
</style>
