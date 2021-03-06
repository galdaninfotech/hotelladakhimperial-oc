<?php

return [
    'plugin' => [
        'name' => 'Tour',
        'description' => 'Teljeskörű tour alkalmazás.'
    ],
    'tour' => [
        'menu_label' => 'Tour',
        'menu_description' => 'Tour bejegyzések kezelése',
        'posts' => 'Bejegyzések',
        'create_post' => 'tour bejegyzés',
        'categories' => 'Kategóriák',
        'create_category' => 'tour kategória',
        'tab' => 'Tour',
        'access_posts' => 'Tour bejegyzések kezelése',
        'access_categories' => 'Tour kategóriák kezelése',
        'access_other_posts' => 'Más felhasználók bejegyzéseinek kezelése',
        'access_import_export' => 'Bejegyzések importálása és exportálása',
        'access_publish' => 'Tour bejegyzések közzététele',
        'delete_confirm' => 'Törölni akarja a kijelölt bejegyzéseket?',
        'chart_published' => 'Közzétéve',
        'chart_drafts' => 'Piszkozatok',
        'chart_total' => 'Összesen'
    ],
    'posts' => [
        'list_title' => 'Tour bejegyzések',
        'filter_category' => 'Kategória',
        'filter_published' => 'Közzétéve',
        'filter_date' => 'Létrehozva',
        'new_post' => 'Új bejegyzés',
        'export_post' => 'Exportálás',
        'import_post' => 'Importálás'
    ],
    'post' => [
        'title' => 'Cím',
        'title_placeholder' => 'Új bejegyzés címe',
        'content' => 'Szöveges tartalom',
        'content_html' => 'HTML tartalom',
        'slug' => 'Keresőbarát cím',
        'slug_placeholder' => 'uj-bejegyzes-keresobarat-cime',
        'categories' => 'Kategóriák',
        'author_email' => 'Szerző e-mail címe',
        'created' => 'Létrehozva',
        'created_date' => 'Létrehozás dátuma',
        'updated' => 'Módosítva',
        'updated_date' => 'Módosítás dátuma',
        'published' => 'Közzétéve',
        'published_date' => 'Közzététel dátuma',
        'published_validation' => 'Adja meg a közzététel dátumát',
        'tab_edit' => 'Szerkesztés',
        'tab_categories' => 'Kategóriák',
        'categories_comment' => 'Jelölje be azokat a kategóriákat, melyekbe be akarja sorolni a bejegyzést',
        'categories_placeholder' => 'Nincsenek kategóriák, előbb létre kell hoznia egyet!',
        'tab_manage' => 'Kezelés',
        'published_on' => 'Közzététel dátuma',
        'excerpt' => 'Kivonat',
        'summary' => 'Összegzés',
        'featured_images' => 'Kiemelt képek',
        'delete_confirm' => 'Valóban törölni akarja ezt a bejegyzést?',
        'close_confirm' => 'A bejegyzés nem került mentésre.',
        'return_to_posts' => 'Vissza a bejegyzésekhez'
    ],
    'categories' => [
        'list_title' => 'Tour kategóriák',
        'new_category' => 'Új kategória',
        'uncategorized' => 'Nincs kategorizálva'
    ],
    'category' => [
        'name' => 'Név',
        'name_placeholder' => 'Új kategória neve',
        'description' => 'Leírás',
        'slug' => 'Keresőbarát cím',
        'slug_placeholder' => 'uj-kategoria-keresobarat-neve',
        'posts' => 'Bejegyzések',
        'delete_confirm' => 'Valóban törölni akarja ezt a kategóriát?',
        'return_to_categories' => 'Vissza a kategóriákhoz',
        'reorder' => 'Kategóriák sorrendje'
    ],
    'menuitem' => [
        'tour_category' => 'Tour kategória',
        'all_tour_categories' => 'Összes tour kategória',
        'tour_post' => 'Tour bejegyzés',
        'all_tour_posts' => 'Összes tour bejegyzés'
    ],
    'settings' => [
        'category_title' => 'Tour kategória lista',
        'category_description' => 'A tour kategóriákat listázza ki a lapon.',
        'category_slug' => 'Keresőbarát cím paraméter neve',
        'category_slug_description' => 'A webcím útvonal paramétere a jelenlegi kategória keresőbarát címe alapján való kereséséhez. Az alapértelmezett komponensrész ezt a tulajdonságot használja a jelenleg aktív kategória megjelöléséhez.',
        'category_display_empty' => 'Üres kategóriák kijelzése',
        'category_display_empty_description' => 'Azon kategóriák megjelenítése, melyekben nincs egy bejegyzés sem.',
        'category_page' => 'Kategórialap',
        'category_page_description' => 'A kategória hivatkozások kategórialap fájljának neve. Az alapértelmezett komponensrész használja ezt a tulajdonságot.',
        'post_title' => 'Tour bejegyzés',
        'post_description' => 'Egy tour bejegyzést jelez ki a lapon.',
        'post_slug' => 'Keresőbarát cím paraméter neve',
        'post_slug_description' => 'A webcím útvonal paramétere a bejegyzés keresőbarát címe alapján való kereséséhez.',
        'post_category' => 'Kategórialap',
        'post_category_description' => 'A kategória hivatkozások kategórialap fájljának neve. Az alapértelmezett komponensrész használja ezt a tulajdonságot.',
        'posts_title' => 'Tour bejegyzések',
        'posts_description' => 'A legújabb tour bejegyzéseket listázza ki a lapon.',
        'posts_pagination' => 'Lapozósáv paraméter neve',
        'posts_pagination_description' => 'A lapozósáv lapjai által használt, várt paraméter neve.',
        'posts_filter' => 'Kategória szűrő',
        'posts_filter_description' => 'Adja meg egy kategória keresőbarát címét vagy webcím paraméterét a bejegyzések szűréséhez. Hagyja üresen az összes bejegyzés megjelenítéséhez.',
        'posts_per_page' => 'Bejegyzések laponként',
        'posts_per_page_validation' => 'A laponkénti bejegyzések értéke érvénytelen formátumú',
        'posts_no_posts' => 'Nincsenek bejegyzések üzenet ',
        'posts_no_posts_description' => 'A tour bejegyzés listában kijelezendő üzenet abban az esetben, ha nincsenek bejegyzések. Az alapértelmezett komponensrész használja ezt a tulajdonságot.',
        'posts_order' => 'Bejegyzések sorrendje',
        'posts_order_description' => 'Jellemző, ami alapján rendezni kell a bejegyzéseket',
        'posts_category' => 'Kategórialap',
        'posts_category_description' => 'A "Kategória" kategória hivatkozások kategórialap fájljának neve. Az alapértelmezett komponensrész használja ezt a tulajdonságot.',
        'posts_post' => 'Bejegyzéslap',
        'posts_post_description' => 'A "Tovább olvasom" hivatkozások tour bejegyzéslap fájljának neve. Az alapértelmezett komponensrész használja ezt a tulajdonságot.',
        'posts_except_post' => 'Bejegyzés kizárása',
        'posts_except_post_description' => 'Adja meg annak a bejegyzésnek az azonosítóját vagy webcímét, amit nem akar megjeleníteni a listázáskor.',
        'rssfeed_tour' => 'Tour oldal',
        'rssfeed_tour_description' => 'Annak a lapnak a neve, ahol listázódnak a tour bejegyzések. Ezt a beállítást használja alapértelmezetten a tour komponens is.',
        'rssfeed_title' => 'RSS hírfolyam',
        'rssfeed_description' => 'A tourhoz tartozó RSS hírfolyam generálása.'
    ]
];
