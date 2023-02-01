<?php

  /*
    Location rule to for Dashboard
    So a field group in admin only or on front end only
  */

	add_action('acf/location/rule_types', 'acf_add_special_rule_type');
	function acf_add_special_rule_type($choices) {
		if (!isset($choices['Special'])) {
			$choices['Special'] = array();
		}
		if (!isset($choices['Special']['Dashboard'])) {
			$choices['Special']['Dashboard'] = 'Dashboard';
		}
		return $choices;
	}
	add_filter('acf/location/rule_values/Dashboard', 'acf_location_rules_values_special_Dashboard');
	function acf_location_rules_values_special_Dashboard($choices) {
		$choices['True'] = 'True';
		$choices['False'] = 'False';
		return $choices;
	}
	add_filter('acf/location/rule_match/Dashboard', 'acf_location_rules_match_Dashboard', 10, 3);
	function acf_location_rules_match_Dashboard($match, $rule, $options) {
		if ($rule['param'] != 'Dashboard') {
			return $match;
		}
		if ($rule['operator'] == '==') {
			$match = Dashboard();
		} elseif ($rule['operator'] == '!=') {
			$match = !Dashboard();
		}
		if ($rule['value'] != 'True') {
			$match = !$match;
		}
		return $match;
	}

?>
