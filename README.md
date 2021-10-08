# Captcha-and-timer-enabled-form
A Basic Form with Timer and Captcha Verification Enabled 
-----------------------------------------------------------------
Make Sure that you download the two file named :  test.php and aelum.css and put both in the htdocs folder. 
Also, dont forget to enable apache before accessing the test.php file through localhost/test.php in your browser. 
----------------Regarding the Databse--------------------
Kindly provide your MYSQL username and password to the $username and $password variable, for the code to get connected with your localhost server. 
A Databse named 'aelum' will be created in the server. 
A Table named 'formEntries' will be created in the database 'aelum'. This Table consists of four columns viz 'Name', 'Email', 'DOB', 'About_Yourself'. 
--------------------Regarding Captcha-----------------------
I have used BotDetect PHP CAPTCHA Generator, which is a Self-hosted PHP Captcha library i.e. no 3rd-party servers involved and thus more security. 
As BotDetect is Self-hosted, therefore you need to put some files and put them in your htdocs folder.
BotDetect Download Package: https://captcha.com/captcha-download.html?version=php 
Copy botdetect.php and the botdetect folder to your website folder. These files are included in the BotDetect download package (the lib sub-folder).
----------------------------------------------------------------------------------------------------------------------------------
Not we are ready to run test.php through our browser by writing localhost/test.php in the address bar. 
