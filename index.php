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
    <section id="main" class="container fotos">
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
    </section>
</main>