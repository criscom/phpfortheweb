// the $variables object holds all available variables
$text = $variables['#object']->title;
$link = $variables['#object']->link['und'][0]['value'];
print l($text, $link);

// the $variables object holds all available variables
$text = $variables['#object']->title;
$link = $variables['#object']->field_promo_link_extern;
print l($text, $link);

<a href="[image-field-value:styles:url:large]"><img src="[image-field-value:styles:url:thumbnail]" alt="[image-field-value:alt]" title="[image-field-value:title]" /></a>

$search_term = $variables['#items'][0]['safe_value'];
$url = 'http://www.streetmap.co.uk/loc/'.$search_term;
$options = array('attributes' => array('target'=>'_blank'));
Return l($search_term, $url, $options);


$search_term = $variables['#object']->title;
$url = ['field_promo_link_extern'];
$options = array('attributes' => array('target'=>'_blank'));
Return l($search_term, $url, $options);


$search_term = $variables['#items'][0]['title'];
$url = $variables['#object']->field_promo_link_extern;
$options = array('attributes' => array('target'=>'_blank'));
Return l($search_term, $url, $options);

$node_title_custom = $variables['#object']->title;
$url = $variables['#items'][0]['field_promo_link_extern'];
$options = array('attributes' => array('target'=>'_blank'));
Return l($node_title_custom, $url, $options);

$node_title_custom = $variables['#object']->title;
$path = $element['item']['field_promo_link_extern'];
$url = file_create_url($path);
$options = array('attributes' => array('target'=>'_blank'));
Return l($node_title_custom, $url, $options);

$path = $element['#item']['filepath'];
$url = file_create_url($path);
$link_text = $variables['#object']->title;
return l($link_text, $url);