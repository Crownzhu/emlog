<div class="clear"></div>
<div id="footer">
Copyright &copy;  2013 <a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>. Powered by <a href="http://www.emlog.net/" rel="external">emlog</a>.
 <a href="http://www.miibeian.gov.cn" target="_blank"  rel="nofollow"><?php echo $icp; ?></a>  <?php doAction('index_footer'); ?>  <?php echo $footer_info; ?>
 </div>
 <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/common_tpl.js"></script>
 <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/x.js"></script>
</div>
<?php if(isset($ckmail) && empty($ckmail)): ?>
	<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/realgravatar.js"></script>
	<?php endif; ?>
</body>
</html>