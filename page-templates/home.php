<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="banner_wrapper">
	<?php
		$label = get_field("label");
		$banner_video = get_field("banner_video");
		$contract_address = get_field("contract_address");
		$contract_address_link = get_field("contract_address_link");
		$token_link = get_field("token_link");
		$follow_telegram_link = get_field("follow_telegram_link");
		$follow_discord_link = get_field("follow_discord_link");
		$follow_twitter_link = get_field("follow_twitter_link");
		$follow_youtube_link = get_field("follow_youtube_link");
		$follow_document_link = get_field("follow_document_link");
	?>
	<div class="banner_video">
		<video autoplay playsinline muted loop>
			<source src="<?php echo $banner_video['url'] ?>" type="video/mp4">
		</video>
	</div>
	<div class="banner_wrap wow flipInX">
		<div class="wrapper">
			<img src="<?php echo $label['url'] ?>" class="earn_label">

			<div class="buy_type_list">
			<?php
				if(have_rows('buy_type_list')){
					while( have_rows('buy_type_list') ) : the_row();
						$buy_type = get_sub_field('buy_type');
						$buy_type_link = get_sub_field('buy_type_link');
			?>
					<a href="<?php echo $buy_type_link; ?>" class="main_btn"><?php echo $buy_type; ?></a>
			<?php
					endwhile;
				}
			?>
			</div>

			<div class="buy_item_list">
			<?php
				if(have_rows('buy_item_list')){
					while( have_rows('buy_item_list') ) : the_row();
						$buy_item_logo = get_sub_field('buy_item_logo');
						$buy_item = get_sub_field('buy_item');
			?>
					<div class="buy_item">
						<div class="buy_item_bg"><img src="<?php echo $buy_item_logo['url']; ?>"></div>
						<h2><?php echo $buy_item; ?></h2>
					</div>
			<?php
					endwhile;
				}
			?>
			</div>

			<div class="contract_address_wrap">
				<a class="contract_address" href="<?php echo $contract_address_link; ?>"><?php echo $contract_address; ?></a>
			</div>

			<a href="<?php echo $token_link; ?>" class="main_btn token_link"><?php echo __('$ZOMFI Token Audit', 'zomfi'); ?></a>

			<div class="clearfix"></div>

			<div class="follow_wrap">
				<h2><?php echo __('Follow Us', 'zomfi'); ?></h2>
				<ul>
					<li>
						<a href="<?php echo $follow_telegram_link; ?>" target="_blank"><img src="<?=get_template_directory_uri();?>/images/icon_telegram_1.png"></a>
					</li>
					<li>
						<a href="<?php echo $follow_discord_link; ?>" target="_blank"><img src="<?=get_template_directory_uri();?>/images/icon_discord_1.png"></a>
					</li>
					<li>
						<a href="<?php echo $follow_twitter_link; ?>" target="_blank"><img src="<?=get_template_directory_uri();?>/images/icon_twitter_1.png"></a>
					</li>
					<li>
						<a href="<?php echo $follow_youtube_link; ?>" target="_blank"><img src="<?=get_template_directory_uri();?>/images/icon_youtube_1.png"></a>
					</li>
					<li>
						<a href="<?php echo $follow_document_link; ?>" target="_blank"><img src="<?=get_template_directory_uri();?>/images/icon_documents_1.png"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="gameplay_wrapper">
	<div class="wrapper">
		<?php
			$gameplay_label = get_field("gameplay_label");
			$gameplay_desc = get_field("gameplay_desc");
			$gameplay_link = get_field("gameplay_link");
			$gameplay_gallery = get_field("gameplay_gallery");
		?>
		<div class="gameplay_wrap">
			<img src="<?php echo $gameplay_label['url'] ?>" class="wow bounceInLeft" data-wow-delay="0.5s">
			<div class="wow lightSpeedIn" data-wow-delay="1s">
				<?php echo $gameplay_desc; ?>
				<a href="<?php echo $gameplay_link; ?>" class="main_btn"><?php echo __('pitchdeck', 'zomfi'); ?></a>
			</div>
		</div>

		<div class="gameplay_slider wow flipInX" data-wow-delay="0.5s">
			<ul class="bxslider">
				<?php
					if(count($gameplay_gallery) > 0){
						foreach ($gameplay_gallery as $key => $gallery) {
				?>
						<li>
							<div class="gameplay_slider_img">
								<img src="<?php echo $gallery['url'] ?>">
							</div>
						</li>
				<?php
						}
					}
				?>
			</ul>
		</div>
	</div>
</div>

