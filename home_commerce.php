<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
	<?php include "components/heads.php"; ?>
</head>

<body>
    <!--Top Bar-->
    <section class="Topbar">
        <!--WhatsApp Button-->
        <div class="Topbar_whatsappButton">
            <!--WhatsApp Logo-->
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="18" height="18" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1824_122" transform="scale(0.015625)"/>
                </pattern>
                <image id="image0_1824_122" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                </defs>
            </svg>

            <p>Atendimento Whatsapp</p>
        </div>

        <!--Change Region-->
        <div class="Topbar_ChangeRegion">
            <p>Preços válidos para: <b>TERESINA - PI</b></p>
            <!--Arrow Down Icon-->
            <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.80799 6.75288L1.09427 2.29911C0.659826 1.77809 1.03031 0.986783 1.7087 0.986783L8.2913 0.986783C8.96969 0.986783 9.34017 1.7781 8.90573 2.29911L5.19201 6.75288C5.09206 6.87275 4.90794 6.87275 4.80799 6.75288Z" fill="#8C71C4"/>
            </svg>

        </div>
    </section>

    <!--Navbar-->
    <nav class="Navbar-Home">
        <!--Right-->
        <div class="RightNavbar">
            <!--Logo-->
            <div class="NavLogo">
                <img src="<?php echo $URI->base("/assets/img/Logo_Pintow_Roxo.svg"); ?>" alt="">
            </div>
            <!--Nav Links-->
            <ul class="NavLinks">
                <li><a href="">Produtos</a></li>
                <li><a href="">Simulador</a></li>
                <li><a href="">Calculadora</a></li>
                <li><a href="">Duvidas?</a></li>
            </ul>
        </div>
        
        <!--Left-->
        <div class="LeftNavbar">
            <!--Nav Buttons-->
            <div class="NavButtons">
                <a href="">Comprar pelo Whats</a>
                <a href=""><img src="<?php echo $URI->base("/assets/img/usuario_icon.svg"); ?>" alt=""> Entrar ou Registrar</a>
                <a class="Carrinho" href=""><img src="<?php echo $URI->base("/assets/img/caminhao-de-mao_icon.svg"); ?>" alt="">Carrinho</a>
            </div>
        </div>
    </nav>

    <!--Banner Area-->
    <section class="Banner-Home">

    </section>
    <div class="Detalhe">
        
    </div>
    
    <!--Ink Types-->
    <section class="InkTypesArea">
        <!--Ink Type-->
        <a class="InkType" href="">
            <img src="<?php echo $URI->base("/assets/img/icons/efeitos-decorativos_icon.svg"); ?>" alt="">
            <p>Efeitos Decorativos</p>
        </a>
        <!--Ink Type-->
        <a class="InkType" href="">
            <img src="<?php echo $URI->base("/assets/img/icons/massas_icon.svg"); ?>" alt="">
            <p>Massas</p>
        </a>
        <!--Ink Type-->
        <a class="InkType" href="">
            <img src="<?php echo $URI->base("/assets/img/icons/externa_icon.svg"); ?>" alt="">
            <p>Externa</p>
        </a>
        <!--Ink Type-->
        <a class="InkType" href="">
            <img src="<?php echo $URI->base("/assets/img/icons/internas_icon.svg"); ?>" alt="">
            <p>Internas</p>
        </a>
        <!--Ink Type-->
        <a class="InkType" href="">
            <img src="<?php echo $URI->base("/assets/img/icons/esmaltes_icon.svg"); ?>" alt="">
            <p>Esmaltes</p>
        </a>
        <!--Ink Type-->
        <a class="InkType" href="">
            <img src="<?php echo $URI->base("/assets/img/icons/verniz_icon.svg"); ?>" alt="">
            <p>Verniz</p>
        </a>
    </section>

    <!--Product Grid-->
    <section class="ProductGridArea">
        <!--Section Title-->
        <h2 class="SectionTittle">Escoha o produto que combina com você</h2>

        <!--Product Grid Cards-->
        <section class="ProductGridCards">
            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

        </section>
    </section>

    <!--Parte Inferiror-->
    <section class="ProductGridArea">
        <!--Section Title-->
        <h2 class="SectionTittle">Veja nossos produtos em Destaque</h2>

        <!--Product Grid Cards-->
        <section class="ProductGridCards HalfGrid">
            <!--Card Product-->
            <div class="CardProduct GridCard2colum">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/01/xTOQUE_SUAVE2.png.pagespeed.ic_.pU3B6piX1Q.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/01/xESMALTE_BASE_AGUA.png.pagespeed.ic_.9kVlpN3_Pm.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/03/TEXTURA-NOBRE-25kg.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

            <!--Card Product-->
            <div class="CardProduct">
                <div class="CardImageArea">
                    <!--Class Product-->
                    <span class="ClassProduct">Premium</span>
                    <!--FAvorite Button-->
                    <span class="FavoriteButton">
                        <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.766 12.6371L10.7186 19.1683C10.7252 19.1745 10.7319 19.1808 10.7387 19.1871C10.8402 19.2826 10.9626 19.3977 11.0802 19.4883C11.219 19.5952 11.4274 19.7302 11.7111 19.7859L11.9037 18.8046L11.7111 19.7859C11.9019 19.8233 12.0981 19.8233 12.2889 19.7859L12.0963 18.8046L12.2889 19.7859C12.5726 19.7302 12.781 19.5952 12.9198 19.4883C13.0374 19.3977 13.1599 19.2826 13.2614 19.1871C13.2682 19.1807 13.2748 19.1745 13.2814 19.1683L20.234 12.6371C22.5661 10.4463 22.8493 6.84113 20.8879 4.31307L20.5785 3.91434C18.329 1.01491 13.9769 1.257 12 4.15843C10.0231 1.257 5.67102 1.01491 3.42146 3.91435L3.1121 4.31307C1.15068 6.84113 1.43388 10.4463 3.766 12.6371Z" fill="white" stroke="#EF716C" stroke-width="2"/>
                        </svg>
                    </span>
                    <!--Image Product-->
                    <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/02/xSTANDARD_FOSCO_18l.png.pagespeed.ic_.c24YH50P-h.png" alt="">
                </div>
                <!--Name Product-->
                <h3 class="CardNameProduct">Textura Nobre Premium 27kg</h3>
                <!--Divisor-->
                <span class="DivisorCard"></span>
                <!--Product Price-->
                <h4 class="CardProductPrice">R$ 300,00</h4>
            </div>

        </section>

    </section>

    <!-- Bottom Banner Home -->
    <section class="BottomBanner-Home">
        <img src="<?php echo $URI->base("/assets/img/bottom_banner-home.jpg"); ?>" alt="">
    </section>
    
    <!--Footer-->
    <footer>
        <!--Section Divisor-->
        <span class="SectionDivisor"></span>

        <!--Footer Superior-->
        <section class="FooterSuperior">
            <!--Column Footer-->
            <div class="ColumnFooter">
                <h4 class="ColumnFooterTitle">Atendimento</h4>
                <ul class="ColumnFooterList">
                    <li><a href="">Acompanhar pedido</a></li>
                    <li><a href="">Perguntas frequentes </a></li>
                    <li><a href="">Atendimento pelo WhatsApp</a></li>
                    <li><a href="">Compre pelo instagram</a></li>
                    <li><a href="">Tudo sobre nossas tintas</a></li>
                </ul>
            </div>
            <!--Column Footer-->
            <div class="ColumnFooter">
                <h4 class="ColumnFooterTitle">Como trabalhamos</h4>
                <ul class="ColumnFooterList">
                    <li><a href="">Como comprar</a></li>
                    <li><a href="">Pagamento</a></li>
                    <li><a href="">Termos e condições de uso</a></li>
                    <li><a href="">Entrega</a></li>
                    <li><a href="">Troca e devolução</a></li>
                </ul>
            </div>
            <!--Column Footer-->
            <div class="ColumnFooter">
                <h4 class="ColumnFooterTitle">Pintow para você</h4>
                <ul class="ColumnFooterList">
                    <li><a href="">Compra Planejada</a></li>
                    <li><a href="">Ofertas Especiais</a></li>
                    <li><a href="">Pacote Reforma</a></li>
                    <li><a href="">Lojas Parceiras</a></li>
                    <li><a href="">Arquiteto Pintow</a></li>
                </ul>
            </div>
            <!--Column Footer-->
            <div class="ColumnFooter">
                <h4 class="ColumnFooterTitle">Institucional</h4>
                <ul class="ColumnFooterList">
                    <li><a href="">Sobre a Pintow</a></li>
                    <li><a href="">Nossa Experiência</a></li>
                    <li><a href="">Imprensa</a></li>
                    <li><a href="">Lojas Parceiras</a></li>
                    <li><a href="">Ranking</a></li>
                </ul>
            </div>
            <!--Column Footer-->
            <div class="ColumnFooter">
                <h4 class="ColumnFooterTitle">Cartelas</h4>
                <ul class="ColumnFooterList">
                    <li><a href="">Cartela Pisos </a></li>
                    <li><a href="">Cartela Esmaltes</a></li>
                    <li><a href="">Cartela Texturas</a></li>
                    <li><a href="">Cartela Tintas</a></li>
                    <li><a href="">Cartela Colors 20</a></li>
                </ul>
            </div>
        </section>

        <!--Section Divisor-->
        <span class="SectionDivisor"></span>

        <!--Footer Inferior-->
        <section class="FooterInferior">
            <div class="LeftFooterInferior">
                <div class="ColumnFooter">
                    <h4 class="ColumnFooterTitle">Formas de pagamento</h4>
                    <ul class="ColumnFooterInferior">
                        <li><img src="<?php echo $URI->base("/assets/img/visa-logo-1.png"); ?>" alt=""></li>
                        <li><img src="<?php echo $URI->base("/assets/img/Mastercard-Logo.png"); ?>" alt=""></li>
                        <li><img src="<?php echo $URI->base("/assets/img/Elo_logo.png"); ?>" alt=""></li>
                        <li><img src="<?php echo $URI->base("/assets/img/PayPal-Logo.png"); ?>" alt=""></li>
                        <li><img src="<?php echo $URI->base("/assets/img/mercado-pago-logo 1.png"); ?>" alt=""></li>
                        <li><img src="<?php echo $URI->base("/assets/img/pix-bc-logo-1 1.png"); ?>" alt=""></li>
                        <li><img src="<?php echo $URI->base("/assets/img/barcode-png 1.png"); ?>" alt=""></li>
                    </ul>
                </div>
    
                <div class="ColumnFooter">
                    <h4 class="ColumnFooterTitle">Compra segura</h4>
                    <ul class="ColumnFooterInferior">
                        <li><img src="<?php echo $URI->base("/assets/img/segurança_logos.png"); ?>" alt=""></li>
                    </ul>
                </div>
            </div>

            <div class="RigthFooterInferior">
                <!--Logo-->
                <div class="NavLogo">
                    <img src="<?php echo $URI->base("/assets/img/Logo_Pintow_Roxo.svg"); ?>" alt="">
                </div>
            </div>
        </section>
    </footer>

</body>
</html>