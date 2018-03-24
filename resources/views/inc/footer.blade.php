<div class="space-sm background-dark">
    <div class="footer">
        <div class="social">
            <a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
        </div>
        <div class="container">
            <hr class="hr-dark">
        </div>
        <div class="copyrights">
            &#9400; <?php echo date("Y"); ?> Project
        </div>
    </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap-dropdownhover.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
    <script src="{{ asset('js/jquery.viewportchecker.min.js') }}"></script>
    <!-- CKEditor script -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>