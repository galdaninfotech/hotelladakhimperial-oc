<?php

return [
    'plugin' => [
        'name' => 'Tourg',
        'description' => 'En robust tourgeplattform.',
    ],
    'tour' => [
        'menu_label' => 'Tourg',
        'menu_description' => 'Administrer tourginnlegg',
        'posts' => 'Innlegg',
        'create_post' => 'innlegg',
        'categories' => 'Kategorier',
        'create_category' => 'kategori',
        'access_posts' => 'Administrer tourginnleggene',
        'access_categories' => 'Administrer tourgkategorier',
        'access_other_posts' => 'Administrere andre brukere sine tourginnlegg',
        'delete_confirm' => 'Er du sikker?',
        'chart_published' => 'Publisert',
        'chart_drafts' => 'Utkast',
        'chart_total' => 'Totalt',
    ],
    'posts' => [
        'list_title' => 'Administrer tourginnlegg',
        'filter_category' => 'Kategori',
        'filter_published' => 'Skjul publiserte',
        'new_post' => 'Nytt innlegg',
    ],
    'post' => [
        'title' => 'Tittel',
        'title_placeholder' => 'Innleggets tittel',
        'slug' => 'Slug',
        'slug_placeholder' => 'innleggets-tittel',
        'categories' => 'Kategorier',
        'created' => 'Opprettet',
        'updated' => 'Oppdatert',
        'published' => 'Publisert',
        'published_validation' => 'Velg en dato når innlegget skal publiseres',
        'tab_edit' => 'Endre',
        'tab_categories' => 'Kategorier',
        'categories_comment' => 'Velg hvilke kategorier innlegget tilhører',
        'categories_placeholder' => 'Det finnes ingen kategorier! Vennligst opprett en først.',
        'tab_manage' => 'Egenskaper',
        'published_on' => 'Publiseringsdato',
        'excerpt' => 'Utdrag',
        'featured_images' => 'Utvalgte bilder',
        'delete_confirm' => 'Vil du virkelig slette dette innlegget?',
        'close_confirm' => 'Innlegget er ikke lagret.',
        'return_to_posts' => 'Tilbake til innleggsliste',
    ],
    'categories' => [
        'list_title' => 'Administrer tourgkategorier',
        'new_category' => 'Ny kategori',
        'uncategorized' => 'Uten kategori',
    ],
    'category' => [
        'name' => 'Navn',
        'name_placeholder' => 'Kategoriens navn',
        'slug' => 'Slug',
        'slug_placeholder' => 'kategoriens-navn',
        'posts' => 'Innlegg',
        'delete_confirm' => 'Vil du virkelig slette denne kategorien?',
        'return_to_categories' => 'Tilbake til kategorilisten',
    ],
    'settings' => [
        'category_title' => 'Category List',
        'category_description' => 'Displays a list of tour categories on the page.',
        'category_slug' => 'Category slug',
        'category_slug_description' => "Look up the tour category using the supplied slug value. This property is used by the default component partial for marking the currently active category.",
        'category_display_empty' => 'Display empty categories',
        'category_display_empty_description' => 'Show categories that do not have any posts.',
        'category_page' => 'Category page',
        'category_page_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'post_title' => 'Post',
        'post_description' => 'Displays a tour post on the page.',
        'post_slug' => 'Post slug',
        'post_slug_description' => "Look up the tour post using the supplied slug value.",
        'post_category' => 'Category page',
        'post_category_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'posts_title' => 'Post List',
        'posts_description' => 'Displays a list of latest tour posts on the page.',
        'posts_pagination' => 'Page number',
        'posts_pagination_description' => 'This value is used to determine what page the user is on.',
        'posts_filter' => 'Category filter',
        'posts_filter_description' => 'Enter a category slug or URL parameter to filter the posts by. Leave empty to show all posts.',
        'posts_per_page' => 'Posts per page',
        'posts_per_page_validation' => 'Invalid format of the posts per page value',
        'posts_no_posts' => 'No posts message',
        'posts_no_posts_description' => 'Message to display in the tour post list in case if there are no posts. This property is used by the default component partial.',
        'posts_order' => 'Post order',
        'posts_order_description' => 'Attribute on which the posts should be ordered',
        'posts_category' => 'Category page',
        'posts_category_description' => 'Name of the category page file for the "Posted into" category links. This property is used by the default component partial.',
        'posts_post' => 'Post page',
        'posts_post_description' => 'Name of the tour post page file for the "Learn more" links. This property is used by the default component partial.',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to except',
    ],
];
