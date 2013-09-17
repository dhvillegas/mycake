<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title> My Site Vacation</title>
		<?php
    		echo $this->Html->meta('icon');

    		echo $this->Html->css('my_css');

    		echo $this->fetch('meta');
    		echo $this->fetch('css');
    		echo $this->fetch('script');
    	?>
    </head>
<body>
<div id="header">
	<div id="header_inner">
		<h1><span>My.</span>Vacation</h1>
		<div id="slogan">O Lugar que você sempre sonhou é só aqui.</div>
	</div>
</div>

<div id="main">

	<div id="lcol">


    <?php echo $this->element('menu_principal') ?>

    <?php echo $this->element('menu_lugares', array(
    'pais_1' => 'Africa',
    'pais_2' => 'Europa',
    'pais_3' => 'America do Norte',
    'pais_4' => 'Asia',
    'pais_5' => 'Oceania'
    )) ?>





	</div>

	<div id="rcol">
		<div id="rcontent">
            <?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

		</div>
	</div>

</div>

<div id="footer">
	&copy; 2013 My.Site.Vacation All rights reserved. Design by <a href="http://www.studiocomm.com.br/">Studio.comm</a>.
</div>

</body>
</html>



