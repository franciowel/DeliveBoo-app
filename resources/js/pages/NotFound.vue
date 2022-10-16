<template>
    <div class="container_my">
        <img src="../components/img/work/bg_not_found.gif" alt="">
    </div>
</template>

<script>
export default {
    name: 'NotFound',
}
</script>

<style scoped>
.container_my{
    margin: 0 auto;
    width: 50%;
}

.container_my img{
    width: 100%;
    border-radius: 40px;
}

@media screen and (max-width: 460px){
    .container_my{
        margin: 0 auto;
        width: 80%;
        margin-bottom: 2rem;
    }
}
</style>