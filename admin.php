﻿<?php include_once("hand_admin.php");?>
<?php include_once("admin_list.php");?>
<?php
	if(empty($_GET["redo"])){
		$_GET["redo"] = "title_menu";	
	}		
 ?>
<html>
<title>卓越科技大學校園資訊系統</title>
<link href="./Management page_files/css.css" rel="stylesheet" type="text/css">
<script src="./Management page_files/jquery-1.9.1.min.js"></script>
<script src="./Management page_files/js.js"></script>
</head>

<body>
<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>
<iframe style="display:none;" name="back" id="back"></iframe>
	<div id="main">
    	<a title="" href="?"><div class="ti" style="background:url(&#39;use/&#39;); background-size:cover;"></div><!--標題--></a>
        	<div id="ms">
             	<div id="lf" style="float:left;">
            		<div id="menuput" class="dbor">
                    <!--主選單放此-->
                    	                    		<span class="t botli">後台管理選單</span>
                			                            <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=title_menu">
                            	<div class="mainmu">
                    			網站標題管理                    			</div>
                            </a>
							                            <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=ad">
                            	<div class="mainmu">
                    			動態文字廣告管理                    			</div>
                            </a>
							                            <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=mvim">
                            	<div class="mainmu">
                    			動畫圖片管理                    			</div>
                            </a>
							                            <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=image">
                            	<div class="mainmu">
                    			校園映象資料管理                    			</div>
                            </a>
										    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=total">
                            	<div class="mainmu">
                    			進站總人數管理                    			</div>
                            </a>
							                            <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=bottom">
                            	<div class="mainmu">
                    			頁尾版權資料管理                    			</div>
                            </a>
							                            <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=news">
                            	<div class="mainmu">
                    			最新消息資料管理                    			</div>
                            </a>
							                            <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=admin">
                            	<div class="mainmu">
                    			管理者帳號管理                    			</div>
                            </a>
										    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin&redo=menu">
                            	<div class="mainmu">
                    			選單管理                    			</div>
                            </a>
							                            
							                            
							                    </div>
                    <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    	<span class="t">進站總人數 : 
                        	1                        </span>
                    </div>
        		</div>
                <div class="di" style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                	                     <!--正中央-->
                                                    <table width="100%">
                                	<tbody><tr>
                                    	<td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a></td><td><button onclick="lo('out.php')" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
                                    </tr>
                                </tbody></table>
<?php include_once($ad_list[$_GET["redo"]]);?>                                
                                                </div>
                <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".sswww").hover(
							function ()
							{
								$("#alt").html(""+$(this).children(".all").html()+"").css({"top":$(this).offset().top-50})
								$("#alt").show()
							}
						)
						$(".sswww").mouseout(
							function()
							{
								$("#alt").hide()
							}
						)
                        </script>
                             </div>
             	<div style="clear:both;"></div>
            	<div style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
                	<span class="t" style="line-height:123px;"></span>
                </div>
    </div>

</body></html>