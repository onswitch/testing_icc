<?php use Roots\Sage\Titles; ?>
<div class="section article-list-filter">
  <div class="container">
	<div class="row">
	  <div class="col-xs-12 col-sm-6 blog-title"><?= Titles\title(); ?></div>
	  <div class="col-xs-12 col-sm-6 text-right article-listing-view-mode-control">View: 
		<button class="btn-grid active">Grid</button>
		<button class="btn-list">Boxed</button>
		<button class="btn-map">Map</button>
	  </div>
	</div>
  </div>
</div>

<div class="section article-list-filter border-top with-3-select">
  <div class="container">
	<div class="row">
	  <div class="col-xs-12 filter-select">
		<div class="select-wrap"><span class="text">Show</span>
		  <select class="bootstrap-select select-style-1 accomodation-select-1 search-select-picked">
			<option value="">All</option>
			<option value="1">Lorem ipsum dolor sit amet, consec</option>
			<option value="2">Lorem ipsum dolor sit amet, consec</option>
			<option value="3">Lorem ipsum dolor sit amet, consec</option>
		  </select>
		</div>
		<div class="select-wrap">
		  <select class="bootstrap-select select-style-1 accomodation-select-2 search-select-picked">
			<option value="">Availability</option>
			<option value="1">Lorem ipsum dolor</option>
			<option value="2">Lorem ipsum dolor</option>
			<option value="3">Lorem ipsum dolor</option>
		  </select>
		</div>
		<div class="select-wrap"><span class="text">Order by</span>
		  <select class="bootstrap-select select-style-1 accomodation-select-3 search-select-picked">
			<option value="">Name</option>
			<option value="1">Accomodation Type 1</option>
			<option value="2">Lorem ipsum dolor sit amet, consec</option>
			<option value="3">Lorem ipsum dolor sit amet, consec</option>
		  </select>
		</div>
		<button class="clear">Clear <span class="fa fa-refresh"></span></button>
	  </div>
	</div>
  </div>
</div>
            