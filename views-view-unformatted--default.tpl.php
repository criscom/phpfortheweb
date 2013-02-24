<?php
  $currIx = 1; // This will be our incremental index variable. Let's make it 1-based to maintin consistency with your example.
  $currWrapperIx = 1; // Wrapper counter
  $wasOpen = FALSE; // This variable will be used later as a flag to watch for properly closing wrapper divs.
?>

<?php if (!empty($title)): ?>
  <p class="<?php print $title ?>"><?php print $title; ?></p>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php switch ($currIx){
    // List the row indices that are supposed to begin a new wrapper.
    case 1:
    case 27:
      if($wasOpen == TRUE){ // Close current wrapper div before opening a new one.
        print "</div>\n";
        $wasOpen = FALSE;
        $currWrapperIx ++; // Increment the index for next wrapper's class.
      }
      // Open a new wrapper div
      print "<div class=\"wrapper-{$currWrapperIx}\">\n";
      $wasOpen = TRUE;
      break;

    default:
      // For other row indices do nothing.
    }
  ?>
<!--<div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>-->
  <div class="<?php print $id ?>"><?php print $row; ?></div>
<!-- </div>-->

  <?php $currIx ++; ?>
<?php endforeach; ?>

<?php
    // Close the last wrapper.
    if($wasOpen == TRUE){
      print "</div>\n";
      $wasOpen = FALSE;
    }
?>