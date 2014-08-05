<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<style type="text/css" >

                   
                    .panel-box {
                        border:1px solid #428BCA;
                        
                        margin-bottom:20px;
						height:98%;
                    }
					
					
                    
                    .panel-box .panel-box-heading {
                        background:#428BCA;
                        width:100%;
			font-weight:bold;
                        color:#ffffff;
						position:relative;
                    }
                    
                    .panel-box .heading-icon {
                        margin-left:10px;
                        margin-right:5px; 
                        background:url('');
                    }
                    
                    .panel-box .heading-right {
                        font-weight:normal;
                        font-size:12px;
                        position:absolute;
                        right:5px;
                        float:right;
                    }
                    
                    .panel-box ul {
                        list-style:disc;
                        margin-left:30px;
                    }

                    .panel-box ul li{
                      border-bottom:1px dashed gray;
                      padding-right:5px;
                      margin-top:5px;
                      color:#13152E;
					  position:relative;
                    }
					
					span.right {
					    position:absolute;
					    right:5px;
					}
                    
		</style>
		  <div class="container" >
		      <div class="row">
			      <div class="span4">
						<div class="panel-box">
							  <div class="panel-box-heading"> <span class="heading-icon" ></span>Panel Title <span class="heading-right">更多</span></div>
							  <ul> 
								<li>item1</li>
								<li>item2</li>
								<li>item3</li>
							  </ul>
						</div>
						<div class="panel-box">
							  <div class="panel-box-heading"> <span class="heading-icon" ></span>Panel Title <span class="heading-right">更多</span></div>
							  <ul> 
								<li>item1</li>
								<li>item2</li>
								<li>item3</li>
							  </ul>
						</div>
				  </div>
				  <div class="span8">
				    <div class="panel-box">
						  <div class="panel-box-heading"> <span class="heading-icon" ></span><?php printf( single_cat_title( '', false ) ); ?> <span class="heading-right"></span></div>
						  <?php if ( have_posts() ) : ?>
						  <ul> 
						    <?php while ( have_posts() ): the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  <span class="right"><?php the_date(); ?></span></li>
							<?php endwhile; ?>
						  </ul>
						  <?php else: ?>
						  <?php 
						     printf('暂无内容'); 
						     endif;
						  ?>
						  
					</div>
				</div>
				
			  </div>
		  </div>
		 
<?php get_footer(); ?>
