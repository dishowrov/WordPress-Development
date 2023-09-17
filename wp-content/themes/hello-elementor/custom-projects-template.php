<?php
/**
 * Template Name: Custom Projects Template
 * Description: A custom template to display portfolio projects.
 *
 * @package CustomTemplate
 */

 // WordPress header
get_header();
 
$args = array(
    'post_type' => 'projects', 
    'posts_per_page' => -1,   
);

$projects_query = new WP_Query($args);

if ($projects_query->have_posts()) :
    while ($projects_query->have_posts()) : $projects_query->the_post();
        // Display project content here
        the_title();           // Display project title
        the_content();         // Display project content
        the_post_thumbnail();  // Display project thumbnail image
    endwhile;
    wp_reset_postdata(); // Reset the query
else :
    echo 'No projects found.';
endif;
?>

<!-- Modal HTML structure -->
<div id="project-modal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2 id="project-title">Project Title</h2>
        <div id="project-description" class="project-description">
             <p>
             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
             </p>
        </div>
        <div id="project-image" class="project-image">
            <!-- Project image goes here -->
        </div>
    </div>
</div>

<?php
//  Modal styles
?>
<style>
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1000;
    }
</style>

<?php
// Modal Scripts
?>
<script>
    jQuery(document).ready(function ($) {
        // Function to open the modal with project details
        function openModal(title, description, imageUrl) {
            $('#project-title').text(title);
            $('#project-description').html(description);
            $('#project-image').html('<img src="' + imageUrl + '">');
            $('#project-modal').show();
        }

        // Function to close the modal
        function closeModal() {
            $('#project-modal').hide();
        }

        // Click event to open the modal when a project is clicked
        $('.project').on('click', function () {
            var title = $(this).find('.project-title').text();
            var description = $(this).find('.project-description-content').html();
            var imageUrl = $(this).find('.project-image img').attr('src');
            openModal(title, description, imageUrl);
        });

        // Click event to close the modal when the close button is clicked
        $('.close-modal').on('click', function () {
            closeModal();
        });
    });
</script>

<?php
//  WordPress footer
get_footer();
?>
