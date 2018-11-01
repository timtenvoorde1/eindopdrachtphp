<?php include ('includes/header.php'); ?>

$feeds = array(
					"https://www.nu.nl/rss/Algemeen",
				);


				$entries = array();
				foreach($feeds as $feed) {
					$xml = simplexml_load_file($feed);
					$entries = array_merge($entries, $xml->xpath("//item"));
				}

				usort($entries, function ($feed1, $feed2) {
					return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
				});

				?>

<?php include ('includes/footer.php'); ?>