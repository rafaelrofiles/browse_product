<?php if (count($colors)): ?>
  <?php if ($display_as_text): ?>
    <ul class="text-color-picker">
  <?php else: ?>
    <ul class="image-color-picker">
  <?php endif; ?>
      <li>
        <a href="#" class="color-picker-remove-button" layer="<?php print $layer; ?>">
          <div style="width: 20px; height: 20px;">X</div>
        </a>
      </li>
      <?php foreach($colors as $color): ?>
        <li>
          <a href="#" title="<?php print $group_name . " - " . $color['title']; ?>" class="color-picker-button" color-item="<?php print $color['color_item']; ?>" layer="<?php print $layer; ?>">
            <?php if ($color['display_as_text']): ?>
              <div><?php print $color['title']; ?></div>
            <?php else: ?>
              <?php if (isset($color['hex_color'])): ?>
                <div style="width: 20px; height: 20px; background-color: #<?php print render($color['hex_color']) ?>"></div>
              <?php endif; ?>
            <?php endif; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
<?php endif; ?>