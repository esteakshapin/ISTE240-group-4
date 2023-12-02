<?php
	$page="Quiz";
	include("assets/inc/header.php");
?>
	<link rel="stylesheet" href="style.css">
	<script src="quiz.js"></script>
    <div id="form">
		<h2>Test your Unix knowledge!</h2>

		<form name="UnixForm" onsubmit="return validateForm()" action="results.php"   method="post">
			<p>Name:  <input type="text" name="name"></p>
			<h1>Lesson/Concept: Filesystem and Navigation</h1>
			<p>What denotes the root of a filesystem?<br>
				<input type="radio" name ="answer1" value = "A" id="1a"><label for="1a">\<label><br>
				<input type="radio" name ="answer1" value = "B" id="1b"><label for="1b">C:/<label><br>
				<input type="radio" name ="answer1" value = "C"  id="1c"><label for="1c">/<label><br>
				<input type="radio" name ="answer1" value = "D"  id="1d"><label for="1d">root:<label>
			</p>
			<p>What type of path is used to create a file in a location relative to the root directory (not the current working directory)<br>
				<input type="radio" name ="answer2" value = "A" id="2a"><label for="2a">absolute path<label><br>
				<input type="radio" name ="answer2" value = "B" id="2b"><label for="2b">relative path<label><br>
				<input type="radio" name ="answer2" value = "C"  id="2c"><label for="2c">specific path<label><br>
				<input type="radio" name ="answer2" value = "D"  id="2d"><label for="2d">root path<label>
			</p>
			<p>What command allows the user to change their working
directory<br>
				<input type="radio" name ="answer3" value = "A" id="3a"><label for="3a">pwd<label><br>
				<input type="radio" name ="answer3" value = "B" id="3b"><label for="3b">touch<label><br>
				<input type="radio" name ="answer3" value = "C"  id="3c"><label for="3c">rn<label><br>
				<input type="radio" name ="answer3" value = "D"  id="3d"><label for="3d">cd<label>
			</p>
			<p>What command is used to print all files and folders in a currently
directory (including hidden files)?<br>
				<input type="radio" name ="answer4" value = "A" id="4a"><label for="4a">listdir<label><br>
				<input type="radio" name ="answer4" value = "B" id="4b"><label for="4b">ls -h<label><br>
				<input type="radio" name ="answer4" value = "C"  id="4c"><label for="4c">ls -a<label><br>
				<input type="radio" name ="answer4" value = "D"  id="4d"><label for="4d">pwd<label>
			</p>
			<p>What denotes a user's home folder?'<br>
				<input type="radio" name ="answer5" value = "A" id="5a"><label for="5a">/usr/Home/<label><br>
				<input type="radio" name ="answer5" value = "B" id="5b"><label for="5b">/home/<label><br>
				<input type="radio" name ="answer5" value = "C"  id="5c"><label for="5c">~<label><br>
				<input type="radio" name ="answer5" value = "D"  id="5d"><label for="5d">/<label>
			</p>
			<h1>Lesson/Concept: File Manipulation</h1>
			<p>What command removes a file from a directory?<br>
				<input type="radio" name ="answer6" value = "A" id="6a"><label for="6a">rm<label><br>
				<input type="radio" name ="answer6" value = "B" id="6b"><label for="6b">del<label><br>
				<input type="radio" name ="answer6" value = "C"  id="6c"><label for="6c">rmv<label><br>
				<input type="radio" name ="answer6" value = "D"  id="6d"><label for="6d">mv<label>
			</p>
			<p>What command is optimal for moving a file that you also need to
rename?<br>
				<input type="radio" name ="answer7" value = "A" id="7a"><label for="7a">rn -m<label><br>
				<input type="radio" name ="answer7" value = "B" id="7b"><label for="7b">rname<label><br>
				<input type="radio" name ="answer7" value = "C"  id="7c"><label for="7c">chgname -mv<label><br>
				<input type="radio" name ="answer7" value = "D"  id="7d"><label for="7d">mv<label>
			</p>
			<p>When would you use the cp command?<br>
				<input type="radio" name ="answer8" value = "A" id="8a"><label for="8a">To copy a file<label><br>
				<input type="radio" name ="answer8" value = "B" id="8b"><label for="8b">To count pages<label><br>
				<input type="radio" name ="answer8" value = "C"  id="8c"><label for="8c">To change passwords <label><br>
				<input type="radio" name ="answer8" value = "D"  id="8d"><label for="8d">To conserve power<label>
			</p>
			<p>Which is NOT an advantage of CLI interfaces?<br>
				<input type="radio" name ="answer9" value = "A" id="9a"><label for="9a">Typically lower resource overhead<label><br>
				<input type="radio" name ="answer9" value = "B" id="9b">Typically easier to use for tech illiterate users<label for="9b">rname<label><br>
				<input type="radio" name ="answer9" value = "C"  id="9c">Typically less complicated to code<label for="9c"><label><br>
				<input type="radio" name ="answer9" value = "D"  id="9d">Typically less graphics APIs needed<label for="9d"><label>
			</p>
			<h1>Lesson/Concept: User Management and Permissions</h1>
			</p>
			<p>What are the three entities that have permissions to a file?<br>
				<input type="radio" name ="answer10" value = "A" id="10a"><label for="10a">owner, admins, operators<label><br>
				<input type="radio" name ="answer10" value = "B" id="10b"><label for="10b">the owner, root, and users<label><br>
				<input type="radio" name ="answer10" value = "C"  id="10c"><label for="10c">the owner, the user group, and everyone else. <label><br>
				<input type="radio" name ="answer10" value = "D"  id="10d"><label for="10d">the owner, editors, readers<label>
			</p>
			<p>What command is used to swap ownership of a file or folder?<br>
				<input type="radio" name ="answer11" value = "A" id="11a"><label for="11a">chmod<label><br>
				<input type="radio" name ="answer11" value = "B" id="11b"><label for="11b">chown<label><br>
				<input type="radio" name ="answer11" value = "C"  id="11c"><label for="11c">the chsudo <label><br>
				<input type="radio" name ="answer11" value = "D"  id="11d"><label for="11d">chusr<label>
			</p>
			<p>Which command allows you to change the permissions of a file or
folder?<br>
				<input type="radio" name ="answer12" value = "A" id="12a"><label for="12a">chmod<label><br>
				<input type="radio" name ="answer12" value = "B" id="12b"><label for="12b">chown<label><br>
				<input type="radio" name ="answer12" value = "C"  id="12c"><label for="12c">the chsudo <label><br>
				<input type="radio" name ="answer12" value = "D"  id="12d"><label for="12d">chusr<label>
			</p>
			<p>What are the three permission types?<br>
				<input type="radio" name ="answer13" value = "A" id="13a"><label for="13a">read, edit, delete<label><br>
				<input type="radio" name ="answer13" value = "B" id="13b"><label for="13b">read, write, copy<label><br>
				<input type="radio" name ="answer13" value = "C"  id="13c"><label for="13c">read, edit, share<label><br>
				<input type="radio" name ="answer13" value = "D"  id="13	d"><label for="13d">read, write, execute<label>
			</p>
			<p>
				<input type="submit"  name="Submit"  value="Submit">
			</p>
		</form>
	</div>
<?php
	include("assets/inc/footer.php");
?>
