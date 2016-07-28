<?php
namespace Edu\Cnm\Lbaca152\SteamUser;
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
	 * constructor for User class
	 * @param INT|NULL $newUserId is new value for userId
	 * @param string, $newUserEmail new value of userEmail
	 * @param string, $newUserImage is the variable for updating userImage
	 * @param string, $newUserHandle used to update userHandle
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 */
	public function __construct(int $newUserId = null, string $newUserEmail, string $newUserImage, string $newUserhandle) {
		try {

				$this-> setUserId($newUserId);
				$this-> setUserEmail($newUserEmail);
				$this-> setUserHandle($newUserhandle);
				$this-> setUserImage($newUserImage);
		} catch(\RangeException $range) {
			//catching range exception
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\InvalidArgumentException $invalidArg) {
			// catching invalid argument exception
			throw(new \InvalidArgumentException($invalidArg->getMessage(), 0, $invalidArg));
		} catch(\TypeError $typeError) {
			//catching type error
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception){
			//catching base exception
			throw(new \Exception($exception->getMessage(),0,$exception));
			}
		}



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
	 **/
	public function getUserImage(){
		return($this->userImage);
	}

	/**
	 * accessor method for getting userSalt
	 * @return string|null
	 **/
	public function getUserSalt(){
		return($this->userSalt);
	}

	/**
	 * accessor method for getting userHash
	 * @return string|null
	 **/
	public function getUserHash(){
		return($this->userHash);
	}
	//DO I NEED AN ACCESSOR FOR SALT AND HASH??????????????????



	/**
	 * mutator method for user ID
	 * this mutator will scrub & set the incoming profile ID to ensure it is clean
	 * and is an INT
	 * @param INT|NULL $newUserId is new value for userId
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
	public function setUserHandle(string $newUserHandle){
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




	/**
	 * insert this User into mySQL
	 *
	 * @param \PDO $pdo, is the PDO connection object
	 * @throws \PDOException when \mysqli_sql_exception occurs
	 * @throws \TypeError if $pdo is not a PDO object
	 */
	public function insert(\PDO $pdo){
		//ensure the userId is null, dont insert a userId that already exists
		if($this->userId !== null){
			throw(new \PDOException("This is not a new userId!"));
		}

		//create query template
		$query = "INSERT INTO user(userHandle, userImage, userEmail) VALUES(:userHandle, :userImage, :userEmail)";
		$statement = $pdo->prepare($query);

		//Bind the member variables into the placeholders inside the template

		//define parameteres
		$parameters = ["userHandle" => $this->userHandle, "userImage" => $this->userImage, "userEmail" => $this->userEmail];
		//now bind the parameters
		$statement->execute($parameters);

		//Now update the null placeholder userId with what mySQL just gave us
		$this->userId = intval($pdo->lastInsertId());


	}

}