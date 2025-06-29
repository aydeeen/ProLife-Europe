import fluid, { extract, screens, fontSize } from 'fluid-tailwind';

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: {
		files: ['./theme/**/*.php'],
		extract,
	},
	blocklist: [
		'size-full',
	  ],
	theme: {
		screens,
		fontSize,
		extend: {
			fontFamily: {
				sans: ['"DM Sans"', 'sans-serif'],
			},
			screens: {
				xs: '24.375rem',
			},
			fontSize: {
				13: '0.813rem',
				15: '0.938rem',
				19: '1.188rem',
				21: '1.313rem',
				26: '1.625rem',
				28: '1.75rem',
				32: '2rem',
				34: '2.125rem',
				38: '2.375rem',
				40: '2.5rem',
				44: '2.75rem',
				54: '3.375rem',
				56: '3.5rem',
				62: '3.875rem',
				64: '4rem',
				80: '5rem',
				85: '5.313rem',
				87: '5.438rem',
				88: '5.5rem',
				89: '5.563rem',
				90: '5.625rem',
				150: '9.375rem',
				170: '10.625rem',
				185: '11.563rem',
				240: '15rem',
			},
			lineHeight: {
				18: '1.125rem',
				34: '2.125rem',
				36: '2.25rem',
				38: '2.375rem',
				40: '2.5rem',
				44: '2.75rem',
				48: '3rem',
				54: '3.375rem',
				56: '3.5rem',
				60: '3.75rem',
				62: '3.875rem',
				64: '4rem',
				72: '4.5rem',
				80: '5rem',
				85: '5.313rem',
				87: '5.438rem',
				88: '5.5rem',
				90: '5.625rem',
				96: '6rem',
				110: '6.875rem',
				112: '7rem',
				128: '8rem',
				170: '10.625rem',
				180: '11.25rem',
				185: '11.563rem',
			},
			spacing: {
				'2px': '0.125rem',
				'3px': '0.188rem',
				'5px': '0.313rem',
				'15px': '0.938rem',
				'18px': '1.125rem',
				'22px': '1.375rem',
				'26px': '1.625rem',
				'28px': '1.75rem',
				'30px': '1.875rem',
				'33px': '2.063rem',
				'50px': '3.125rem',
				'52px': '3.25rem',
				'53px': '3.313rem',
				'55px': '3.438rem',
				'60px': '3.75rem',
				'62px': '3.875rem',
				'67px': '4.188rem',
				'68px': '4.25rem',
				'75px': '4.688rem',
				'83px': '5.188rem',
				'85px': '5.313rem',
				'88px': '5.5rem',
				'93px': '5.813rem',
				'100px': '6.25rem',
				'103px': '6.438rem',
				'105px': '6.563rem',
				'108px': '6.75rem',
				'110px': '6.875rem',
				'115px': '7.188rem',
				'120px': '7.5rem',
				'125px': '7.813rem',
				'130px': '8.125rem',
				'138px': '8.625rem',
				'150px': '9.375rem',
				'165px': '10.313rem',
				'170px': '10.625rem',
				'90%': '90%'
			},
			letterSpacing: {
				1: '0.063rem',
				2: '0.125rem',
				3: '0.188rem',
				4: '0.25rem',
				5: '0.313rem',
				6: '0.375rem',
				8: '0.5rem',
				10: '0.625rem',
				11: '0.688rem',
				20: '1.25rem',
			},
			borderRadius: {
				'10': '0.625rem',
				'20': '1.25rem',
			},
			width: {
				'84px': '5.25rem',
				'150px': '9.375rem',
				'264px': '16.5rem',
				'460px': '28.75rem',
				'560px': '35rem'
			},
			maxWidth: {
				'150px': '9.375rem',
				'460px': '28.75rem',
				'560px': '35rem',
				'660px': '41.25rem',
				'960px': '60rem'
			},
			animation: {
				marquee: 'marquee 25s linear infinite',
				marquee2: 'marquee2 25s linear infinite',
				fadeIn: 'fade-in 1s ease-in-out 0.25s 1 forwards',
			},
			keyframes: {
				marquee: {
				  '0%': { transform: 'translateX(0%)' },
				  '100%': { transform: 'translateX(-100%)' },
				},
				marquee2: {
				  '0%': { transform: 'translateX(100%)' },
				  '100%': { transform: 'translateX(0%)' },
				},
				"fade-in": {
					"0%": {
						opacity: 0
					},
					"100%": {
						opacity: 1
					},
				},	
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		fluid({
			checkSC144: false, // default: true
		}),
		require('@_tw/typography'),
		require('@_tw/themejson'),
	],
};
