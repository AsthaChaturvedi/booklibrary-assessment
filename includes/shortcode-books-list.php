<?php

if (!defined('ABSPATH')) {
    exit;
}

function bl_books_list_shortcode() {

    ob_start();

    $selected_genre = isset($_GET['genre'])
        ? sanitize_text_field($_GET['genre'])
        : '';

    $paged = max(
        1,
        get_query_var('paged'),
        get_query_var('page')
    );

    ?>

    <form method="GET" class="book-filter">

        <select name="genre" onchange="this.form.submit()">

            <option value="">All Genres</option>

            <option value="Fiction" <?php selected($selected_genre, 'Fiction'); ?>>
                Fiction
            </option>

            <option value="Non-Fiction" <?php selected($selected_genre, 'Non-Fiction'); ?>>
                Non-Fiction
            </option>

            <option value="Sci-Fi" <?php selected($selected_genre, 'Sci-Fi'); ?>>
                Sci-Fi
            </option>

            <option value="Fantasy" <?php selected($selected_genre, 'Fantasy'); ?>>
                Fantasy
            </option>

            <option value="Biography" <?php selected($selected_genre, 'Biography'); ?>>
                Biography
            </option>

            <option value="Mystery" <?php selected($selected_genre, 'Mystery'); ?>>
                Mystery
            </option>

        </select>

    </form>

    <?php

    $args = [
        'post_type'      => 'books',
        'posts_per_page' => 5,
        'paged'          => $paged,
    ];

    if (!empty($selected_genre)) {

        $args['meta_query'] = [
            [
                'key'     => 'genre',
                'value'   => $selected_genre,
                'compare' => '='
            ]
        ];

    }

    $books = new WP_Query($args);

    if ($books->have_posts()) :

        echo '<div class="books-list">';

        while ($books->have_posts()) :
            $books->the_post();

            $author = get_field('author');
            $genre  = get_field('genre');
            ?>

            <div class="book-card">

                <h3>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <p>
                    <strong>Author:</strong>
                    <?php echo esc_html($author); ?>
                </p>

                <p>
                    <strong>Genre:</strong>
                    <?php echo esc_html($genre); ?>
                </p>

            </div>

            <?php

            echo '<p>Total Books Found: ' . $books->found_posts . '</p>';
echo '<p>Total Pages: ' . $books->max_num_pages . '</p>';

        endwhile;

        echo '</div>';

        echo paginate_links([
            'base'      => str_replace(
                999999999,
                '%#%',
                esc_url(get_pagenum_link(999999999))
            ),
            'format'    => '?paged=%#%',
            'current'   => $paged,
            'total'     => $books->max_num_pages,
            'add_args'  => array_filter([
                'genre' => $selected_genre
            ])
        ]);

        wp_reset_postdata();

    else :

        echo '<p>No books found.</p>';

    endif;

    return ob_get_clean();
}

add_shortcode('books_list', 'bl_books_list_shortcode');