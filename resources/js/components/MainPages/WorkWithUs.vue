<template>
    <div class="contain">

        <h2>Collabora con <span class="name-logo">DeliveBoo</span></h2>

        <div class="job-contain">

            <div class="job-card partner">
                <img src="../img/work/ristorante.jpeg" alt="">
                <div class="card-layover"></div>
                <div class="job-text">
                    <h3>Ristoratori</h3>
                    <p>Unisciti a migliaia di Ristoratori che utilizzano DeliveBoo</p>
                    <a class="btn-mine" href="">Scopri di più</a>
                </div>
            </div>

            <div class="job-card partner">
                <img src="../img/work/rider.jpeg" alt="">
                <div class="card-layover"></div>
                <div class="job-text">
                    <h3>Rider</h3>
                    <p>Lavora con noi come Raider clicca su Scopri di più per tutte le info</p>
                    <a class="btn-mine" href="">Scopri di più</a>
                </div>
            </div>

            <div class="job-card partner">
                <img src="../img/work/partner.jpg" alt="">
                <div class="card-layover"></div>
                <div class="job-text">
                    <h3>Diventa Partner</h3>
                    <p>Scopri i vantaggi di essere nostro Partner </p>
                    <a class="btn-mine" href="">Scopri di più</a>
                </div>
            </div>

            <div class="job-card-promo">
                <div class="promo-text">Regala una Gift Card da utilizzare in qualsiasi momento!</div>
                <img src="../img/work/gift-card-white.png" alt="text">
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'WorkWithUs',
}

</script>

<style lang="scss" scoped>
// @import '../assets/style/common.scss';

.contain{
    width: 80%;
    margin: 0 auto;
}

h2{
    color: #fbba00;
    text-align: center;
    margin-top: 3rem;
    font-weight: 400;
    font-size: 3rem
}

.name-logo{
    font-family: 'Pacifico', cursive;
    font-size: 3.5rem;
}

// CARDS
.card-layover{
    background-color: black;
    opacity: 25%;
    width: 100%;
    height: 100%;
    position: absolute;
    transition: all 0.5s;
}

.job-contain{
    width: 90%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    flex-direction: row;
}

.job-card{
    // background-color: black;
    overflow: hidden;
    width: 400px;
    height: 500px;
    margin: 2rem;
    box-sizing: border-box;
    display: flex;
    border-radius: 60px;
    transition: all 0.5s;
    position: relative;
    cursor: pointer;
    img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        opacity: 70%;
        justify-self: center;
        align-self: center;
        position: absolute;
    }
}

.job-text{
    z-index: 5;
    display: flex;
    flex-direction: column;
    align-self: end;
    padding: 1rem;
    h3{
        font-size: 2.5rem;
        margin: 1rem 0;
        color: white;
    }
    p{
        color: white;
        font-size: 1.5rem;
    }
}

.btn-mine{
    align-self: end;
    text-decoration: none;
    color: white;
    padding: 0.5rem 1.3rem;
    font-weight: 700;
    background-color: #fbba00;
    border-radius: 25px;
    // width: 25%;
    text-align: center;
}

.layover{
    width: 100%;
    height: 100%;
    background-color: black;

}

.job-card-promo{
    background-color: #fbba00;
    width: 400px;
    height: 500px;
    margin: 2rem;
    border-radius: 60px;
    box-sizing: border-box;
    display: flex;
    background-color: #fbba00;
    padding: 2.3rem;
    flex-direction: column;
    img{
        height: 70%;
        padding: 1rem;
    }
}

.promo-text{
    color: white;
    font-weight: 700;
    font-size: 2rem;
}

@media screen and (max-width: 440px) {
    h2{
        color: #fbba00;
        text-align: center;
        margin-top: 3rem;
        font-weight: 400;
        font-size: 1.6rem;
    }
    .name-logo{
        font-family: 'Pacifico', cursive;
        font-size: 2.6rem;
    }

    .job-contain{
        width: 75%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        align-content: center;
    }

    .job-card{
        // background-color: black;
        overflow: hidden;
        width: 350px;
        height: 350px;
        margin: 1.6rem;
        position: relative;
        cursor: pointer;
        img{
            height: 100%;
            width: 100%;
            justify-self: center;
            align-self: center;
            position: absolute;
        }
    }


    .job-text{
        display: flex;
        flex-direction: column;
        align-self: end;
        h3{
            font-size: 2.5rem;
            line-height: 0.5rem;
            color: white;
        }
        p{
            color: white;
            font-size: 1.5rem;
        }
    }

    .job-card-promo{
        background-color: #fbba00;
        width: 350px;
        height: 350px;
        margin: 2rem;
        border-radius: 60px;
        box-sizing: border-box;
        display: flex;
        background-color: #fbba00;
        padding: 2.3rem;
        flex-direction: column;
        img{
            height: 70%;
            padding: 1rem;
        }
    }

    .promo-text{
        font-size: 1rem;
    }

    .btn-mine{
        align-self: center;
        text-decoration: none;
        color: white;
        font-size: 1rem;
        padding: 0.5rem 1rem;
        font-weight: 700;
        background-color: #fbba00;
        border-radius: 25px;
        // width: 40%;
        text-align: center;
        margin-top: 1rem;
    }
}

</style>