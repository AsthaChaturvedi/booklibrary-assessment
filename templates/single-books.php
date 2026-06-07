<?php
get_header();

while (have_posts()) :
the_post();

$author = get_field('author');
$genre = get_field('genre');
$published_date = get_field('published_date');
$description = get_field('description');
?>

<div class="book-container">

    <h1><?php the_title(); ?></h1>

    <p>
        <strong>Author:</strong>
        <?php echo esc_html($author); ?>
    </p>

    <p>
        <strong>Genre:</strong>
        <?php echo esc_html($genre); ?>
    </p>

    <p>
        <strong>Published Date:</strong>
        <?php echo esc_html($published_date); ?>
    </p>

    <div>
        <strong>Description:</strong>
        <?php echo wp_kses_post($description); ?>
    </div>

</div>

<?php
endwhile;

get_footer();
?>