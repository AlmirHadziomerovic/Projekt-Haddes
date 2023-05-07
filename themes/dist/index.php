<!doctype html>
<html lang="de">
    <head>
    <meta charset="UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Project Haddes</title>
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="wp_content/themes/webdev-theme/style.css">
</head>

<body>

<main id="content" class="container">
        <h1 class="is-style-headline">
            <?php
            $pagePosts = get_option('page_for_posts');

            if(!empty($pagePosts)){
                echo get_the_title($pagePosts);
            }
            else {
                bloginfo('name');
            }
            ?>
        </h1>
               
        <?php
        if(is_home()){
            echo'<p>' . $blogFields['blog_description'] . '</p>';
        } else {
            if (the_archive_description()) {
                <the_archive_description('<p>', '</p>');
            }
        }
        ?>

        <?php
        if(have_posts(  ));
            while(have_posts());
            the_post();
            ?>
            <article class="post">
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="meta">
                    <time class="date" datetime="<?php the_time('y-m-d'); ?>"><?php the_time('d.m.Y') ?></time>
                    <?php
                        the_category(', '),
                        ?>
                </div>
            </article>

            <?php
            endwhile;
        else:?>

        <h2><?php _e('Es wurde kein Beitrag gefunden', 'wifi');?></h2>

        <?php endif;
        ?>
        <?php if(paginate_links());?>

        <nav class="paginattion">
            <?php
            echo paginate_links(array(
                'prev_text' => '<span class="icon-arrow-left" aria-label="' . __('Vorherige Seite', 'wifi') . '"></span>',
                'next_text' => '<span class="icon-arrow-right" aria-label="' . __('Nächste Seite', 'wifi') . '"></span>'            ));
            ?>
        </nav>
        <?php endif;?>






        <div style="height: 30px" aria-hidden="true"></div>

        <ul class="icon-three">
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
        </ul>

        <section>
            <div style="height: 50px" aria-hidden="true"></div>
            <div class="alignfull">
                <div class="budget">

                    <div>
                        <img src="/assets/img/budget1.jpg" alt="Budget" />

                        <h2>Budget</h2>
                        <p class="text1">
                            Du hast ein kleines Budget aber große Pläne, dann bist du bei
                            Haddes genau richtig, wir unterstützen KMU (Klein und
                            Mittelunternehmen) bei Ihren Online auftritt. eine Freude zu
                            genießen, die keine unangenehmen Folgen hat, oder einen, der
                            Schmerz vermeidet, welcher keine daraus resultierende Freude
                            nach sich zieht?Auch gibt es niemanden, der den Schmerz an sich
                            liebt, sucht oder wünscht, nur,Du hast ein kleines Budget aber
                            große Pläne, dann bist du bei Haddes genau richtig,
                        </p>
                    </div>
                    <div>
                        <img src="/assets/img/budget1.jpg" alt="Budget" />

                        <p class="text1">
                            Du hast ein kleines Budget aber große Pläne, dann bist du bei
                            Haddes genau richtig, wir unterstützen KMU (Klein und
                            Mittelunternehmen) bei Ihren Online auftritt. eine Freude zu
                            genießen, die keine unangenehmen Folgen hat, oder einen, der
                            Schmerz vermeidet, welcher keine daraus resultierende Freude
                            nach sich zieht?Auch gibt es niemanden, der den Schmerz an sich
                            liebt, sucht oder wünscht, nur,Du hast ein kleines Budget aber
                            große Pläne, dann bist du bei
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <ul class="icon-three">
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
        </ul>



        <h3 class="slider headline">Galerie</h3>








        <ul class="icon-three">
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
        </ul>
        <section>
            <div class="blog columns budget alignfull">
                <div>
                    <div class="blog-content1">
                        <h2 class="blog-headline">Blog</h2>
                        Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder
                        wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu
                        zufälligen Umständen, in denen Mühen und Schmerz ihm große Freud
                    </div>
                </div>

                <div>
                    <article class="blog-content2">
                        <h2 class="blog-headline">Bedeutung Content</h2>

                        Der Begriff "Content" bezieht sich auf den Inhalt, der auf einer
                        Website, einem Blog, einer Social-Media-Plattform oder einer anderen
                        digitalen Plattform veröffentlicht wird. Content kann aus
                        verschiedenen Formen von Medien bestehen, wie Texten, Bildern,
                        Videos oder Audio-Dateien. In der heutigen digitalen Landschaft ist
                        hochwertiger Content ein wichtiger Bestandteil jeder erfolgreichen
                        Online-Präsenz. Er kann dazu beitragen, das Interesse der Zielgruppe
                        zu wecken, den Traffic auf der Website zu erhöhen, die
                        Suchmaschinenoptimierung zu verbessern, die Markenbekanntheit zu
                        steigern und letztendlich den Umsatz zu steigern. Daher ist es
                        wichtig, dass der Content auf den Bedarf und die Interessen der
                        Zielgruppe abgestimmt ist, eine klare Botschaft vermittelt und in
                        einem ansprechenden Format präsentiert wird.
                    </article>
                </div>

                <div>
                    <article class="blog-content3">
                        <h2 class="blog-headline">Webseite als Visitenkarte</h2>

                        Eine Webseite kann als digitale Visitenkarte dienen, um
                        Informationen über eine Person oder ein Unternehmen zu präsentieren.
                        Ähnlich wie eine Visitenkarte gibt eine Webseite grundlegende
                        Informationen über den Inhaber, wie Kontaktdaten, eine kurze
                        Beschreibung der angebotenen Dienstleistungen oder Produkte, ein
                        Portfolio, Referenzen oder Kundenbewertungen. Eine Webseite kann
                        auch genutzt werden, um das Branding oder die Corporate Identity
                        eines Unternehmens zu präsentieren. Im Vergleich zu einer
                        herkömmlichen Visitenkarte hat eine Webseite jedoch den Vorteil,
                        dass sie viel mehr Informationen bereitstellen und jederzeit
                        aktualisiert werden kann. Eine Webseite kann auch interaktiver sein,
                        indem sie zum Beispiel ein Kontaktformular oder eine
                        Live-Chat-Funktion bietet. Darüber hinaus kann eine Webseite auch
                        als Marketinginstrument genutzt werden, um potenzielle Kunden zu
                        gewinnen und die Sichtbarkeit im Netz zu erhöhen. Insgesamt kann
                        eine Webseite als digitale Visitenkarte ein effektives Werkzeug
                        sein, um online präsent zu sein und potenzielle Kunden zu erreichen
                    </article>
                </div>

                <div>
                    <article class="blog-content4">
                        <h2 class="blog-headline">Blog</h2>
                        Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder
                        wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu
                        zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude
                        Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder
                        wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu
                        zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude
                        Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder
                        wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu
                        zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude
                    </article>
                </div>

                <div>
                    <article class="blog-content5">
                        <h2 class="blog-headline">Blog</h2>
                        Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder
                        wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu
                        zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude
                        Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder
                        wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu
                        zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude
                        Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder
                        wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu
                        zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude
                    </article>
                </div>
                <div>
                    <article class="blog-content6">
                        <h2 class="blog-headline">Mehrwert einer Webseite</h2>
                        Eine Webseite bietet Unternehmen zahlreiche Vorteile und Mehrwerte,
                        die ihnen dabei helfen können, ihre Ziele zu erreichen und ihren
                        Geschäftserfolg zu steigern. Zunächst einmal ermöglicht eine
                        Webseite es einem Unternehmen, online zu sein und seine Produkte
                        oder Dienstleistungen einem globalen Publikum zugänglich zu machen.
                        Eine gut gestaltete Webseite kann potenzielle Kunden anziehen und
                        ihre Kaufentscheidungen beeinflussen, indem sie ihnen wichtige
                        Informationen und Details über das Unternehmen, seine Produkte und
                        Dienstleistungen, sowie seinen Ruf und seine Geschichte liefert.
                        Eine Webseite kann auch ein wichtiges Instrument zur Kundengewinnung
                        sein. Unternehmen can sie nutzen, um Kontaktinformationen zu
                        sammeln, Feedback von Kunden zu erhalten und sie über neue Produkte,
                        Angebote oder Events auf dem Laufenden zu halten. Außerdem können
                        sie über ihre Webseite auch gezielte Marketingkampagnen durchführen,
                        um ihre Zielgruppen anzusprechen und ihren Bekanntheitsgrad zu
                        steigern.
                    </article>
                </div>
            </div>
        </section>
        <ul class="icon-three">
            <li>
                <span class="icon-three-vertical" aria-hidden="false"></span>
            </li>
        </ul>
    </main>

<?php 
get_footer();
?>
