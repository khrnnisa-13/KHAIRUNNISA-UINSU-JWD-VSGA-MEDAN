<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Integration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="map">
        <h1>Google Maps Integration</h1>
        <form method="POST">
            <input id="address" name="address" type="text" placeholder="Enter an address" value="<?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?>">
            <button type="submit">Show Map</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['address'])) {
            $address = urlencode($_POST['address']);
            echo '<h2>Map for: ' . htmlspecialchars($_POST['address']) . '</h2>';
            echo '<iframe
                    width="600"
                    height="450"
                    style="border:0"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254832.50533378648!2d98.50467659594572!3d3.642614145348024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1718294185578!5m2!1sid!2sid' . $address . '&key=YOUR_EMBED_API_KEY">
                  </iframe>';
        }
        ?>
    </div>
</body>
</html>
