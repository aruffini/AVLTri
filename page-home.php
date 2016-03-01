<?php get_header(); ?>

<div id="main">
    <div id="wrapperHeader">
        <div id="header">
	       <img src="<?php bloginfo('stylesheet_directory'); ?>/images/avl_cropped.png" alt="AVL Tri Club"/>
            
        </div>
    </div>
	<!--3 Columns-->
	
	<div class="center" id="threeBoxes">
		<ul id="index_articles">
			<li id="leftBox">
			
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("Mainpage Left") ) : else : ?>
			Widget "Mainpage left" goes here
			<?php endif; ?>
			</li>
			
			
			<li id="middleBox">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("Mainpage Middle") ) : else : ?>
			Widget "Mainpage middle" goes here
			<?php endif; ?>
			</li>
			
			
			<li id="rightBpx" class="right">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar("Mainpage Right") ) : else : ?>
			Widget "Mainpage right" goes here
			<?php endif; ?>
			
			
			</li>
		</ul>
	</div>	
</div>

<?php get_footer(); ?>