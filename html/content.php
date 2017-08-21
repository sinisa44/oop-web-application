<?php
if(isset($_GET['cntnt'])){
	$content= $_GET['cntnt'];
}else{
	$content = 'main';
}
$page = new Page();
$content = $page->getContent($content);
//print_r($content);
//$comments = new Comments($_POST['komentar'],$_POST['hidden'],$_POST['addComment'],$_POST['delComment']);
$com = new Comments();
$com->comment = $_POST['komentar'];
$com->hidden  = $_POST['hidden'];
$com->btnAdd  = $_POST['addComment'];
$com->addComment();
$com=$com->show($_GET['cntnt']);

//print_r($comments);



?>
<div class="container">

	<div class="row">

		<div class="col-sm-8 blog-main">
            <div class="blog-post" style="margin-bottom: 90px;">
            <?php
                foreach ($content as $contentItem):
            ?>

				<h2 class="blog-post-title"><? echo $contentItem->naslov; ?></h2>
                <hr>
                 <img src="<? echo $contentItem->slika ?>" alt="honda" style="height: 350px; width: 730px;">
				<p><? echo $contentItem->text; ?></p>

                <?php
                endforeach;
                ?>

                <h3>Comments:</h3>
                <div class="jumbotron">
                    <? foreach ($com as $comment): ?>
                    <p><? echo $comment->komentar ?></p>
                        <a href="index.php?file=delete&comid=<? echo $comment->id; ?>&cntnt=<? echo $_GET['cntnt']; ?>"><input type="submit" class="btn btn-danger" value="obrisi"></a>
                        <hr>
                    <? endforeach; ?>
                </div>


                <div class="well">
                    <form action="<? $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <label><h4>Leave a Comment:</h4></label>
                            <textarea name="komentar" class="form-control" cols="30" rows="5"></textarea>
                            <input type="hidden" value="<? echo $_GET['cntnt'] ?>"name="hidden">
                           <input type="submit" name="addComment" value="Add Comment" class="btn btn-success">
                        </div>
                    </form>
                </div>

			</div><!-- /.blog-post -->




		</div><!-- /.blog-main -->

		<div class="col-sm-3 offset-sm-1 blog-sidebar">
			<div class="sidebar-module sidebar-module-inset">
				<h4>About</h4>
				<p>This application is done just for practice, it's not for commercial use</p>

			</div>


		</div><!-- /.blog-sidebar -->

	</div><!-- /.row -->

</div><!-- /.container -->
