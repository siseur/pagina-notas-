&lt;?php
 
	include("conn.php");
	
	$query=mysqli_query($conn,"select count(userid) from `user`");
	$row = mysqli_fetch_row($query);
 
	$rows = $row[0];
	
	$page_rows = 10;
 
	$last = ceil($rows/$page_rows);
 
	if($last &lt; 1){
		$last = 1;
	}
 
	$pagenum = 1;
 
	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
 
	if ($pagenum &lt; 1) { 
		$pagenum = 1; 
	} 
	else if ($pagenum &gt; $last) { 
		$pagenum = $last; 
	}
 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	$nquery=mysqli_query($conn,"select * from `user` $limit");
 
	$paginationCtrls = '';
 
	if($last != 1){
		
	if ($pagenum &gt; 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '&lt;a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default"&gt;Anterior&lt;/a&gt; &amp;nbsp; &amp;nbsp; ';
		
		for($i = $pagenum-4; $i &lt; $pagenum; $i++){
			if($i &gt; 0){
		        $paginationCtrls .= '&lt;a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default"&gt;'.$i.'&lt;/a&gt; &amp;nbsp; ';
			}
	    }
    }
	
	$paginationCtrls .= ''.$pagenum.' &amp;nbsp; ';
	
	for($i = $pagenum+1; $i &lt;= $last; $i++){
		$paginationCtrls .= '&lt;a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default"&gt;'.$i.'&lt;/a&gt; &amp;nbsp; ';
		if($i &gt;= $pagenum+4){
			break;
		}
	}
 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &amp;nbsp; &amp;nbsp; &lt;a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default"&gt;Siguiente&lt;/a&gt; ';
    }
	}
 
?&gt;