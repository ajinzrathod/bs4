<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- This line is used 2 adjust views as per devices. If mobile than accordingly, if laptop thn like that -->
	<title>BOOTSTRAP 1</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font_4.css">
	<!-- Font_4.css is working till line 616. After that its not working. Neither the syntax of glyphicons are working in bootstrap_sir also. -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">
	.heretextbox{width: 20%;
	}
	.heresmall{font-weight: normal;line-height: 1;color: #999;
	}
	.herepre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px
	}
	.heretablesuccess{
		background-color:#dff0d8;
	}
	.heretableinfo{
		background-color:#d9edf7;
	}
	.heretablewarning{
		background-color:#fcf8e3;
	}
	.heretabledanger{
		background-color:#f2dede;
	}
	.heretableactive{
		background-color:#f5f5f5;
	}
	.hereimagecircle{
		border-radius:50%;
	}
	.herebgchange{
		background-color: #c5bbbb;
	}
	.hereimagerounded{
		border-radius:18px;
	}
	.herecaption{
		padding-top:8px;
		padding-bottom:8px;
		color:#777;
		text-align:left;
		padding:9px;
	}
	.herepageheader{
		padding-bottom:9px;
		margin:40px 0 20px;
		border-bottom:1px solid #eee;
	}
	.well{
		min-height:20px;
		padding:19px;
		margin-bottom:20px;
		background-color:#f5f5f5;
		border:1px solid #e3e3e3;
		border-radius:4px;
		-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);
		box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}
		.well blockquote{
			border-color:#ddd;
			border-color:rgba(0,0,0,.15)
		}
		.well-lg{padding:24px;border-radius:6px}
		.well-sm{padding:9px;border-radius:3px}
	</style>
