<?php
// $Id: page.tpl.php,v 1.25 2008/01/24 09:42:53 Leo Exp $
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  
    <script src="<?php print base_path() ?>misc/jquery.js" type="text/javascript"></script>
    
    <script src="<?php print base_path().path_to_theme() ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php print base_path().path_to_theme() ?>/js/cufon-replace.js" type="text/javascript"></script>
    <script src="<?php print base_path().path_to_theme() ?>/js/Romul_400.font.js" type="text/javascript"></script>
    
	<script type="text/javascript" src="<?php print base_path().path_to_theme() ?>/js/imagepreloader.js"></script>
	<script type="text/javascript">
        preloadImages([
            '<?php print base_path().path_to_theme() ?>/images/bg-li-drop.png', 
            '<?php print base_path().path_to_theme() ?>/images/bg-links2.gif',
			'<?php print base_path().path_to_theme() ?>/images/links-left2.gif',
			'<?php print base_path().path_to_theme() ?>/images/links-right2.gif'
			]);
    </script>
    
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script.js"></script>
<link href="<?php print base_path().path_to_theme() ?>/menu.css" media="all" rel="stylesheet" type="text/css" />
  
</head>
  
<body id="body">
    <div class="main2">
        <div id="header">
            <div class="head-row1">
                <div class="main">
                    <div class="secondary-menu">
                        <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
                    </div>
                </div>
            </div>
            <div class="head-row2">
                <div class="main">
                    <div class="col1">
                        <?php if ($logo) : ?>
                        <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" class="logo" /></a>
                        <?php endif; ?>
                        <?php if ($site_name) : ?>
                        <h1 class="site-name"><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
                        <?php endif; ?>
                        
                        <?php if ($site_slogan) : ?>
                        <div class="slogan"><?php print($site_slogan) ?></div>
                        <?php endif;?>
                            
                        <?php if ($mission != ""): ?>
                        <div id="mission"><?php print $mission ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col2">
                        <?php if (module_hook('yuimenu','menu') && ("tns" == variable_get('yuimenu_type','tns') || "tnm"==variable_get('yuimenu_type','tns')) ){?>
                            <?php print html_menu(variable_get('yuimenu_root','1') ); ?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="main">
            <div id="cont">
            	<?php if ($custom != ""): ?>
                    <div id="custom">
                        <?php print $custom?>
                    </div>
                <?php endif; ?>
                <div class="cont-inner">
                    <div class="bg-cont">
                        <div <?php if ($left != ""): ?>class="bg-line"<?php endif; ?>>
                        	
                            <?php if ($left != ""): ?>
                                <div id="left-col">
                                    <div class="ind">
                                        <div class="width">
                                            <?php print $left?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($right != ""): ?>
                                <div id="right-col">
                                    <div class="ind">
                                        <div class="width">
                                            <?php print $right?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <div id="cont-col">
                                <div class="ind">
                                        
                                    <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
                                    <?php if ($title): print '
                                        <h2'. ($tabs ? ' class="with-tabs title"' : '') .'>'. $title .'</h2>
                                    '; endif; ?>
                                    <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
                                    <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
                                                     
                                    <?php if ($show_messages && $messages != ""): ?>
                                        <?php print $messages ?>
                                    <?php endif; ?>
                                
                                    <?php if ($help != ""): ?>
                                  <div id="help"><?php print $help ?></div>
                                    <?php endif; ?>
                                
                                      <!-- start main content -->
                                    <?php print $content; ?>
                                        
                              </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="push"></div>
    </div>
    <div id="footer">
        <div class="foot">
        	<div class="bg-bot">
            	<?php if ($footer_message || $footer) : ?>
                    <span><?php print $footer_message;?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- coded by Leo --> 
<?php print $closure;?>
</body>
</html>
