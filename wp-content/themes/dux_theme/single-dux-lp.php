<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lab2b_tema
 */

get_header();
?>

    <main id="LpDux" class="lpColor lpColor--blue">
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
                                    <img  class="circular-img" srcset="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </picture>

                                <!-- <img class="circular-img" srcset="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" > -->
                            </div>
                            <div class="sup-itens-banner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="sup-text sup-text--post">
                                                <h1 class="banner-title-default"> <?php echo $text_normal; ?>
                                                    <span class="banner-title-strong"> <?php echo $text_strong; ?></span> 
                                                </h1>
                                                <span class="banner-title-weak"> <?php echo $text_week; ?> </span>
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
            <!-- CTA Know   -->
        <section class="duxSection-budget">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <?php
                        $text_btn = get_field('texto_botao');
                        $link_btn = get_field('link_botao');
                        $desc_cta = get_field('campo_de_descricao');
                        $desc_cta_highlight = get_field('cta_highlight');
                    ?>
                        <?php if( $link_btn ): ?>
                            <div class="cta-default" data-toggle="modal" data-target="#ctaModal" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <a  data-toggle="modal" data-target="#ctaModal"><?php echo $text_btn; ?></a>
                                <i class="shine"></i>
                            </div>
                        <?php endif; ?>
                        <div class="budget-desc">
                            
                            <?php echo $desc_cta ?>
                        
                            <p class="budget-highlight">
                                <strong><?php echo $desc_cta_highlight ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Know End   -->
        <!-- Differences  -->
        <section class="duxSection-differences">
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
                        <div class="item-diferences">
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
                            <div class="text-desc">
                                <?php echo $desc_field_five ?>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Differences  end -->

        <section class="duxSection-certf pxT-60">
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
                <div class="row half-part">
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

        <section class="duxSection-produts">

            <div class="container">
                <div class="row">
                    <?php
                        $text_prod_btn = get_field('texto_produto_botao');
                        $link_prod_btn = get_field('link_produto_botao');
                        $desc_prod = get_field('descricao_produtos');
                        $banner_prod = get_field('banner_produto');
                    ?>
                    <div class="col-12">
                        <div class="cta-default" data-toggle="modal" data-target="#ctaModal" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                            <a href="<?php echo $link_prod_btn; ?>" data-toggle="modal" data-target="#ctaModal"><?php echo $text_prod_btn; ?></a>
                            <i class="shine"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-desc half-part">
                            <?php echo $desc_prod; ?>
                        </div>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="products-item" data-aos="zoom-in">
                            <img class="products-img" srcset="<?php echo $banner_prod['url']; ?>" alt="<?php echo $banner_prod['alt'] ?>" >
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

