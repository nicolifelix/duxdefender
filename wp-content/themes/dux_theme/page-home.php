
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
                                    Higienização da Pele
                                </h2>
                                <img src="./assets/img/refil.png" alt="" srcset="">
                                <p class="pd-main-paragraph">
                                    O Dux Defender Pro garante a assepsia idela para a pele sem ressecá-la nem causar qualquer outro tipe de dano, pelo contrário, é enriquecido com Aloe Vera, hidratando profundamente lodo na primeira aplicação.
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
                                                O Hidratante Corporal Antisséptico da linha Dux Defender foi criado para Proteger e Hidratar a sua pele!
                                            </p>
                                            <p class="pi-paragraph">
                                                Isso é possível porque ele contém em sua composição o ativo Cloreto Benzalcônio que fornece proteção antisséptica, com eficácia comprovada, contra o novo coronavírus, o H1N1 e 99,9% das bactérias.
                                            </p>
                                            <p class="pi-paragraph">
                                                Além disso, o produto é enriquecido com Manteiga de Karité, Óleo de Girassol, ômegas e Vitamina E. Ou seja, nosso creme possui ação antioxidante, nutre e hidrata a pele tornando-a bem macia e agradavelmente perfumada.
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
                                                Assim como sua versão maior, o hidratante de 60g também fornece proteção antisséptica contra o coronavírus, o H1N1 e bactérias. Neste formato ele torna-se mais portátil e pode te acompanhar em todos os lugares. Tenha ele sempre por perto para uma super proteção!
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
                                                O Spray Multiuso foi criado para higienizar e proteger sua pele, cabelos, roupas e objetos. É a versão mais flexível da linha.
                                            </p>
                                            <p class="pi-paragraph">
                                                Ele hidrata sem deixar resíduos, amacia e proporciona um gostoso perfume porque contém em sua composição o extrato natural de Aloe Vera. Além disso, garante uma poderosa proteção no dia a dia assim como sua versão em creme.
                                            </p>
                                            <p class="pi-paragraph">
                                                Já aplicado nas roupas ou objetos de uso frequente ele age como um antisséptico eficaz expandindo a proteção para além do seu corpo. O Spray Dux Defender também é eficiente contra bactérias e vírus, seja onde for aplicado. 
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
                                                Totem Automático de Espuma
                                            </h2>
                                            <p class="pi-paragraph">
                                                O Dux Defender Pro garante a assepsia ideal para a pele sem ressecá-la nem causar qualquer outro tipo de dano, pelo contrário é enriquecido com ALoe Vera, hidratando profudanmente logo na primeira aplicação
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-description " id="item-1" data-parent="#myGroup">
                                <h2 class="pd-main-title">
                                    Higienização Profissional
                                </h2>
                                <img src="./assets/img/refil.png" alt="" srcset="">
                                <p class="pd-main-paragraph">
                                    O Dux Defender Pro garante a assepsia idela para a pele sem ressecá-la nem causar qualquer outro tipe de dano, pelo contrário, é enriquecido com Aloe Vera, hidratando profundamente lodo na primeira aplicação.
                                </p>
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <img src="./assets/img/acordeon-dux-01.png" alt="" srcset="">
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            <h2 class="pi-sub-title">
                                                Higienizador para Mãos de Uso Profissional - Dux Defender Pro: 
                                            </h2>
                                            <p class="pi-paragraph">
                                                O Dux Defender Pro é um produto que substitui perfeitamente o álcool em gel porque oferece a mesma eficácia na assepsia contra vírus e bactérias, mas não é inflamável e nem volátil, evitando incêndios e aumentando a sua durabilidade. Além disso, ele não resseca a pele e não mancha as roupas.
                                            </p>
                                            <p class="pi-paragraph">
                                                Trata-se de um Higienizador Profissional para pele que age logo na primeira aplicação e mantém a pele profundamente hidratada graças a ação de ativos naturais como como o Óleo de Girassol e a Manteiga de Karité. 
                                            </p>
                                            <p class="pi-paragraph">
                                                Um produto super econômico. Cada 1 litro corresponde a aproximadamente 3 litros de um antisséptico comum.
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
                                                O Dispenser Century é um equipamento com tecnologia que aumenta em até 3 vezes a economia na aplicação do nosso Dux Defender Pro fazendo com que ele saia em espuma. É prático, simples e pode ser instalado em qualquer local do seu estabelecimento.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-description " id="item-2" data-parent="#myGroup">
                                <h2 class="pd-main-title">
                                    Higienização de Superfícies
                                </h2>
                                <img src="./assets/img/refil.png" alt="" srcset="">
                                <p class="pd-main-paragraph">
                                    O Dux Defender Pro garante a assepsia idela para a pele sem ressecá-la nem causar qualquer outro tipe de dano, pelo contrário, é enriquecido com Aloe Vera, hidratando profundamente lodo na primeira aplicação.
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
                                                Nosso Desinfetante de Utilização Profissional. Um poderoso bactericida, fungicida e virucida que age imediatamente após a aplicação. Assim como toda a linha Dux Defender, ele também possui eficiência comprovada contra o gênero coronavírus.
                                            </p>
                                            <p class="pi-paragraph">
                                                DulGerm H é Ideal para superfícies de todos os tipos, sejam elas rugosas ou lisas, com possibilidade de aplicação direta ou através de equipamentos pulverizadores e nebulizadores. Tem rendimento super eficaz na proporção 1:200, sem perder seu poder de eliminação de vírus e bactérias. Ou seja, para cada 1 litro de água adicione apenas 5ml do produto. Alta economia, longa duração, protegendo de verdade.
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
                                                Projetado para oferecer fácil manuseio e transporte durante o processo de higienização e desinfecção de ambientes de trabalho. Possui 4 litros de capacidade e correia almofadada e regulável que geram autonomia e conforto durante a aplicação do DulGerm H.
                                            </p>
                                            <p class="pi-paragraph">
                                                Tem capacidade de longo alcance, é ideal para grandes áreas de superfície e locais de difícil acesso, como tetos e paredes altas.
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