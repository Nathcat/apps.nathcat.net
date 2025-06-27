<!DOCTYPE html>
<html>

<head>
    <title>Apps Menu</title>

    <link rel="stylesheet" href="https://nathcat.net/static/css/new-common.css">
    <link rel="stylesheet" href="/static/styles/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="content">
        <?php include("header.php"); ?>

        <div class="main">
            <div style="width: 50%;" class="column">
                <h1>Welcome, <?php echo $_SESSION["user"]["fullName"]; ?></h1>
                <p>
                    Welcome to the homepage of the Nathcat network! From here you can access all of the applications which are part of the network.
                </p>
                <p>
                    This network of web apps is a culmination of my 9 years of programming. While it is by no means perfect, it has truly tested
                    my knowledge and abilities as a programmer. I have put a lot of work and passion into developing the apps you will find here,
                    and the result is one of the most complex systems I have ever built.
                </p>
                <p>
                    I truly hope you enjoy what you find here, and I thank you for your help in developing the network.
                </p>
                <p>
                    Best wishes,<br>Nathcat.
                </p>
            </div>

            <h1>Productivity</h1>
            <div class="app-row">
                <div onclick="location = 'https://cloud.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>CloudCat</h2>
                </div>

                <div onclick="location = 'https://note.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>NoteCat</h2>
                </div>

                <div onclick="location = 'https://study.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>StudyCat</h2>
                </div>
            </div>

            <h1>Social</h1>
            <div class="app-row">
                <div onclick="location = 'https://data.nathcat.net/sso';" class="content-card app-card column align-center justify-center">
                    <img style="transform: translateY(12.5px);" src="https://data.nathcat.net/sso/AuthCat.png" />
                    <h2>AuthCat</h2>
                </div>

                <div onclick="location = 'https://people.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <img src="/static/images/peoplecat-logo.png" />
                    <h2>PeopleCat</h2>
                </div>

                <div onclick="location = 'https://blog.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>BlogCat</h2>
                </div>
            </div>

            <h1>Games</h1>
            <div class="app-row">
                <div onclick="location = 'https://sudoku.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>SudokuCat</h2>
                </div>

                <div onclick="location = 'https://solitaire.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>SolitaireCat</h2>
                </div>

                <div onclick="location = '/HackCat';" class="content-card app-card column align-center justify-center">
                    <img src="/static/images/hackcat-logo.png" />
                    <h2>HackCat</h2>
                </div>
            </div>

            <h1>Developer</h1>
            <div class="app-row">
                <div onclick="location = 'https://data.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>DataCat</h2>
                </div>
            </div>

            <h1>Other</h1>
            <div class="app-row">
                <div onclick="location = 'https://aggro.nathcat.net';" class="content-card app-card column align-center justify-center">
                    <h2>AggroCat</h2>
                </div>
            </div>
        </div>

        <?php include("footer.php"); ?>
    </div>
</body>

</html>