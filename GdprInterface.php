<?php
/**
 *  * GDPR interface
 *
 * @package GDPR Interface
 * @author  gdprwp.com
 */

interface GdprInterface
{

	/**
	 * Returns the version of the used gdpr interface. Currently is it 1.0.0
	 *
	 * @return int $version_number
	 */
	public function get_gdpr_version();

	/**
	 * Data Portability
	 * Returns an array of userdata given an user id
	 *
	 * @var string $email
	 * @return array $userdata
	 */
	public function read_userdata( $user_email );

	/**
	 * The Right to be Forgotten
	 * Completely deletes and/or anonymises a user, including
	 * all personal and sensitive information given an user id
	 *
	 * @var string $email
	 * @return array $deleted_data
	 */
	public function delete_userdata( $user_email ) ;

	/**
	 * Anonymize is also a way to forget a user, but still keep the userdata for statistics ect.
	 * It ca be done, by hashing sentitive data.
	 *
	 * @var string $email
	 * @return array $anonymize_data
	 */
	public function anonymize_userdata( $user_email );

	/**
	 * Returns a string containing the privacy policy for the
	 * plugin.
	 *
	 * @return string
	 */
	public function policy();

}
