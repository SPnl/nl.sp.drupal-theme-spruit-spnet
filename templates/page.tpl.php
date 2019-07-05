<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>
<div class="page-wrapper">
	<div class="page">





		<!-- HEADER -->
		<header class="site-header">

			<div class="site-branding">

				<!-- LOGO -->
				<?php if ($logo): ?>
				<div class="site-logo">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
					</a>
				</div>
				<?php endif; ?>

				<!-- SITE NAME -->
				<?php if ($site_name): ?>
				<h1 class="site-name">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
				</h1>
				<?php endif; ?>

			</div>

			
			<!-- MAIN MENU -->
			<?php if ($page['menu']): ?>
			<nav class="site-navigation">
				<?php print render(menu_tree('main-menu', 1)); ?>
			</nav>
			<?php endif; ?>


			<!-- SEARCH -->
			<?php if ($page['search']): ?>
			<div class="search-toggle">
				<a href="#search" class="button btn-search"><span class="text"><?php print t('Search'); ?></span></a>
			</div>
			<?php endif; ?>

		</header>





		<!-- PRIMARY CONTENT -->
		<div class="primary-content">
			<div class="primary-container clearfix">

						
				<!-- SEARCH FORM -->
				<?php if ($page['search']): ?>
				<div class="site-search">
					<?php print render($page['search']); ?>
				</div>
				<?php endif; ?>


				<!-- HIGHLIGHTED CONTENT -->
				<?php if ($page['highlight']): ?>
				<div class="highlight-content"><?php print render($page['highlight']); ?></div>
				<?php endif; ?>


				<!-- DRUPAL MESSAGES -->
				<?php if ($messages): ?>
				<?php print $messages; ?>
				<?php endif; ?>


				<!-- BREADCRUMBS & QUICKLINKS -->
				<?php if ($page['quicklinks_top'] or ($breadcrumb)) : ?>
							
					
					<!-- QUICKLINKS -->
					<?php if ($page['quicklinks_top']): ?>
					<div class="quicklinks-content">
						<?php print render($page['quicklinks_top']); ?>
					</div>
					<?php endif; ?>
					

					<!-- BREADCRUMBS -->
					<?php if ($breadcrumb): ?>
					<nav class="breadcrumb"><?php print $breadcrumb; ?></nav>
					<?php endif; ?>


				<?php endif; ?>						


				<!-- TITLE -->
				<?php if ($title): ?>
				<header class="content-header">
					<?php print render($title_prefix); ?>
					<h1 class="title"><?php print $title; ?></h1>
					<?php print render($title_suffix); ?>
				</header>
				<?php endif; ?>


				<!-- TABS -->
				<?php print render($tabs); ?>


				<!-- PAGE HELP -->
				<?php print render($page['help']); ?>


				<!-- ACTION LINKS -->
				<?php if ($action_links): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>


				<!-- CONTENT -->
				<a id="primary-content"></a>
				<?php print render($page['content']); ?>

			</div>
		</div>





		<!-- SECONDARY CONTENT -->
		<?php if ($page['secondary']): ?>
		<div class="secondary-content">
			<?php print render($page['secondary']); ?>
		</div>
		<?php endif; ?>





		<!-- FOOTER -->
		<?php if ($page['footer']): ?>
		<footer class="site-footer">
			<?php print render($page['footer']); ?>
		</footer>
		<?php endif; ?>


	</div>
</div>
