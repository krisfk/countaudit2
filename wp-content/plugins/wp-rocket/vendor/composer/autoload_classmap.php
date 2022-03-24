<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Imagify_Partner' => $baseDir . '/inc/vendors/classes/class-imagify-partner.php',
    'Minify_CSS_UriRewriter' => $baseDir . '/inc/vendors/classes/class-minify-css-urirewriter.php',
    'Minify_HTML' => $baseDir . '/inc/vendors/classes/class-minify-html.php',
    'WP_Async_Request' => $vendorDir . '/wp-media/background-processing/wp-async-request.php',
    'WP_Background_Process' => $vendorDir . '/wp-media/background-processing/wp-background-process.php',
    'WP_Rocket\\Abstract_Render' => $baseDir . '/inc/classes/class-abstract-render.php',
    'WP_Rocket\\Admin\\Abstract_Options' => $baseDir . '/inc/classes/admin/class-abstract-options.php',
    'WP_Rocket\\Admin\\Database\\Optimization' => $baseDir . '/inc/classes/admin/Database/class-optimization.php',
    'WP_Rocket\\Admin\\Database\\Optimization_Process' => $baseDir . '/inc/classes/admin/Database/class-optimization-process.php',
    'WP_Rocket\\Admin\\Deactivation\\Render' => $baseDir . '/inc/classes/admin/deactivation/class-render.php',
    'WP_Rocket\\Admin\\Logs' => $baseDir . '/inc/classes/admin/class-logs.php',
    'WP_Rocket\\Admin\\Options' => $baseDir . '/inc/classes/admin/class-options.php',
    'WP_Rocket\\Admin\\Options_Data' => $baseDir . '/inc/classes/admin/class-options-data.php',
    'WP_Rocket\\Admin\\Settings\\Beacon' => $baseDir . '/inc/classes/admin/settings/class-beacon.php',
    'WP_Rocket\\Admin\\Settings\\Page' => $baseDir . '/inc/classes/admin/settings/class-page.php',
    'WP_Rocket\\Admin\\Settings\\Render' => $baseDir . '/inc/classes/admin/settings/class-render.php',
    'WP_Rocket\\Admin\\Settings\\Settings' => $baseDir . '/inc/classes/admin/settings/class-settings.php',
    'WP_Rocket\\Buffer\\Abstract_Buffer' => $baseDir . '/inc/classes/Buffer/class-abstract-buffer.php',
    'WP_Rocket\\Buffer\\Cache' => $baseDir . '/inc/classes/Buffer/class-cache.php',
    'WP_Rocket\\Buffer\\Config' => $baseDir . '/inc/classes/Buffer/class-config.php',
    'WP_Rocket\\Buffer\\Optimization' => $baseDir . '/inc/classes/Buffer/class-optimization.php',
    'WP_Rocket\\Buffer\\Tests' => $baseDir . '/inc/classes/Buffer/class-tests.php',
    'WP_Rocket\\Busting\\Abstract_Busting' => $baseDir . '/inc/classes/busting/class-abstract-busting.php',
    'WP_Rocket\\Busting\\Busting_Factory' => $baseDir . '/inc/classes/busting/class-busting-factory.php',
    'WP_Rocket\\Busting\\Facebook_Pickles' => $baseDir . '/inc/classes/busting/class-facebook-pickles.php',
    'WP_Rocket\\Busting\\Facebook_SDK' => $baseDir . '/inc/classes/busting/class-facebook-sdk.php',
    'WP_Rocket\\Busting\\File_Busting' => $baseDir . '/inc/classes/busting/trait-file-busting.php',
    'WP_Rocket\\Busting\\Google_Analytics' => $baseDir . '/inc/classes/busting/class-google-analytics.php',
    'WP_Rocket\\Busting\\Google_Tag_Manager' => $baseDir . '/inc/classes/busting/class-google-tag-manager.php',
    'WP_Rocket\\CDN\\CDN' => $baseDir . '/inc/classes/CDN/CDN.php',
    'WP_Rocket\\CDN\\RocketCDN\\APIClient' => $baseDir . '/inc/classes/CDN/RocketCDN/APIClient.php',
    'WP_Rocket\\CDN\\RocketCDN\\CDNOptionsManager' => $baseDir . '/inc/classes/CDN/RocketCDN/CDNOptionsManager.php',
    'WP_Rocket\\Cache\\Expired_Cache_Purge' => $baseDir . '/inc/classes/Cache/class-expired-cache-purge.php',
    'WP_Rocket\\Event_Management\\Event_Manager' => $baseDir . '/inc/classes/event-management/class-event-manager.php',
    'WP_Rocket\\Event_Management\\Event_Manager_Aware_Subscriber_Interface' => $baseDir . '/inc/classes/event-management/event-manager-aware-subscriber-interface.php',
    'WP_Rocket\\Event_Management\\Subscriber_Interface' => $baseDir . '/inc/classes/event-management/subscriber-interface.php',
    'WP_Rocket\\Interfaces\\Render_Interface' => $baseDir . '/inc/classes/interfaces/class-render-interface.php',
    'WP_Rocket\\Logger\\HTML_Formatter' => $baseDir . '/inc/classes/logger/class-html-formatter.php',
    'WP_Rocket\\Logger\\Logger' => $baseDir . '/inc/classes/logger/class-logger.php',
    'WP_Rocket\\Logger\\Stream_Handler' => $baseDir . '/inc/classes/logger/class-stream-handler.php',
    'WP_Rocket\\Optimization\\Abstract_Optimization' => $baseDir . '/inc/classes/optimization/class-abstract-optimization.php',
    'WP_Rocket\\Optimization\\Assets_Local_Cache' => $baseDir . '/inc/classes/optimization/class-assets-local-cache.php',
    'WP_Rocket\\Optimization\\CSS\\Abstract_CSS_Optimization' => $baseDir . '/inc/classes/optimization/CSS/class-abstract-css-optimization.php',
    'WP_Rocket\\Optimization\\CSS\\Combine' => $baseDir . '/inc/classes/optimization/CSS/class-combine.php',
    'WP_Rocket\\Optimization\\CSS\\Combine_Google_Fonts' => $baseDir . '/inc/classes/optimization/CSS/class-combine-google-fonts.php',
    'WP_Rocket\\Optimization\\CSS\\Critical_CSS' => $baseDir . '/inc/classes/optimization/CSS/class-critical-css.php',
    'WP_Rocket\\Optimization\\CSS\\Critical_CSS_Generation' => $baseDir . '/inc/classes/optimization/CSS/class-critical-css-generation.php',
    'WP_Rocket\\Optimization\\CSS\\Minify' => $baseDir . '/inc/classes/optimization/CSS/class-minify.php',
    'WP_Rocket\\Optimization\\CSS\\Path_Rewriter' => $baseDir . '/inc/classes/optimization/CSS/trait-path-rewriter.php',
    'WP_Rocket\\Optimization\\Cache_Dynamic_Resource' => $baseDir . '/inc/classes/optimization/class-cache-dynamic-resource.php',
    'WP_Rocket\\Optimization\\JS\\Abstract_JS_Optimization' => $baseDir . '/inc/classes/optimization/JS/class-abstract-js-optimization.php',
    'WP_Rocket\\Optimization\\JS\\Combine' => $baseDir . '/inc/classes/optimization/JS/class-combine.php',
    'WP_Rocket\\Optimization\\JS\\Minify' => $baseDir . '/inc/classes/optimization/JS/class-minify.php',
    'WP_Rocket\\Optimization\\Remove_Query_String' => $baseDir . '/inc/classes/optimization/class-remove-query-string.php',
    'WP_Rocket\\Plugin' => $baseDir . '/inc/classes/class-plugin.php',
    'WP_Rocket\\Preload\\Abstract_Preload' => $baseDir . '/inc/classes/preload/class-abstract-preload.php',
    'WP_Rocket\\Preload\\Full_Process' => $baseDir . '/inc/classes/preload/class-full-process.php',
    'WP_Rocket\\Preload\\Homepage' => $baseDir . '/inc/classes/preload/class-homepage.php',
    'WP_Rocket\\Preload\\Partial_Process' => $baseDir . '/inc/classes/preload/class-partial-process.php',
    'WP_Rocket\\Preload\\Process' => $baseDir . '/inc/classes/preload/class-abstract-process.php',
    'WP_Rocket\\Preload\\Sitemap' => $baseDir . '/inc/classes/preload/class-sitemap.php',
    'WP_Rocket\\ServiceProvider\\Admin_Subscribers' => $baseDir . '/inc/classes/ServiceProvider/class-admin-subscribers.php',
    'WP_Rocket\\ServiceProvider\\Beacon' => $baseDir . '/inc/classes/ServiceProvider/class-beacon.php',
    'WP_Rocket\\ServiceProvider\\Common_Subscribers' => $baseDir . '/inc/classes/ServiceProvider/class-common-subscribers.php',
    'WP_Rocket\\ServiceProvider\\Database' => $baseDir . '/inc/classes/ServiceProvider/class-database.php',
    'WP_Rocket\\ServiceProvider\\Hostings_Subscribers' => $baseDir . '/inc/classes/ServiceProvider/class-hostings-subscribers.php',
    'WP_Rocket\\ServiceProvider\\Lazyload' => $baseDir . '/inc/classes/ServiceProvider/class-lazyload.php',
    'WP_Rocket\\ServiceProvider\\Optimization_Subscribers' => $baseDir . '/inc/classes/ServiceProvider/class-optimization-subscribers.php',
    'WP_Rocket\\ServiceProvider\\Options' => $baseDir . '/inc/classes/ServiceProvider/class-options.php',
    'WP_Rocket\\ServiceProvider\\Preload_Subscribers' => $baseDir . '/inc/classes/ServiceProvider/class-preload-subscribers.php',
    'WP_Rocket\\ServiceProvider\\RocketCDN' => $baseDir . '/inc/classes/ServiceProvider/RocketCDN.php',
    'WP_Rocket\\ServiceProvider\\Settings' => $baseDir . '/inc/classes/ServiceProvider/class-settings.php',
    'WP_Rocket\\ServiceProvider\\Third_Party_Subscribers' => $baseDir . '/inc/classes/ServiceProvider/class-third-party-subscribers.php',
    'WP_Rocket\\ServiceProvider\\Updater_Subscribers' => $baseDir . '/inc/classes/ServiceProvider/class-updater-subscribers.php',
    'WP_Rocket\\Subscriber\\Admin\\Database\\Optimization_Subscriber' => $baseDir . '/inc/classes/subscriber/admin/Database/class-optimization-subscriber.php',
    'WP_Rocket\\Subscriber\\Admin\\Deactivation\\Deactivation_Intent_Subscriber' => $baseDir . '/inc/classes/subscriber/admin/Deactivation/class-deactivation-intent-subscriber.php',
    'WP_Rocket\\Subscriber\\Admin\\Settings\\Beacon_Subscriber' => $baseDir . '/inc/classes/subscriber/admin/Settings/class-beacon-subscriber.php',
    'WP_Rocket\\Subscriber\\Admin\\Settings\\Page_Subscriber' => $baseDir . '/inc/classes/subscriber/admin/Settings/class-page-subscriber.php',
    'WP_Rocket\\Subscriber\\CDN\\CDNSubscriber' => $baseDir . '/inc/classes/subscriber/CDN/CDNSubscriber.php',
    'WP_Rocket\\Subscriber\\CDN\\RocketCDN\\AdminPageSubscriber' => $baseDir . '/inc/classes/subscriber/CDN/RocketCDN/AdminPageSubscriber.php',
    'WP_Rocket\\Subscriber\\CDN\\RocketCDN\\DataManagerSubscriber' => $baseDir . '/inc/classes/subscriber/CDN/RocketCDN/DataManagerSubscriber.php',
    'WP_Rocket\\Subscriber\\CDN\\RocketCDN\\NoticesSubscriber' => $baseDir . '/inc/classes/subscriber/CDN/RocketCDN/NoticesSubscriber.php',
    'WP_Rocket\\Subscriber\\CDN\\RocketCDN\\RESTSubscriber' => $baseDir . '/inc/classes/subscriber/CDN/RocketCDN/RESTSubscriber.php',
    'WP_Rocket\\Subscriber\\Cache\\Expired_Cache_Purge_Subscriber' => $baseDir . '/inc/classes/subscriber/Cache/class-expired-cache-purge-subscriber.php',
    'WP_Rocket\\Subscriber\\Cache\\PurgeActionsSubscriber' => $baseDir . '/inc/classes/subscriber/Cache/PurgeActionsSubscriber.php',
    'WP_Rocket\\Subscriber\\Facebook_Tracking_Cache_Busting_Subscriber' => $baseDir . '/inc/classes/subscriber/class-facebook-tracking-cache-busting-subscriber.php',
    'WP_Rocket\\Subscriber\\Google_Tracking_Cache_Busting_Subscriber' => $baseDir . '/inc/classes/subscriber/class-google-tracking-cache-busting-subscriber.php',
    'WP_Rocket\\Subscriber\\Heartbeat_Subscriber' => $baseDir . '/inc/classes/subscriber/class-heartbeat-subscriber.php',
    'WP_Rocket\\Subscriber\\Media\\Webp_Subscriber' => $baseDir . '/inc/classes/subscriber/Media/class-webp-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Buffer_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-buffer-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Cache_Dynamic_Resource_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-cache-dynamic-resource-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Combine_Google_Fonts_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-combine-google-fonts-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Critical_CSS_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-critical-css-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Dequeue_JQuery_Migrate_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-dequeue-jquery-migrate-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\IE_Conditionals_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-ie-conditionals-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Lazyload_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-lazyload-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Minify_CSS_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-minify-css-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Minify_HTML_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-minify-html-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Minify_JS_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-minify-js-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Minify_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-abstract-minify-subscriber.php',
    'WP_Rocket\\Subscriber\\Optimization\\Remove_Query_String_Subscriber' => $baseDir . '/inc/classes/subscriber/Optimization/class-remove-query-string-subscriber.php',
    'WP_Rocket\\Subscriber\\Plugin\\Capabilities_Subscriber' => $baseDir . '/inc/classes/subscriber/Plugin/class-capabilities-subscriber.php',
    'WP_Rocket\\Subscriber\\Plugin\\Information_Subscriber' => $baseDir . '/inc/classes/subscriber/Plugin/class-information-subscriber.php',
    'WP_Rocket\\Subscriber\\Plugin\\Updater_Api_Common_Subscriber' => $baseDir . '/inc/classes/subscriber/Plugin/class-updater-api-common-subscriber.php',
    'WP_Rocket\\Subscriber\\Plugin\\Updater_Subscriber' => $baseDir . '/inc/classes/subscriber/Plugin/class-updater-subscriber.php',
    'WP_Rocket\\Subscriber\\Preload\\Partial_Preload_Subscriber' => $baseDir . '/inc/classes/subscriber/preload/class-partial-preload-subscriber.php',
    'WP_Rocket\\Subscriber\\Preload\\Preload_Subscriber' => $baseDir . '/inc/classes/subscriber/preload/class-preload-subscriber.php',
    'WP_Rocket\\Subscriber\\Preload\\Sitemap_Preload_Subscriber' => $baseDir . '/inc/classes/subscriber/preload/class-sitemap-preload-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Hostings\\Litespeed_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/Hostings/class-litespeed-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Hostings\\Pressable_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/Hostings/class-pressable-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Ecommerce\\BigCommerce_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/ecommerce/class-bigcommerce-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Ecommerce\\WooCommerce_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/ecommerce/class-woocommerce-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\EWWW_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-ewww-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Imagify_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-imagify-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Optimus_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-optimus-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\ShortPixel_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-shortpixel-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Webp_Common' => $baseDir . '/inc/classes/subscriber/third-party/plugins/Images/Webp/trait-webp-common.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Webp_Interface' => $baseDir . '/inc/classes/subscriber/third-party/plugins/Images/Webp/webp-interface.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Mobile_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/class-mobile-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\NGG_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/class-ngg-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Optimization\\Hummingbird_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/Optimization/class-hummingbird-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\PageBuilder\\Elementor_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/PageBuilder/class-elementor-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Security\\Sucuri_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/security/class-sucuri-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Smush_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/class-smush-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\SyntaxHighlighter_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/plugins/class-syntaxhighlighter-subscriber.php',
    'WP_Rocket\\Subscriber\\Third_Party\\Themes\\Bridge_Subscriber' => $baseDir . '/inc/classes/subscriber/third-party/Themes/class-bridge-subscriber.php',
    'WP_Rocket\\Subscriber\\Tools\\Cache_Dir_Size_Check_Subscriber' => $baseDir . '/inc/classes/subscriber/Tools/class-cache-dir-size-check-subscriber.php',
    'WP_Rocket\\Subscriber\\Tools\\Detect_Missing_Tags_Subscriber' => $baseDir . '/inc/classes/subscriber/Tools/class-detect-missing-tags-subscriber.php',
    'WP_Rocket\\Traits\\Config_Updater' => $baseDir . '/inc/classes/traits/trait-config-updater.php',
    'WP_Rocket\\Traits\\Memoize' => $baseDir . '/inc/classes/traits/trait-memoize.php',
    'WP_Rocket\\Traits\\Updater_Api_Tools' => $baseDir . '/inc/classes/traits/trait-updater-api-tools.php',
);