</head>
<body>
	<br>
	<div class="container">
		<h2 id="climbup">HELLO WORLD</h2>	
		<a href="#jumpdown">
			<font color="red">
				<span class="glyphicon glyphicon-chevron-down"></span></p>
			</font>
		</a>
		<div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
			}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

		<center><h4>
			<a target="_blank" href="https://www.w3schools.com/bootstrap4/bootstrap_buttons.asp">https://www.w3schools.com/bootstrap4/bootstrap_buttons.asp</a></h4><!--  Dont Know why but _blank is not good for webistes with login and all-->
			<a target="_blank" href="tables.php">For Tables. Refer this</a></h4>
		</center>

		Simple Textbox<br><input type="textbox" name="">
		Heading are from H1 to H6 in Html
		<br><br>Internal class <b>heretextbox</b> is used below 		
		<div class="form-group">
			<label for="usr">Name:</label>
			<input type="text" class="form-control heretextbox" id="">
		</div>

		<div class="form-group">
			<label for="usr">Name:</label>
			<input type="text" class="form-control" id="">
		</div>

		<div class="form-group">
			<label for="comment">Comment:</label>
			<textarea class="form-control" rows="5" id=""></textarea>
		</div>
		<b>Options</b>
		<div class="checkbox">
			<label><input type="checkbox" value="">Option 1</label>
		</div>
		<div class="checkbox disabled">
			<label style="cursor: not-allowed;"><input type="checkbox" value="" disabled  style="cursor: not-allowed;">Option 2</label>
		</div>

		<b>Use the .checkbox-inline class if you want the checkboxes to appear on the same line:</b>
		<br>
		<label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
		<label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
		<label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
		<br>

		<b>Options</b>
		<div class="radio">
			<label><input type="radio" name="optradio" checked>Option 1</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio">Option 2</label>
		</div>
		<div class="radio disabled">
			<label style="cursor: not-allowed;"><input type="radio" name="optradio" disabled style="cursor: not-allowed;">Option 2</label>
		</div>

		<b>Use the .radio-inline class if you want the radio buttons to appear on the same line: label class="radio-inline"></b>
		<br>
		<input type="radio" name="optradio" checked>Option 1</label>
		<label class="radio-inline"><input type="radio" name="optradio">Option 2</label>
		<label class="radio-inline"><input type="radio" name="optradio">Option 3</label>
		<br>

		<div class="form-group">
			<label for="sel1"><b>Select list:</b></label>
			<select class="form-control" id="">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
		</div>

		<div class="form-group">
			<label for="sel2">Multiple Select list:</label>
			<select multiple class="form-control" id="">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
			</select>
		</div>

		<br>
		<button type="button" class="btn">Basic</button>
		<a href="#" class="btn  btn-primary btn-bg">Primary</a>
		<a href="#" class="btn  btn-secondary btn-bg">Secondary</a>
		<a href="#" class="btn  btn-success btn-bg">Success</a>
		<a href="#" class="btn  btn-info btn-bg">Info</a>
		<input type="submit" class="btn btn-info" value="Submit Button">
		<a href="#" class="btn  btn-warning btn-bg">Warning</a>
		<a href="#" class="btn  btn-danger btn-bg">Danger</a>
		<a href="#" class="btn  btn-light btn-bg">Light</a>
		<a href="#" class="btn  btn-dark btn-bg">Dark</a>
		<br><br>
		<button type="button" class="btn btn-primary btn-lg">Large</button>
		<button type="button" class="btn btn-primary btn">Medium</button>    
		<button type="button" class="btn btn-primary btn-sm">Small</button>
		<br><br>
		<button type="button" class="btn btn-outline-primary">Primary</button>
		<button type="button" class="btn btn-outline-secondary">Secondary</button>
		<button type="button" class="btn btn-outline-success">Success</button>
		<button type="button" class="btn btn-outline-info">Info</button>
		<button type="button" class="btn btn-outline-warning">Warning</button>
		<button type="button" class="btn btn-outline-danger">Danger</button>
		<button type="button" class="btn btn-outline-dark">Dark</button>
		<button type="button" class="btn btn-outline-light text-dark">Light</button>
		<br><br>
		<button type="button" class="btn btn-primary btn-block">Full-Width Button</button>
		<br><br>
		<button type="button" class="btn btn-primary active">Active Primary</button>
		<button type="button" class="btn btn-primary" disabled>Disabled Primary</button>
		<a href="#" class="btn btn-primary disabled">Disabled Link</a>
	</div>
	<div class="container-fluid">

		The <b>.container</b> class provides a responsive fixed width container
		<br>The <b>.container-fluid</b> class provides a full width container, spanning the entire width of the viewport
		<br><b>Resize</b> the browser window to see the effect.

		<div class="row">
			<div class="col-sm-4">.col-sm-4</div>
			<div class="col-sm-4">.col-sm-4</div>
			<div class="col-sm-4">.col-sm-4</div>
		</div>

		<div class="row">
			<div class="col-md-4">.col-md-4</div>
			<div class="col-md-4">.col-md-4</div>
			<div class="col-md-4">.col-md-4</div>
		</div>

		<div class="row">
			<div class="col-lg-4">.col-lg-4</div>
			<div class="col-lg-4">.col-lg-4</div>
			<div class="col-lg-4">.col-lg-4</div>
		</div>

		<div class="row">
			<div class="col-xl-4">.col-xl-4</div>
			<div class="col-xl-4">.col-xl-4</div>
			<div class="col-xl-4">.col-xl-4</div>
		</div>
	</div>

	<div class="container">
		<p>The small element is used to create a lighter, secondary text in any heading:</p>       
		internal class <b>heresmall</b> is used below 
		<h3>h3 heading <small class="heresmall">secondary text</small></h3>
		<h4>h4 heading <small class="heresmall">secondary text</small></h4>
		<h5>h5 heading <small  class="heresmall">secondary text</small></h5>
		<br>

		Use the mark element to <mark>highlight1</mark>
		<br><mark style="background-color: #fff5d3;">highlight2</mark>
		<br><mark style="background-color: #FFECD1">highlight3</mark>
		<br><br>

		<b><abbr title="World Health Organization">WHO</abbr> was founded in 1948</b>(Try to keep pointer on the word WHO and see the full-form)
		<br><br>

		<h3>Blockquotes</h3>
		<p>The blockquote element is used to present content from another source. Writing like this suggests that content is from other source</p>
		<blockquote class="blockquote" style="padding: 10px 20px;
		margin: 0 0 20px;
		font-size: 17.5px;
		border-left: 5px solid #eee;">
		<p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
		<footer class="blockquote-footer">From WWF's website</footer></blockquote>
		End of Blockquotes
	</div>
	<br>

	<div class="container-fluid">
		<b>The dl element indicates a description list:</b>
		<br>In Dt 1st letter is Capital. In dd 1st letter is small
		<dl>
			<dt>Coffee</dt>
			<dd>- black hot drink</dd>
			<dd>- cappuccino</dd>
			<dt>Milk</dt>
			<dd>- white cold drink</dd>
			<dd>- oreo milk shake</dd>
		</dl> 

		<b>Snippet</b> <code style="font-family:monospace,monospace;
		font-size:1em;
		padding:2px 4px;
		font-size:90%;
		color:#c7254e;
		background-color:#f9f2f4;
		border-radius:4px">span</code>

		<br><b>To indicate input that is typically entered via the keyboard, use the kbd element:</b>
		<p>Use <kbd>ctrl + o</kbd> to open the Open dialog box.</p>
		<p>Use <kbd>ctrl + p</kbd> to open the Print dialog box.</p>
	</div>

	<div class="container">
		<b><p>Use the contextual classes to provide "meaning through colors":</p></b>
		<p class="text-muted">This text is muted.</p>
		<p class="text-primary">This text is important.</p>
		<p class="text-success">This text indicates success.</p>
		<p class="text-info">This text represents some information.</p>
		<p class="text-warning">This text represents a warning.</p>
		<p class="text-danger">This text represents danger.</p>
		<p class="text-secondary">Secondary text.</p>
		<p class="text-dark">This text is dark grey.</p>
		<p class="text-body">Default body color (often black).</p>
		<p class="text-light" style="background-color: black;">This text is light grey.</p>
		<p class="text-white" style="background-color: black;">This text is white.</p>
		<br>
		<a href="#" class="text-muted">Muted link.</a>
		<a href="#" class="text-primary">Primary link.</a>
		<a href="#" class="text-success">Success link.</a>
		<a href="#" class="text-info">Info link.</a>
		<a href="#" class="text-warning">Warning link.</a>
		<a href="#" class="text-danger">Danger link.</a>
		<a href="#" class="text-secondary">Secondary link.</a>
		<a href="#" class="text-dark">Dark grey link.</a>
		<a href="#" class="text-body">Body/black link.</a>
		<a href="#" style="background-color: black;" class="text-light">Light grey link.</a>
		<br><br>
		<h4>Opacity Text Colors</h4>
		<p>Add 50% opacity for black or white text with the .text-black-50 or .text-white-50 classes:</p>
		<p style="color: rgba(0,0,0,.5)!important;">Black text with 50% opacity on white background</p>
		<p class="bg-dark" style="color: rgba(255,255,255,.5)!important;">White text with 50% opacity on black background</p>
		<br>
		<b><p>Use the contextual background classes to provide "meaning through colors":</p></b>
		<p class="bg-primary">This text is important.</p>
		<p class="bg-success">This text indicates success.</p>
		<p class="bg-info">This text represents some information.</p>
		<p class="bg-warning">This text represents a warning.</p>
		<p class="bg-danger">This text represents danger.</p>
		<p class="bg-secondary text-white">Secondary background color.</p>
		<p class="bg-dark text-white">Dark grey background color.</p>
		<p class="bg-light text-dark">Light grey background color.</p>
	</div>

	<div class="container-fluid">
		<h2>Typography</h2>
		<blockquote style="padding: 10px 20px;
		margin: 0 0 20px;
		font-size: 17.5px;
		border-left: 5px solid #eee;">
		<p>Use the .lead class to make a paragraph "stand out":</p>
		<p class="lead">This is the main leading paragraph</p>
		<p>This is a regular paragraph.</p>
		<p>This is a regular paragraph.</p>
		<p class="small">This paragraph is smaller.</p>
		<p>This is a regular paragraph.</p>
		<p class="text-right">Right-aligned text.</p>      
		<p class="text-left">Left-aligned text.</p>
		<p class="text-center">Center-aligned text.</p>
		<p class="text-justify">Justified text. Justified text. Justified text.</p>      
		<p class="text-nowrap">No wrap text. No wrap text. No wrap text. No wrap text.</p>
		Try to <strong>Resize</strong> the browser window to see the behaviour of <b>justify and nowrap</b></p>
		<p class="text-lowercase">Lowercased text.</p>
		<p class="text-uppercase">Uppercased text.</p>      
		<p class="text-capitalize">Capitalized text.</p>     
	</blockquote>
