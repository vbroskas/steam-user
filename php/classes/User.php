<?php

/**
 * Created by PhpStorm.
 * User: L
 * Date: 7/23/2016
 * Time: 10:41 AM
 */
class User {

	/**
	 * class User, for a steam user
	 * This class contains all mutators & accessors for the User class
	 * @author Loren Baca
	 */

	/**
	 * id for this user
	 * this is the primary key
	 * @var userId
	 **/
	private $userId;


	/**
	 * email attached to the user account
	 * @var $userEmail
	 **/
	private $userEmail;


	/**
	 * image used for the user profile
	 * @var $userImage
	 **/
	private $userImage;


	/**
	 * handle name used by user
	 * @var $userhandle
	 **/
	private $userHandle;


	/**
	 * hash for user password
	 * @var $userhash
	 **/
	private $userHash;


	/**
	 * salt for user password
	 * @var userSalt
	 **/
	private $userSalt;



	/**
	 * accessor method for userId
	 * @return int|NULL value of userId
	 **/
	public function getUserId(){
		return($this->userId);
	}


	/**
	 * mutator method for user ID
	 * this mutator will scrub the incoming profile ID to ensure it is clean
	 * and is an INT
	 * @param INT|NULL $newUserId new value for userId
	 * @throws \RangeException if newUserId is negatie
	 * @throws \TypeError if newUserId is not an integer
	 */
public function setUserId(int $newUserId = null){


}



}