<?php

if ( ! defined( 'ABSPATH' ) ) die( 'restricted access' );

class WP_REST_API_Log_Activator {


	public static function activate() {

		WP_REST_API_Log_DB::create_or_update_tables();

	}


}