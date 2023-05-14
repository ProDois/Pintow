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
            
        </div>

        <!--Center-->
        <div class="CenterNavbar">
            <div class="SearchBox">
                <input type="text" class="Search Text" placeholder="Buscar por">
                <a href="#">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.8053 19.4447L17.2498 15.918C18.6299 14.1972 19.2983 12.0131 19.1175 9.81467C18.9366 7.61626 17.9204 5.57067 16.2776 4.09854C14.6349 2.62641 12.4906 1.83962 10.2856 1.89996C8.08055 1.9603 5.98246 2.86317 4.42269 4.42294C2.86293 5.9827 1.96005 8.08079 1.89971 10.2858C1.83938 12.4908 2.62617 14.6352 4.0983 16.2779C5.57043 17.9206 7.61601 18.9369 9.81443 19.1177C12.0128 19.2985 14.197 18.6302 15.9178 17.2501L19.4444 20.7768C19.5335 20.8666 19.6395 20.9379 19.7563 20.9865C19.8731 21.0352 19.9983 21.0602 20.1248 21.0602C20.2514 21.0602 20.3766 21.0352 20.4934 20.9865C20.6102 20.9379 20.7162 20.8666 20.8053 20.7768C20.978 20.5981 21.0745 20.3592 21.0745 20.1107C21.0745 19.8622 20.978 19.6234 20.8053 19.4447ZM10.5415 17.2501C9.21473 17.2501 7.91774 16.8567 6.81456 16.1195C5.71138 15.3824 4.85156 14.3347 4.34382 13.1089C3.83608 11.8831 3.70324 10.5343 3.96208 9.23303C4.22092 7.93174 4.85983 6.73643 5.79801 5.79825C6.73618 4.86007 7.93149 4.22117 9.23278 3.96232C10.5341 3.70348 11.8829 3.83633 13.1087 4.34407C14.3345 4.8518 15.3822 5.71163 16.1193 6.81481C16.8564 7.91799 17.2498 9.21498 17.2498 10.5418C17.2498 12.3209 16.5431 14.0272 15.285 15.2853C14.027 16.5433 12.3207 17.2501 10.5415 17.2501Z" fill="#3E4095"/>
                    </svg>
                </a>
            </div>
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

    <!--Section Divisor-->
    <span class="SectionDivisor ProductPage"></span>
</body>