<?php
/**
 * Theme Header Section for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main" class="clearfix"> <div class="inner-wrap">
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<?php
	/**
	 * Functions hooked into colormag_action_head action.
	 *
	 * @hooked colormag_head - 10
	 */
	do_action( 'colormag_action_head' );



	wp_head();
	?>
	<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
	<script async src="/wp-content/themes/colormag/js/prebid.js"></script>
	<script>
	window.prebidAdUnits = [
			{
				// aditude_test1
				code: 'ptran-top-leaderboard',
				mediaTypes: {
						banner: {
								sizes: [[970, 250]],
						},
				}
		},
		{
        // aditude_test2
        code: 'ptran-sidebar-top',
        mediaTypes: {
            banner: {
                sizes: [[300, 250]],
            },
        }
    },
		{
        // aditude_test3
        code: 'ptran-sidebar-mid',
        mediaTypes: {
            banner: {
                sizes: [[300, 600], [300, 250]],
            },
        }
    }
	];

	var bidders = [
		{
				 bidder: 'rhythmone',
				 params: {
						 placementId: '238205',
				 },
		},
		{
					bidder: '33across',
					params: {
							siteId: 'a3U8Oug8Or7ik1aKlKyvbs',
							productId: 'siab',
					},
			},
			{
					bidder: 'pubmatic',
					params: {
							publisherId: '160912',
					},
			}
	];

	var PREBID_TIMEOUT = 2500;
	var FAILSAFE_TIMEOUT = 3e3;

	var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  googletag.cmd.push(function() {
      googletag.pubads().disableInitialLoad();
  });

  var pbjs = pbjs || {};
  pbjs.que = pbjs.que || [];

  pbjs.que.push(function() {
			window.prebidAdUnits.map(function(slot) {
				slot.bids = bidders;
			});

      pbjs.addAdUnits(window.prebidAdUnits);
			pbjs.setConfig({
        priceGranularity: "high",
    	});
      pbjs.requestBids({
          bidsBackHandler: initAdserver,
          timeout: PREBID_TIMEOUT
      });
  });

  function initAdserver() {
      if (pbjs.initAdserverSet) return;
      pbjs.initAdserverSet = true;
      googletag.cmd.push(function() {
          pbjs.que.push(function() {
              pbjs.setTargetingForGPTAsync();
              googletag.pubads().refresh();
          });
      });
  }

  setTimeout(function() {
      initAdserver();
  }, FAILSAFE_TIMEOUT);

	googletag.cmd.push(function() {
		googletag.defineSlot('/22360860229/Aditude/aditude_test1', [[970, 250]], 'ptran-top-leaderboard').addService(googletag.pubads());
		googletag.defineSlot('/22360860229/Aditude/aditude_test2', [[300, 250]], 'ptran-sidebar-top').addService(googletag.pubads());
		googletag.defineSlot('/22360860229/Aditude/aditude_test3', [[300, 250], [300, 600]], 'ptran-sidebar-mid').addService(googletag.pubads());
		googletag.pubads().enableSingleRequest();
		googletag.enableServices();
	});
	</script>
</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();

/**
 * Hook: colormag_before.
 */
do_action( 'colormag_before' );


/**
 * Functions hooked into colormag_action_before action.
 *
 * @hooked colormag_page_start - 10
 * @hooked colormag_skip_content_link - 15
 */
do_action( 'colormag_action_before' );


/**
 * Hook: colormag_before_header.
 */
do_action( 'colormag_before_header' );


/**
 * Functions hooked into colormag_action_before_header action.
 *
 * @hooked colormag_header_start - 10
 */
do_action( 'colormag_action_before_header' );


/**
 * Functions hooked into colormag_action_before_inner_header action.
 *
 * @hooked colormag_header_nav_container_start - 10
 */
do_action( 'colormag_action_before_inner_header' );


/**
 * Functions hooked into colormag_action_header action.
 *
 * @hooked colormag_header - 10
 */
do_action( 'colormag_action_header' );


/**
 * Functions hooked into colormag_action_after_inner_header action.
 *
 * @hooked colormag_header_image_before_nav_container_end - 5
 * @hooked colormag_header_nav_container_end - 10
 */
do_action( 'colormag_action_after_inner_header' );


/**
 * Functions hooked into colormag_action_after_header action.
 *
 * @hooked colormag_header_end - 10
 */
do_action( 'colormag_action_after_header' );


/**
 * Hook: colormag_after_header.
 */
do_action( 'colormag_after_header' );


/**
 * Hook: colormag_before_main.
 */
do_action( 'colormag_before_main' );


/**
 * Functions hooked into colormag_action_before_content action.
 *
 * @hooked colormag_main_section_start - 10
 */
do_action( 'colormag_action_before_content' );


/**
 * Functions hooked into colormag_action_before_inner_content action.
 *
 * @hooked colormag_main_section_inner_start - 10
 */
do_action( 'colormag_action_before_inner_content' );

/**
 * Functions hooked into colormag_action_top_leaderboard.
 *
 * @hooked colormag_main_section_top_leaderboard - 10
 */
do_action( 'colormag_action_top_leaderboard' );
