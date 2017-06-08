<div class="view-content">
	<div class="content-row browse-products-left">
		<div class="column-one-wrapper">
			<div class="content-row twelve-column">
				<?php if (isset($variables['browse_product_form'])): ?>
					<div class="select-form-wrapper">
						<?php print drupal_render($browse_product_form); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="content-row twelve-column">
				<?php if (isset($variables['image'])): ?>
					<div class="image-container">
						<div class="image-wrapper">
							<?php print render($image); ?>
						</div>
						<?php if (isset($variables['layers'])): ?>
							<?php foreach($layers as $layer): ?>
								<div class="image-layer-wrapper" container-layer="<?php print $layer; ?>"></div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="content-row browse-products-right">
		<?php if (isset($variables['color_picker'])): ?>
			<div class="color-picker-wrapper">
				<?php print $color_picker; ?>
			</div>
		<?php endif; ?>
		<div id="inquire-button-wrapper">
			<?php print drupal_render($variables['inquire_form']); ?>
		</div>
	</div>
</div>