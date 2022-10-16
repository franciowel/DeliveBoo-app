<template>
    <div class="container">
        <form action="" method="dialog">
            <div class="form-group">
                <label for="name">Nome </label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    v-model="userName"
                    name="name"
                    placeholder="Nome"
                    maxlength="30"
                />
            </div>

            <div class="form-group">
                <label for="lastname">Cognome</label>
                <input
                    type="text"
                    class="form-control"
                    id="lastname"
                    v-model="userLastname"
                    name="lastname"
                    placeholder="Cognome"
                    maxlength="30"
                />
            </div>

            <div class="form-group">
                <label for="address">Indirizzo</label>
                <input
                    type="text"
                    class="form-control"
                    id="address"
                    v-model="userAddress"
                    name="address"
                    placeholder="Indirizzo"
                    maxlength="255"
                />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    v-model="userEmail"
                    name="email"
                    placeholder="name@example.com"
                    maxlength="100"
                />
            </div>

            <div class="container_pay">
                <div id="dropin-container"></div>
                <button id="submit-button"  @click="makePay()" class="button button--small button--green">
                    Paga Adesso
                </button>
            </div>
        </form>

        <div id="pop-up">
                <div>
                    <div class="our-logo">DeliveBoo</div>
                    <h3 class="quest our-title">Pagamento avvenuto con successo</h3>

                    <div class="pop-up-action">
                        <router-link  :to="{ name: 'home' }">
                            <button type="button" class="cancelbtn btn btn-pop-mine mr-3" onClick="document.getElementById('pop-up').style.display='none'">Ok</button>
                        </router-link>
                    
                    </div>
            </div>
        </div>

        <div id="pop-up-alert">
            <div>
                    <div class="our-logo">DeliveBoo</div>
                    <h3 class="quest our-title">Pagamento non avvenuto </h3>

                    <div class="pop-up-action">
                        <router-link  :to="{ name: 'home' }">
                            <button type="button" class="cancelbtn btn btn-pop-mine mr-3" onClick="document.getElementById('pop-up').style.display='none'">Ok</button>
                        </router-link>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PaymentPage",
    props: ["carts", "cartsTotal"],
    data() {
        return {
            token: "",
            userName: "",
            userLastname: "",
            userAddress: "",
            userEmail: "",
        };
    },

    mounted() {
        braintree.dropin.create({
            authorization: "sandbox_g42y39zw_348pk9cgf3bgyw2b",
            selector: "#dropin-container",
        });

        $.ajaxSetup({
            headers: {
                "X-XSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        axios
            .get("http://127.0.0.1:8000/api/orders/generate")
            .then((response) => {
                this.token = response;
            });
    },

    methods: {
        makePay() {
            //TEST
            const user_info = {
                name: this.userName,
                lastname: this.userLastname,
                address: this.userAddress,
                email: this.userEmail,
            };

            const order = { user_info: user_info, cart: this.carts };

            axios
                .post("http://127.0.0.1:8000/api/orders/makePayment", {
                    token: this.token,
                    price: this.cartsTotal,
                    dish: this.carts.name,
                    quantity: this.carts.qty,
                    resturant_id: this.carts.risto_id,
                })
                .then((response) => {
                    console.log(response)
                   if(response.data.success == true){
                        axios.post("http://127.0.0.1:8000/api/add-order", order);
                        document.getElementById('pop-up').style.display='block'
                        localStorage.clear(this.carts);
                   } else {
                        document.getElementById('pop-up-alert').style.display='block'
                   }
                });
                 
        },
    },
};
</script>

<style>
.container_pay{
    padding: 0;
    margin-bottom: 2rem;
}

 #pop-up{
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: #f4f4f4;
        border: 2px solid #ffba00;
        z-index: 100;
        border-radius: 25px;
        padding: 30px;
        box-shadow: 10px 14px 10px rgba(116, 116, 116, 0.25)
    }

     #pop-up-alert{
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: #f4f4f4;
        border: 2px solid red;
        z-index: 100;
        border-radius: 25px;
        padding: 30px;
        box-shadow: 10px 14px 10px rgba(116, 116, 116, 0.25)
    }

    .our-logo{
        text-align: center;
        font-family: pacifico;
        color: #fbba00;
        font-size: 1.4rem;
        margin-bottom: 1rem;
    }

    .our-title{
        font-weight: 400;
        color: #a8a8a8;
    }

    .pop-up-action{
        text-align: center;
        margin-top: 1rem;
    }

    .btn-pop-mine{
        border: 1px solid #fbba00 !important;
        color: #fbba00 !important;
    }


.button {
    cursor: pointer;
    font-weight: 500;
    left: 3px;
    line-height: inherit;
    position: relative;
    text-decoration: none;
    text-align: center;
    border-style: solid;
    border-width: 1px;
    border-radius: 3px;
    -webkit-appearance: none;
    -moz-appearance: none;
    display: inline-block;
}

.button--small {
    padding: 10px 20px;
    font-size: 0.875rem;
}

.button--green {
    outline: none;
    background-color: #fbba00;
    border-color: #d0d0d0;
    color: white;
    transition: all 200ms ease;
    border-radius: 20px;
}

.button--green:hover {
    background-color: white;
    color: #fbba00;
}
</style>