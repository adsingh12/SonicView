##### Sonic View Entertainment Portal 
## Summary: The Sonic View Entertainment Portal is a groundbreaking platform designed to simplify the user experience in digital entertainment. Tired of juggling multiple subscriptions for music, movies, and games, users can now revel in a seamless, all-in-one solution. This abstract offers a brief overview of the project report, encapsulating the problem statement, and detailing the straightforward technological approach to solving it. 
## Problem Statement: The contemporary digital entertainment landscape is cluttered with numerous standalone platforms, necessitating users to navigate through a maze of apps and manage disparate accounts for music, movies, and games. This challenge prompted the creation of the Sonic View Entertainment Portal, aiming to eliminate the hassles associated with app switching and subscription management.
## Prerequisites for this PHP project include XAMPP, a free and open-source cross-platform web server solution stack. XAMPP includes Apache HTTP Server, MariaDB (MySQL), PHP, and Perl, providing a local development environment for PHP projects. Ensure XAMPP is installed and running on your system, providing the necessary server environment for hosting and testing PHP scripts. Additionally, basic knowledge of HTML, CSS, and PHP programming languages is recommended for understanding and modifying the project code. With XAMPP installed and basic web development knowledge, you can effectively set up and work with this PHP project.
## Organization or File Systems:
Directories:
•	admin: This directory contains the code files for admin page for the website which include the following functionality files:
o	config: config file is responsible for connection to the database and proving error details in case its not connected with an error code or name.
o	ft: These scripts import jQuery, Popper.js, and Bootstrap JavaScript libraries for enhanced functionality and styling in web development.
o	header: used to show a header for the admin page on all subpages.
o	Index: just points to the header page.
o	login: This PHP script handles user login functionality. It validates user credentials against a database, logs users in if credentials match, and redirects them to the homepage. If credentials are invalid, it displays an error message.
o	logout: Logs user out and destroy the session.
o	Newsletter: This PHP script fetches and displays email addresses of registered users for newsletter subscription from the database.
o	registeradmin: This PHP script displays a registration form for adding admin users to the Cross Cinema website. Upon form submission, it securely stores the admin's username and hashed password in the database.
o	valinewpost: This PHP script handles the submission of a movie form, processing form data and uploading movie files to the server.
o	adding games, movies, music and deleting the same
o	gamelist, movielist, musiclist as the name give a list of all the games, movies and music respectively.

•	css: This CSS directory styles various elements of the website, including background, navigation, hero section, movie details, newsletter section, footer, and form components, enhancing visual appeal and readability. It also used the owl.theme and owl.carousel.
•	games: This directory contains the actual data(.exe) for the games that a user will need to download the files for the games.
•	images: This directory contains the actual data(.jpeg) for the images that are shown on the website and can be downloaded.
•	js: This directory contains all the javascript code that is needed in the website, we have not used much javascript so it just contains the owl.theme and owl.carousel js part.
•	movies: This directory contains the actual data(.mp4) for the movies that are shown on the website and can be viewed.
•	music: This directory contains the actual data(.mp3) for the music that are shown on the website.
•	thumb: This directory contains all the thumbnails for movies, music and games that admin can upload to point at in the code which is visible as an icon on the website.
Files:
•	ajax: it uses ajax which allows for asynchronous communication between  web server and  web page, enabling dynamic content updates without full page reloads.
•	allgames: This HTML showcases PC and mobile games, fetching data from the database and displaying game images and names accordingly.
•	allmovies: this HTML displays all movies, fetching data from the database and showcasing movie images and names accordingly.
•	allmusic: This HTML  displays all music, allowing users to select songs from a playlist. When a song is clicked, AJAX fetches and displays the song details without reloading the page.
•	config: This PHP script initiates session and database connections, enabling session management and database operations throughout the application.
•	faq: This HTML file contains a FAQ section with questions and answers about Sonic View Entertainment. It utilizes Bootstrap for styling and jQuery for toggling the display of answers.
•	footer: This HTML and CSS code creates a footer section for the website. The footer includes navigation links, social media icons, and copyright information. 
•	games: This HTML and PHP code displays details about a specific game, including its name, image, type, year, size, and genre. Users can download the game by clicking on the provided link. The header and footer sections are included using PHP include statements.
•	header: This code defines a header section with a navigation menu, logo, and user action button. The navigation menu contains links to different sections of the website such as home, movies, music, and games. If a user is logged in, their name and subscription type are displayed with a logout option. If not logged in, a login button is shown.help:
•	help: This HTML file includes a form styled with CSS, which collects user input. Upon submission, it displays a success message.
•	index: This HTML file contains a website layout with a Bootstrap-based design. It includes a header, a banner section with a carousel slider, sections for upcoming movies, music, and games, and a newsletter subscription form at the bottom.
•	login: This PHP script serves as a login page for the "Magic Marvels" website. Users can enter their credentials, and if validated, they are redirected to the index page.
•	logout: This PHP script starts a session, destroys it, and then redirects the user to the index.php page. It effectively logs the user out of their current session.
•	movie: This HTML code displays details about a movie identified by its ID. It includes a video player to watch the movie, along with its name, description, language, category, and genre. The header and footer are included using PHP.
•	music: This HTML code displays details about a music track identified by its ID. It includes the music track's name, description, language, category, and genre. Additionally, it provides an option to download the music track. The header and footer are included using PHP.
•	privacy: This HTML code presents a Privacy Policy page for a website. It includes sections detailing the information collected, its usage, and third-party links. 
•	signup: This HTML code creates a user registration form. It allows users to enter their first name, last name, email, and password. Upon submission, the data is inserted into the database.
•	term: This HTML code creates a Terms of Use page for a website. It outlines the terms and conditions for using the website, including the informational and entertainment nature of the content, restrictions on distribution or reproduction of content, and disclaimer of responsibility for third-party websites.


