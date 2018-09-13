<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<div id="dropdown-1" class="dropdown dropdown-processed">
	<a class="dropdown-link" href="#">Options</a>
	<div class="dropdown-container" style="display: none;">
		<ul>
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
		</ul>
	</div>
</div>

<div id="dropdown-2" class="dropdown dropdown-processed">
	<a class="dropdown-link" href="#">Options</a>
	<div class="dropdown-container" style="display: none;">
		<ul>
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
		</ul>
	</div>
</div>

<div id="dropdown-3" class="dropdown dropdown-processed">
	<a class="dropdown-link" href="#">Options</a>
	<div class="dropdown-container" style="display: none;">
		<ul>
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
		</ul>
	</div>
</div>

<script>
	$(document).ready(function(){

		$('div.dropdown').each(function() {
			var $dropdown = $(this);

			$("a.dropdown-link", $dropdown).click(function(e) {
				e.preventDefault();
				$div = $("div.dropdown-container", $dropdown);
				$div.toggle();
				$("div.dropdown-container").not($div).hide();
				return false;
			});

		});

		$('html').click(function(){
			$("div.dropdown-container").hide();
		});

	});
</script>