<?php
namespace Edu\Cnm\Lbaca152\SteamUser;
require_once("autoload.php");

/**
 * Class review
 * this class contains all state variables, accessors, and methods pertaining to the process of
 * writing a game review on steam
 * @author Loren Baca <lbaca152@cnm.edu>
 */

class Review {
	use ValidateDate; // <--- correct??

	/**
	 * primary key for this class is reviewId
	 * @var int $reviewId
	 */
	private $reviewId;

}