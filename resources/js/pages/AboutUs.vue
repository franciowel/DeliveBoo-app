<template>
  <div class="my-body">
    <div class="container-credits">
      <div class="my-credits">
        <div class="my-credits-title">
            <h2>
                Creators
            </h2>
        </div>
        <div class="my-credits-main">
            <ul class="jobber-contain">
                <li class="my-card-jobber">
                    <div class="jobber-img">
                        <div class="fake-img">
                            <img src="../components/img/aboutus/Giuse-Cut.jpg" alt="">
                        </div>
                    </div>
                    <div class="jobber-info">
                        <h3 class="jobber-name">
                            Giuseppe Vidili
                        </h3>
                        <div class="jobber-class">
                            Classe 66
                        </div>
                    </div>
                </li>

                <li class="my-card-jobber">
                    <div class="jobber-img">
                        <div class="fake-img">
                            <img src="../components/img/aboutus/Davide-Cut.jpg" alt="">
                        </div>
                    </div>
                    <div class="jobber-info">
                        <h3 class="jobber-name">
                            Davide Pisani
                        </h3>
                        <div class="jobber-class">
                            Classe 66
                        </div>
                    </div>
                </li>

                <li class="my-card-jobber">
                    <div class="jobber-img">
                        <div class="fake-img">
                            <!-- <img src="../components/img/aboutus/img-not-found.jpg" alt=""> -->
                        </div>
                    </div>
                    <div class="jobber-info">
                        <h3 class="jobber-name">
                            Edoardo Bincoletto
                        </h3>
                        <div class="jobber-class">
                            Classe 66
                        </div>
                    </div>
                </li>

                <li class="my-card-jobber">
                    <div class="jobber-img">
                        <div class="fake-img">
                            <img src="../components/img/aboutus/Francesco-cut.jpg" alt="">
                        </div>
                    </div>
                    <div class="jobber-info">
                        <h3 class="jobber-name">
                            Francesco Spina
                        </h3>
                        <div class="jobber-class">
                            Classe 66
                        </div>
                    </div>
                </li>

                <li class="my-card-jobber">
                    <div class="jobber-img">
                        <div class="fake-img">
                            <img src="../components/img/aboutus/Ric-cut.jpg" alt="">
                        </div>
                    </div>
                    <div class="jobber-info">
                        <h3 class="jobber-name">
                            Riccardo Binotto
                        </h3>
                        <div class="jobber-class">
                            Classe 66
                        </div>
                    </div>
                </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</template>
 
<script>
    export default {
    name: "AboutUs",
    }
</script>

<style scoped>
.my-body{
     background: linear-gradient(rgba(255,255,255, 0.65), rgba(255,255,255, 0.85)), url("../components/img/jumbotron/try-back.jpg");
}

.jobber-img img{
    object-fit: cover;
    margin: 0 auto;
    width: 100%;
}

.jobber-img{
    overflow: hidden;
}

.container-credits{
    width: 80%;
    margin: 0 auto;
    opacity: 100%;
}

.my-credits-title{
    font-family: 'Pacifico', cursive;
    color: #ffba00;
    text-align: center;
    font-size: 2.5rem;
}

.jobber-contain{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    list-style: none;
}

.my-card-jobber{
    width: 300px;
    height: 300px;
    /* background-color: #ffba00; */
    border-radius: 30px;
    margin: 0.5rem;
    display: flex;
    flex-direction: column;
    font-family: 'IBM Plex Sans', sans-serif;
}

.jobber-info{
    text-align: center;
}

.jobber-name{
    font-size: 1.5rem;
    font-weight: 400;
    color: #9d9d9c;
}

.jobber-class{
    color: #9d9d9c;
}

.jobber-role{
    color: #9d9d9c;
    margin: 1rem 0;
}

.jobber-img{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    align-self: center;
    box-shadow: 6px 10px 6px #9d9d9c9f;
}

.fake-img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: #ffba00;
    box-shadow: 8px 12px 8px #9d9d9c8f;
}

.my-credits-main{
    background-image: url();
}
</style>