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
            <!--
            <div class="NavButtons">
                <a href="">Comprar pelo Whats</a>
                <a href=""><img src="<?php echo $URI->base("/assets/img/usuario_icon.svg"); ?>" alt=""> Entrar ou Registrar</a>
                <a class="Carrinho" href=""><img src="<?php echo $URI->base("/assets/img/caminhao-de-mao_icon.svg"); ?>" alt="">Carrinho</a>
            </div>
            -->
        </div>
    </nav>

    <!--Section Divisor-->
    <span class="SectionDivisor ProductPage"></span>


    <!--Conteiner Product-->
    <section class="ContainerProduct">
        <!--Image Product Area-->
        <section class="ImageProductArea">
            <!--Image-->
            <div class="ImageProduct">
                <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/01/xTOQUE_SUAVE2.png.pagespeed.ic_.pU3B6piX1Q.png" alt="">
            </div>
            <h2 class="SubTitleInfoProduct ColorsTitle">Cores</h2>
            <!--Colors-->
            <div class="Colors">

                <span class="ColorSelection Roxo"></span>

                <span class="ColorSelection Yellow"></span>

                <span class="ColorSelection Red"></span>

                <span class="ColorSelection Green"></span>

                <span class="ColorSelection"></span>

                <span class="ColorSelection"></span>

                <span class="ColorSelection"></span>

                <span class="ColorSelection"></span>

                <span class="ColorSelection"></span>

                <span class="ColorSelection"></span>

                <span class="ColorSelection"></span>

                <span class="ColorSelection"></span>
            </div>
        </section>

        <!--Info Product  Area-->
        <section class="InfoProductArea">
            <!--Name PRoduct-->
            <h1 class="NameProduct">TINTAS VERBRAS PREMIUM - TOQUE SUAVE ACETINADO SOFISTICADO</h1>
            <div class="ColorId">
                <p>Cor: Lilás</p>
                <p>ID: 406329</p>
            </div>

            <!--Other Finishes-->
            <h2 class="SubTitleInfoProduct">Outros Acabamentos</h2>
            <div class="OtherFinishes">
                <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/01/xESMALTE_BASE_AGUA.png.pagespeed.ic_.9kVlpN3_Pm.png" alt="">
                <img src="http://verbrascorp.com.br/home/wp-content/uploads/2023/01/xverniz_triplo.png.pagespeed.ic_.SmyRtM_dwH.png" alt="">
            </div>

            <!--Prince Amount-->
            <div class="PriceAmountProduct">
                <!--Price-->
                <div class="PriceProduct">
                    <h2>R$ <b>69</b>,90</h2>
                </div>
                <!--Amount-->
                <div class="AmountProduct">
                    <!--Less Button-->
                    <div class="ButtonLess">
                        <svg width="15" height="15" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.378906 3.21998V0.0999756H8.62891V3.21998H0.378906Z" fill="#C2C2C2"/>
                        </svg>
                    </div>
                    <!--Number Input-->
                    <input type="number" name="" id="">
                    <!--More Button-->
                    <div class="ButtonMore">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.91254 14.25V0.75H9.12254V14.25H5.91254ZM0.602539 9V6H14.4325V9H0.602539Z" fill="#C2C2C2"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!--Button Shop-->
            <a class="ButtonShop">
                <svg width="28" height="28" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.5417 32.0833H11.4583C10.8505 32.0833 10.2677 31.8419 9.83788 31.4121C9.40811 30.9823 9.16667 30.3995 9.16667 29.7917C9.16667 29.1839 9.40811 28.601 9.83788 28.1712C10.2677 27.7414 10.8505 27.5 11.4583 27.5H35.3833C36.9157 27.5001 38.4041 26.9883 39.6123 26.0458C40.8205 25.1033 41.6792 23.7842 42.0521 22.2979L45.8333 7.425C45.9192 7.08677 45.9266 6.7334 45.8551 6.39185C45.7836 6.0503 45.6351 5.72959 45.4208 5.45417C45.198 5.17168 44.9117 4.94564 44.5852 4.79435C44.2588 4.64306 43.9013 4.57077 43.5417 4.58333H10.9083C10.4355 3.24603 9.56067 2.0877 8.40369 1.26715C7.24671 0.446597 5.86425 0.00398638 4.44583 0H2.29167C1.68388 0 1.10098 0.241443 0.671214 0.671214C0.241443 1.10098 0 1.68388 0 2.29167C0 2.89945 0.241443 3.48235 0.671214 3.91212C1.10098 4.34189 1.68388 4.58333 2.29167 4.58333H4.44583C4.96933 4.56808 5.48226 4.7326 5.89922 5.04949C6.31619 5.36638 6.61203 5.81653 6.7375 6.325L6.875 7.425L10.8396 22.9167C9.01622 22.9987 7.30013 23.8017 6.06884 25.1491C4.83754 26.4964 4.19191 28.2777 4.27396 30.101C4.35601 31.9244 5.15903 33.6405 6.50636 34.8718C7.85369 36.1031 9.63497 36.7487 11.4583 36.6667H11.8708C11.4939 37.7051 11.3728 38.819 11.5178 39.9142C11.6627 41.0094 12.0694 42.0535 12.7034 42.9581C13.3375 43.8628 14.1802 44.6013 15.1602 45.1112C16.1402 45.621 17.2286 45.8872 18.3333 45.8872C19.438 45.8872 20.5265 45.621 21.5065 45.1112C22.4865 44.6013 23.3292 43.8628 23.9632 42.9581C24.5973 42.0535 25.004 41.0094 25.1489 39.9142C25.2938 38.819 25.1727 37.7051 24.7958 36.6667H30.2042C29.8273 37.7051 29.7062 38.819 29.8511 39.9142C29.996 41.0094 30.4027 42.0535 31.0368 42.9581C31.6708 43.8628 32.5135 44.6013 33.4935 45.1112C34.4735 45.621 35.562 45.8872 36.6667 45.8872C37.7714 45.8872 38.8598 45.621 39.8398 45.1112C40.8198 44.6013 41.6625 43.8628 42.2966 42.9581C42.9306 42.0535 43.3373 41.0094 43.4822 39.9142C43.6272 38.819 43.5061 37.7051 43.1292 36.6667H43.5417C44.1495 36.6667 44.7324 36.4252 45.1621 35.9955C45.5919 35.5657 45.8333 34.9828 45.8333 34.375C45.8333 33.7672 45.5919 33.1843 45.1621 32.7545C44.7324 32.3248 44.1495 32.0833 43.5417 32.0833ZM40.6083 9.16667L37.6063 21.175C37.4808 21.6835 37.1849 22.1336 36.768 22.4505C36.351 22.7674 35.8381 22.9319 35.3146 22.9167H15.5375L12.1 9.16667H40.6083ZM18.3333 41.25C17.8801 41.25 17.437 41.1156 17.0602 40.8638C16.6833 40.612 16.3896 40.2541 16.2161 39.8353C16.0427 39.4166 15.9973 38.9558 16.0857 38.5112C16.1741 38.0667 16.3924 37.6584 16.7129 37.3379C17.0334 37.0174 17.4417 36.7991 17.8863 36.7107C18.3308 36.6223 18.7916 36.6677 19.2103 36.8411C19.6291 37.0146 19.987 37.3083 20.2388 37.6852C20.4906 38.062 20.625 38.5051 20.625 38.9583C20.625 39.5661 20.3836 40.149 19.9538 40.5788C19.524 41.0086 18.9411 41.25 18.3333 41.25ZM36.6667 41.25C36.2134 41.25 35.7703 41.1156 35.3935 40.8638C35.0166 40.612 34.7229 40.2541 34.5494 39.8353C34.376 39.4166 34.3306 38.9558 34.419 38.5112C34.5075 38.0667 34.7257 37.6584 35.0462 37.3379C35.3667 37.0174 35.775 36.7991 36.2196 36.7107C36.6641 36.6223 37.1249 36.6677 37.5436 36.8411C37.9624 37.0146 38.3203 37.3083 38.5721 37.6852C38.8239 38.062 38.9583 38.5051 38.9583 38.9583C38.9583 39.5661 38.7169 40.149 38.2871 40.5788C37.8574 41.0086 37.2745 41.25 36.6667 41.25Z" fill="white"/>
                </svg>
                <p>Comprar</p>
            </a>

            <!--Calculate Shipping-->
            <div class="CalculateShipping">
                <h2 class="SubtitleCardInfoProduct">Calcule Frete</h2>

                <div class="LabelCalculateShipping">
                    <h3>CEP</h3>
                    <a href="">Não sei meu CEP</a>
                </div>

                <div class="InputCalculateShipping">
                    <input type="text">
                    <a>ALTERAR</a>
                </div>
            </div>

            <!--Frete-->
            <div class="ShippingResponse">
                <!--Head Shipping-->
                <div class="HeadShipping">
                    <h2 class="SubtitleCardInfoProduct">
                        <!--Icon-->
                        <svg width="24" height="24" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.855V22.2825C0 22.6765 0.138627 23.0544 0.385386 23.3329C0.632144 23.6115 0.96682 23.768 1.31579 23.768H2.63158C2.63158 24.95 3.04746 26.0835 3.78774 26.9193C4.52801 27.755 5.53204 28.2245 6.57895 28.2245C7.62585 28.2245 8.62988 27.755 9.37016 26.9193C10.1104 26.0835 10.5263 24.95 10.5263 23.768H18.4211C18.4211 24.95 18.8369 26.0835 19.5772 26.9193C20.3175 27.755 21.3215 28.2245 22.3684 28.2245C23.4153 28.2245 24.4194 27.755 25.1596 26.9193C25.8999 26.0835 26.3158 24.95 26.3158 23.768H27.6316C27.9805 23.768 28.3152 23.6115 28.562 23.3329C28.8087 23.0544 28.9474 22.6765 28.9474 22.2825V4.45651C28.9474 3.27457 28.5315 2.14104 27.7912 1.30528C27.0509 0.469524 26.0469 0 25 0H13.1579C12.111 0 11.107 0.469524 10.3667 1.30528C9.62641 2.14104 9.21053 3.27457 9.21053 4.45651V7.42751H6.57895C5.96614 7.42751 5.36174 7.58859 4.81363 7.898C4.26552 8.2074 3.78874 8.65663 3.42105 9.21011L0.263158 13.9637C0.224673 14.0283 0.193716 14.0982 0.171053 14.1717L0.0921053 14.3351C0.0340343 14.5008 0.00283559 14.6769 0 14.855ZM21.0526 23.768C21.0526 23.4742 21.1298 23.187 21.2744 22.9427C21.419 22.6984 21.6245 22.508 21.8649 22.3956C22.1053 22.2832 22.3699 22.2538 22.6251 22.3111C22.8804 22.3684 23.1148 22.5099 23.2988 22.7176C23.4828 22.9254 23.6082 23.1901 23.6589 23.4782C23.7097 23.7664 23.6836 24.0651 23.5841 24.3365C23.4845 24.608 23.3158 24.84 23.0994 25.0032C22.8831 25.1664 22.6287 25.2535 22.3684 25.2535C22.0195 25.2535 21.6848 25.097 21.438 24.8184C21.1913 24.5399 21.0526 24.162 21.0526 23.768ZM11.8421 4.45651C11.8421 4.06253 11.9807 3.68468 12.2275 3.4061C12.4742 3.12751 12.8089 2.971 13.1579 2.971H25C25.349 2.971 25.6836 3.12751 25.9304 3.4061C26.1772 3.68468 26.3158 4.06253 26.3158 4.45651V20.797H25.2895C24.9195 20.3375 24.4685 19.9703 23.9655 19.719C23.4625 19.4678 22.9185 19.338 22.3684 19.338C21.8184 19.338 21.2744 19.4678 20.7713 19.719C20.2683 19.9703 19.8173 20.3375 19.4474 20.797H11.8421V4.45651ZM9.21053 13.3695H3.94737L5.52632 10.9927C5.64888 10.8082 5.8078 10.6585 5.99051 10.5553C6.17321 10.4522 6.37468 10.3985 6.57895 10.3985H9.21053V13.3695ZM5.26316 23.768C5.26316 23.4742 5.34033 23.187 5.48491 22.9427C5.62949 22.6984 5.83499 22.508 6.07542 22.3956C6.31585 22.2832 6.58041 22.2538 6.83565 22.3111C7.09088 22.3684 7.32533 22.5099 7.50935 22.7176C7.69337 22.9254 7.81868 23.1901 7.86945 23.4782C7.92022 23.7664 7.89417 24.0651 7.79458 24.3365C7.69499 24.608 7.52634 24.84 7.30996 25.0032C7.09358 25.1664 6.83919 25.2535 6.57895 25.2535C6.22998 25.2535 5.8953 25.097 5.64854 24.8184C5.40179 24.5399 5.26316 24.162 5.26316 23.768ZM2.63158 16.3405H9.21053V20.4702C8.43399 19.6867 7.41465 19.2814 6.3746 19.3426C5.33454 19.4038 4.35806 19.9266 3.65789 20.797H2.63158V16.3405Z" fill="black"/>
                        </svg>
                        Receba em casa
                    </h2>
                    <h2 class="SubtitleCardInfoProduct">GRÁTIS</h2>
                </div>
                <!--Text Body Shipping-->
                <p class="TextBodyShipping">Em até  14 dias úteis após a confiramção do  pagamento</p>

            </div>

        </section>

    </section>

    <!--Section Divisor-->
    <span class="SectionDivisor ProductPage"></span>

    <!--Detail Info Product-->
    <section class="DetailInfoProduct">
        <div class="ColumnDetailInfoProduct">
            <h2>Descrição</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat, metus sodales pellentesque tristique, neque libero condimentum nisi, eu tincidunt turpis diam eget odio. Vestibulum turpis libero, fermentum id turpis non, dignissim pharetra tellus. Etiam sit amet erat sit amet magna fringilla dignissim nec id metus. Pellentesque eleifend justo sed ante dapibus, eu fringilla purus facilisis. Morbi id varius diam. Nam dictum et odio posuere dignissim. Nunc sagittis volutpat mauris eget sodales.</p>
        </div>

        <div class="ColumnDetailInfoProduct">
            <h2>Informações técnicas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi placerat, metus sodales pellentesque tristique, neque libero condimentum nisi, eu tincidunt turpis diam eget odio. Vestibulum turpis libero, fermentum id turpis non, dignissim pharetra tellus. Etiam sit amet erat sit amet magna fringilla dignissim nec id metus. Pellentesque eleifend justo sed ante dapibus, eu fringilla purus facilisis. Morbi id varius diam. Nam dictum et odio posuere dignissim. Nunc sagittis volutpat mauris eget sodales.</p>
        </div>
    </section>

</body>