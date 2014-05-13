<nav class="nameplate">
	<ul class="nav-menu">
		<li class="nav-item">
			<a href="index.php">Home Page</a>
		</li>
		<li class="nav-item">
			<a href="inc/liveWithLV.php">Living With Low Vision</a>
			<div class="sub-nav">
				<ul class="sub-nav-group">
					<li><a href="inc/lifeAdaptation.php">Home &amp; Lifestyle Adaptation</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/workplace.php">The Workplace</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/products.php">Helpful Products</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/recreation.php">Recreation &amp; Leisure</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/support.php">Support Groups</a></li></ul>
				<ul class="sub-nav-group">	
					<li><a href="inc/family.php">For Friends &amp; Family</a></li></ul>
			</div>
		</li>
		<li class="nav-item">
			<a href="inc/typesLV.php">Types of Low Vision</a>
			<div class="sub-nav">
				<ul class="sub-nav-group">
					<li><a href="inc/AMD.php">Age Related Macular Degeneration (AMD)</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/cataracts.php">Cataracts</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/retinopathy.php">Diabetic Retinopathy</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/glaucoma.php">Glaucoma</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/retinitis.php">Retinitis Pigmentosa</a></li></ul>
				<ul class="sub-nav-group">
					<li><a href="inc/glossary.php">Glossary</a></li></ul>
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