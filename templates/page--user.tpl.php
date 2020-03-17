<?php

/**
 *  page--user.tpl.php - beta 2.0
 *  Show a nice clean login box when logging in..
 */

if ( ! user_is_logged_in()): ?>

	<div class="page-wrapper login-page">
		<div class="page">
			<header class="site-header">

				<div class="site-branding">
					<?php if ($logo): ?>
						<div class="site-logo">
							<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
								<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</header>



			<div class="primary-content">
				<div class="primary-container">

					<?php print $messages; ?>

					<header class="content-header">

          <?php
            if (
              !empty($_SESSION['oauth2_server_authorize']) &&
              !empty($_SESSION['oauth2_server_authorize']['auth_domain'])
            ) {
              $title = 'Inloggen voor ' . $_SESSION['oauth2_server_authorize']['auth_domain'];
            }
            else {
              $title = 'Inloggen op ' . variable_get('site_name');
            }
          ?>


						<h1 class="title"><?php print $title; ?></h1>
					</header>

					<?php
					if (current_path() == 'user' && module_exists('splogin')):
						$tabs['#primary'][] = array(
							'#theme' => 'menu_local_task',
							'#link'  => array(
								'path'              => 'user/new',
								'href'              => 'user/new',
								'title'             => 'Nieuw account aanmaken',
								'localized_options' => array(),
							)
						);
					endif; ?>

					<?php print render($page['help']); ?>

					<a id="primary-content"></a>
					<?php print render($page['content']); ?>

					<div class="bottom-tabs">
						<?php print render($tabs); ?>
					</div>

				</div>
			</div>

			<footer class="site-footer">
				<?php print render($page['footer']); ?>
			</footer>
		</div>
	</div>

<?php else: ?>

	<?php include 'page.tpl.php'; ?>

<?php endif; ?>
