<div class="section">
	<p>Icons:</p>
	<div class="icons">
		<?php
		$icons = array( 'arrow-down', 'arrow-left', 'arrow-right', 'arrow-up', 'burger', 'checkbox', 'clipboard', 'design', 'down', 'error', 'facebook', 'faq', 'fiftyoff', 'frown', 'header-footer', 'icon-envato', 'instagram', 'invoice', 'left', 'lifetime', 'pages', 'pay', 'plugins', 'remove', 'right', 'safe-lock', 'safe-white', 'safe', 'search', 'smile', 'social', 'start', 'success', 'support', 'twitter', 'up', 'view' );
		foreach ( $icons as $icon ) {
			echo '<div class="icon icon-' . $icon . '"></div>';
		}
		?>
	</div>
	<div class="icons brand-color">
		<?php
		$icons = array( 'arrow-down', 'arrow-left', 'arrow-right', 'arrow-up', 'burger', 'checkbox', 'clipboard', 'design', 'down', 'error', 'facebook', 'faq', 'fiftyoff', 'frown', 'header-footer', 'icon-envato', 'instagram', 'invoice', 'left', 'lifetime', 'pages', 'pay', 'plugins', 'remove', 'right', 'safe-lock', 'safe-white', 'safe', 'search', 'smile', 'social', 'start', 'success', 'support', 'twitter', 'up', 'view' );
		foreach ( $icons as $icon ) {
			echo '<div class="icon icon-' . $icon . '"></div>';
		}
		?>
	</div>
	<p>Counters:</p>
	<div>
		<div class="pill  pill--round">9</div>
		<div class="pill">123</div>
	</div>

	<div class="section"></div>
	<div class="section  brand-background-color">
		<div class="pill  pill--invert  pill--round">9</div>
		<div class="pill  pill--invert">123</div>
		<div class="section"></div>
	</div>

	<p>Labels:</p>
	<div>
		<?php
		$values = array( 'Groceries', 'Fast Food', 'Cinema', 'Lifestyle', 'Fake news', 'Spanac', 'Friends with Benefits' );
		for ($i = 1; $i < 30; $i++):
			$text = $values[ array_rand( $values ) ];
			?>
			<div class="label"><?php echo $text; ?></div>
		<?php endfor; ?>
	</div>
	<div class="section"></div>
	<div class="section  brand-background-color">
		<?php
		$values = array( 'Groceries', 'Fast Food', 'Cinema', 'Lifestyle', 'Fake news', 'Spanac', 'Friends with Benefits' );
		for ($i = 1; $i < 30; $i++):
			$text = $values[ array_rand( $values ) ];
			?>
			<div class="label  label--invert"><?php echo $text; ?></div>
		<?php endfor; ?>
		<div class="section"></div>
	</div>

	<p>Idle & Empty:</p>
	<div class="field">
		<label for="">Text</label>
		<input type="text">
	</div>
	<p>Placeholder:</p>
	<div class="field">
		<label for="">Text</label>
		<input type="text" placeholder="Placeholder">
	</div>
	<p>Textarea:</p>
	<div class="field">
		<label for="">Text</label>
		<textarea placeholder="Placeholder"></textarea>
	</div>
	<p>Error:</p>
	<div class="field field-has-error">
		<label for="">Text</label>
		<input type="text" required>
		<div class="error">Please insert a proper email address</div>
	</div>
	<p>Select:</p>
	<div class="field">
		<select name="" id="">
			<option value="0">Select One...</option>
		</select>
	</div>
	<p>Radio:</p>
	<div class="radio">
		<input type="radio" id="radio1" name="radio" checked>
		<label for="radio1">Option 1</label>
	</div>
	<div class="radio">
		<input type="radio" id="radio2" name="radio">
		<label for="radio2">Option 2</label>
	</div>
	<div class="radio disabled">
		<input type="radio" id="radio3" name="radio" disabled>
		<label for="radio3">Option 3</label>
	</div>
	<p>Checkboxes:</p>
	<div class="checkbox">
		<input type="checkbox" id="checkbox1" checked>
		<label for="checkbox1">Option 1</label>
	</div>
	<div class="checkbox">
		<input type="checkbox" id="checkbox2">
		<label for="checkbox2">Option 2</label>
	</div>
	<div class="checkbox disabled">
		<input type="checkbox" id="checkbox3" disabled>
		<label for="checkbox3">Option 3</label>
	</div>
</div>


<div class="section section-inline">
	<div class="swatch brand-background-color"></div>
	<div class="swatch background-pink"></div>
	<div class="swatch background-orange"></div>
	<div class="swatch background-purple"></div>
</div>

<div class="section section-inline">
	<div class="swatch brand-background-color-dark"></div>
	<div class="swatch background-pink-dark"></div>
	<div class="swatch background-orange-dark"></div>
	<div class="swatch background-purple-dark"></div>
</div>

<div class="section section-inline">
	<div class="swatch brand-background-color-light"></div>
	<div class="swatch background-pink-light"></div>
	<div class="swatch background-orange-light"></div>
	<div class="swatch background-purple-light"></div>
</div>

<div class="section section-inline">
	<div class="swatch background-black"></div>
	<div class="swatch background-gray-dark"></div>
	<div class="swatch background-gray"></div>
	<div class="swatch background-gray-light"></div>
</div>

<div class="section section-inline">
	<div class="c-btn  c-btn--text">Text button</div>
	<input class="c-btn  c-btn--text" type="button" value="Text button">
	<button class="c-btn  c-btn--text"  disabled>Text button</button>
</div>

<div class="section section-inline">
	<div class="c-btn  c-btn--primary">Primary</div>
	<input class="c-btn  c-btn--primary" type="button" value="Primary">
	<button class="c-btn  c-btn--primary"  disabled>Primary</button>
</div>

<div class="section section-inline">
	<div class="c-btn  c-btn--secondary">Secondary</div>
	<input class="c-btn  c-btn--secondary" type="button" value="Secondary">
	<button class="c-btn  c-btn--secondary"  disabled>Secondary</button>
</div>

<div class="section section-inline">
	<div class="c-btn  c-btn--primary  c-btn--small">Small</div>
	<input class="c-btn  c-btn--primary" type="button" value="Secondary">
	<button class="c-btn  c-btn--primary  c-btn--large">Large Button</button>
</div>

<div class="section"></div>

<div class="section  brand-background-color">
	<div class="section-inline">
		<div class="c-btn  c-btn--text  c-btn--invert">Text button</div>
		<div class="c-btn  c-btn--primary  c-btn--invert">Primary</div>
		<div class="c-btn  c-btn--secondary  c-btn--invert">Secondary</div>
		<div class="c-btn  c-btn--tertiary">Secondary</div>
	</div>
	<div class="section"></div>
</div>
