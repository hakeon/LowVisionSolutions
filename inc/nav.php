<nav>
	<ul class="nav-menu">
		<li class="nav-item">
			<a href="?movie">Movies</a>
			<div class="sub-nav">
				<ul class="sub-nav-group">
					<li><a href="?movie&genre=0">Action &amp; Adventure</a></li>
					<li><a href="?movie&genre=2">Children &amp; Family</a></li>
					<li>&#8230;</li>
				</ul>
				<ul class="sub-nav-group">
					<li><a href="?movie&genre=7">Dramas</a></li>
					<li><a href="?movie&genre=9">Foreign</a></li>
					<li>&#8230;</li>
				</ul>
				<ul class="sub-nav-group">
					<li><a href="?movie&genre=14">Musicals</a></li>
					<li><a href="?movie&genre=15">Romance</a></li>
					<li>&#8230;</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a href="?tv">TV Shows</a>
			<div class="sub-nav">
				<ul class="sub-nav-group">
					<li><a href="?tv&genre=20">Classic TV</a></li>
					<li><a href="?tv&genre=21">Crime TV</a></li>
					<li>&#8230;</li>
				</ul>
				<ul class="sub-nav-group">
					<li><a href="?tv&genre=27">Reality TV</a></li>
					<li><a href="?tv&genre=30">TV Action</a></li>
					<li>&#8230;</li>
				</ul>
				<ul class="sub-nav-group">
					<li><a href="?tv&genre=33">TV Dramas</a></li>
					<li><a href="?tv&genre=34">TV Horror</a></li>
					<li>&#8230;</li>
				</ul>
			</div>
		</li>
	</ul>
</nav>
<script>
	$("nav:first").accessibleMegaMenu({
            /* prefix for generated unique id attributes, which are required 
               to indicate aria-owns, aria-controls and aria-labelledby */
		uuidPrefix: "accessible-megamenu",

            /* css class used to define the megamenu styling */
		menuClass: "nav-menu",

            /* css class for a top-level navigation item in the megamenu */
		topNavItemClass: "nav-item",

            /* css class for a megamenu panel */
		panelClass: "sub-nav",

            /* css class for a group of items within a megamenu panel */
		panelGroupClass: "sub-nav-group",

            /* css class for the hover state */
		hoverClass: "hover",

            /* css class for the focus state */
		focusClass: "focus",

            /* css class for the open state */
		openClass: "open"
	});
</script>