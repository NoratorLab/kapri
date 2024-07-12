<nav class="main_menu" id="mainMenu">
	<a href="index.php">Головна</a>
	<a href="specialties.php">Спеціальності</a>
	<a href="employees.php">Співробітники</a>
	<a href="laboratories.php">Лабораторна база</a>
	<a href="science.php">Наука</a>
	<a href="partners.php">Партнери</a>
	<a href="contacts.php">Контакти</a>
	<a href="javascript:void(0);" class="mbutton" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	</a>
</nav>

<script>
	function myFunction() {
		var x = document.getElementById("mainMenu");
		if (x.className === "main_menu") {
			x.className += " responsive";
		} else {
			x.className = "main_menu";
		}
	}
</script>
