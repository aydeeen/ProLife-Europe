<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ple
 */

$footer_logo               = get_field('footer_logo', 'option');
$phone                     = get_field('phone', 'option');
$email  		           = get_field('email', 'option');
$working_hours             = get_field('working_hours', 'option');
$trademark  	           = get_field('trademark', 'option');
$legal_notice              = get_field('legal_notice', 'option');
$privacy_information       = get_field('privacy_information', 'option');
$newsletter_title          = get_field('newsletter_title', 'option');
$newsletter_text           = get_field('newsletter_text', 'option');
$newsletter_subtitle       = get_field('newsletter_subtitle', 'option');
$newsletter_form_shortcode = get_field('newsletter_form_shortcode', 'option');
?>

<div class="bg-brown">
	<div class="main grid items-center grid-cols-1 sm:grid-cols-2 gap-10 ~pt-16/130px ~pb-16/40">
		<div class="relative">
			<h2 class="heading text-cream ~mb-6/4 sm:max-w-[500px]">
				<?php echo esc_html( $newsletter_title ); ?>
			</h2>
			<p class="text-cream/[90%] text-lg ~mb-10/55px max-w-[447px]"><?php echo esc_html( $newsletter_text ); ?></p>
			<div class="relative block sm:hidden mb-10 [&_form]:bg-cream [&_form]:grid [&_form]:gap-4 [&_form]:max-w-[360px] [&_form]:rounded-lg [&_form]:p-8 [&_form_input]:w-full [&_form_input:not(.wpcf7-submit)]:px-4 [&_form_input]:py-2.5 [&_form_input]:rounded-10 [&_form_.wpcf7-submit]:flex [&_form_.wpcf7-submit]:justify-center [&_form_.wpcf7-submit]:mt-4 [&_form_.wpcf7-submit]:cursor-pointer [&_form_.wpcf7-submit:hover]:bg-green-dark [&_form_p:last-of-type]:text-sm [&_form_p:last-of-type]:-mt-6 [&_form_a]:underline [&_form_a:hover]:text-orange [&_form_.wpcf7-response-output]:m-0">
				<?php echo do_shortcode( $newsletter_form_shortcode ); ?>
				<svg class="absolute -bottom-12 -right-5 hidden [@media(max-width:420px)]:block" width="48" height="99" viewBox="0 0 48 99" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M34.1743 2C23.307 17.2468 12.1533 34.6112 6.58325 52.5969C3.60107 62.2263 -1.57375 80.1499 5.71362 89.4377C11.9236 97.3524 23.8493 91.5143 30.1424 87.145C36.5772 82.6774 43.5076 73.9449 45.7168 66.3133C46.5395 63.4712 44.2014 62.6002 42.6335 65.2461C38.3805 72.4231 37.1395 82.3668 38.0482 90.5445C40.0607 108.657 72.5999 85.9556 79 79.5555" stroke="#F36025" stroke-width="2.5" stroke-linecap="round"/>
				</svg>
			</div>
			<h3 class="text-orange font-bold ~text-15/base ~mb-4/22px"><?php echo esc_html( $newsletter_subtitle ); ?></h3>
			<?php if ( have_rows('newsletter_list', 'option') ): ?>
				<ul class="grid gap-y-2.5">
					<?php while ( have_rows('newsletter_list', 'option') ): the_row(); 
						$list_item = get_sub_field('list_item');
						?>
							<li class="flex items-center ~gap-x-2/4">
								<svg class="shrink-0" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M17.3392 1.33897L5.50017 13.178L0.661133 8.33897L1.58921 7.41089L5.50017 11.3218L16.4111 0.410889L17.3392 1.33897Z" fill="#F36025"/>
								</svg>
								<span class="text-cream/[90%] ~text-base/lg"><?php echo esc_html( $list_item ); ?></span>
							</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<svg class="absolute top-3.5 right-14 hidden [@media(max-width:453px)]:block [@media(max-width:453px)]:top-9 [@media(max-width:453px)]:right-30px" width="54" height="44" viewBox="0 0 54 44" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.44005 42.484C5.58771 33.1859 3.73537 23.8878 1.88303 14.5897C1.17737 11.0476 1.10646 10.136 4.63068 9.43393C15.514 7.26579 26.477 5.665 37.3727 3.62628C38.2905 3.45454 46.1414 1.10047 46.6679 2.17179C48.6453 6.19562 48.72 12.2868 49.5962 16.685C50.2762 20.0986 50.9563 23.5121 51.6363 26.9257C52.3928 30.7232 51.8841 31.7885 48.1228 33.6245C37.7495 38.6881 26.8678 39.3288 15.9063 41.5125" stroke="#F36025" stroke-width="2.5" stroke-linecap="round"/>
				<path d="M8.48133 16.3131C11.0324 16.4805 14.0426 18.7511 16.3997 19.7636C19.6475 21.1587 23.0006 22.374 26.3416 23.4725C27.8562 23.9705 29.0497 24.9177 30.6538 24.5982C33.3286 24.0653 35.1401 18.9437 36.6586 16.8964C38.5323 14.3701 40.5297 11.8917 42.192 9.20038" stroke="#F36025" stroke-width="2.5" stroke-linecap="round"/>
			</svg>
		</div>
		<div class="hidden sm:block sm:justify-self-center relative [&_form]:bg-cream [&_form]:grid [&_form]:gap-4 [&_form]:max-w-[360px] [&_form]:rounded-lg [&_form]:p-8 [&_form_input]:w-full [&_form_input:not(.wpcf7-submit)]:px-4 [&_form_input]:py-2.5 [&_form_input]:rounded-10 [&_form_.wpcf7-submit]:flex [&_form_.wpcf7-submit]:justify-center [&_form_.wpcf7-submit]:mt-4 [&_form_.wpcf7-submit]:cursor-pointer [&_form_.wpcf7-submit:hover]:bg-green-dark [&_form_p:last-of-type]:text-sm [&_form_p:last-of-type]:-mt-6 [&_form_a]:underline [&_form_a:hover]:text-orange [&_form_.wpcf7-response-output]:m-0">
			<?php echo do_shortcode( $newsletter_form_shortcode ); ?>			
			<svg class="absolute bottom-24 -left-[70px] hidden lg:block" width="56" height="68" viewBox="0 0 56 68" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M23.0922 5.95492C14.3438 15.0978 3.27571 27.0406 8.93421 40.86C11.2684 46.5605 18.1683 48.7126 23.6148 50.057C29.871 51.6012 37.778 51.9342 43.5384 48.6877" stroke="#F36025" stroke-width="3" stroke-linecap="round"/>
				<path d="M36.0166 38.0339C40.9613 41.4427 45.9786 44.2086 51.2967 46.9315C53.6432 48.1329 37.0409 60.1041 36.1694 60.7952" stroke="#F36025" stroke-width="3" stroke-linecap="round"/>
			</svg>
			<svg class="absolute -right-24 bottom-[124px] hidden 2xl:block" width="64" height="52" viewBox="0 0 64 52" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.63321 50.1701C6.43768 39.1493 4.24216 28.1285 2.04663 17.1077C1.21023 12.9093 1.12618 11.8289 5.30335 10.9967C18.203 8.42687 31.1972 6.5295 44.1115 4.11306C45.1993 3.9095 54.5048 1.11929 55.1288 2.3891C57.4726 7.15842 57.5611 14.3781 58.5997 19.5912C59.4057 23.6372 60.2117 27.6832 61.0177 31.7292C61.9144 36.2303 61.3114 37.493 56.8533 39.6691C44.5581 45.6709 31.6604 46.4302 18.668 49.0185" stroke="#F36025" stroke-width="3" stroke-linecap="round"/>
				<path d="M9.86701 19.1517C12.8907 19.3503 16.4586 22.0414 19.2524 23.2415C23.102 24.8951 27.0763 26.3356 31.0363 27.6376C32.8315 28.2278 34.2461 29.3506 36.1474 28.9718C39.3177 28.3403 41.4649 22.2698 43.2647 19.8432C45.4856 16.8488 47.853 13.9112 49.8233 10.7213" stroke="#F36025" stroke-width="3" stroke-linecap="round"/>
			</svg>
			<svg class="absolute -bottom-14 -right-[101px] hidden 2xl:block" width="126" height="155" viewBox="0 0 126 155" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M52.8364 2C35.6656 26.0903 18.0425 53.5266 9.24166 81.9444C4.52974 97.1593 -3.64663 125.479 7.86762 140.154C17.6796 152.659 36.5225 143.435 46.4658 136.531C56.6328 129.472 67.5832 115.675 71.0737 103.617C72.3736 99.1262 68.6794 97.75 66.2021 101.931C59.4821 113.27 57.5214 128.982 58.9571 141.903C62.1369 170.521 113.55 134.652 123.662 124.54" stroke="#F36025" stroke-width="3" stroke-linecap="round"/>
			</svg>
		</div>
	</div>
