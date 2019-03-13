<?php

class Quote_cpt
{
    public function __construct()
    {
        add_action('init', [$this, 'create_cpt']);
        add_action('init', [$this, 'create_taxonomies']);
    }

    public function create_cpt()
    {
        $quotes = [
            'name'                  => 'Quotes',
            'singular_name'         => 'Quote',
            'menu_name'             => 'Quotes',
            'name_admin_bar'        => 'Quotes',
            'archives'              => 'Archives des quotes',
            'attributes'            => 'Attributs des quotes',
            'parent_item_colon'     => 'Element parent',
            'all_items'             => 'Toutes les quotes',
            'add_new_item'          => 'Ajouter une nouvelle quote',
            'add_new'               => 'Ajouter une nouvelle quote',
            'new_item'              => 'Nouvelle quote',
            'edit_item'             => 'Editer la quote',
            'update_item'           => 'Mettre à jour la quote',
            'view_item'             => 'Voir la quote',
            'view_items'            => 'Voir les quotes',
            'search_items'          => 'Rechercher les quotes',
            'not_found'             => 'Aucune quote trouvée',
            'not_found_in_trash'    => 'Aucune quote trouvée dans la corbeille',
            'items_list'            => 'Liste des quotes',
            'items_list_navigation' => 'Liste des quotes',
            'filter_items_list'     => 'Filtrer la liste des quotes',
        ];

        $args = [
            'label'                 => 'Quote',
            'labels'                => $quotes,
            'description'           => 'citations',
            'supports'              => [
                'title',
                'author',
                'editor',
                'thumbnail',
                'custom-fields',
                'revisions',
                'excerpt'
            ],
            'hierarchical'          => false,
            'public'                => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-format-status',
            'has_archive'           => true,
            'rewrite'               => [
                'slug'              => 'quote',
                'with_front'        => true
            ],
            'show_in_rest'          => true
        ];

        register_post_type('quote', $args);
    }

    public function create_taxonomies()
    {
        $labels = [
            'name'                       => 'Categories',
            'singular_name'              => 'Categotie',
            'menu_name'                  => 'Categories',
            'all_items'                  => 'Toutes les categories',
            'new_item_name'              => 'Nouvelle categorie',
            'add_new_item'               => 'Ajouter une categorie',
            'update_item'                => 'Mettre à jour une categorie',
            'edit_item'                  => 'Editer une categorie',
            'view_item'                  => 'Voir toutes les categories',
            'add_or_remove_items'        => 'Ajouter ou supprimer une categorie',
            'popular_items'              => 'Categories populaires',
            'search_items'               => 'Rechercher une categorie',
            'not_found'                  => 'Aucune categorie trouvee',
            'items_list'                 => 'Lister les categories',
        ];

        $args = [
            'labels'                    => $labels,
            'hierarchical'              => false,
            'public'                    => true,
            'show_in_rest'              => true,
        ];

        register_taxonomy('categorie', 'quote', $args);
        
    }

    public function activation()
    {
        $this->create_cpt();
        $this->create_taxonomies();

        flush_rewrite_rules();
    }

    public function deactivation()
    {
        flush_rewrite_rules();
    }
}