</div>

<div class="container">
	<b><p>For multiple lines of code, use the pre element:</p></b>
	<p>Aam adu tedhu text jaani ne lakhyu che. Coz pre element preserves such text</p>
	<p>Use <b>herepre</b> class to use background in pre class as shown below</p> 
	<pre class="herepre">Text in a pre element
		is displayed in a fixed-width
		font, and it preserves
		both      spaces and
	line breaks.</pre>

	<p><b>If you add the .pre-scrollable class, the pre element gets a max-height of 340px and provides a y-axis scrollbar:</b></p>
	<pre class="pre-scrollable">Text in a pre element
		is displayed in a fixed-width
		font, and it preserves
		both      spaces and
	line breaks.</pre>
	<!-- <br> -->
	<pre class="pre-scrollable herepre">Text in a pre element
		is displayed in a fixed-width
		font, and it preserves
		both      spaces and
		line breaks.
		A
		b
		c
		d
		e
		f
		g
		h
		i
		j
		k
		k
		l
	s</pre>
</div>

<div class="container-fluid herebgchange">
	Internal Classes are used here.
	<img class="img-responsive" src="images/lights.jpg" alt="Lights" width="360" height="245"> 
	<img class="img-responsive img-thumbnail" src="images/lights.jpg" alt="Lights" width="360" height="245"> 
	<img class="img-responsive img-thumbnail hereimagecircle" src="images/lights.jpg" alt="Lights" width="360" height="245"> 
	<img class="img-responsive hereimagecircle" src="images/lights.jpg" alt="Lights" width="360" height="245">
	<img class="img-responsive hereimagerounded" src="images/lights.jpg" alt="Lights" width="360" height="245">

