				</section>
			</section>
		</section>
		
		<section id="footer_wrapper">
			<footer>
				<div class="logo">EFW</div>
				<?=anchor('', 'Link')?> - 
				<?=anchor('', 'Link')?> - 
				<?=anchor('', 'Link')?> - 
				<?=anchor('', 'Link')?> - 
				<?=anchor('', 'Link')?> - 
				<p>
					<?=$config['app']['title']?> <?=$config['app']['version']?> by <?php echo implode(', ', $config['app']['authors']); ?><br>
					Powered by <a href="http://github.com/EID/EFW" target="_blank">EFW</a><br>
				</p>
			</footer>
		</section>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
		<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>