<!-- 
Copyright 2013 Daniel Blair

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
-->
<?php
/*
Template Name: a Store Page
*/
?>

<?php get_header(); ?>

<!-- Paste your own code below over the example code I've supplied -->

<iframe src="http://astore.amazon.ca/theattanetwof-20?" width="90%" height="1700" frameborder="0" scrolling="no"></iframe>

			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		
			<?php the_content(__('[Read more]'));?>
		 			
			<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
						

<!-- The main column ends  -->

<?php get_footer(); ?>
