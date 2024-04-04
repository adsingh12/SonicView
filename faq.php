<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<title>Sonic View</title>
    <style>
        
        /* Styling for the FAQ section */
        body {
            font-family: Arial, sans-serif;
         background: hsl(207, 19%, 11%);
            color: #FFFFFF;
            text-align: center;
        }

        .faq-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .question {
            font-weight: bold;
            cursor: pointer;
            background: #c9b1b159;
    padding: 10px;
        }

        .answer {
            display: none;
            
        }
        .faq-item {
    margin: 10px 0;
    
}
.answer {
    display: none;
    background: #b5b6b78f;
    padding: 15px 0;
}
    </style>
</head>
<body>
    <?php include"header.php";?>
    <h1>WELCOME TO Sonic View ENTERTAINMENT</h1>

    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <div class="question">Q: What movies are currently trending?</div>
            <div class="answer">A: You can find the latest trending movies in our "Trending Movies" section.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: How can I discover new music?</div>
            <div class="answer">A: Explore our "Discover Music" feature to find new and exciting music releases.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: Are there any upcoming game releases?</div>
            <div class="answer">A: Stay updated with the "Upcoming Games" section for the latest game releases.</div>
        </div>
        <div class="faq-item">
            <div class="question">Q:What kind of content does Sonic View offer?</div>
            <div class="answer">A: Sonic View Entertainment provides a wide range of entertainment content, including games, music, and movies. Our platform is a one-stop destination for enthusiasts of various forms of digital entertainment.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: Is Sonic View free to use?</div>
            <div class="answer">A: Yes, Sonic View is free to use. However, some premium content or features may require a subscription or one-time payment.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: How do I create an account on Sonic View?</div>
            <div class="answer">A: To create an account, click on the "Sign Up" button on the homepage, fill in the required information, and follow the instructions to complete the registration process.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q:I forgot my password. How can I reset it?</div>
            <div class="answer">A: Click on the "Forgot Password" link on the login page, and follow the instructions sent to your registered email address to reset your password.</div>
        </div>
        <div class="faq-item">
            <div class="question">Q: I'm experiencing technical issues with the website. What should I do?</div>
            <div class="answer">A: If you encounter technical issues, first try refreshing the page. If the problem persists, contact our support team at [info@sonicview.com] for assistance.</div>
        </div>
        <div class="faq-item">
            <div class="question">Q: Can users request specific content?</div>
            <div class="answer">A: We welcome user suggestions! While we can't guarantee specific requests, we appreciate feedback and use it to improve our offerings.</div>
        </div>
        <div class="faq-item">
            <div class="question">Q: Is the content on Sonic View legally sourced?</div>
            <div class="answer">A: Yes, Sonic View ensures that all content is legally sourced and adheres to copyright regulations. If you believe there is an issue, please contact us immediately.</div>
        </div>

    </div>

    <script>
        // JavaScript to toggle the display of answers
        const questions = document.querySelectorAll('.question');

        questions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script>
    <?php include "footer.php"?>
</body>
</html>
