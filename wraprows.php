
//** Code von Artur. Diskussion auf drupal.stackoverflow.com. 08.11.2012 http://drupal.stackexchange.com/questions/49838/views-group-different-number-of-divs-of-a-view-by-wrapping-them/
//**

<?php
  $rows = array(
    1 => "row1",
    2 => "row2",
    3 => "row3",
    4 => "row4",
    5 => "row5",
    6 => "row6",
    7 => "row7",
    8 => "row8",
    9 => "row9",
    10 => "row10",
  );
?>


<?php
  $currIx = 1; // This will be our incremental index variable. Let's make it 1-based to maintin consistency with your example.
  $currWrapperIx = 1; // Wrapper counter
  $wasOpen = FALSE; // This variable will be used later as a flag to watch for properly closing wrapper divs.
?>

<?php foreach ($rows as $id => $row): ?>
  <?php switch ($currIx){
    // List the row indices that are supposed to begin a new wrapper.
    case 1:
    case 4:
    case 9:
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

  <div><?php print $row; ?></div>

  <?php $currIx ++; ?>
<?php endforeach; ?>

<?php
    // Close the last wrapper.
    if($wasOpen == TRUE){
      print "</div>\n";
      $wasOpen = FALSE;
    }
?>