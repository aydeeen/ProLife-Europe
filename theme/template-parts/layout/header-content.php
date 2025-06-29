<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ple
 */

$logo        = get_field('logo', 'option');
$logo_mobile = get_field('logo_mobile', 'option');
$link  		 = get_field('link', 'option');
$button      = get_field('button', 'option');
?>

<header id="masthead" class="bg-cream">
	<div class="wide">
		<nav id="site-navigation" x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="flex items-center justify-between py-4" aria-label="<?php esc_attr_e( 'Main Navigation', 'ple' ); ?>">
			<a href="<?php echo esc_url( $link['url'] ); ?>" rel="home" role="button" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>" class="max-xl:mr-auto" :class="mobileMenuIsOpen ? 'fixed left-6 top-4 z-[1000]' : null">
				<img x-cloak x-show="!mobileMenuIsOpen" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
				<img x-cloak x-show="mobileMenuIsOpen" src="<?php echo esc_url( $logo_mobile['url'] ); ?>" alt="<?php echo esc_attr( $logo_mobile['alt'] ); ?>" />
			</a>

			<div class="hidden items-center xl:gap-x-6 xl:flex">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container'       => '',
							'items_wrap'     => '<ul id="%1$s" class="hidden items-center xl:gap-8 xl:flex [&_a]:text-body [&_li#menu-item-992]:hidden" aria-label="menu">%3$s</ul>',
						)
					);
				?>
				
				<div class="[&_.wpml-ls]:w-fit [&_.wpml-ls-sub-menu]:border-none [&_a]:!bg-transparent [&_a]:!border-none [&_a]:text-15 [&_a]:!text-[rgba(44,28,18,1)]/[45%] [&_a]:font-bold [&_a:after]:text-green [&_.wpml-ls:hover_a:after]:rotate-180 [&_.wpml-ls:hover_a:after]:top-[calc(50%-10px)] [&_.wpml-ls-sub-menu]:w-fit [&_.wpml-ls-sub-menu]:bg-white [&_.wpml-ls-sub-menu]:p-2.5 [&_.wpml-ls-sub-menu]:rounded-10 [&_.wpml-ls-sub-menu_li:hover_a]:!text-green">
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
			</div>

			<div class="xl:hidden [&_.wpml-ls]:w-fit [&_.wpml-ls-sub-menu]:border-none [&_a]:!bg-transparent [&_a]:!border-none [&_a]:text-15 [&_a]:!text-[rgba(44,28,18,1)]/[45%] [&_a]:font-bold [&_a:after]:text-green [&_.wpml-ls:hover_a:after]:rotate-180 [&_.wpml-ls:hover_a:after]:top-[calc(50%-10px)] [&_.wpml-ls-sub-menu]:w-fit [&_.wpml-ls-sub-menu]:bg-white [&_.wpml-ls-sub-menu]:p-2.5 [&_.wpml-ls-sub-menu]:rounded-10 [&_.wpml-ls-sub-menu_li:hover_a]:!text-green">
				<?php do_action('wpml_add_language_selector'); ?>
			</div>

			<a class="max-xl:mx-5 btn <?php if ( is_page(916) ) echo 'opacity-30 pointer-events-none' ?>" href="<?php echo esc_url( $button["url"] ); ?>" role="button">
				<?php echo esc_html( $button["title"] ); ?>
			</a>

			<button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" :class="mobileMenuIsOpen ? 'fixed right-6 top-[30px] z-20' : null" type="button" class=" flex z-[1000] xl:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
				<svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 text-body">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
				<svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8 text-cream">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
				</svg>
			</button>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container'       => '',
						'items_wrap'     => '<ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh h-full overflow-y-auto inset-x-0 top-0 z-[999] flex flex-col items-center gap-9 px-6 pt-100px pb-130px bg-[#212649] xl:hidden [&_a]:text-2xl [&_a]:font-bold [&_a:focus]:underline [&_a]:text-[#ECE3CF]">%3$s</ul>',
					)
				);
			?>
		</nav>
	</div>
</header>


