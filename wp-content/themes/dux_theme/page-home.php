
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dux_theme
 */

get_header();?>
     <!-- Banner  -->
    <?php if( have_rows('carousel_top') ): ?>
        <section class="duxSection-banner swiper-container lpDuxSwiper">
            <div class="swiper-wrapper">
                <?php while( have_rows('carousel_top') ): the_row(); 
                    $image = get_sub_field('imagem_carrossel');
                    $image_mobile = get_sub_field('imagem_carrossel_mobile');
                    $text_normal = get_sub_field('texto_normal');
                    $text_strong = get_sub_field('texto_strong');
                    $text_week = get_sub_field('texto_weak');
                ?>
                    <div class="duxElement-image-banner swiper-slide">
                        <div class="banner-image">
                            <picture>
                                <source  srcset="<?php echo $image_mobile['url']; ?>" media="(max-width: 768px)">
                                <source  srcset="<?php echo $image['url']; ?>">
                                <img  srcset="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </picture>
                        </div>
                        <div class="sup-itens-banner sup-itens-banner--home_text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="sup-text sup-text--home">
                                            <div class="banner-title-blue"> <?php echo $text_normal; ?>
                                                <span class="banner-title-strong"> <?php echo $text_strong; ?></span> 
                                            </div>
                                            <div class="banner-title-gray"> 
                                                <span class="banner-title-weak"> <?php echo $text_week; ?> </span>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                                                      
                <?php endwhile; ?>  
            </div>
            <?php endif; ?>
        </section>
        <!-- Banner End -->

        <section class="produtos-funcoes" id="produtos">
            <div class="container-fluid">           
                    <div class="row">
                        <div class="col-12">
                        <?php
                            $title_produto = get_field('produtos_titulo');
                        ?>
                            <h1 class="title-doted">
                                <?php echo $title_produto ?>
                            </h1>
                        </div>                
                    </div> 
                </div> 
            </div> 
            <div class="wrapper">
                <div class="row ">
                <?php while( have_rows('lista_produtos') ): the_row(); 
                    $image = get_sub_field('banner_produto');
                    $title = get_sub_field('banner_titulo');
                    $description = get_sub_field('descricao_produtos');
                    $btn = get_sub_field('saiba_mais');
                    $link = get_sub_field('link_saiba_mais');
                ?>
                    <div class="col-md-4 col-sm-12">
                        <figure class="product-option dropdown hover-img"  data-target="#item-0" data-parent="#myGroup">
                            <img  srcset="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"> 
                            <figcaption>
                            <span><?php echo $description; ?></span>
                            </figcaption>
                        </figure>
                        <p class="product">
                            <?php echo $title; ?>
                        </p>
                        <div class="cta-little  btn-radius aos-init aos-animate" data-toggle="modal" data-target="#ctaModal" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <a  data-toggle="modal" data-target="#ctaModal">
                                <a href="<?php echo $link; ?>" target="_blank"><?php echo $btn; ?></a>
                                <i class="shine"></i>
                            </div>
                    </div>   
                    <?php endwhile ?>
                </div>
            </div>

            <?php include  'template-parts/buttons.php' ?>
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="accordion-group">
                            <div class="product-description " id="item-0" data-parent="#myGroup">
                                <h2 class="pd-main-title">
                                    Higieniza????o da Pele
                                </h2>
                                <img src="./assets/img/refil.png" alt="" srcset="">
                                <p class="pd-main-paragraph">
                                    O Dux Defender Pro garante a assepsia idela para a pele sem ressec??-la nem causar qualquer outro tipe de dano, pelo contr??rio, ?? enriquecido com Aloe Vera, hidratando profundamente lodo na primeira aplica????o.
                                </p>

                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-01.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Hidratante Corporal de 200g:                                             </h2>
                                            <p class="pi-paragraph">
                                                O Hidratante Corporal Antiss??ptico da linha Dux Defender foi criado para Proteger e Hidratar a sua pele!
                                            </p>
                                            <p class="pi-paragraph">
                                                Isso ?? poss??vel porque ele cont??m em sua composi????o o ativo Cloreto Benzalc??nio que fornece prote????o antiss??ptica, com efic??cia comprovada, contra o novo coronav??rus, o H1N1 e 99,9% das bact??rias.
                                            </p>
                                            <p class="pi-paragraph">
                                                Al??m disso, o produto ?? enriquecido com Manteiga de Karit??, ??leo de Girassol, ??megas e Vitamina E. Ou seja, nosso creme possui a????o antioxidante, nutre e hidrata a pele tornando-a bem macia e agradavelmente perfumada.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-02.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Hidratante Corporal de 60g: 
                                            </h2>
                                            <p class="pi-paragraph">
                                                Assim como sua vers??o maior, o hidratante de 60g tamb??m fornece prote????o antiss??ptica contra o coronav??rus, o H1N1 e bact??rias. Neste formato ele torna-se mais port??til e pode te acompanhar em todos os lugares. Tenha ele sempre por perto para uma super prote????o!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-03.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Spray Higienizador Multiuso:  
                                            </h2>
                                            <p class="pi-paragraph">
                                                O Spray Multiuso foi criado para higienizar e proteger sua pele, cabelos, roupas e objetos. ?? a vers??o mais flex??vel da linha.
                                            </p>
                                            <p class="pi-paragraph">
                                                Ele hidrata sem deixar res??duos, amacia e proporciona um gostoso perfume porque cont??m em sua composi????o o extrato natural de Aloe Vera. Al??m disso, garante uma poderosa prote????o no dia a dia assim como sua vers??o em creme.
                                            </p>
                                            <p class="pi-paragraph">
                                                J?? aplicado nas roupas ou objetos de uso frequente ele age como um antiss??ptico eficaz expandindo a prote????o para al??m do seu corpo. O Spray Dux Defender tamb??m ?? eficiente contra bact??rias e v??rus, seja onde for aplicado. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-04.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Totem Autom??tico de Espuma
                                            </h2>
                                            <p class="pi-paragraph">
                                                O Dux Defender Pro garante a assepsia ideal para a pele sem ressec??-la nem causar qualquer outro tipo de dano, pelo contr??rio ?? enriquecido com ALoe Vera, hidratando profudanmente logo na primeira aplica????o
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-description " id="item-1" data-parent="#myGroup">
                                <h2 class="pd-main-title">
                                    Higieniza????o Profissional
                                </h2>
                                <img src="./assets/img/refil.png" alt="" srcset="">
                                <p class="pd-main-paragraph">
                                    O Dux Defender Pro garante a assepsia idela para a pele sem ressec??-la nem causar qualquer outro tipe de dano, pelo contr??rio, ?? enriquecido com Aloe Vera, hidratando profundamente lodo na primeira aplica????o.
                                </p>
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-01.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Higienizador para M??os de Uso Profissional - Dux Defender Pro: 
                                            </h2>
                                            <p class="pi-paragraph">
                                                O Dux Defender Pro ?? um produto que substitui perfeitamente o ??lcool em gel porque oferece a mesma efic??cia na assepsia contra v??rus e bact??rias, mas n??o ?? inflam??vel e nem vol??til, evitando inc??ndios e aumentando a sua durabilidade. Al??m disso, ele n??o resseca a pele e n??o mancha as roupas.
                                            </p>
                                            <p class="pi-paragraph">
                                                Trata-se de um Higienizador Profissional para pele que age logo na primeira aplica????o e mant??m a pele profundamente hidratada gra??as a a????o de ativos naturais como como o ??leo de Girassol e a Manteiga de Karit??. 
                                            </p>
                                            <p class="pi-paragraph">
                                                Um produto super econ??mico. Cada 1 litro corresponde a aproximadamente 3 litros de um antiss??ptico comum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-02.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Dispenser Century para Dux Defender Pro: 
                                            </h2>
                                            <p class="pi-paragraph">
                                                O Dispenser Century ?? um equipamento com tecnologia que aumenta em at?? 3 vezes a economia na aplica????o do nosso Dux Defender Pro fazendo com que ele saia em espuma. ?? pr??tico, simples e pode ser instalado em qualquer local do seu estabelecimento.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-description " id="item-2" data-parent="#myGroup">
                                <h2 class="pd-main-title">
                                    Higieniza????o de Superf??cies
                                </h2>
                                <img src="./assets/img/refil.png" alt="" srcset="">
                                <p class="pd-main-paragraph">
                                    O Dux Defender Pro garante a assepsia idela para a pele sem ressec??-la nem causar qualquer outro tipe de dano, pelo contr??rio, ?? enriquecido com Aloe Vera, hidratando profundamente lodo na primeira aplica????o.
                                </p>

                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-01.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Desinfetante Concentrado de Uso Profissional - DulGerm H:
                                            </h2>
                                            <p class="pi-paragraph">
                                                Nosso Desinfetante de Utiliza????o Profissional. Um poderoso bactericida, fungicida e virucida que age imediatamente ap??s a aplica????o. Assim como toda a linha Dux Defender, ele tamb??m possui efici??ncia comprovada contra o g??nero coronav??rus.
                                            </p>
                                            <p class="pi-paragraph">
                                                DulGerm H ?? Ideal para superf??cies de todos os tipos, sejam elas rugosas ou lisas, com possibilidade de aplica????o direta ou atrav??s de equipamentos pulverizadores e nebulizadores. Tem rendimento super eficaz na propor????o 1:200, sem perder seu poder de elimina????o de v??rus e bact??rias. Ou seja, para cada 1 litro de ??gua adicione apenas 5ml do produto. Alta economia, longa dura????o, protegendo de verdade.
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-02.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Nebulizador NAF para DulGerm H:
                                            </h2>
                                            <p class="pi-paragraph">
                                                Projetado para oferecer f??cil manuseio e transporte durante o processo de higieniza????o e desinfec????o de ambientes de trabalho. Possui 4 litros de capacidade e correia almofadada e regul??vel que geram autonomia e conforto durante a aplica????o do DulGerm H.
                                            </p>
                                            <p class="pi-paragraph">
                                                Tem capacidade de longo alcance, ?? ideal para grandes ??reas de superf??cie e locais de dif??cil acesso, como tetos e paredes altas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
           
        </section>

        <section class="duxSection-differences bg-gradient" id="diferenciais">
            <div class="container-fluid">           
                <div class="row">
                    <div class="col-12">
                    <?php
                        $title_difencial = get_field('diferenciais_titulo');
                    ?>
                        <h1 class="title-doted">
                            <?php echo $title_difencial ?>
                        </h1>
                    </div>                
                </div> 
            </div>  

            <?php if( have_rows('ornamento_arte') ): ?>
            <div class="container">
                <!-- 5 cols  -->
                <div class="d-flex flex-wrap pxT-60">
                    <?php while( have_rows('ornamento_arte') ): the_row(); 
                        $title_five = get_sub_field('titulo_icone');
                        $icone_five = get_sub_field('icone');
                    ?>
                    <div class="w-20"  data-aos="zoom-out-up">
                        <div class="item-diferences item-diferences--home">
                        <img  class="icone-diferences" srcset="<?php echo $icone_five['url']; ?>" alt="<?php echo $icone_five['alt']; ?>" >
                            <p>
                                <?php echo $title_five; ?> 
                            </p>
                        </div>
                    </div>
                    <?php endwhile; ?>  
                </div>
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php $desc_field_five = get_field('descricao_diferenciais') ?>
                            <div class="text-desc text-desc--archive">
                                <?php echo $desc_field_five ?>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Differences  end -->
            
        <section class="duxSection-certf duxSection-certf--pink " id="certificados">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php 
                            $certificate_title = get_field('certificado_titulo')
                        ?>
                        <h1 class="title-doted">
                            <?php echo  $certificate_title?>
                        </h1>
                    </div>                 
                </div>
                <?php if( have_rows('icones_certificado') ): ?>
                <div class="row half-part half-part--home">
                    <?php while( have_rows('icones_certificado') ): the_row(); 
                        $icone_certificate = get_sub_field('icone_item');
                    ?>
                    <div class="col-6 col-lg-4 hackzinho">
                        <div class="item-certif" data-aos="zoom-out">
                            <img class="products-img"  srcset="<?php echo $icone_certificate['url']; ?>" alt="<?php echo $icone_certificate['alt']; ?>" >
                        </div>
                    </div>
                <?php endwhile ?>
                </div>
                <?php endif; ?>
            
                <div class="row">
                    <div class="col-12">
                    <?php
                        $desc_certificate = get_field('descricao_certificados');
                    ?>
                        <div class="text-desc half-part">
                            <?php echo $desc_certificate; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Certf  end -->

        <section class="duxSection-where">
            <div class="container-fluid">           
                <div class="row">
                    <div class="col-12">
                    <?php
                        $title_onde_utilizar = get_field('onde_utilizar_titulo');
                    ?>
                        <h1 class="title-doted title-doted--new">
                            <?php echo $title_onde_utilizar ?>
                        </h1>
                    </div>                
                </div> 
            </div> 
                <div class="swiper swiper-util"> 
                    <div class="swiper-wrapper">
                        <?php while( have_rows('utilizar') ): the_row(); 
                            $icone_util = get_sub_field('icone-util');
                            $titulo_util = get_sub_field('titulo_icone_util');
                        ?>
                        <div class="swiper-slide">
                            <div class="slide-circle">
                                <div class="img-circle img-circle__off">
                                    <img  srcset="<?php echo $icone_util['url']; ?>" alt="<?php echo $icone_util['alt']; ?>" >
                                </div>
                                <div class="desc-circle-slide">
                                    <p>
                                        <?php echo $titulo_util; ?> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php 
                        endwhile;
                    ?>
                </div>
                <div class="arow-speaker-carousel">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>

        <section class="duxSection-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <?php
                        $title_depoimentos = get_field('depoimentos_titulo');
                    ?>
                        <h1 class="title-doted title-doted--new" id="depoimentos">
                            <?php echo $title_depoimentos ?>
                        </h1>
                    </div>                
                </div> 
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    <?php while( have_rows('depoimentos_lista') ): the_row(); 
                        $foto_depo = get_sub_field('foto_depoimento');
                        $nome_depo = get_sub_field('nome_depoimento');
                        $texto_depo = get_sub_field('texto_depoimento');
                    ?>
                        <div class="swiper-slide">
                            <div class="card-depoimento">
                                <div class="row alinhado">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="img-depoimento-circle">
                                            <img  srcset="<?php echo $foto_depo['url']; ?>" alt="<?php echo $foto_depo['alt']; ?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="desc-depoimento">
                                            <div class="nome-depoimento">
                                                <h2>
                                                    <?php echo $nome_depo; ?>
                                                </h2>    
                                            </div>
                                            <div class="content-depoimento">
                                                <p>
                                                    <?php echo $texto_depo; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="navigation-swp">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials  end -->


        <section class="duxSection-videos">
            <div class="container"><!-- Swiper -->
                <div class="swiper mySwipervideo">
                    <div class="swiper-wrapper">
                    <?php while( have_rows('videos_lista') ): the_row(); 
                        $tag_video = get_sub_field('url_video');
                    ?>
                        <div class="swiper-slide">
                            <div class="card-video">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="video-dux">
                                        <iframe class="embed-responsive-item" src="<?php echo $tag_video; ?>" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>  
                    <div class="navigation-swp navigation-swp__video">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>   
                </div>
            </div>
                  
            <?php include  'template-parts/buttons.php' ?>    
        </section>
         <!-- Videos  end -->


        <section class="api-instagram">
            <div class="container">
              
            </div>   
        </section>

        <section class="social">
            <div class="container">
                <?php
                    $linkedin = get_field('url_linkedin');
                    $Instagram = get_field('url_instagram');
                    $Facebook = get_field('url_facebook');
                    $Youtube = get_field('url_youtube');
                ?>
                <div class="row">
                    <ul>
                        <li>
                            <a href="<?php echo $linkedin; ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-2x fa-linkedin"></i> </a>
                        </li>
                        <li>
                            <a href="<?php echo $Instagram; ?>" target="_blank" rel="noopener noreferrer"> <i class="fab fa-2x fa-instagram"></i> </a>
                        </li>
                        <li>
                            <a href="<?php echo $Facebook; ?>" target="_blank" rel="noopener noreferrer"> <i class="fab fa-2x fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $Youtube; ?>" target="_blank" rel="noopener noreferrer"> <i class="fab fa-2x fa-youtube"></i> </a>
                        </li>
                    </ul>
                   
                </div>
            </div>

            <div id="voltarTopo" class="voltarTopo">
                <a href="#topo" id="subir" class="subir"><i class="fas fa-arrow-circle-up" ></i></a>
            </div>
        </section>

    <?php get_footer();