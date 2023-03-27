<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<div id="text-container">
		<h1>
		<?php
		date_default_timezone_set('Europe/Amsterdam');
		$d = new DateTime();
		echo "Goede morgen! Het is nu " . $d->format('H:i');
		?>
		</h1>
	</div>
</div>
<script>
  function changeBackground() {
    const currentHour = new Date().getHours();
    const body = document.querySelector('body');

    if (currentHour >= 0 && currentHour < 6) {
      body.style.background = 'url(images/night.png)';
    } else if (currentHour >= 6 && currentHour < 12) {
      body.style.background = 'url(images/morning.png)';
    } else if (currentHour >= 12 && currentHour < 18) {
      body.style.background = 'url(images/afternoon.png)';
    } else {
      body.style.background = 'url(images/evening.png)';
    }
  }

  // Call the function immediately to set the initial background
  changeBackground();

  // Call the function every 6 hours to change the background
  setInterval(changeBackground, 1000 * 60 * 60 * 6);
</script>
</body>
</html>
