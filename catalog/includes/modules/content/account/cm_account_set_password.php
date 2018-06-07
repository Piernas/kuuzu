<?php
/**
  * Kuuzu Cart
  *
  * REPLACE_WITH_COPYRIGHT_TEXT
  * REPLACE_WITH_LICENSE_TEXT
  */

  use Kuuzu\KU\KUUZU;
  use Kuuzu\KU\Registry;

  class cm_account_set_password {
    var $code;
    var $group;
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->code = get_class($this);
      $this->group = basename(dirname(__FILE__));

      $this->title = KUUZU::getDef('module_content_account_set_password_title');
      $this->description = KUUZU::getDef('module_content_account_set_password_description');

      if ( defined('MODULE_CONTENT_ACCOUNT_SET_PASSWORD_STATUS') ) {
        $this->sort_order = MODULE_CONTENT_ACCOUNT_SET_PASSWORD_SORT_ORDER;
        $this->enabled = (MODULE_CONTENT_ACCOUNT_SET_PASSWORD_STATUS == 'True');
      }
    }

    function execute() {
      global $kuuTemplate;

      $KUUZU_Db = Registry::get('Db');

      if ( isset($_SESSION['customer_id']) ) {
        $Qcheck = $KUUZU_Db->get('customers', 'customers_password', ['customers_id' => $_SESSION['customer_id']]);

        if ( empty($Qcheck->value('customers_password')) ) {
          $counter = 0;

          foreach ( array_keys($kuuTemplate->_data['account']['account']['links']) as $key ) {
            if ( $key == 'password' ) {
              break;
            }

            $counter++;
          }

          $before_eight = array_slice($kuuTemplate->_data['account']['account']['links'], 0, $counter, true);
          $after_eight = array_slice($kuuTemplate->_data['account']['account']['links'], $counter + 1, null, true);

          $kuuTemplate->_data['account']['account']['links'] = $before_eight;

          if ( MODULE_CONTENT_ACCOUNT_SET_PASSWORD_ALLOW_PASSWORD == 'True' ) {
            $kuuTemplate->_data['account']['account']['links'] += array('set_password' => array('title' => KUUZU::getDef('module_content_account_set_password_set_password_link_title'),
                                                                        'link' => KUUZU::link('ext/modules/content/account/set_password.php'),
                                                                        'icon' => 'fa fa-fw fa-lock'));
          }

          $kuuTemplate->_data['account']['account']['links'] += $after_eight;
        }
      }
    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_CONTENT_ACCOUNT_SET_PASSWORD_STATUS');
    }

    function install() {
      $KUUZU_Db = Registry::get('Db');

      $KUUZU_Db->save('configuration', [
        'configuration_title' => 'Enable Set Account Password',
        'configuration_key' => 'MODULE_CONTENT_ACCOUNT_SET_PASSWORD_STATUS',
        'configuration_value' => 'True',
        'configuration_description' => 'Do you want to enable the Set Account Password module?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'tep_cfg_select_option(array(\'True\', \'False\'), ',
        'date_added' => 'now()'
      ]);

      $KUUZU_Db->save('configuration', [
        'configuration_title' => 'Allow Local Passwords',
        'configuration_key' => 'MODULE_CONTENT_ACCOUNT_SET_PASSWORD_ALLOW_PASSWORD',
        'configuration_value' => 'True',
        'configuration_description' => 'Allow local account passwords to be set.',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'tep_cfg_select_option(array(\'True\', \'False\'), ',
        'date_added' => 'now()'
      ]);

      $KUUZU_Db->save('configuration', [
        'configuration_title' => 'Sort Order',
        'configuration_key' => 'MODULE_CONTENT_ACCOUNT_SET_PASSWORD_SORT_ORDER',
        'configuration_value' => '0',
        'configuration_description' => 'Sort order of display. Lowest is displayed first.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);
    }

    function remove() {
      return Registry::get('Db')->exec('delete from :table_configuration where configuration_key in ("' . implode('", "', $this->keys()) . '")');
    }

    function keys() {
      return array('MODULE_CONTENT_ACCOUNT_SET_PASSWORD_STATUS', 'MODULE_CONTENT_ACCOUNT_SET_PASSWORD_ALLOW_PASSWORD', 'MODULE_CONTENT_ACCOUNT_SET_PASSWORD_SORT_ORDER');
    }
  }
?>
