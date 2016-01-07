<?php 

	/**
	 * HEADER - FIXED
	 */

?>

	<header class="bloginfo headroom">
		<div class="title">
			<?php if(get_theme_mod('blogheader_logo_dark') != ""){ ?>
				<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_mod('blogheader_logo_dark')); ?>" class="retina" alt="<?php esc_attr(bloginfo('name')); ?>"></a>
			<?php }else{ ?>
				<a href="<?php echo esc_url(home_url()); ?>"><?php esc_html(bloginfo('name')); ?></a>
			<?php } ?>
		</div>
		<nav class="main">
            <div class="menu">
                <ul><li class="page_item page-item-2 current_page_item"><a href="/news">新闻</a></li>
                </ul>
                <?php if(!is_user_logged_in()) { ?>
                    <ul><li class="page_item page-item-2 current_page_item"><a href="/user/login">登陆</a></li>
                    </ul>
                <?php }else{ ?>
                    <ul><li class="page_item page-item-2 current_page_item"><a href="/user/logout">退出</a></li>
                    </ul>
                <?php } ?>
            </div>
            <ul>
                <li class="option drawernav"><span class="showdrawer"><i class="fa fa-navicon"></i></span></li>
            </ul>
		</nav>
	</header>