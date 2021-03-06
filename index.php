<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>
			Steam user data design
		</title>

		<meta charset="utf-8" />

		<!-- adding css -->
		<link href="css/style.css" rel="stylesheet" type="text/css" />

		<!-- adding bootstrap taken from getbootstrap.com the CDN links-->

		<!-- Latest compiled and minified CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

	</head>

	<body>
		<div class="container-fluid">
		<h1>Persona</h1>
			<p>NAME: Big Ern McCracken</p>
			<p>AGE:22</p>
			<p>PROFESSION: Student and working part time as a security guard at art museum</p>
			<p>TECHNOLOGY: Using a Windows 10 desktop, a Windows 10 laptop, or a Andriod smartphone</p>
			<p>ATTITUDES & BEHAVIORS: Big Ern is usually crunched for time, especially days he has both class and work. However, when posting a review for a game, Ern prefers to choose a time where he isn't rushed and is able to compose his thoughts. In short, posting a game review isn't an urgent matter, and Ern likes to do so in his downtime</p>
			<p>FRUSTRATIONS & NEEDS: Ern needs to be able to post a game review in a situation where he can constuct his thoughts without being rushed, and then upload the review to steampowered.com. Most of all he needs the review interface to be simple, and easy to use.</p>
			<p>GOALS: Big Ern is only concerned with being able to easily post a game review to the steam website at a time of his choosing, and do so in a simple and straight-forward way.</p>

			<p>Big Ern McCraken is a user of the steam website, and owner of a particular game which is featured on steam. They have played the game for a fair amount of time, and would now like to post a review to the steam website regarding the game they have played</p>
			<p> This person will be accessing the steam website using a microsoft laptop or desktop</p>
			<p> typical demographic for this user is generally from ages 15-40, gender irrelevant</p>
		<hr>
		<h1>Use Case</h1>
			<p> Big Ern McCracken is 20 years old and enjoys playing computer games in his free time. It's about 1630, he has just gotten home from school and has a couple hours to relax. Ern has been playing a particular game for the past couple weeks, and figures it would be a good time to write a review. Ern logs into the steam website (The same platform he buys the majority of his digital copies of games), and would like to take the next 30 minutes to compose a game review.</p>
		<h1>User Story</h1>
			<ul>
				<li><strong>Who:</strong> Big Ern McCracken</li>
				<li><strong>What:</strong> Posting a game review to steampowered.com</li>
				<li><strong>When:</strong> 1630</li>
				<li><strong>Why:</strong> Because he has played the game and wants to review it</li>
				<li><strong>Where:</strong> At home on his Windows 10 desktop</li>
			</ul>

		<hr>
		<h1>Interaction Flow</h1>
			<h3>Posting a game review</h3>
			<ol>
				<li> User clicks on 'login' on steam website </li>
				<li> User enters userName and password</li>
				<li> User clicks 'sign in'</li>
				<li> User clicks on search field and enters name of game they wish to review </li>
				<li> User selects game from search results list</li>
				<li> User scrolls down and types review into "write a review for ____" field</li>
				<li> User clicks on button to either recommend game, or not recommend game</li>
				<li> User clicks on post review</li>
			</ol>
		<!--
			<h3>Posting a comment to a review</h3>
			<ol>
				<li>User clicks on 'login' on steam website</li>
				<li> User enters userName and password</li>
				<li> User clicks 'sign in'</li>
				<li> User clicks on search field and enters name of game they wish to review </li>
				<li> User selects game from search results list</li>
				<li> User scrolls down to find review they wish to comment on</li>
				<li> User clicks on review(thumbs up/down icon)</li>
				<li> User user types text into empty field</li>
				<li> User clicks "Post Comment" icon to publish review</li>
			</ol>
			-->
		<hr>
		<h1>Conceptual Model</h1>
			<ul>
			<li>a user can post a single review per game</li>
			<li>a user can post multiple game reviews</li>
			<li>a user can like/dislike/mark-funny multiple game reviews</li>
			<li>a user can see all reviews posted about a game</li>
			<br>
			<li>a game can have multiple reviews posted about it</li>
			<li>a game review can be liked/disliked/marked-funny||inappropriate by multiple people</li>
			</ul>
			<br>


		<h2>user</h2>
			<ul>
				<li>userId</li>
				<li>userHandle</li>
				<li>userImage</li>
				<li>userEmail</li>
				<li>userSalt</li>
				<li>userHash</li>
			</ul>

		<h2>review</h2>
			<ul>
				<li>reviewDate</li>
				<li>reviewContent</li>
				<li>reviewId</li>
				<li>reviewRecommendation</li>
				<li>reviewUserId</li>


			</ul>

		<h2>input</h2>
			<ul>
				<li>inputHelpful</li>
				<li>inputFunny</li>
				<li>inputUserId</li>
				<li>inputReviewId</li>
			</ul>
			<br>
		<br>
		<hr>
		</div>
	</body>

</html>



