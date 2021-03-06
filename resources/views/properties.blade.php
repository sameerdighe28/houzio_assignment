<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/chartist/chartist.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.markercluster.css" rel="stylesheet" type="text/css">
    <link href="assets/css/leaflet.markercluster.default.css" rel="stylesheet" type="text/css">    
    <link href="assets/css/villareal-blue.css" rel="stylesheet" type="text/css" id="css-primary">
	<link href="assets/css/overwrite-home.css" rel="stylesheet" type="text/css" id="css-primary">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
	
    <title>Houzeo - Properties Map</title>
	
	<script type="text/javascript">

</script>
</head>

<body class="">
    <div class="page-wrapper">
	    <div class="header-wrapper">
            <div class="header header-small">
                <div class="header-inner">
                    <div class="container-fluid">
                        <div class="header-top">
                            <div class="header-top-inner">
                                <span class="header-logo-text"><a class="header-logo" href="index.html"> <img src="assets/hou-imgs/houzeologo.png" alt="HOUZEO LOGO"> </a></span>
                                <!-- /.header-logo -->

                                <a class="header-action" href="properties-submit.html">
                                    <i class="fa fa-upload"></i> <span>Upload Property</span>
                                </a><!-- /.header-action -->

						



											
					        </div><!-- /.header-top-inner -->
				        </div><!-- /.header-top -->
			        </div><!-- /.container-fluid -->
		        </div><!-- /.header-inner -->
	        </div><!-- /.header -->
        </div><!-- /.header-wrapper-->    	
    

    <div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	
	            <div class="content">
				    <div class="row map-filter-nav">
				        <div class="filter filter-gray push-bottom">
                            <form method="get" action="?">
                                <div class="row">
                                    <div class="col-md-2">
                                            <div class="input-group filter-search">
                                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                <input placeholder="Address, City or Zip" class="form-control" type="text">
                                            </div>
                                    </div><!-- /.col-* -->

                                    <div class="col-md-2">
                                        <div class="form-group filter-select">
                                            <select class="form-control">
                                                <option>Select Property Type</option>
                                                <option>Apartment</option>
                                                <option>Independent House / Villa</option>
                                                <option>Independent Floor</option>
                                                <option>Studio</option>
                                                <option>Duplex</option>
                                                <option>Penthouse</option>
                                                <option>Row House</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-* -->

                                    <div class="col-md-6">
                                        <div class="collapse navbar-toggleable-sm filter-price">
                                            <ul class="nav nav-pills nav-primary filter-nav">
                                                <li class="nav-item nav-item-parent no-right-margin">
                                                <label class="control-label float-left padding-top-10px font-size14px font-weight800">Price</label>
                                                        <div class="control-label col-lg-5 col-md-5 no-right-padding">
                                                            <div class="input-group float-right">
                                                                <input type="text" name="city" class="form-control" list="minprice" placeholder="$ Min" autocomplete="off" />
                                                            </div>
                                                            <datalist id="minprice" class="filter-price-datalist">
                                                                <option value="$50,000" />
                                                                <option value="$75,000" />
                                                                <option value="$100,000" />
                                                                <option value="$125,000" />
                                                                <option value="$150,000" />
                                                                <option value="$175,000" />
                                                                <option value="$200,000" />
                                                                <option value="$225,000" />
                                                                <option value="$250,000" />
                                                                <option value="$275,000" />
                                                                <option value="$300,000" />
                                                                <option value="$350,000" />
                                                                <option value="$400,000" />
                                                                <option value="$450,000" />
                                                                <option value="$500,000" />
                                                                <option value="$500,000 +" />
                                                            </datalist>
                                                        </div>
                                                        <div class="control-label col-lg-5 col-md-5 no-left-padding no-right-padding">	
                                                            <div class="input-group float-right">
                                                                <input type="text" name="maxprice" class="form-control" list="maxprice" placeholder="$ Max" autocomplete="off"/>
                                                            </div>
                                                            <datalist id="maxprice">
                                                                <option value="$50,000" />
                                                                <option value="$75,000" />
                                                                <option value="$100,000" />
                                                                <option value="$125,000" />
                                                                <option value="$150,000" />
                                                                <option value="$175,000" />
                                                                <option value="$200,000" />
                                                                <option value="$225,000" />
                                                                <option value="$250,000" />
                                                                <option value="$275,000" />
                                                                <option value="$300,000" />
                                                                <option value="$350,000" />
                                                                <option value="$400,000" />
                                                                <option value="$450,000" />
                                                                <option value="$500,000" />
                                                                <option value="$500,000 +" />
                                                            </datalist>
                                                    </div>
                                                </li>
                                                <li class="nav-item nav-item-parent	more-filter">
                                                    <div class="col-md-12">
                                                        <div class="form-group filter-select">
                                                            <select class="form-control">
                                                                <option>Agent Commission</option>
                                                                <option>1% and above</option>
                                                                <option>1.5% and above</option>
                                                                <option>2% and above</option>
                                                                <option>2.5% and above</option>
                                                                <option>3% and above</option>
                                                            </select>
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-* -->
                                                </li>
                                                <li class="nav-item nav-item-parent	more-filter">
                                                    <div class="col-md-12 no-padding">
                                                        <div class="form-group filter-select">
                                                            <select class="form-control">
                                                                <option>Beds</option>
                                                                <option>0+ Beds</option>
                                                                        <option>1+ Beds</option>
                                                                        <option>2+ Beds</option>
                                                                        <option>3+ Beds</option>
                                                                        <option>4+ Beds</option>
                                                                        <option>5+ Beds</option>
                                                                        <option>6+ Beds</option>
                                                            </select>
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-* -->
                                                </li>
                                                <li class="nav-item nav-item-parent	more-filter">
                                                    <label class="control-label float-left padding-top-10px font-size14px font-weight800">More Filters <i class="fa fa-caret-down margin-left-5px" aria-hidden="true"></i></label>										

                                                    <ul class="sub-menu">
                                                        <li>
                                                            
                                                                <div class="form-group col-md-12 filter-select no-bottom-margin filter-select-nav border-bottom-1px-solid border-color1">
                                                                    <select class="form-control no-padding">
                                                                        <option>Bathrooms</option>
                                                                        <option>0+ Beds</option>
                                                                        <option>1+ Beds</option>
                                                                        <option>2+ Beds</option>
                                                                        <option>3+ Beds</option>
                                                                        <option>4+ Beds</option>
                                                                        <option>5+ Beds</option>
                                                                        <option>6+ Beds</option>
                                                                    </select>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            
                                                            
                                                        </li>
                                                        <li class="border-bottom-1px-solid border-color1">
                                                            <div class="form-group col-lg-12 col-md-12 required required-marker">
                                                                <label class="control-label col-lg-4 col-md-4 no-padding margin-top-15px">Square Feet</label>
                                                                <div class="col-lg-7 col-md-7 no-padding float-right">
                                                                <div class="input-group col-lg-5 col-md-5 no-padding">
                                                                    <input type="text" class="form-control" name="minsSq" placeholder="Min" id="minsq"/>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2 no-padding text-align-center padding-top-10px">
                                                                    -
                                                                </div>
                                                                <div class="input-group col-lg-5 col-md-5 no-padding">
                                                                    <input type="text" class="form-control" name="maxSq" placeholder="Max" id="maxsq"/>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-group col-md-12 filter-select no-bottom-margin filter-select-nav border-bottom-1px-solid border-color1">
                                                            <label class="control-label col-lg-4 col-md-4 no-padding margin-top-15px">Lot Size</label>
                                                                <div class="col-lg-7 col-md-7 no-padding float-right">
                                                                    <select class="form-control no-padding">
                                                                        <option>Any</option>
                                                                        <option>2,000+ sqft</option>
                                                                        <option>3,000+ sqft</option>
                                                                        <option>4,000+ sqft</option>
                                                                        <option>5,000+ sqft</option>
                                                                        <option>7,500+ sqft</option>
                                                                        <option>.25+ acre / 10,890+ sqft</option>
                                                                        <option>.5+ acre / 21,780+ sqft</option>
                                                                        <option>1+ acre</option>
                                                                        <option>2+ acres</option>
                                                                        <option>5+ acres</option>
                                                                        <option>10+ acres</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                        </li>
                                                        <li class="border-bottom-1px-solid border-color1">
                                                            <div class="form-group col-lg-12 col-md-12 required required-marker">
                                                                <label class="control-label col-lg-4 col-md-4 no-padding margin-top-15px">Year Built</label>
                                                                <div class="col-lg-7 col-md-7 no-padding float-right">
                                                                    <div class="input-group col-lg-5 col-md-5 no-padding">
                                                                        <input type="text" class="form-control" name="minsSq" placeholder="Min" id="minsq"/>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-2 no-padding text-align-center padding-top-10px">
                                                                        -
                                                                    </div>
                                                                    <div class="input-group col-lg-5 col-md-5 no-padding">
                                                                        <input type="text" class="form-control" name="maxSq" placeholder="Max" id="maxsq"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-group col-md-12 filter-select no-bottom-margin filter-select-nav border-bottom-1px-solid border-color1">
                                                            <label class="control-label col-lg-4 col-md-4 no-padding margin-top-15px">Max HOA</label>
                                                                <div class="col-lg-7 col-md-7 no-padding float-right">
                                                                    <select class="form-control no-padding">
                                                                        <option>Any</option>
                                                                        <option>$100 / month</option>
                                                                        <option>$200 / month</option>
                                                                        <option>$300 / month</option>
                                                                        <option>$400 / month</option>
                                                                        <option>$500 / month</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-group col-md-12 filter-select no-bottom-margin filter-select-nav border-bottom-1px-solid border-color1">
                                                            <label class="control-label col-lg-4 col-md-4 no-padding margin-top-15px">Days on Houzeo</label>
                                                            <div class="col-lg-7 col-md-7 no-padding float-right">
                                                                    <select class="form-control no-padding">
                                                                        <option>Any</option>
                                                                        <option>1 Day</option>
                                                                        <option>7 Days</option>
                                                                        <option>14 Days</option>
                                                                        <option>30 Days</option>
                                                                        <option>90 Days</option>
                                                                        <option>6 Months</option>
                                                                        <option>12 Months</option>
                                                                        <option>24 Months</option>
                                                                        <option>36 Months</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                        </li>
                                                        <div class="form-group-btn">
                                                            <button type="submit" class="btn btn-primary btn-block blue-btn">Apply</button>
                                                        </div>
                                                    </ul>		
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.col-* -->
                                    
                                    

                                    <div class="col-md-2">
                                        <div class="form-group-btn">
                                            <button type="submit" class="btn btn-primary btn-block blue-btn">Filter</button>
                                        </div><!-- /.form-group -->		
                                    </div><!-- /.col-* -->			
                                </div><!-- /.row -->
                                
                            </form>
			            </div><!-- /.filter -->
		            </div>
	                <div class="container-fluid fullwidth-wrapper map-and-property-holder">
	                    <div class="row">
	                        <div class="col-lg-4 col-md-6 mapProperty-holder">
                                @foreach($list as $key => $item)		
		                        <div class="row">
			                        <div class="col-sm-12">
					                    <div class="listing-box">
                                            <div class="listing-box-image" style="background-image: url('assets/img/tmp/tmp-5.jpg')">
                                                <span class="listing-box-image-links listing-box-over"> 
                                                    <a href="#"><i class="fa fa-eye"></i> <span>View Property Dashboard</span></a> 
                                                    <a href="#"><i class="fa fa-list"></i> <span>View Listing</span></a> 
                                                </span>		
                                            </div><!-- /.listing-box-image -->

                                            <div class="listing-box-title">
                                                <h2><a href="properties-detail-standard.html">{{$item->street}}</a></h2>
                                                <h3>$ 40.000</h3>
                                            </div><!-- /.listing-box-title -->

                                            <div class="listing-box-content">
                                                <dl>
                                                    <dt>Type</dt><dd>House</dd>
                                                    <dt>Location</dt><dd>{{$item->city}}</dd>
                                                    <dt>State </dt><dd>{{$item->state}}</dd>
                                                    <dt>Area</dt><dd>180 sqft</dd>
                                                </dl>
                                            </div><!-- /.listing-box-cotntent -->
                                        </div><!-- /.listing-box -->
				                    </div><!-- /.col-* -->
			
		                        </div>
                                @endforeach
		                    </div><!-- /.col-* -->

                            <div class="col-lg-8 col-md-6 map-holder">
                                <div id="map-leaflet" class="full"></div>
                            </div>
			
			
	                    </div><!-- /.row -->
                    </div><!-- /.container -->
	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->
</div><!-- /.page-wrapper -->


<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyASlnVdH_6j-XibxbQoeV82oZQImV1a_Vs" type="text/javascript"></script>
<script>
   var db_markers = <?php echo json_encode($list); ?>;
</script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.ezmark.min.js"></script>
<script type="text/javascript" src="assets/js/tether.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="assets/js/leaflet.js"></script>
<script type="text/javascript" src="assets/js/leaflet.markercluster.js"></script>
<script type="text/javascript" src="assets/libraries/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/libraries/chartist/chartist.min.js"></script>
<script type="text/javascript" src="assets/js/scrollPosStyler.js"></script>
<script type="text/javascript" src="assets/js/villareal.js"></script>

</body>
</html>