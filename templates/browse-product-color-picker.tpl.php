<div class="browse-product-sb-label">color picker</div>
<div class="panel-group" id="color-picker" role="tablist" aria-multiselectable="true">
	<?php if (isset($variables['color_groups'])): ?>
		<?php foreach($color_groups as $group_key => $color_group): ?>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="color-heading-<?php print $group_key; ?>">
		      <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#color-picker" href="#collapse-<?php print $group_key?>" aria-expanded="false" aria-controls="collapse-<?php print $group_key?>">
		          <?php print render($color_group['group_name']); ?>
		        </a>
		      </h4>
		    </div>
		    <div id="collapse-<?php print $group_key?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="color-heading-<?php print $group_key; ?>">
		      <div class="panel-body">
		        <?php print $color_group['colors']; ?>
		      </div>
		    </div>
		  </div>
  	<?php endforeach; ?>
	<?php endif; ?>
</div>