<?php if( get_field('texto_botao') ): ?>
    <div class="container">
        <div class="row">
            <?php
                $text_btn_1 = get_field('texto_botao_1');
                $link_btn_1 = get_field('link_botao_1');
                $text_btn_2 = get_field('texto_botao_2');
                $link_btn_2 = get_field('link_botao_2');
            ?>
            <div class="col-md-6 col-sm-12">
                <div class="cta-default cta-default--pink btn-radius aos-init aos-animate" data-toggle="modal" data-target="#ctaModal" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <a  href="<?php echo $link_btn_1; ?>" target="_blank"><?php echo $text_btn_1; ?> <i class="fab fa-whatsapp"></i></a>
                <i class="shine"></i>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="cta-default btn-radius aos-init aos-animate" data-toggle="modal" data-target="#ctaModal" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <a  href="<?php echo $link_btn_2; ?>" target="_blank"><?php echo $text_btn_2; ?>  <i class="fas fa-shopping-cart"></i></a>
                    <i class="shine"></i>
                </div>
            </div>
        </div>
    </div> 
<?php endif; ?> 