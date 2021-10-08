# Captcha-and-timer-enabled-form
A Basic Form with Timer and Captcha Verification Enabled <br>
----------------------------------------------------------------- <br>
Make Sure that you download the two file named :  test.php and aelum.css and put both in the htdocs folder. <br>
Also, dont forget to enable apache before accessing the test.php file through localhost/test.php in your browser. <br>
----------------Regarding the Databse--------------------<br>
Kindly provide your MYSQL username and password to the $username and $password variable, for the code to get connected with your localhost server. <br>
A Databse named 'aelum' will be created in the server. <br>
A Table named 'formEntries' will be created in the database 'aelum'. This Table consists of four columns viz 'Name', 'Email', 'DOB', 'About_Yourself'. <br>
--------------------Regarding Captcha-----------------------<br>
I have used BotDetect PHP CAPTCHA Generator, which is a Self-hosted PHP Captcha library i.e. no 3rd-party servers involved and thus more security. <br>
As BotDetect is Self-hosted, therefore you need to put some files and put them in your htdocs folder.<br>
BotDetect Download Package: https://captcha.com/captcha-download.html?version=php <br>
Copy botdetect.php and the botdetect folder to your website folder. These files are included in the BotDetect download package (the lib sub-folder).<br>
----------------------------------------------------------------------------------------------------------------------------------<br>
Not we are ready to run test.php through our browser by writing localhost/test.php in the address bar. <br>
