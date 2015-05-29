<?php
class ValidateBehavior extends ModelBehavior {

/**
 * Checks the value from the field, and another field value to ensure the values match
 * Returns true if match, false otherwise
 *
 * TO-DO - Allow fields outside the model to be checked, e.g. OtherModel.field
 *
 * @param  object $Model
 * @param  array $data
 * @param  string $matchField The field name to match with the value
 * @return boolean
 */
    public function matchFields($Model, $data, $matchField = null) {
    	$value = array_shift($data);

    	// if the value is blank, then pass the validation for "allowEmpty"
    	if (!$value) {
    		return true;
    	}

    	if (empty($Model->data[$Model->alias][$matchField])) {
    		return true;
    	}

    	if ($value === $Model->data[$Model->alias][$matchField]) {
    		return true;
    	}

    	return false;
    }
}