<h1>Galeria zdjęć</h1>
<div class="gallery">
    <div class="row">
        <?php
            $images = scandir('include/pages/pictures');
            if($images) {
                foreach ($images as $image) {
                    if (strpos($image, '.jpg') !== false) { 
                        $url = "include/pages/pictures/"; 
                        echo '<img class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px" src="include/pages/pictures/'. $image .'">';
                    }
                }
            }
        ?>
    </div>
</div>