<div class="storyline_wrapper">
	<div class="wrapper">
		<?php
			$storyline_label = get_field("storyline_label");
			$storyline_desc = get_field("storyline_desc");
			$storyline_men_image = get_field("storyline_men_image");
			$storyline_women_image = get_field("storyline_women_image");
		?>
		<div class="storyline_wrap wow bounceInDown" id="storyline">
			<img src="<?php echo $storyline_label['url'] ?>">
			<?php echo $storyline_desc; ?>
		</div>

		<div class="storyline_banner">
			<div class="storyline_banner_men wow bounceInLeft" data-wow-delay="0.5s">
				<video autoplay playsinline muted loop>
					<source src="<?php echo $storyline_men_image['url'] ?>" type="video/webm">
				</video>
			</div>
			<div class="storyline_banner_women wow bounceInRight" data-wow-delay="0.5s">
				<video autoplay playsinline muted loop>
					<source src="<?php echo $storyline_women_image['url'] ?>" type="video/webm">
				</video>
			</div>
		</div>
	</div>
</div>

<div class="avatar_wrapper">
	<div class="avatar_wrap">
		<div class="wrapper">
			<?php
				$avatar_label = get_field("avatar_label");
				$avatar_model = get_field("avatar_model");
				$avatar_model_select_left = get_field("avatar_model_select_left");
				$avatar_model_select_right = get_field("avatar_model_select_right");
			?>
			
			<div class="avatar_label wow bounceInDown" id="avatar">
				<img src="<?php echo $avatar_label['url'] ?>">
			</div>

			<div class="avatar_model">
				<div class="avatar_model_left wow bounceInLeft" data-wow-delay="0.5s">
					<img src="<?php echo $avatar_model_select_left['url'] ?>">
				</div>
				<div class="avatar_model_center wow pulse" data-wow-iteration="3" data-wow-delay="0.5s">
					<img src="<?php echo $avatar_model['url'] ?>">
				</div>
				<div class="avatar_model_right wow bounceInRight" data-wow-delay="0.5s">
					<img src="<?php echo $avatar_model_select_right['url'] ?>">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bosses_wrapper">
	<?php
		$bosses_label = get_field("bosses_label");
	?>
	<div class="wrapper">
		<div class="bosses_wrap">
			<div class="bosses_left_wrap wow bounceInLeft" id="bosses">
				<div class="bosses_label">
					<img src="<?php echo $bosses_label['url'] ?>">
				</div>
				<div class="bosses_brand_wrap">
					<ul class="bosses_brand_list">
						<?php
							if(have_rows('bosses_list')){
								$i = 0;
								while( have_rows('bosses_list') ) : the_row();
									$bosses_sub_title = get_sub_field('bosses_sub_title');
									$bosses_sub_link = get_sub_field('bosses_sub_link');
						?>
								<li class="<?php echo $i == 0 ? 'active' : '' ?>">
									<a href="#<?php echo $bosses_sub_link; ?>"><?php echo $bosses_sub_title; ?></a>
								</li>
						<?php
								$i++;
								endwhile;
							}
						?>
					</ul>
				</div>
			</div>

			<div class="bosses_brand_image_wrap wow bounceInRight" data-wow-delay="0.5s">
				<?php
					if(have_rows('bosses_list')){
						$i = 0;
						while( have_rows('bosses_list') ) : the_row();
							$bosses_sub_image = get_sub_field('bosses_sub_image');
							$bosses_sub_link = get_sub_field('bosses_sub_link');
				?>
						<div class="bosses_brand_image <?php echo $i == 0 ? 'active' : '' ?>" id="<?php echo $bosses_sub_link; ?>">
							<div class="bosses_brand_mark">
								<img src="<?=get_template_directory_uri();?>/images/bosses_mark.png">
								<div class="bosses_brand_img">
									<video autoplay playsinline muted loop>
										<source src="<?php echo $bosses_sub_image['url'] ?>" type="video/webm">
									</video>
								</div>
							</div>
						</div>
				<?php
						$i++;
						endwhile;
					}
				?>
			</div>
		</div>
	</div>
</div>

<div class="weapons_wrapper">
	<div class="wrapper">
		<?php
			$weapons_label = get_field("weapons_label");
		?>
		
		<div class="weapons_label wow bounceInDown" >
			<img src="<?php echo $weapons_label['url'] ?>">
		</div>

		<div class="weapons_banner_wrap wow clipPath" data-wow-duration="5s">
			<ul class="bxslider">
				<?php
					if(have_rows('weapons_list')){
						while( have_rows('weapons_list') ) : the_row();
							$weapons_sub_title = get_sub_field('weapons_sub_title');
							$weapons_sub_image = get_sub_field('weapons_sub_image');
				?>
						<li>
							<div class="weapons_banner">
								<div class="weapons_banner_img">
									<img src="<?php echo $weapons_sub_image['url']; ?>">
								</div>
								<p><?php echo $weapons_sub_title; ?></p>
							</div>
						</li>
				<?php
						endwhile;
					}
				?>
			</ul>
		</div>
	</div>
