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
                <use xlink:href="#image0_820_74" transform="scale(0.015625)"/>
                </pattern>
                <image id="image0_820_74" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFFmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDYgNzkuMTY0NzUzLCAyMDIxLzAyLzE1LTExOjUyOjEzICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjIuMyAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIxLTA2LTIzVDExOjU0OjA3LTAzOjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMS0wNi0yM1QxMTo1NToyMC0wMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMS0wNi0yM1QxMTo1NToyMC0wMzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpjMDc2ODk4OC0zOGQzLTg2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"/>
                </defs>
            </svg>
            <p>Atendimento Whatsapp</p>
        </div>

        <!--Change Region-->
        <div class="Topbar_ChangeRegion">
            <p>Preços válidos para: <b>TERESINA - PI</b></p>
            <!--Arrow Down Icon-->
            <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.80799 6.75288L1.09427 2.29911C0.659826 1.77809 1.03031 0.986783 1.7087 0.986783L8.2913 0.986783C8.96969 0.986783 9.34017 1.7781 8.90573 2.29911L5.19201 6.75288C5.09206 6.87275 4.90794 6.87275 4.80799 6.75288Z" fill="#EFE0E0"/>
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

</body>
</html>