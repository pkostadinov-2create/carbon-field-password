<?php

namespace Carbon_Fields\Field;

class Password_Field extends Text_Field {
	/**
	 * Underscore template of this field.
	 */
	public function template() {
		?>
		<input id="{{{ id }}}" type="password" name="{{{ name }}}" value="{{ value }}" class="regular-text" />
		<?php
	}
}
