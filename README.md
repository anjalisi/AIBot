# AI Recruiter
We aim to make the recruitment process easier for both the Applicants and the recruiters and increase diversity in the workplace. Our questionaire section would shortlist candidates for the recruiter.

## The problem AI Recruiter solves
One of the tracks of the competition was diversity. One of the things we felt while researching on this topic was that
humans tend to have unintentional biases in their minds and that sometimes might affect their decision making skills. Many a times eligible candidates lose the opportunity to work for a great company because of the recruiter's bias. There is also a gap between the recruiters and the applicants as according to statistics 51% of the resumes are never reviewed. Hence we plan on bridging this very gap with our machine based interview system that shortlists the candidates by asking them a set of questions. The whole interview process is very hectic for the recruiter 
as he needs to cater to a large number of candidates and sometimes resume screening is not very affective. Applicants also need transparency in their interview process.

## How would you deploy the web application on your system?

### Step 1: Downloading Softwares

Make sure you have a platform to run the PHP files. You can download XAMPP or MAMP. <br>
MAMP link: https://www.mamp.info/en/downloads/ <br>
XAMPP link: https://www.apachefriends.org/download.html

### Step 2: Make the database

Once you have downloaded and configured the softwares, you need to create a database, as per the connection file. <b>(connect.php)</b>

**connect.php**
```
<?php
$pdo = new PDO('mysql:host=localhost;port=3307;dbname=hackjaipur', 'test', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

```
As you can see here, our server was running on *port number 3307*, whereas the default is *3306*. You can change this in the file, else the connection will not be made.<br>
You have to create a database, using the following command: 

```
CREATE DATABASE hackjaipur;
GRANT ALL ON hackjaipur.* TO 'test'@'localhost' IDENTIFIED BY 'root';
GRANT ALL ON hackjaipur.* TO 'test'@'127.0.0.1' IDENTIFIED BY 'root';

```

After you are done creating the database, you can import the **hackjaipur.sql** in your database. It will automatically import all the tables along with some sample data.

### Step 3: Clone the repository, download the files
After you have downloaded all the files, you are all set to go. 
