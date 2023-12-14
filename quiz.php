<?php
	$page="Quiz";
	include("assets/inc/header.php");
?>
	<link rel="stylesheet" href="style.css">
	<script src="quiz.js"></script>
    <div id="form">
		<h1>Test your Unix knowledge!</h1>

		<form name="UnixForm" onsubmit="return validateForm()" action="results.php"   method="post">
			<p>Name:  <input type="text" name="name"></p>
			<h2 class="quizunit">Lesson/Concept: Filesystem and Navigation</h2>
			<p class="quizquestion">What denotes the root of a filesystem?</p>
				<input type="radio" name ="answer1" value = "A" id="1a">\<br>
				<input type="radio" name ="answer1" value = "B" id="1b">C:/<br>
				<input type="radio" name ="answer1" value = "C"  id="1c">/<br>
				<input type="radio" name ="answer1" value = "D"  id="1d">root:
			<p class="quizquestion">What type of path is used to create a file in a location relative to the root directory (not the current working directory)</p>
				<input type="radio" name ="answer2" value = "A" id="2a">absolute path<br>
				<input type="radio" name ="answer2" value = "B" id="2b">relative path<br>
				<input type="radio" name ="answer2" value = "C"  id="2c">specific path<br>
				<input type="radio" name ="answer2" value = "D"  id="2d">root path
			<p class="quizquestion">What command allows the user to change their working
directory</p>
				<input type="radio" name ="answer3" value = "A" id="3a">pwd<br>
				<input type="radio" name ="answer3" value = "B" id="3b">touch<br>
				<input type="radio" name ="answer3" value = "C"  id="3c">rn<br>
				<input type="radio" name ="answer3" value = "D"  id="3d">cd
			<p class="quizquestion">What command is used to print all files and folders in a currently
directory (including hidden files)?</p>
				<input type="radio" name ="answer4" value = "A" id="4a">listdir<br>
				<input type="radio" name ="answer4" value = "B" id="4b">ls -h<br>
				<input type="radio" name ="answer4" value = "C"  id="4c">ls -a<br>
				<input type="radio" name ="answer4" value = "D"  id="4d">pwd
			<p class="quizquestion">What denotes a user's home folder?</p>
				<input type="radio" name ="answer5" value = "A" id="5a">/usr/Home/<br>
				<input type="radio" name ="answer5" value = "B" id="5b">/home/<br>
				<input type="radio" name ="answer5" value = "C"  id="5c">~<br>
				<input type="radio" name ="answer5" value = "D"  id="5d">/
			<h2 class="quizunit">Lesson/Concept: File Manipulation</h2>
			<p class="quizquestion">What command removes a file from a directory?</p>
				<input type="radio" name ="answer6" value = "A" id="6a">rm<br>
				<input type="radio" name ="answer6" value = "B" id="6b">del<br>
				<input type="radio" name ="answer6" value = "C"  id="6c">rmv<br>
				<input type="radio" name ="answer6" value = "D"  id="6d">mv
			<p class="quizquestion">What command is optimal for moving a file that you also need to
rename?</p>
				<input type="radio" name ="answer7" value = "A" id="7a">rn -m<br>
				<input type="radio" name ="answer7" value = "B" id="7b">rname<br>
				<input type="radio" name ="answer7" value = "C"  id="7c">chgname -mv<br>
				<input type="radio" name ="answer7" value = "D"  id="7d">mv
			<p class="quizquestion">When would you use the cp command?</p>
				<input type="radio" name ="answer8" value = "A" id="8a">To copy a file<br>
				<input type="radio" name ="answer8" value = "B" id="8b">To count pages<br>
				<input type="radio" name ="answer8" value = "C"  id="8c">To change passwords <br>
				<input type="radio" name ="answer8" value = "D"  id="8d">To conserve power
			<p class="quizquestion">Which is NOT an advantage of CLI interfaces?</p>
				<input type="radio" name ="answer9" value = "A" id="9a">Typically lower resource overhead<br>
				<input type="radio" name ="answer9" value = "B" id="9b">Typically easier to use for tech illiterate usersrname<br>
				<input type="radio" name ="answer9" value = "C"  id="9c">Typically less complicated to code<br>
				<input type="radio" name ="answer9" value = "D"  id="9d">Typically less graphics APIs needed
			<h2 class="quizunit">Lesson/Concept: User Management and Permissions</h2>
			<p class="quizquestion">What are the three entities that have permissions to a file?</p>
				<input type="radio" name ="answer10" value = "A" id="10a">owner, admins, operators<br>
				<input type="radio" name ="answer10" value = "B" id="10b">the owner, root, and users<br>
				<input type="radio" name ="answer10" value = "C"  id="10c">the owner, the user group, and everyone else. <br>
				<input type="radio" name ="answer10" value = "D"  id="10d">the owner, editors, readers
			<p class="quizquestion">What command is used to swap ownership of a file or folder?</p>
				<input type="radio" name ="answer11" value = "A" id="11a">chmod<br>
				<input type="radio" name ="answer11" value = "B" id="11b">chown<br>
				<input type="radio" name ="answer11" value = "C"  id="11c">the chsudo <br>
				<input type="radio" name ="answer11" value = "D"  id="11d">chusr
			<p class="quizquestion">Which command allows you to change the permissions of a file or
folder?</p>
				<input type="radio" name ="answer12" value = "A" id="12a">chmod<br>
				<input type="radio" name ="answer12" value = "B" id="12b">chown<br>
				<input type="radio" name ="answer12" value = "C"  id="12c">the chsudo <br>
				<input type="radio" name ="answer12" value = "D"  id="12d">chusr
			<p class="quizquestion">What are the three permission types?</p>
				<input type="radio" name ="answer13" value = "A" id="13a">read, edit, delete<br>
				<input type="radio" name ="answer13" value = "B" id="13b">read, write, copy<br>
				<input type="radio" name ="answer13" value = "C"  id="13c">read, edit, share<br>
				<input type="radio" name ="answer13" value = "D"  id="13d">read, write, execute<br><br>
				<input type="submit"  name="Submit"  value="Submit">
		</form>
	</div>
<?php
	include("assets/inc/footer.php");
?>
