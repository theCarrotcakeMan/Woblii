
	    <footer class="block w-full p-6 bg-purple-dark text-white">
            <small class="block w-full text-center text-xs font-medium text-center">Todos los derechos reservados. Woblii &copy; <?php echo date('Y') ?></small>
        </footer>

		</div><!-- .container -->

        <?php wp_footer(); ?>

    </body>
	<?php if(is_page('login')): ?>
		<script>
			$(function() {
				$.scrollify({
					section : ".snapable-window",
					setHeights: true,
				    overflowScroll: true,
				    updateHash: false,
				    touchScroll: false
				});
			});
		</script>
	<?php endif; ?>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

</html>