</div>
<br>

<div class="embed-responsive embed-responsive-4by3">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
</div>
<br>
<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY" width="50%"></iframe>
</div>
<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="lights.jpg" target="_blank">
					<img src="images/lights.jpg" alt="Lights" style="width:100%">
					<div class="caption herecaption">
						<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<br>

<div class="container">
	<a href="#climbup">
		<font color="red">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</font><font id="jumpdown">HELLO WORLD</font>
	</a>
</div>
<br>

<div class="container-fluid">
	<div class="jumbotron">
		<h3>Jumbotron</h3>      
		<p>A jumbotron indicates a big box for calling extra attention to some special content or information.</p>
		<p>A jumbotron is displayed as a grey box with rounded corners. It also enlarges the font sizes of the text inside it.</p>
		<p>Tip: Inside a jumbotron you can put nearly any valid HTML, including other Bootstrap elements/classes.</p>
	</div>
	<p>This is some text.</p>      
	<p>This is another text.</p>      
</div>

<div class="jumbotron">
	Place the jumbotron without the div class="container" if you want the jumbotron to extend to the screen edges    
</div>

<div class="container">
	<div class="page-header herepageheader">
		<h1>Example Page Header</h1>      
	</div>
	<p>This is some text.</p>
</div>

<div class="container-fluid">
	<b>Remove background color from style if not needed</b>
	<div class="well well-sm">Small Well</div>
	<div class="well">Normal Well</div>
	<div class="well well-lg">Large Well</div>    
	<br>

	<div class="alert alert-success">
		<strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
	<div class="alert alert-info">
		<strong>Info!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
	<div class="alert alert-warning">
		<strong>Warning!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
	<div class="alert alert-danger">
		<strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
	<div class="alert alert-primary">
		<strong>Primary!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
	<div class="alert alert-secondary">
		<strong>Secondary!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
	<div class="alert alert-dark">
		<strong>Dark!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>
	<div class="alert alert-light">
		<strong>Light!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>

	<div class="alert alert-success alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Success!</strong> This alert box could indicate a successful or positive action.
	</div>
	<div class="alert alert-info alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
	</div>
	<div class="alert alert-warning alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
	</div>
	<div class="alert alert-danger alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
	</div>
	<div class="alert alert-primary alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Primary!</strong> Indicates an important action.
	</div>
	<div class="alert alert-secondary alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Secondary!</strong> Indicates a slightly less important action.
	</div>
	<div class="alert alert-dark alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Dark!</strong> Dark grey alert.
	</div>
	<div class="alert alert-light alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Light!</strong> Light grey alert.
	</div>
