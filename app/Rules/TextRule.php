<?php

namespace App\Rules;

use App\Traits\Framework\DisplayErrors;

class TextRule {

	use DisplayErrors;

	public function __construct() {

	}

	public function passes(): TextRule {
		$this->validateRules([
			'required' => [
				['text']
			],
			'lengthMin' => [
				['text', 1]
			]
		]);

		return $this;
	}

}