<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>

		</title>
	</head>

	<body>
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

		<h1>Use Case</h1>
			<p> Big Ern McCracken is 20 years old and enjoys playing computer games in his free time. It's about 1630, he has just gotten home from school and has a couple hours to relax. Ern has been playing a particular game for the past couple weeks, and figures it would be a good time to write a review. Ern logs into the steam website (The same platform he buys the majority of his digital copies of games), and would like to take the next 30 minutes to compose a game review.</p>
		<h1>User Story</h1>
			<ul>
				<li>WHO: Big Ern McCracken</li>
				<li>WHAT: Posting a game review to steampowered.com</li>
				<li>WHEN: 1630</li>
				<li>WHY: Because he has played the game and wants to review it</li>
				<li>WHERE: At home on his Windows 10 desktop</li>
			</ul>


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

		<h1>Conceptual Model</h1>
			<ul>
			<li>a user can post a single review per game</li>
			<li>a user can post multiple game reviews</li>
			<li>a user can like/dislike/mark-funny||inappropriate multiple game reviews</li>
			<li>a user can see all reviews posted about a game</li>
			<li>a user can leave multiple comments about another users review</li>
			<br>
			<li>a game can have multiple reviews posted about it</li>
			<li>a game review can be liked/disliked/marked-funny||inappropriate by multiple people</li>
			<li>a game shows all reviews posted about it</li>
			<li>a game's reviews can be filtered by 'all', 'most-helpful', 'recent', 'positive', 'negative', 'funny'</li>
			<br>
			<li>a review can be written by a single user</li>
			<li>a review can have comments by multiple users, multiple times</li>
			<li>a certain review can only be written for a certain game</li>
			</ul>
			<br>
			<h3>Entities for a posted review on game homepage</h3>
			<ol>
				<li>REVIEW STATS--Displays # and % of users who found the review helpful, shows # of users who found review funny</li>
				<li>COMMENTS ICON--Displays # of comments posted about that particular review</li>
				<li>USER ICON--Displays avatar, userHandle, numOfGamesOwned, numOfReviews</li>
				<li>USER RECOMMENDATION--Thumbs up/down icon && numHoursPlayed</li>
				<li>REVIEW BODY--Date Reivew was posted && content of review</li>
				<li>BOTTOM FEEDBACK ICONS--"was this review helpful?" YES/NO/FUNNY icons</li>

			</ol>
			<br>
		<h3>Entities for a selected game review</h3>
		<ol>
			<li>USER ICON--Displays avatar</li>
			<li>USER HANDLE--Displays user handle >> reviews >> selected game</li>
			<li>REVIEW STATS--Displays # and % of users who found the review helpful, shows # of users who found review funny</li>
			<li>USER RECOMMENDATION--Thumbs up/down icon && numHoursPlayed</li>
			<li>REVIEW BODY--Date Reivew was posted && content of review</li>
			<li>BOTTOM FEEDBACK ICONS--"was this review helpful?" YES/NO/FUNNY/FLAG INAPROPPRIATE icons</li>
			<li>THREAD INFO--numOfComments, checkbox(Subscribe to thread), ?(hover-icon)</li>
			<li>EMPTY FIELD--add comment to thread</li>
			<li>POSTED COMMENTS--shows user avatar, userName, dateCommentPosted, commentText</li>
		</ol>




		</ol>



	</body>

</html>