</div>

<div class="feature_wrapper">
	<div class="wrapper">
		<?php
			$key_feature_label = get_field("key_feature_label");
		?>
		
		<div class="feature_label wow lightSpeedIn">
			<h1><?php echo $key_feature_label ?></h1>
		</div>

		<div class="feature_list_wrap">
			<?php
				if(have_rows('coin_list')){
					$ii = 0.5;
					while( have_rows('coin_list') ) : the_row();
						$coin_label = get_sub_field('coin_label');
						$coin_title = get_sub_field('coin_title');
						$coin_desc = get_sub_field('coin_desc');
			?>
					<div class="feature_list wow bounceInUp" data-wow-delay="<?php echo $ii?>s">
						<div class="coin_label">
							<img src="<?php echo $coin_label['url']; ?>">
						</div>
						<h2><?php echo $coin_title; ?></h2>
						<h3><?php echo $coin_desc; ?></h3>
						<ul>
							<?php
								if(have_rows('coin_sub_list')){
									while( have_rows('coin_sub_list') ) : the_row();
										$coin_sub_list_text = get_sub_field('coin_sub_list_text');
										$coin_sub_list_link = get_sub_field('coin_sub_list_link');
							?>
									<li>
										<a href="<?php echo $coin_sub_list_link; ?>"><?php echo $coin_sub_list_text; ?></a>
									</li>
							<?php
									endwhile;
								}
							?>
						</ul>
					</div>
			<?php
					$ii+=0.5;
					endwhile;
				}
			?>
		</div>
	</div>
</div>

<div class="tokenomics_wrapper">
	<div class="wrapper">
		<?php
			$tokenomics_label = get_field("tokenomics_label");
			$tokenomics_banner = get_field("tokenomics_banner");
			$tokenomics_desc = get_field("tokenomics_desc");
		?>
		
		<div class="tokenomics_label wow bounceInDown">
			<img src="<?php echo $tokenomics_label['url'] ?>">
		</div>

		<div class="tokenomics_banner wow pulse" data-wow-delay="0.5s">
			<img src="<?php echo $tokenomics_banner['url'] ?>">
		</div>

		<div class="tokenomics_desc wow rollIn" data-wow-delay="0.5s">
			<?php echo $tokenomics_desc ?>
		</div>
	</div>
</div>

<div class="roadmap_wrapper">
	<div class="wrapper">
		<?php
			$roadmap_label = get_field("roadmap_label");
		?>
		
		<div class="roadmap_label wow bounceInLeft" id="roadmap">
			<img src="<?php echo $roadmap_label['url'] ?>">
		</div>

		<div class="roadmap_wrap wow bounceInUp" data-wow-delay="0.5s">
			<?php
				if(have_rows('roadmap_list')){
					while( have_rows('roadmap_list') ) : the_row();
						$roadmap_sub_year = get_sub_field('roadmap_sub_year');
						$roadmap_sub_title = get_sub_field('roadmap_sub_title');
			?>
					<div class="roadmap_list">
						<div class="roadmap_list_wrap">
							<div class="roadmap_title">
								<h2><?php echo $roadmap_sub_year; ?></h2>
								<h3><?php echo $roadmap_sub_title; ?></h3>
							</div>

							<ul>
								<?php
									if(have_rows('roadmap_sub_list')){
										while( have_rows('roadmap_sub_list') ) : the_row();
											$roadmap_sub_text = get_sub_field('roadmap_sub_text');
											$roadmap_complete_state = get_sub_field('roadmap_complete_state');
								?>
										<li>
											<span class="<?php echo $roadmap_complete_state ? 'active' : '' ?>"><?php echo $roadmap_sub_text; ?></span>
										</li>
								<?php
										endwhile;
									}
								?>
							</ul>
						</div>
					</div>
			<?php
					endwhile;
				}
			?>
		</div>
	</div>
</div>

<div class="investors_wrapper">
	<div class="wrapper">
		<?php
			$investors_label = get_field("investors_label");
			$investors_list = get_field("investors_list");
		?>
		
		<div class="investors_wrap">
			<div class="investors_label wow bounceInRight">
				<img src="<?php echo $investors_label['url'] ?>">
			</div>

			<div class="investors_list wow pulse" data-wow-iteration="1" data-wow-duration="0.5s">
				<?php
					if(count($investors_list) > 0){
						foreach($investors_list as $investors){
				?>
						<div class="investors_img">
							<img src="<?php echo $investors['url'] ?>">
						</div>
				<?php
						}
					}
				?>
			</div>
		</div>
	</div>
</div>

