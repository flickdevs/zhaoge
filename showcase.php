<?php
/**
 * Template Name: Zhaoge Index Template
 * Description: A Page Template that shows the Index page
 *
 * The zhaoge index template in zhaoge theme includes the main columns of the site content 
 *
 *
 * @package WordPress
 * @subpackage zhaoge
 * @since zhaoge 1.0
 */

// Enqueue showcase script for the slider
//wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/showcase.js', array( 'jquery' ), '2011-04-28' );

get_header(); ?>

		<style type="text/css">
                    #main {
                       padding-top:0px;
                    }
                    div.row-fluid {
                        margin-top:30px;
                    }

                    .panel-box {
                        border:1px solid #428BCA;
                        min-height:50px;
                        margin-bottom:20px;
                    }
                    
                    .panel-box .panel-box-heading {
                        background:#428BCA;
                        width:100%;
			font-weight:bold;
                        color:#ffffff;
                    }
                    
                    .panel-box .heading-icon {
                        margin-left:10px;
                        margin-right:5px; 
                        background:url('');
                    }
                    
                    .panel-box .heading-right {
                        font-weight:normal;
                        font-size:12px;
                        position:relative;
                        margin-right:5px;
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
                    }
                    
		</style>
			    <div class="container">
			      <div class="row-fluid">
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、其他</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目<span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"><span class="heading-icon" ></span> 服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>

		              </div>  <!-- row -->					                
			      <div class="row-fluid">
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目<span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"><span class="heading-icon" ></span> 服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>

		              </div>  <!-- row -->
			      <div class="row-fluid">
			        <div class="span12"> 
                                  <div class="panel-box"></div>
                                </div>
                              </div>
			    </div>  <!-- .container -->

        
<?php get_footer(); ?>
