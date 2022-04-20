<!-- Galeria pochodzi ze strony
https://github.com/navneil-naicker/acf-photo-gallery-field -->

<?php




$args = [
    "metaDescription" => "",
    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Cennik"
];

get_header(null, $args);
?>


<?php
//Get the images ids from the post_metadata
$images = acf_photo_gallery('galeria', $post->ID);
//Check if return array has anything in it
if (count($images)) :
?>
    <div class="container-fluid">

        <div class="popup-gallery row">
            <?php
            $i = 0;
            //Cool, we got some data so now let's loop over it
            foreach ($images as $image) :

                $id = $image['id']; // The attachment id of the media
                $title = $image['title']; //The title
                $caption = $image['caption']; //The caption
                $full_image_url = $image['full_image_url']; //Full size image url
                $thumbnail_image_url = acf_photo_gallery_resize_image($full_image_url, 300, 300); //Resized size to 262px width by 160px height image url
                //$thumbnail_image_url = $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                $url = $image['url']; //Goto any link when clicked
                $target = $image['target']; //Open normal or new tab
                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
            ?>
                <div class="col-6 col-md-2 galleria_foto">
                    <a href="<?php echo $full_image_url; ?>" title="<?php echo $title; ?>">
                        <img src="<?php echo $thumbnail_image_url; ?>" alt="<?php echo $title; ?>">
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>KJM</small>';
                }
            }
        });
    });
</script>




<?php get_footer(); ?>