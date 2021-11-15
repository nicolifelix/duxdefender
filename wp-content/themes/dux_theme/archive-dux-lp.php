<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lab2b_tema
 */

get_header();
?>
<main id="" class="home lpColor lpColor--blue">
    <!-- Banner  -->
    <?php if( have_rows('carousel_home', 'options') ): ?>
        <section class="duxSection-banner swiper-container lpDuxSwiper">
            <div class="swiper-wrapper">
                <?php while( have_rows('carousel_home', 'options') ): the_row(); 
                    $image = get_sub_field('imagem_carrossel');
                    $image_mobile = get_sub_field('imagem_carrossel_mobile');
                    $text_blue = get_sub_field('texto_azul');
                    $text_gray = get_sub_field('texto_cinza');
                ?>
                    <div class="duxElement-image-banner swiper-slide">
                        <div class="banner-image">
                            <picture>
                                <source  srcset="<?php echo $image_mobile['url']; ?>" media="(max-width: 768px)">
                                <source  srcset="<?php echo $image['url']; ?>">
                                <img  class="circular-img" srcset="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </picture>
                        </div>
                        <div class="sup-itens-banner sup-itens-banner--home_text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="sup-text sup-text--home">
                                            <div class="banner-title-blue"> <?php echo $text_blue; ?></div>
                                            <div class="banner-title-gray"> <?php echo $text_gray; ?></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                                                      
                <?php endwhile; ?>  
            </div>
        </section>
        <!-- Banner End -->
    <?php endif; ?>

    <?php if( get_field('campo_de_descricao', 'options') ): ?>
        <section class="duxSection-budget duxSection-budget--home">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <?php
                        $text_btn = get_field('texto_botao', 'options');
                        $link_btn = get_field('link_botao', 'options');
                        $desc_cta = get_field('campo_de_descricao', 'options');
                        $desc_cta_highlight = get_field('cta_highlight', 'options');
                    ?>
                        <?php if( $link_btn ): ?>
                            <div class="cta-default btn-radius" data-toggle="modal" data-target="#ctaModal" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <a  data-toggle="modal" data-target="#ctaModal"><?php echo $text_btn; ?></a>
                                <i class="shine"></i>
                            </div>
                        <?php endif; ?>
                        <div class="budget-desc budget-desc--home">                            
                            <?php echo $desc_cta ?>                        
                            <p class="budget-highlight">
                                <strong><?php echo $desc_cta_highlight ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- CTA Know End   -->

        <!-- Differences  -->
    <?php if( have_rows('ornamento_arte' ,'options') ): ?>
        <section class="duxSection-differences bg-gradient">

            <div class="container-fluid">           
                <div class="row">
                    <div class="col-12">         
                    <?php
                        $title_difencial = get_field('diferenciais_titulo', 'options');
                    ?>
                        <h1 class="title-doted">
                            <?php echo $title_difencial ?>
                        </h1>
                    </div>                 
                </div> 
            </div>   

            <div class="container">
                <div class="d-flex flex-wrap pxT-60">
                    <?php while( have_rows('ornamento_arte', 'options') ): the_row(); 
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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php $desc_field_five = get_field('descricao_diferenciais', 'options') ?>
                            <div class="text-desc text-desc--archive">
                                <?php echo $desc_field_five ?>
                            </div>
                    </div>
                </div>
            </div>

        </section>
    <?php endif; ?>


        <section class="duxSection-certf pxT-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php 
                            $certificate_title = get_field('certificado_titulo' ,'options')
                        ?>
                        <h1 class="title-doted">
                            <?php echo  $certificate_title?>
                        </h1>
                    </div>      

                </div>             
                <?php if( have_rows('icones_certificado') ): ?>
                    <div class="row half-part half-part--home">
                        <?php while( have_rows('icones_certificado', 'options') ): the_row(); 
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
                        $desc_certificate = get_field('descricao_certificados', 'options');
                    ?>
                        <div class="text-desc half-part">
                            <?php echo $desc_certificate; ?>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <?php if( have_rows('aplicacao', 'options') ): ?>
        
        <section class="duxSection-manual bg-gradient">
            <div class="container">

                <div class="row">          
                    <div class="col-12">
                        <h1 class="title-doted">
                            MODO DE APLICAÇÃO
                        </h1>
                    </div>
                </div>

                <div class="row">

                    <?php while( have_rows('aplicacao', 'options') ): the_row(); 
                        $passo_manual = get_sub_field('passo_numero');
                        $icone_manual = get_sub_field('icone-aplicacao');
                        $desc_manual = get_sub_field('descricao_aplicacao');
                    ?>

                    <div class="col-md-4 col-sm-6">

                        <div class="item-manual">

                            <div class="step-aplicacao">
                                <span>
                                    <?php echo $passo_manual; ?>
                                </span>
                            </div>

                            <div class="icone-aplicacao">
                                <img class="products-img"  srcset="<?php echo $icone_manual['url']; ?>" alt="<?php echo $icone_manual['alt']; ?>" >                           
                            </div>
                            
                            <div class="desc-aplicacao">
                                <?php echo $desc_manual; ?>
                            </div>

                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>                
            </div>
        </section>

        <?php endif; ?>
    <section class="duxSection-where">
        <div class="container">
            <div class="row">          
                <div class="col-12">
                    <h1 class="title-doted">
                        ONDE UTILIZAR
                    </h1>
                </div>
            </div>
            <div class="swiper swiper-util"> 
                
                <div class="swiper-wrapper">
                    <?php while( have_rows('utilizar', 'options') ): the_row(); 
                        $icone_util = get_sub_field('icone-util');
                        $titulo_util = get_sub_field('titulo_icone_util');
                    ?>

                    <div class="swiper-slide">
                        
                        <div class="slide-circle">
                            <div class="img-circle">
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
                    <h1 class="title-doted">
                        Depoimentos
                    </h1>
                </div>
            </div>
                <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
                <?php while( have_rows('depoimentos_lista', 'options') ): the_row(); 
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
                        <div class="col-md-9 col-sm-12">
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

            <?php
                endwhile;
            ?>
        </div>
        <div class="navigation-swp">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>




        </div>
    </section>


        <section class="duxSection-budget">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if( $link_btn ): ?>
                            <div class="cta-default btn-radius" data-toggle="modal" data-target="#ctaModal" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <a  data-toggle="modal" data-target="#ctaModal"><?php echo $text_btn; ?></a>
                                <i class="shine"></i>
                            </div>
                        <?php endif; ?>
                        <?php 
                            $texto_video  = get_field('texto_video' ,'options');
                            $foto_video  = get_field('foto_video_produto' ,'options');
                            $tag_video  = get_field('video' ,'options');
                        
                        ?>
                        <div class="budget-desc">
                            <p>
                            <?php echo $texto_video; ?>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 img">
                                <div class="products-item">
                                <img  srcset="<?php echo $foto_video['url']; ?>" alt="<?php echo $foto_video['alt']; ?>" >

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $tag_video; ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        
                        
                </div>
            </div>
        </section>

        
    </body>




    <!-- Modal -->
    <div class="modal fade" id="ctaModal" tabindex="-1" role="dialog" aria-labelledby="ctaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-background">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ctaModalLabel">Olá !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Como você gostaria de entrar em contato com a gente?
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <ul class="list-clicked ">
                        <li class="item-clicked">
                            <a href="" data-toggle="modal" data-target="#formModal" data-dismiss="modal" aria-label="Close">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal/email.png" alt="" srcset="">
                                <p>
                                    Email
                                </p>
                            </a>
                        </li>
                        <li class="item-clicked">
                            <a href="<?php echo $link_btn ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal/whatsapp.png" alt="" srcset="">
                                <p>
                                    Whatsapp
                                </p> 
                            </a>
                        </li>
                    </ul>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>



    <!-- From Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="ctaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-background">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body modal-body__form ">
                        <div class="modal-form">
                            <?php 
                                echo do_shortcode('[contact-form-7 id="85" title="LP CTA"]');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>




<?php
get_footer();
