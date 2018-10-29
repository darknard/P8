<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Mon Blog'; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

	<div class="topbar">
		<div class="topbar-inner">
			<div class="container">
				<h3><a href="#">Mon Blog</a></h3>
				<ul class="nav">
					<?php foreach($pages as $p):?>
						<li><a href="<?php echo BASE_URL.'/pages/view/'.$p->id; ?>" title="<?php echo $p->name; ?>"><?php echo $p->name; ?>></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

    <div class="container" style="padding-top: 60px;">
        <?php echo $content_for_layout; ?>
    </div>

<footer>
    </footer> 

</body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js""></script>


</html>