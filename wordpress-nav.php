<?php       	

if ($post->post_parent)	{

	$ancestors=get_post_ancestors($post->ID);
	
	$root=count($ancestors)-1;
	
	$parent = $ancestors[$root];
	
} else {
	
	$parent = $post->ID;
	
}

$children = wp_list_pages("depth=1&title_li=&child_of=". $parent ."&echo=0");

if($children) : ?>


	<!-- SHOW TOP-LEVEL PARENT TITLE -->

	<?php
	
	  	if(!$parent) { the_title(); } else {
	
	  	echo get_the_title($parent); 
	  	
	  	}
	    	  
	?>




	<!-- CHILDREN NAV -->

      <?php
      	
      	if ($children) {
      	
      		echo "<ul>";
      	
	      		echo $children; 
      		
      		echo "</ul>";
      	
      	 }  ?>

  
  <?php endif; ?>
