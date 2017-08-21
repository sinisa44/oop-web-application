<?php
$delete = new Comments();
$delete->DeleteCom($_GET['comid'],$_GET['cntnt']);

$deletePost = new Page();
$deletePost->deletePost($_GET['pid']);