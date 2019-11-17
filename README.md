# Personal_Portfolio
This Project is a Dynamic Personal Portfolio website created for web data management course

#steps to install 
1.download all files
2.Create database with name pet
3.Import sql file from the code
4.code is ready to run

     The World Wide Web has spread across millions of household, so Internet has become the best platform for marketing today. So the best way to market yourself is by a portfolio website. With a portfolio website anyone can showcase their skills also give all available information about themselves to the client in one place. With this resume become easy to access whenever the client wants. It also is a good way to showcase all available projects with detailed information to anyone who is interested in hiring. Hence this project is about making my own portfolio website. This will be a dynamic website,
     
     The project is aimed to build my own portfolio website for showcasing my resume. It will have various pages to display various aspects of my resume such as 
1. Homepage:
     This page will have navigation bar to easily access any part of the website. It will have option to download my resume from the database as well as the option for my resume to be directly mailed to him
2. About Me:
     This page shows all the details about me. My personal information that my employer should know about me would be displayed here
3. My skills:
     This shows all the skills that I have represented by some charts so it gets easy to understand. All skills and technologies that I know would be clubbed together according to their domain so that I gets easy to bifurcate. Example all the web technologies that I know will be shown together.
4. Resume:
     This page shows all the key aspects of my resume . It will contain a table showing all my educational qualification , all the extra curriculum activities that I was a part of , details about my previous and current work-experience
5. Projects:
     This page shows list of all the projects that I have worked on. Detailed information would be shown to the registered users only. It will have link to various website where I have posted the project such as github or the competition for which the project was made.
6. References:
     This page has all the details about my previous employers. Their name ,designation , company name , few things that they would like to say about me and their contact information would be show here for anyone to verify my previous work experience. This data will come from database so for me it gets easier to add details whenever an update is to me made.
     
7. Blogs:
     This page shows a list of blogs that I have written .My research about various topics can be posted here . links to all papers published and description about them would be show here
8. Contact Me:
     This page shows all the information needed to contact me .It also has fields which customers can fill to send me a message directly which I can later access through admin login
9. Edit Page:
     This page is for admin only where he is able to add, update ,delete fields in the database so it gets easier to update the resume.
10. Login/sign up:
     This page is for users to register to view more information about me or download my resume and also for admin to login and access admin features such as edit page
     
     This portfolio website would mainly have two type of users. First would be the admin that is me whose resume is going to be show cased . Admin when logged in using his username and password would be shown the website normally as show to everyone else . Admin would have an extra edit feature to make any changes required in the resume . Update , delete , add all functions can be done with the edit option in edit tab . The second user would be the customer who has can view my resume. Customer can register using the sign up page to be able to download my profile and also be able to view more details. For example the customer can view my project general information without registering but to see detailed information about the project would require to register using the sign up feature .

Proposed features of each account type:
Admin 
* Admin can view all the pages to know how it will look to the user
* Admin can update, delete, add new data to the table by logging in his account
Customer
* Customer can view my portfolio website
* Customer can register on website to view more details
* Customer contact me with the contact me page
* Customer can Download my resume


The website is available for guest user to view all the time but in order to download my cv the user must login or he will be prompted to the login screen with appropriate message.



User can signup with the signup page which has proper validations and errors are displayed appropriately.
Example javascript error here:







Once user profile is created the user will be sent to login page where he must login with his proper credential 


Php error will be displayed whenever required :


Once login credentials are checked the user will be directed to homepage where he can download the cv. We have used session to determine if user has logged in so accordingly login and signup would be replaced by logout.







If admin is logged in the system then he will be directed to adminpage from the loginpage . Admin can view the database on adminpage. He is also able to add , update and delete in database from adminpage.


If an entry is made to the database through admin page its gets added to the database and appropriate website data is updated dynamically .

Data gets added to database 

Also gets updated on website 

The admin can also delete data from admin page and appropriate changes will be made to database as shown above for add option.
Admin also has edit option to update the database


