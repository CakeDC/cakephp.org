<?php
/**
 * Copyright 2010 - 2015, Cake Development Corporation (https://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2015, Cake Development Corporation (https://cakedc.com)
 * @license MIT License (https://www.opensource.org/licenses/mit-license.php)
 */

use Cake\Core\Configure;

?>
<section  class="dark-gray-stripe">
	<div class="container">
		<div class="row">
			<div class="col-md-12 title-mycake">
				<h1><strong>CakePHP</strong> Admin<span class="glyph_range icon-calendar">a</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="ptb-80 back-light-gray ">
	<div class="container">
		<div class="row mycake-login">
			<?= $this->Flash->render() ?>
			<div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2">
				<h4><?= __('Enter a new password') ?></h4>
				<div class="col-md-6 col-md-offset-3">
					<?= $this->Form->create() ?>

					<?= $this->Form->control('password', ['label' => false, 'required' => true, 'placeholder' => __('New password'), 'class' => 'form-control-mylogin']) ?>
					<?= $this->Form->control('password_confirm', ['type' => 'password', 'label' => false, 'required' => true, 'placeholder' => __('Confirm new password'), 'class' => 'form-control-mylogin']) ?>
					<?= $this->Form->button(__d('Users', 'Submit'), ['class' => 'btn-user btn-mylogin']); ?>

						<?= $this->Form->end() ?>
				</div>
			</div>
		</div>
	</div>
</section>
