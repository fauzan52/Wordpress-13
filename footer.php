<?php
global $fauzanredux;
?>
<footer>
<?php if($fauzanredux['footer-switch-button'] == 1): ?>
<style type="text/css">
    #copyright-area{
    background: <?php echo $fauzanredux['footer-background']; ?> none repeat scroll 0 0 ! important;
    color: <?php echo $fauzanredux['footer-font-color']; ?> ;
    }
</style>



<div id="copyright-area">
    <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="poweredBy">
                    <h1>&copy; <?php echo $fauzanredux['copyright-text']; ?> <a href="<?php echo $fauzanredux['developer-url']; ?>"><?php echo $fauzanredux['developer-name'] ?></a></h1>
                </div>
            </div>
    </div>
</div>
<?php endif; ?>

    <div class="footer-content">
        <h3>WEBSITEKU</h3>
            <p>Website ini dibuat oleh Fauzan Alghifari</p>
        <ul class="socials">
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href=""><i class="fa fa-youtube"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href=""><i class="fa fa-whatsapp-square"></i></a></li>
        </ul>
    </div>
    <div class ="footer-bottom">
        <p>Copyright &copy; <?php echo $fauzanredux['copyright-text']; ?> <a href="<?php echo $fauzanredux['developer-url']; ?>"><?php echo $fauzanredux['developer-name'] ?></a></p>
    </div>
</footer>


