<?php
/**
 * The Template for displaying all single posts.
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
						min-height:200px;
                    }
					
					
                    .big-height {
					    min-height:420px;
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
                    }
					
					.post-title {
					    margin:20px auto auto auto;
						text-align:center;
						font-weight:bold;
						font-size:1.5em;
						
					}
					
					.post-title a {
					    border-bottom:1px dashed gray;
					}
					
					.post-info {
					    text-align:center;
					}
					.post-content {
					    margin:20px 20px;
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
				    <div class="panel-box big-height">
					    <?php if ( have_posts() ) : ?>
						  <div class="panel-box-heading"> <span class="heading-icon" ></span><?php $category = get_the_category(); echo $category[0]->cat_name; ?> <span class="heading-right"></span></div>
						 
						 
						    <?php while ( have_posts() ): the_post(); ?>
							<div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							<div class="post-info" >发布日期：<?php the_date();?></div>
							<div class="post-content"><?php the_content();?></div>
							<?php endwhile; ?>
						  
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