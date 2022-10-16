<template>
    <div>
        <header>
           <DelivebooHeader />
        </header>

        <main>
            <router-view></router-view>
        </main>

        <footer>
            <FooterCompo />
        </footer>   
    </div>
</template>

<script>

import FooterCompo from "../components/MainPages/FooterCompo.vue";
import DelivebooHeader from "../components/MainPages/DelivebooHeader.vue";


export default {
    name: "App",
    components: {
        DelivebooHeader,
        FooterCompo,
    },
    methods: {
        saveSearchWord(wordToSearch) {
            this.searchWord = wordToSearch;
        },
    },
    data() {
        return {
            searchWord: "",
        };
    },
    computed: {
        userLogged() {
            return window.userLogged;
        },
    },
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;700&family=Pacifico&display=swap");

#app {
    font-family: "IBM Plex Sans", sans-serif;
}

@import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;700&family=Pacifico&display=swap");
body {
    font-family: "IBM Plex Sans", sans-serif;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    img {
        width: 100%;
    }
    a {
        text-decoration: none;
        color: inherit;
    }
}

.carrousel_my {
    margin-top: 150px;
    display: flex;
    justify-content: center;
    overflow: hidden;
}

@media screen and (max-width: 460px) {
    .carrousel_my {
        margin: 1rem 0 !important;
        padding: 0 !important;
    }
}
</style>