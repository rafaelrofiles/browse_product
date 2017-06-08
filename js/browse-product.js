(function($) {
  var components = new Object();
  
  $(document).on('click', '.color-picker-remove-button', function(e) {
    e.preventDefault();

    var layer = $(this).attr('layer');
    $('a[layer="' + layer + '"]').removeClass('selected');
    $('div[container-layer="' + layer + '"]').html('');
  });

  $(document).on('click', '.color-picker-button', function(e) {
    e.preventDefault();

    var componentsString;
    var layer = $(this).attr('layer');
    var color_item = $(this).attr('color-item');

    $('a[layer="' + layer + '"]').removeClass('selected');
    $(this).addClass('selected');

    var image = '<img layer="' + layer + '" src="' + Drupal.settings.browse_product.images['color-item-' + color_item]['image_source'] + '">';

    $('div[container-layer="' + layer + '"]').html(image);

    components[layer] = $(this).attr('title');

    for(var i in components) {
      componentsString = componentsString + components[i] + ", ";
    }
    
    componentsString = componentsString.replace("undefined", "");

    $('input[name="components"]').val(componentsString);
  });
} (jQuery));