</div>

<div class="container">
	<h2>Button Groups Sizes</h2>
	<p>Add class .btn-group-* to size all buttons in a button group.</p>
	<h3>Large Buttons:</h3>
	<div class="btn-group btn-group-lg">
		<button type="button" class="btn btn-primary">Apple</button>
		<button type="button" class="btn btn-primary">Samsung</button>
		<button type="button" class="btn btn-primary">Sony</button>
	</div>
	<h3>Default Buttons:</h3>
	<div class="btn-group">
		<button type="button" class="btn btn-primary">Apple</button>
		<button type="button" class="btn btn-primary">Samsung</button>
		<button type="button" class="btn btn-primary">Sony</button>
	</div>
	<h3>Small Buttons:</h3>
	<div class="btn-group btn-group-sm">
		<button type="button" class="btn btn-primary">Apple</button>
		<button type="button" class="btn btn-primary">Samsung</button>
		<button type="button" class="btn btn-primary">Sony</button>
	</div>
	<br><br>
	<div class="btn-group-vertical">
		<button type="button" class="btn btn-primary">Apple</button>
		<button type="button" class="btn btn-primary">Samsung</button>
		<button type="button" class="btn btn-primary">Sony</button>
	</div>

	<div class="btn-group">
		<button type="button" class="btn btn-primary">Apple</button>
		<button type="button" class="btn btn-primary">Samsung</button>
		<div class="btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Sony
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Tablet</a>
				<a class="dropdown-item" href="#">Smartphone</a>
			</div>
		</div>
	</div>

	<br>
	<h2><span class="badge badge-pill badge-primary">Primary</span></h2>
	<span class="badge badge-pill badge-secondary">Secondary</span>
	<span class="badge badge-pill badge-success">Success</span>
	<h5><span class="badge badge-pill badge-danger">Danger</span></h5>
	<span class="badge badge-pill badge-warning">Warning</span>
	<span class="badge badge-pill badge-info">Info</span>
	<span class="badge badge-pill badge-light">Light</span>
	<span class="badge badge-pill badge-dark">Dark</span>
	<button type="button" class="btn btn-danger">
		Notifications <span class="badge badge-light">7</span>
	</button>

</div>

<br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php
?>
