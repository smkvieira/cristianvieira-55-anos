<?php get_header(); ?>

<header class="hero">
    <div class="hero-content">
        <div class="hero-icon">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/icone.png">
        </div>
        <div class="hero-cristian">
            <h1 class="texto-decorativo cor-d4">Cristian Vieira</h1>
            <p class="texto-decorativo cor-d4">55 anos</p>
        </div>
        <div class="hero-data">
            <p class="texto-m cor-c2">03.06.2022, 20h</p>
        </div>
    </div>
    <div class="hero-scroll">
        <a href="#main">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/seta_baixo.svg">
        </a>
    </div>
</header>

<main>
    <section id="main" class="fotos">
        <div class="container">
            <blockquote class="texto-m cor-c3">
                <p>
                    “Viver é não ter vergonha de ser feliz,<br/>
                    cantar, e cantar e cantar a beleza<br/>
                    de ser um eterno aprendiz”
                </p>
                <cite class="texto-p cor-c1">Gonzaguinha</cite>
            </blockquote>
            <div class="galeria">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/fotos/foto1.png">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/fotos/foto2.png">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/fotos/foto3.png">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/fotos/foto4.png">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/fotos/foto5.png">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/fotos/foto6.png">
            </div>
            <div class="fotos-conteudo texto-p cor-c3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pulvinar tristique ipsum vitae vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer feugiat sit amet mi pulvinar convallis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pulvinar tristique ipsum vitae vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer feugiat sit amet mi pulvinar convallis.</p>
            </div>
        </div>
    </section>

    <section id="festa" class="festa">
        <div class="container">
            <h2 class="texto-xg cor-d4">FESTA À FANTASIA</h2>
            <div class="festa-infos texto-p cor-c3">
                <div class="festa-infos-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pulvinar tristique ipsum vitae vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer feugiat sit amet mi pulvinar convallis.</p>
                </div>
                <div class="festa-infos-geral">
                    <p class="festa-info-icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/icone-calendario.svg" class="icone">03/06/2021, sexta-feira - 20 horas</p>
                    <p class="festa-info-icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/res/images/icone-pin.svg" class="icone">Buffet Pavaneli Eventos<br/>Av. Maria Campos, 464<br/>Centro - Osasco - SP, 06010-060</p>
                </div>
            </div>
        </div>
    </section>

    <section id="confirme" class="confirme">
        <div class="container">
            <h2 class="texto-g cor-c3">Confirme sua presença</h2>
            <div class="form-presenca">
                <?php echo do_shortcode('[wpforms id="5" title="false"]'); ?>
            </div>
        </div>
    </section>
</main>