<?php
/**
  * Kuuzu Cart
  *
  * REPLACE_WITH_COPYRIGHT_TEXT
  * REPLACE_WITH_LICENSE_TEXT
  */

  use Kuuzu\KU\HTML;
  use Kuuzu\KU\KUUZU;	

  if (!isset($process)) $process = false;
?>

  <div class="contentText">

<?php
  if (ACCOUNT_GENDER == 'true') {
    if (isset($gender)) {
      $male = ($gender == 'm') ? true : false;
      $female = ($gender == 'f') ? true : false;
    } else {
      $male = false;
      $female = false;
    }
?>

    <div class="form-group">
      <label class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_gender'); ?></label>
      <div class="col-sm-9">
        <label class="radio-inline">
          <?php echo HTML::radioField('gender', 'm', $male, 'aria-describedby="atGender"') . ' ' . KUUZU::getDef('male'); ?>
        </label>
        <label class="radio-inline">
          <?php echo HTML::radioField('gender', 'f', $female) . ' ' . KUUZU::getDef('female'); ?>
        </label>
        <?php if (tep_not_null(KUUZU::getDef('entry_gender_text'))) echo '<span id="atGender" class="help-block">' . KUUZU::getDef('entry_gender_text') . '</span>'; ?>
      </div>
    </div>

<?php
  }
?>

    <div class="form-group">
      <label for="inputFirstName" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_first_name'); ?></label>
      <div class="col-sm-9">
        <?php
        echo HTML::inputField('firstname', NULL, 'id="inputFirstName" placeholder="' . KUUZU::getDef('entry_first_name_text') . '"');
        ?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputLastName" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_last_name'); ?></label>
      <div class="col-sm-9">
        <?php
        echo HTML::inputField('lastname', NULL, 'id="inputLastName" placeholder="' . KUUZU::getDef('entry_last_name_text') . '"');
        ?>
      </div>
    </div>

<?php
  if (ACCOUNT_COMPANY == 'true') {
?>

    <div class="form-group">
      <label for="inputCompany" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_company'); ?></label>
      <div class="col-sm-9">
        <?php
        echo HTML::inputField('company', NULL, 'id="inputCompany" placeholder="' . KUUZU::getDef('entry_company_text') . '"');
        ?>
      </div>
    </div>

<?php
  }
?>

    <div class="form-group">
      <label for="inputStreet" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_street_address'); ?></label>
      <div class="col-sm-9">
        <?php
        echo HTML::inputField('street_address', NULL, 'id="inputStreet" placeholder="' . KUUZU::getDef('entry_street_address_text') . '"');
        ?>
      </div>
    </div>

<?php
  if (ACCOUNT_SUBURB == 'true') {
?>

    <div class="form-group">
      <label for="inputSuburb" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_suburb'); ?></label>
      <div class="col-sm-9">
        <?php
        echo HTML::inputField('suburb', NULL, 'id="inputSuburb" placeholder="' . KUUZU::getDef('entry_suburb_text') . '"');
        ?>
      </div>
    </div>

<?php
  }
?>

    <div class="form-group">
      <label for="inputCity" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_city'); ?></label>
      <div class="col-sm-9">
        <?php
        echo HTML::inputField('city', NULL, 'id="inputCity" placeholder="' . KUUZU::getDef('entry_city_text') . '"');
        ?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputZip" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_post_code'); ?></label>
      <div class="col-sm-9">
        <?php
        echo HTML::inputField('postcode', NULL, 'id="inputZip" placeholder="' . KUUZU::getDef('entry_post_code_text') . '"');
        ?>
      </div>
    </div>

<?php
  if (ACCOUNT_STATE == 'true') {
?>

    <div class="form-group">
      <label for="inputState" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_state'); ?></label>
      <div class="col-sm-9">
        <?php
        if ($process == true) {
          if ($entry_state_has_zones == true) {
            $zones_array = array();
            $Qzones = $KUUZU_Db->get('zones', 'zone_name', ['zone_country_id' => $country], 'zone_name');
            while ($Qzones->fetch()) {
              $zones_array[] = array('id' => $Qzones->value('zone_name'), 'text' => $Qzones->value('zone_name'));
            }
            echo HTML::selectField('state', $zones_array, 0, 'id="inputState" aria-describedby="atState"');
            if (tep_not_null(KUUZU::getDef('entry_state_text'))) echo '<span id="atState" class="help-block">' . KUUZU::getDef('entry_state_text') . '</span>';
          } else {
            echo HTML::inputField('state', NULL, 'id="inputState" placeholder="' . KUUZU::getDef('entry_state_text') . '"');
          }
        } else {
          echo HTML::inputField('state', NULL, 'id="inputState" placeholder="' . KUUZU::getDef('entry_state_text') . '"');
        }
        ?>
      </div>
    </div>

<?php
  }
?>

    <div class="form-group">
      <label for="inputCountry" class="control-label col-sm-3"><?php echo KUUZU::getDef('entry_country'); ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_get_country_list('country', STORE_COUNTRY, 'aria-describedby="atCountry" id="inputCountry"');
        if (tep_not_null(KUUZU::getDef('entry_country_text'))) echo '<span id="atCountry" class="help-block">' . KUUZU::getDef('entry_country_text') . '</span>';
        ?>
      </div>
    </div>
</div>
