<?php include ('includes/header.php'); ?>

<?php
	$feeds = array(
			"http://feeds.feedburner.com/tweakers/mixed",
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
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="collapsible"><?php
					foreach($entries as $entry){
						?>
							<li>
							<div class="collapsible-header">
								<a href="<?= $entry->link ?>">
								<?= $entry->title ?></a>
							</div>
							<div class="collapsible-body>">
								(<?= parse_url($entry->link)['host'] ?>)
								<?= strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)) ?>
								<?= $entry->description ?>
							</div>
							</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>

<?php include ('includes/footer.php'); ?>