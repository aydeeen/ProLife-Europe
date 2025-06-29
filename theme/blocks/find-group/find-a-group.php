<?php
/**
 * Find a Group Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title          = get_field('title');
$text           = get_field('text');
$email          = get_field('email');
$phone          = get_field('phone');
$form_shortcode = get_field('form_shortcode');
$image          = get_field('image');
$groups_title   = get_field('groups_title');
?>

<section <?php echo $id; ?> class="bg-blue xl:relative">
    <div class="wide grid px-0 md:px-5 ~py-60px/24 gap-x-10 gap-y-16 md:grid-cols-2 xl:gap-x-0">
        <div class="px-5 md:px-0 md:mx-auto">
            <h2 class="heading text-cream mb-4"><?php echo esc_html( $title ); ?></h2>
            <p class="text-[#AAB0D6] text-lg max-w-460px mb-6"><?php echo esc_html( $text ); ?></p>
            <a class="text-cream text-lg font-medium flex items-center gap-5 mb-3 hover:text-cream hover:underline" href="<?php echo esc_url( 'mailto:' . antispambot( $email ) ); ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.61328 3.5625L11.9993 13.0045L22.3843 3.5635" stroke="#ECE3CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3H3C1.89543 3 1 3.89543 1 5V19C1 20.1046 1.89543 21 3 21H21C22.1046 21 23 20.1046 23 19V5C23 3.89543 22.1046 3 21 3Z" stroke="#ECE3CF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <?php echo esc_html( antispambot( $email ) ); ?>
            </a>
            <a class="text-cream text-lg font-medium flex items-center gap-5 ~mb-10/60px hover:text-cream hover:underline" href="<?php echo esc_url( $phone['url'] ); ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_16_2644)">
                        <path d="M0.0546875 24L1.7424 17.8373C0.701378 16.0338 0.153587 13.9878 0.154437 11.8918C0.157068 5.33464 5.49377 0 12.0509 0C15.2332 0.00127 18.2202 1.23986 20.4662 3.48773C22.7123 5.73561 23.9485 8.7236 23.9473 11.9013C23.9446 18.4585 18.6075 23.7938 12.051 23.7938H12.0461C10.0551 23.793 8.09874 23.2937 6.36116 22.3463L0.0546875 24ZM6.65333 20.1932L7.0144 20.4074C8.5325 21.3081 10.2727 21.7845 12.0469 21.7852H12.051C17.5009 21.7852 21.9365 17.351 21.9387 11.9005C21.9397 9.25935 20.9122 6.77584 19.0454 4.90748C17.1785 3.03912 14.6959 2.00959 12.0549 2.00858C6.60087 2.00858 2.16519 6.44251 2.16301 11.8926C2.16225 13.7602 2.68502 15.5792 3.67479 17.153L3.90992 17.527L2.91101 21.1746L6.65333 20.1932Z" fill="#ECE3CF"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.07929 6.91901C8.83803 6.33956 8.59296 6.41796 8.4105 6.40888C8.23732 6.40026 8.03896 6.39844 7.8408 6.39844C7.64264 6.39844 7.32062 6.4728 7.04814 6.77027C6.77568 7.06776 6.00781 7.78668 6.00781 9.24927C6.00781 10.7119 7.07292 12.1249 7.22155 12.3232C7.37016 12.5215 9.31757 15.523 12.2994 16.8102C13.0086 17.1163 13.5623 17.2991 13.9939 17.4361C14.7061 17.6622 15.3541 17.6303 15.8662 17.5538C16.4373 17.4686 17.6249 16.835 17.8726 16.1408C18.1203 15.4467 18.1203 14.8518 18.046 14.7278C17.9717 14.6039 17.7735 14.5295 17.4763 14.3807C17.179 14.232 15.7176 13.5131 15.4451 13.4139C15.1726 13.3148 14.9745 13.2652 14.7763 13.5627C14.5782 13.8601 14.0085 14.5295 13.8351 14.7278C13.6618 14.9261 13.4884 14.9509 13.1911 14.8022C12.8939 14.6535 11.9361 14.3396 10.8007 13.3273C9.91711 12.5394 9.3205 11.5662 9.14711 11.2687C8.97372 10.9712 9.12867 10.8104 9.27747 10.6623C9.41117 10.5291 9.5747 10.3152 9.72333 10.1417C9.87194 9.96816 9.92149 9.84421 10.0206 9.64591C10.1197 9.44758 10.0701 9.27405 9.99579 9.12531C9.92147 8.97658 9.32701 7.51396 9.07929 6.91901Z" fill="#ECE3CF"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_16_2644">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <?php echo esc_html( $phone['title'] ); ?>
            </a>
            <div class="[&_form]:bg-cream [&_form]:grid [&_form]:gap-4 [&_form]:max-w-460px [&_form]:rounded-lg [&_form]:p-8 [&_form_input]:w-full [&_form_input:not(.wpcf7-submit)]:px-4 [&_form_input]:py-2.5 [&_form_input]:rounded-10 [&_form_.wpcf7-submit]:flex [&_form_.wpcf7-submit]:justify-center [&_form_.wpcf7-submit]:mt-4 [&_form_.wpcf7-submit]:cursor-pointer [&_form_.wpcf7-submit]:bg-[#50577F] [&_form_.wpcf7-submit:hover]:bg-[#282b3f] [&_form_p:last-of-type]:text-sm [&_form_p:last-of-type]:-mt-6 [&_form_a]:underline [&_form_a:hover]:text-orange [&_form_.wpcf7-response-output]:m-0">
                <?php echo do_shortcode( $form_shortcode ); ?>
            </div>
        </div>
        <div>
            <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'rounded-none mb-10 w-full md:~-mt-60px/24 md:translate-x-5 xl:translate-x-0 xl:max-w-[700px] xl:absolute xl:right-0' ] ); ?>
            <div class="bg-[#16182D] rounded-2xl p-5 sm:p-33px max-w-460px mx-5 md:mx-auto xl:absolute xl:right-[120px] xl:bottom-24 xl:w-full">
                <h3 class="text-orange text-lg font-medium flex items-center gap-3.5 mb-22px [@media(max-width:370px)]:justify-center">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3.482C14.937 3.482 15.285 3.493 16.445 3.546C17.1424 3.55412 17.8332 3.68233 18.487 3.925C18.965 4.10111 19.3973 4.38237 19.752 4.748C20.1176 5.10269 20.3989 5.535 20.575 6.013C20.8177 6.66685 20.9459 7.35762 20.954 8.055C21.007 9.215 21.018 9.563 21.018 12.5C21.018 15.437 21.007 15.785 20.954 16.945C20.9459 17.6424 20.8177 18.3332 20.575 18.987C20.3919 19.4615 20.1116 19.8924 19.752 20.252C19.3924 20.6116 18.9615 20.8919 18.487 21.075C17.8332 21.3177 17.1424 21.4459 16.445 21.454C15.285 21.507 14.937 21.518 12 21.518C9.063 21.518 8.715 21.507 7.555 21.454C6.85762 21.4459 6.16685 21.3177 5.513 21.075C5.035 20.8989 4.60269 20.6176 4.248 20.252C3.88237 19.8973 3.60111 19.465 3.425 18.987C3.18233 18.3332 3.05412 17.6424 3.046 16.945C2.993 15.785 2.982 15.437 2.982 12.5C2.982 9.563 2.993 9.215 3.046 8.055C3.05412 7.35762 3.18233 6.66685 3.425 6.013C3.60111 5.535 3.88237 5.10269 4.248 4.748C4.60269 4.38237 5.035 4.10111 5.513 3.925C6.16685 3.68233 6.85762 3.55412 7.555 3.546C8.715 3.493 9.063 3.482 12 3.482ZM12 1.5C9.013 1.5 8.638 1.513 7.465 1.566C6.55258 1.58486 5.6499 1.75762 4.795 2.077C4.06355 2.36017 3.3994 2.79319 2.84521 3.34824C2.29102 3.90329 1.85904 4.56811 1.577 5.3C1.25762 6.1549 1.08486 7.05758 1.066 7.97C1.013 9.138 1 9.513 1 12.5C1 15.487 1.013 15.862 1.066 17.035C1.08486 17.9474 1.25762 18.8501 1.577 19.705C1.86017 20.4365 2.29319 21.1006 2.84824 21.6548C3.40329 22.209 4.06811 22.641 4.8 22.923C5.6549 23.2424 6.55758 23.4151 7.47 23.434C8.638 23.487 9.013 23.5 12 23.5C14.987 23.5 15.362 23.487 16.535 23.434C17.4474 23.4151 18.3501 23.2424 19.205 22.923C19.9365 22.6398 20.6006 22.2068 21.1548 21.6518C21.709 21.0967 22.141 20.4319 22.423 19.7C22.7424 18.8451 22.9151 17.9424 22.934 17.03C22.987 15.862 23 15.487 23 12.5C23 9.513 22.987 9.138 22.934 7.965C22.9151 7.05258 22.7424 6.1499 22.423 5.295C22.1398 4.56355 21.7068 3.8994 21.1518 3.34521C20.5967 2.79102 19.9319 2.35904 19.2 2.077C18.3451 1.75762 17.4424 1.58486 16.53 1.566C15.362 1.513 14.987 1.5 12 1.5Z" fill="#F36025"/>
                        <path d="M12.0006 6.85156C10.8833 6.85156 9.79112 7.18287 8.86215 7.80359C7.93318 8.42431 7.20913 9.30656 6.78157 10.3388C6.35401 11.371 6.24214 12.5068 6.46011 13.6026C6.67808 14.6984 7.21609 15.705 8.00612 16.495C8.79615 17.285 9.8027 17.8231 10.8985 18.041C11.9943 18.259 13.1301 18.1471 14.1623 17.7196C15.1946 17.292 16.0768 16.568 16.6975 15.639C17.3183 14.71 17.6496 13.6178 17.6496 12.5006C17.6496 11.0024 17.0544 9.56551 15.995 8.50612C14.9356 7.44672 13.4988 6.85156 12.0006 6.85156ZM12.0006 16.1676C11.2753 16.1676 10.5663 15.9525 9.96329 15.5496C9.36025 15.1466 8.89025 14.5739 8.6127 13.9039C8.33515 13.2338 8.26253 12.4965 8.40403 11.7852C8.54552 11.0738 8.89477 10.4204 9.4076 9.9076C9.92044 9.39476 10.5738 9.04552 11.2852 8.90402C11.9965 8.76253 12.7338 8.83515 13.4039 9.1127C14.0739 9.39024 14.6466 9.86025 15.0496 10.4633C15.4525 11.0663 15.6676 11.7753 15.6676 12.5006C15.6676 13.4731 15.2812 14.4058 14.5935 15.0935C13.9058 15.7812 12.9731 16.1676 12.0006 16.1676Z" fill="#F36025"/>
                        <path d="M17.8708 7.9525C18.5998 7.9525 19.1908 7.36152 19.1908 6.6325C19.1908 5.90348 18.5998 5.3125 17.8708 5.3125C17.1418 5.3125 16.5508 5.90348 16.5508 6.6325C16.5508 7.36152 17.1418 7.9525 17.8708 7.9525Z" fill="#F36025"/>
                    </svg>
                    <?php echo esc_html( $groups_title ); ?>
                </h3>
                <?php if ( have_rows('links') ): ?>
                    <div class="grid grid-cols-2 gap-x-2.5 [@media(max-width:370px)]:grid-cols-1 [@media(max-width:370px)]:gap-y-1.5 [@media(max-width:370px)]:justify-items-center">
                        <?php while (have_rows('links')): the_row(); 
                            $link = get_sub_field('link');
                            ?>
                                <a class="text-[#AAB0D6] text-lg md:text-base lg:text-lg font-light inline-flex items-center gap-1.5 w-fit hover:text-cream" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                                    <?php echo esc_html( $link['title'] ); ?>
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.56597 10.56L0.737971 9.74998L8.45997 2.02798H0.719971V0.875977H9.70197L10.422 1.61398V10.596H9.28797V2.83798L1.56597 10.56Z" fill="#AAB0D6" fill-opacity="0.4"/>
                                    </svg>
                                </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>