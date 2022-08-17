
    <script src="./jquery.min.js"></script>
    <script>
        jQuery(document).ready(function(){           
            jQuery("#language").change(function(){
               var language = jQuery(this).val();
               window.location.href="<?php echo 'http://localhost/PHP_small_projects/Multi-language'; ?>/"+language;
            });
        });
    </script>
</body>
</html>