<div class="team_wrapper">
	<div class="wrapper">
		<?php
			$team_label = get_field("team_label");
		?>
		
		<div class="team_label wow bounceInRight" data-wow-delay="0.5s">
			<img src="<?php echo $team_label['url'] ?>">
		</div>

		<div class="team_list_wrap">
			<?php
				$ii = 0.5; $jj = 0;
				if(have_rows('team_list')){
					while( have_rows('team_list') ) : the_row();
						$team_image = get_sub_field('team_image');
						$team_title = get_sub_field('team_title');
						$team_desc = get_sub_field('team_desc');
			?>
					<div class="team_list wow bounceInUp" data-wow-delay="<?php echo $ii?>s">
						<div class="team_list_img" >
							<img src="<?php echo $team_image['url']; ?>">
						</div>
						<h2><?php echo $team_title; ?></h2>
						<?php echo $team_desc; ?>
					</div>
			<?php
					$jj++ == 2 ? $ii = 0.5 : $ii += 0.5;
					endwhile;
				}
			?>
		</div>
	</div>
</div>

<div class="faq_wrapper">
	<div class="wrapper">
		<?php
			$faq_title = get_field("faq_title");
		?>
		
		<div class="faq_label wow bounceInDown" id="faq">
			<h1><?php echo $faq_title; ?></h1>
		</div>

		<div class="faq_list_wrap">
			<?php
				if(have_rows('faq_list')){
					$i = 0;
					$ii = 0.5; $jj = 0;
					while( have_rows('faq_list') ) : the_row();
						$faq_sub_title = get_sub_field('faq_sub_title');
						$faq_sub_desc = get_sub_field('faq_sub_desc');
			?>
					<div class="faq_list <?php echo $i == 0 ? 'active' : '' ?> wow bounceInUp" data-wow-delay="<?php echo $ii?>s">
						<h2><?php echo $faq_sub_title; ?></h2>
						<?php echo $faq_sub_desc; ?>
					</div>
			<?php
					$i++;
					$jj++ == 2 ? $ii = 0.5 : $ii += 0.001;
					endwhile;
				}
			?>
		</div>
	</div>
</div>

<div class="news_wrapper">
	<div class="wrapper">
		<?php
			$news_title = get_field("news_title");
		?>
		
		<div class="news_label wow lightSpeedIn" id="news">
			<h1><?php echo $news_title; ?></h1>
		</div>

		<div class="news_list_wrap">
			<?php
				$ii = 0.5;
				if(have_rows('news_list')){
					while( have_rows('news_list') ) : the_row();
						$news_sub_image = get_sub_field('news_sub_image');
						$news_sub_title = get_sub_field('news_sub_title');
						$news_sub_desc = get_sub_field('news_sub_desc');
						$news_sub_link = get_sub_field('news_sub_link');
			?>
					<div class="news_list wow bounceInUp" data-wow-delay="<?php echo $ii?>s">
						<div class="news_img">
							<img src="<?php echo $news_sub_image['url']; ?>">
						</div>
						<div class="news_desc">
							<h2><?php echo $news_sub_title; ?></h2>
							<?php echo $news_sub_desc; ?>
							<a href="<?php echo $news_sub_link; ?>"><?php echo __('Read More', 'zomfi'); ?></a>
						</div>
					</div>
			<?php
					$ii+=0.5;
					endwhile;
				}
			?>
		</div>
	</div>
</div>

<div class="contact_wrapper">
	<div class="wrapper">
		<?php
			$contact_image = get_field("contact_image");
			$contact_thumb = get_field("contact_thumb");
			$contact_title = get_field("contact_title");
			$contact_desc = get_field("contact_desc");
		?>
		
		<div class="contact_top_img">
			<img src="<?php echo $contact_image['url'] ?>">
		</div>

		<div class="contact_wrap wow pulse" data-wow-iteration="2" data-wow-delay="0.5s">
			<div class="contact_left">
				<img src="<?php echo $contact_thumb['url'] ?>">
			</div>
			<div class="contact_right">
				<h1><?php echo $contact_title; ?></h1>
				<?php echo $contact_desc; ?>
			</div>
		</div>
	</div>
</div>

<div class="social_wrapper">
	<div class="wrapper">
		<div class="social_list_wrap">
			<?php
				if(have_rows('social_list')){
					while( have_rows('social_list') ) : the_row();
						$social_image = get_sub_field('social_image');
						$social_text = get_sub_field('social_text');
						$social_link = get_sub_field('social_link');
			?>
					<a class="social_list" target="_blank" href="<?php echo $social_link; ?>">
						<div class="social_list_img">
							<img src="<?php echo $social_image['url']; ?>">
						</div>
						<p><?php echo $social_text; ?></p>
					</a>
			<?php
					endwhile;
				}
			?>
		</div>
	</div>
</div>

<?php endwhile; ?>		

<?php get_footer(); ?>