</div>

<footer class="~pt-16/105px ~pb-33px/53px bg-[#171411]" id="colophon">
	<div class="main grid grid-cols-1 md:grid-cols-2 ~md:~gap-x-10/60 text-15 text-cream [&_a:hover]:text-cream [&_a:hover]:opacity-60">
		<div class="grid grid-cols-1 sm:grid-cols-2 ~gap-x-5/100px gap-y-12 sm:mb-60px md:mb-0">
			<?php echo wp_get_attachment_image( $footer_logo, 'full', false, ["class" => "w-[143px]"] ); ?>
			<div class="">
				<a class="block w-fit mb-4" href="<?php echo esc_url( $phone['url'] ); ?>">
					<?php echo esc_html( $phone['title'] ); ?>
				</a>
				<a class="block w-fit mb-4" href="<?php echo esc_url( 'mailto:' . antispambot( $email ) ); ?>">
					<?php echo esc_html( antispambot( $email ) ); ?>
				</a>
				<p class="mb-6"><?php echo wp_kses_post( $working_hours ); ?></p>
				<?php if ( have_rows('footer_socials', 'option') ): ?>
					<div class="flex gap-x-4 mb-12 sm:mb-0">
						<?php while ( have_rows('footer_socials', 'option') ): the_row(); 
							$link = get_sub_field('link');
							$icon = get_sub_field('icon');
							?>
								<a href="<?php echo esc_url( $link ); ?>" target="_blank">
									<?php echo wp_get_attachment_image( $icon, 'full', false, [ "class" => "rounded-none size-4" ] ); ?>
								</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="[&_ul]:grid [&_ul]:gap-y-4 [&_ul]:grid-cols-1 [&_ul]:sm:grid-cols-2 [&_ul]:~gap-x-5/100px [&_ul_li:nth-child(4)]:mb-8 [&_ul_li:nth-child(4)]:sm:mb-0">
			<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
				<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'ple' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>
		</div>
	</div>
	<div class="main max-w-[1160px] grid grid-cols-1 md:grid-cols-2 items-end ~gap-x-5/100px gap-y-10 ~mt-12/16 ~pt-4/6 text-sm text-cream/[60%] font-light border-t border-t-solid border-t-[#302D28]">
		<p class="xl:-ml-5"><?php echo wp_kses_post( $trademark ); ?></p>
		<div class="xl:-mr-5 flex ~gap-x-10/28 md:justify-evenly">
			<a class="hover:text-cream/[40%] xl:-translate-x-2px" href="<?php echo esc_url( $legal_notice['url'] ); ?>" target="<?php echo esc_attr( $legal_notice['target'] ? $legal_notice['target'] : '_self' ); ?>">
				<?php echo esc_html( $legal_notice['title'] ); ?>
			</a>
			<a class="hover:text-cream/[40%] xl:translate-x-15px" href="<?php echo esc_url( $privacy_information['url'] ); ?>" target="<?php echo esc_attr( $privacy_information['target'] ? $privacy_information['target'] : '_self' ); ?>">
				<?php echo esc_html( $privacy_information['title'] ); ?>
			</a>
		</div>
	</div>
</footer><!-- #colophon -->

<div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" class="fixed bottom-6 right-6 z-50" x-show="isVisible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2">
  	<button class="bg-[#171411] size-12 border border-solid border-[#4D4940] rounded-full flex justify-center items-center [&:hover]:bg-cream [&:hover]:border-cream transition-colors [&:hover_svg_path]:stroke-body [&_svg_path]:transition-[stroke]" title="Scroll to top" aria-label="Scroll to top" @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12 19L12 5" stroke="#ECE3CF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M5 12L12 5L19 12" stroke="#ECE3CF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
  </button>
</div>