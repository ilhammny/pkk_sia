<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Atlantis Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">
<link href="{{ asset('assets/styles.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/prism.css') }}" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="light-blue2">
				<a href="../index.html" class="logo">
					<img src="../../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">
							<a href="../../examples/demo1" class="nav-link">
								Live Preview
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-info">
						<li class="nav-item">
							<a href="../index.html">
								<i class="fas fa-home"></i>
								<p>Introduction</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a href="../components/alerts.html">
								<span class="letter-icon">A</span>
								<p>Alerts</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/avatars.html">
								<span class="letter-icon">Av</span>
								<p>Avatars</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/badge.html">
								<span class="letter-icon">Ba</span>
								<p>Badge</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/breadcrumb.html">
								<span class="letter-icon">Bc</span>
								<p>Breadcrumb</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/buttons.html">
								<span class="letter-icon">Bt</span>
								<p>Buttons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/card.html">
								<span class="letter-icon">C</span>
								<p>Card</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/collapse.html">
								<span class="letter-icon">Co</span>
								<p>Collapse</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/colors.html">
								<span class="letter-icon">Cl</span>
								<p>Colors</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/dropdowns.html">
								<span class="letter-icon">D</span>
								<p>Dropdowns</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/forms.html">
								<span class="letter-icon">F</span>
								<p>Forms</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="../components/layoutsbackground.html">
							<span class="letter-icon">L</span>
							<p>Layouts Background</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="../components/loaders.html">
							<span class="letter-icon">Lo</span>
							<p>Loaders</p>
						</a>
					</li>
						<li class="nav-item">
							<a href="../components/modal.html">
								<span class="letter-icon">M</span>
								<p>Modal</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/navs.html">
								<span class="letter-icon">N</span>
								<p>Navs</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/navbar.html">
								<span class="letter-icon">Nb</span>
								<p>Navbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/pagination.html">
								<span class="letter-icon">Pa</span>
								<p>Pagination</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/popovers.html">
								<span class="letter-icon">Po</span>
								<p>Popovers</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/progress.html">
								<span class="letter-icon">Pr</span>
								<p>Progress</p>
							</a>
						</li>
						
						<li class="nav-item active">
							<a href="../components/tables.html">
								<span class="letter-icon">T</span>
								<p>Tables</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/tooltips.html">
								<span class="letter-icon">To</span>
								<p>Tooltips</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../components/typography.html">
								<span class="letter-icon">Ty</span>
								<p>Typography</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Plugins</h4>
						</li>
						<li class="nav-item">
							<a href="../plugins/chart.html">
								<span class="letter-icon">C</span>
								<p>Chart.js</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/chartcircle.html">
								<span class="letter-icon">Cc</span>
								<p>Chart Circle</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/animate.html">
								<span class="letter-icon">Cs</span>
								<p>CSS Animate</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/datatables.html">
								<span class="letter-icon">Da</span>
								<p>Datatables</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/jqvmap.html">
								<span class="letter-icon">Jm</span>
								<p>JQVmap</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/scrollbar.html">
								<span class="letter-icon">Js</span>
								<p>Jquery Scrollbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/notify.html">
								<span class="letter-icon">N</span>
								<p>Notify</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/slider.html">
								<span class="letter-icon">Sl</span>
								<p>Slider</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/sweetalert.html">
								<span class="letter-icon">Sa</span>
								<p>Sweet Alert</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../plugins/sparkline.html">
								<span class="letter-icon">Sp</span>
								<p>Sparkline</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content content-documentation">
				<div class="container-fluid">
					<div class="card card-documentation">
						<div class="card-header bg-info-gradient text-white bubble-shadow">
							<h4>Tables</h4>
							<p class="mb-0 op-8">All Boostrap classes for tables are supported and improved.</p>
						</div>
						<div class="card-body">
							<div class="table-content">
								<div class="title">Table of Contents</div>
								<ul>
									<li>
										<a href="#examples">Examples</a>
										<ol>
											<li>
												<a href="#basic">Basic Table</a>
											</li>
											<li>
												<a href="#hover">Hoverable Table</a>
											</li>
											<li>
												<a href="#striped">Striped Rows</a>
											</li>
											<li>
												<a href="#headstates">Table Head States</a>
											</li>
											<li>
												<a href="#border">Bordered Table</a>
											</li>
											<li>
												<a href="#responsive">
													Responsive Table
												</a>
											</li>
										</ol>
									</li>
								</ul>
							</div>
							<h4 class="subcontent-title" id="examples"><span>Examples</span></h4>
							<h5 id="basic">Basic Table</h5>
							<p>This is the basic table view of the ready dashboard :</p>
							<div class="bd-example">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>

							<h5 id="hover">Hoverable Table</h5>
							<p>Add a <code class="highlighter-rouge">.table-hover</code> for Hoverable Table</p>
							<div class="bd-example">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table table-hover&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>

							<h5 id="striped">Striped Rows</h5>
							<p>Add <code class="highlighter-rouge">.table-striped</code> to rows the striped table</p>
							<div class="bd-example">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table table-striped&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>
							<p>Add <code class="#highlighter-rouge">.table-striped-bg-*states</code> to change background from striped rows</p>
							<div class="bd-example">
								<table class="table table-striped table-striped-bg-default mb-3">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>

								<table class="table table-striped table-striped-bg-danger mt-4">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table table-striped table-striped-bg-default mb-3&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;

									&lt;table class=&quot;table table-striped table-striped-bg-danger mt-4&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>

							<h5 id="headstates">Table Head States</h5>
							<div class="bd-example">
								<table class="table table-head-bg-success mb-3">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
								<table class="table table-head-bg-primary">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>		
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table table-head-bg-success mb-3&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
									&lt;table class=&quot;table table-head-bg-primary&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>					
							<h5 id="border">Bordered Table</h5>
							<p>Add <code class="highlighter-rouge">.table-bordered</code> to create a bordered table</p>
							<div class="bd-example">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table table-bordered&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>

							<p>											
								You can also add <code class="highlighter-rouge">.table-bordered-bd-*states</code> to change the border color of the table
							</p>
							<div class="bd-example">
								<table class="table table-bordered table-bordered-bd-warning mt-4">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table table-bordered table-bordered-bd-warning mt-4&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>

							<p>It can also add <code class="highlight-rouge">.table-head-bg-*states</code> so that the table header has the same color as the border color of the table</p>
							<div class="bd-example">
								<table class="table table-bordered table-head-bg-info table-bordered-bd-info">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;table class=&quot;table table-bordered table-head-bg-info table-bordered-bd-info&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
												&lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;td&gt;1&lt;/td&gt;
												&lt;td&gt;Mark&lt;/td&gt;
												&lt;td&gt;Otto&lt;/td&gt;
												&lt;td&gt;@mdo&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;2&lt;/td&gt;
												&lt;td&gt;Jacob&lt;/td&gt;
												&lt;td&gt;Thornton&lt;/td&gt;
												&lt;td&gt;@fat&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;td&gt;3&lt;/td&gt;
												&lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
												&lt;td&gt;@twitter&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								</code>
							</pre>

							<h5 id="responsive">Responsive Table</h5>
							<p>
								Create responsive tables by wrapping any table with <code class="highlighter-rouge">.table-responsive</code> <code class="highlighter-rouge">DIV</code> to make them scroll horizontally on small devices
							</p>
							<div class="bd-example">
							<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>Table heading</th>
													<th>Table heading</th>
													<th>Table heading</th>
													<th>Table heading</th>
													<th>Table heading</th>
													<th>Table heading</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
													<td>Table cell</td>
												</tr>
											</tbody>
										</table>
							</div>
						</div>
						<pre class="language-markup">
							<code class="language-markup">
								&lt;div class=&quot;table-responsive&quot;&gt;
									&lt;table class=&quot;table table-bordered&quot;&gt;
										&lt;thead&gt;
											&lt;tr&gt;
												&lt;th&gt;#&lt;/th&gt;
												&lt;th&gt;Table heading&lt;/th&gt;
												&lt;th&gt;Table heading&lt;/th&gt;
												&lt;th&gt;Table heading&lt;/th&gt;
												&lt;th&gt;Table heading&lt;/th&gt;
												&lt;th&gt;Table heading&lt;/th&gt;
												&lt;th&gt;Table heading&lt;/th&gt;
											&lt;/tr&gt;
										&lt;/thead&gt;
										&lt;tbody&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
											&lt;/tr&gt;
											&lt;tr&gt;
												&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
												&lt;td&gt;Table cell&lt;/td&gt;
											&lt;/tr&gt;
										&lt;/tbody&gt;
									&lt;/table&gt;
								&lt;/div&gt;
							</code>
						</pre>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
</body>
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}" charset="utf-8"></script>
<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
<script src="{{ asset('assets/prism.js') }}"></script>
<script src="{{ asset('assets/prism-normalize-whitespace.min.js') }}"></script>

<script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
</html>