<?php
function get_menu_with_id ($id) { ?>
	<ul class="sf-menu" id="<?php echo $id;?>">
			<li class="current">
				<a href="#a">menu level1</a>
				<?php //included valid, yet arbitrary, markup to test DOM traveral?>
				<span class="arbitrary" style="display:none">
					<?php //this could be a tooltip for the menu item, for example see @link http://mycircletree.com/ ?>
					<p>Content</p>
				</span>
				<span class="arbitrary" style="display:none">
					<p>Content</p>
				</span>
				<ul>
					<li>
						<a href="#aa">menu item that is quite long</a>
					</li>
					<li class="current">
						<a href="#ab">menu level2</a>
						<ul>
							<li><a href="#3">menu level3</a>
								<ul>
									<li><a href="#">Menu level4</a></li>
								</ul>
							</li>
							<li><a href="#aba">menu item</a></li>
							<li><a href="#abb">menu item</a></li>
							<li><a href="#abc">menu item</a></li>
							<li><a href="#abd">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
				<ul>
					<li>
						<a href="#">level one</a>
						<ul>
							<li><a href="#">lvel 2</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
				<ul>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
							<li><a href="#">short</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="#">menu item</a>
						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">menu item</a>
			</li>
		</ul>
<?php
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<title>Superfish Reloaded</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js" language="javascript"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($){
			function init_all () {
				$('#default').superfish();
				$('#menu1').superfish({
					delay		: 	5000,
					speedIn		: 	300,
					speedOut	: 	100,
					animIn: {marginTop: '10px','opacity':'show','height':'show'},
					animOut: {marginTop: '-10px', 'opacity':'hide','height':'hide'}
				});
				$('#vertical').superfish();
			}
			$("#initialize").click(function  () {
				init_all();
				return false;
			});
			$("#close").click(function  () {
				$("ul.sf-menu").superfish('close');
				return false;
			});
			$("#destroy").click(function  () {
				$("ul.sf-menu").superfish('destroy');
				return false;
			});
			//init_all();
		});
		</script>
	</head>
	<body>
	<h1>Superfish Reloaded!</h1>
		<h2>Default Usage</h2>
		<?php get_menu_with_id('default');?>
		<h2>Fancy CSS</h2>
		<?php get_menu_with_id('menu1');?>
		<h2>Vertical</h2>
		<?php get_menu_with_id('vertical');?>
		<h2>Methods</h2>
		<ul>
			<li>Init (default)
				<code>
					$("ul").superfish()
				</code>
				<a href="#" id="initialize">Initialize All</a>
			</li>
			<li>Close (closes all open menus)
				<code>
					$("#menu1").superfish('close');
				</code>
				<a href="#" id="close">Close All</a>
			</li>
			<li>Destroy (removes all data and added DOM elements)
				<code>
					$("ul.sf-menu").superfish('destroy');
				</code>
				<a href="#" id="destroy">Destroy All</a>
			</li>
		</ul>
	</body>
</html>