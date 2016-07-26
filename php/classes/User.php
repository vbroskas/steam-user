<?php

require_once("autoload.php");

/**
 * class User, for a steam user
 * This class contains all mutators & accessors for the User class
 * @author Loren Baca
 */


class User {

	/**
	 * id for this is userId
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
	 * accessor method for userHandle
	 * @return str|NULL value for userHandle
	 */
	public function getUserhandle(){
		return($this->userHandle);
	}


	/**
	 * accessor method for userEmail
	 * @return string|NULL value for userEmail
	 */
	public function getUserEmail(){
		return($this->userEmail);
	}


	/**
	 * accessor method for userImage file name
	 * @return string|NULL value for userImage
	 */
	public function getUserImage(){
		return($this->userImage);
	}

	//DO I NEED AN ACCESSOR FOR SALT AND HASH??????????????????



	/**
	 * mutator method for user ID
	 * this mutator will scrub & set the incoming profile ID to ensure it is clean
	 * and is an INT
	 * @param INT|NULL $newUserId new value for userId
	 * @throws \RangeException if newUserId is negatie
	 * @throws \TypeError if newUserId is not an integer
	 */
public function setUserId(int $newUserId = null){
	//base case if the userId is null, this is a new user without mySQL assignment
	if($newUserId === null){
		$this->userId = null;
		return;
	}

	//check if userId is positive
	if($newUserId <= 0){
		throw(new \RangeException("user ID is not positive!"));
	}

	//convert and store the userId
	$this->userId = $newUserId;

	}



	/**
	 * mutator method for userEmail
	 * @param string, $newUserEmail new value of userEmail
	 * @throws \InvalidArgumentException if $newUserEmail is not a string or is insecure
	 * @throws \RangeException if $newUserEmail is longer than 128 char
	 * @throws \TypeError if $newUserEmail is not a string
	 **/
	public function setUserEmail(string $newUserEmail){
		//verify the email is secure
		$newUserEmail = trim($newUserEmail);
		$newUserEmail = filter_var($newUserEmail, FILTER_SANITIZE_EMAIL);

		//check if email input is empty
		if(empty($newUserEmail)=== true){
			throw(new \InvalidArgumentException("User Email is empty"));
		}

		// verify length of email
		if(strlen($newUserEmail)> 128){
			throw(new \RangeException("User email is too long"));
		}

		//store the new email
		$this->userEmail = $newUserEmail;
	}



	/**
	 * mutator method for userImage
	 * @param string, $newUserImage is the variable for updating userImage
	 * @throws \InvalidArgumentException if $newUserImage is not a secure string
	 * @throws \RangeException if $newUserImage is too long
	 * @throws \TypeError if $newUserImage is not a string
	 **/
	public function setUserImage(string $newUserImage){
		//verify the image file name is secure
		$newUserImage = trim($newUserImage);
		$newUserImage = filter_var($newUserImage, FILTER_SANITIZE_STRING);

		//check if filename empty
		if(empty($newUserImage)=== true){
			throw(new \InvalidArgumentException("file name is empty"));
		}

		//verify the file name isnt too long
		if(strlen($newUserImage)> 32){
			throw(new \RangeException("File name is too long"));
		}

		//store the new user image
		$this->userImage = $newUserImage;
	}



	/**
	 * mutator method to assign/update user handle
	 * @param string, $newUserHandle used to update userHandle
	 * @throw \RangeException if $newUserHandle is empty or too long
	 * @throw \InvalidArgumentException if $newUserHandle is not a string
	 * @throw \TypeError if $newUserHandle is not a string
	 */
	public function setNewUserHandle(string $newUserHandle){
		//clean up string input
		$newUserHandle = trim($newUserHandle);
		// strip out tags
		$newUserHandle = filter_var($newUserHandle, FILTER_SANITIZE_STRING);
		//check if handle is empty or too long
		if(empty($newUserHandle)=== true || (strlen($newUserHandle)> 32)){
			throw(new \RangeException("user handle is either empty or longer than 32 characters"));
		}
		//assign new user handle
		$this->userHandle = $newUserHandle;
	}










}