<?php
/**
  * Kuuzu Cart
  *
  * REPLACE_WITH_COPYRIGHT_TEXT
  * REPLACE_WITH_LICENSE_TEXT
  */

  class alertBlock {
    function __construct($contents, $alert_output = false) {
	  $alertBox_string = '';

      for ($i=0, $n=sizeof($contents); $i<$n; $i++) {
        $alertBox_string .= '  <div';

        if (isset($contents[$i]['params']) && tep_not_null($contents[$i]['params']))
		  $alertBox_string .= ' ' . $contents[$i]['params'];

		  $alertBox_string .= '>' . "\n";
          $alertBox_string .= '	<button type="button" class="close" data-dismiss="alert">&times;</button>' . "\n";
          $alertBox_string .= $contents[$i]['text'];

          $alertBox_string .= '  </div>' . "\n";
      }

      if ($alert_output == true) echo $alertBox_string;
        return $alertBox_string;
     }
  }
?>
