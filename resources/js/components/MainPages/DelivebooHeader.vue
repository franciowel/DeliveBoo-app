<template>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand my-logo">DeliveBoo</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div v-if="userLogged" class="navbar-nav ms-auto my-pad">
                    <div>
                        <a class="user-logged-style" href="/admin">Il tuo Ristorante</a>
                    </div>
                </div>

                <div class="navbar-nav ms-auto my-pad"  v-else>
                    <a href="/login" class="nav-item nav-link my-log">Login</a>
                    <a href="/register" class="nav-item nav-link my-reg">Registrati</a>
                </div>
            </div>
        </div>
    </nav>

</template>

<script>
export default {
    name: 'DelivebooHeader',

    computed:{
        userLogged() {
            return window.userLogged
        }
    }
}

</script>
<style lang="scss" scoped>

.user-logged-style{
    text-decoration: none;
    color: #ffba00;
}

.my-logo{
    font-family: 'Pacifico', cursive !important;
    color: #ffba00 !important;
    padding: 0 2rem !important;
    font-size: 1.5rem;
}

.my-pad{
    padding-right: 2rem !important;
}

.my-log{
    color: #d0d0d0 !important;
}

.my-reg{
    color: #ffba00 !important;
}
</style>