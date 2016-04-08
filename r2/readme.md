files needed:
			index.php
			uploader.php
			uploader folder



index.php:
A form was made in php format that connects to the uploader.php file.
We want to make sure that the method is set to post.
next we want to add 3 type of input:
			text
			file
			submit



uploader.php:
A function was made to respond to the submission of the file from index.php.
when the submit button is entered,
if the files submitted are not jpg, png, pdf, gif, txt, or jpeg... send a error message.
once the file type is verified, upload the file to the uploader folder.



uploaderFolder:
this file will store all uploaded file after the type is verified. (jpg, png, pdf, gif, txt, or jpeg)

note:
	make uploader for video files
	add more commenting to make it easier for my team to understand whats going on.
	change "uploader.php" file name to "upload.php"
	change "uploaderFolder" file name to "uploadFolder"
	Add more bootstrap class, to input and/or form
