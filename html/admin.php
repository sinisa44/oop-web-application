<?php
$content = new Page();
$news = $content->getAll();

$comm = new Comments();
$comments = $comm->showAll();

$content->title    =  $_POST['naslov'];
$content->text     =  $_POST['tekst'];
$content->slika    =  $_POST['slika'];
$content->category =  $_POST['category'];
$content->addBtn   =  $_POST['addPost'];
//$content->addNew();
//echo $content->slika;

?>
<div class="row">
	<div class="col">
		<h4>Add new Post</h4>
		<form action="<? $_SERVER['PHP_SELF'] ?>" method="POST">
			<div class="col-8">
				<label for="Naslov">Naslov</label>
				<input type="text" name="naslov" id="naslov" class="form-control">

				<label for="tekst">Tekst</label>
				<input type="text" name="tekst" id="tekst" class="form-control">

				<label for="slika">Slika</label>
				<input type="text" name="slika" id="slika" class="form-control">
				<br>

				<h5>Kategorija:</h5>
				<hr>

				<label for="">Cars</label>
				<input type="radio" name="category" value="cars">

				<label for="motorbikes">Motorbikes</label>
				<input type="radio" name="category" value="bikes">

				<label for="">Ships</label>
				<input type="radio" name="category" value="ships">
				<br>

				<input type="submit" class="btn btn-primary" name="addPost" value="Add Post">

			</div>
		</form>
	</div>

	<div class="col">
        <h2>Delete Post</h2>
        <hr>
        <? foreach ($news as $news): ?>
            <h6><? echo $news->naslov; ?></h6>
            <p><? echo $news->text; ?></p>
            <a href="index.php?file=delete&pid=<? echo $news->id ?>"> <input type="submit" class="btn btn-danger" name="delPost" value="Delete Post"> </a>
            <hr>
        <? endforeach; ?>
	</div>

</div>
<hr>
<div class="row justify-content-center" style="border-top: 40px;">
	<div class="col-6">
        <? foreach ($comments as $comment): ?>
            <p><? echo $comment->komentar; ?></p>
            <a href="index.php?file=delete&comid=<? echo $comment->id; ?>"> <input type="submit" class="btn btn-danger" name="deleteCom" value="Delete Comment"></a>
            <hr>
        <? endforeach; ?>
	</div>
</div>