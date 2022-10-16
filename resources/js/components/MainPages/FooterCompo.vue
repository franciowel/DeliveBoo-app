<template>
    <div class="footer">
        <div class="container-columns-foot top">

            <div class="foot-logo">
                DeliveBoo
            </div>
            
            <div class="foot-links">

                <ul class="discovery footer-col-db">

                    <h4>
                        Scopri DeliveBoo
                    </h4>

                    <li>
                        <router-link :to="{ name: 'AboutUs'}">
                            <a href="#"> Chi Siamo? </a>
                        </router-link> 
                    </li>

                    <li>
                        <a href="#">
                            Lavora Con Noi
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Contattaci
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Collabora con noi
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Investitori
                        </a>
                    </li>


                </ul>

                <ul class="discovery footer-col-db">

                    <h4>
                        Recapiti
                    </h4>

                    <li>
                        P.Iva: 23100948372
                    </li>

                    <li>
                        
                        Tel: 39+ 43452414
            
                    </li>

                    <li>
                        Email: Deliveboo@mail.com
                    </li>

                </ul>

                <!-- <ul class="footer-icon">
                    <img src="../img/footer/icon-package.svg" alt="">
                </ul> -->

            </div>

        </div>

        <hr>
            <div class="container_my_credits_foot">
                <div class="copyright_my">
                    Deliveboo &copy; 2022 by Team 1 - Classe 66
                </div>
                <div class="contain_my_credits_foot">
                    
                    <div class="foot-credit">               
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>  
                    </div>
                      <div class="foot-credit">               
                       <a href=""><i class="fa-brands fa-facebook"></i></a> 
                    </div>
                    <div class="foot-credit">               
                       <a href=""><i class="fa-brands fa-google-plus-g"></i></a> 
                    </div>
                    <div class="foot-credit">               
                       <a href=""><i class="fa-brands fa-twitter"></i></a> 
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
export default {
    name: 'FooterCompo',
}

</script>

<style lang="scss" scoped>

.container-columns-foot{
    width: 90%;
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
}

.footer{
    background-color: #d0d0d0;
    padding: 1rem 0;
    margin-top: 20px;
}

// .footer-col-db{
//     width: calc(100% / 3);
// }

.discovery{
    margin-top: 15px;
    background-color: #9d9d9c;
    padding: 2.3rem 3.6rem;
    margin-left: 20px;
    h4{
        color: white;
        margin-bottom: 20px;
    }
    li{
        margin-bottom: 10px;
        color: white;
    }
}

.footer-icon img{
    padding: 2.3rem 3.6rem;
    height: 50%;
}

.contain_my_credits_foot{
    display: flex;
    margin-right: 40px;
}

.top{
    margin-bottom: 2rem;
}

.foot-links{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    height: 100%;
}

.foot-logo{
    font-family: 'Pacifico', cursive;
    font-size: 2.5rem;
    color: white;
}

ul{
    list-style:none;
}

li a{
    text-decoration: none;
    color: inherit;
}
.foot-credit{
    font-size: 1.6rem;
    margin: 0 1.2rem;
}

.foot-credit a{
    color: inherit;
}

.container_my_credits_foot{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}
.copyright_my{
    margin-left: 40px;
}
@media screen and (max-width: 720px) {
    .foot-credit{
        width: 20px;
        margin-left: 20px;
    }
}
</style>