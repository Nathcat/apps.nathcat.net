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

        <div class="main justify-center">
            <div onclick="location = 'https://data.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>DataCat</h2>
            </div>

            <div onclick="location = 'https://data.nathcat.net/sso';" class="content-card app-card column align-center justify-center">
                <img width="100" height="100" style="transform: translateY(12.5px);" src="https://data.nathcat.net/sso/AuthCat.png" />
                <h2>AuthCat</h2>
            </div>

            <div onclick="location = 'https://people.nathcat.net';" class="content-card app-card column align-center justify-center">
                <img width="100" height="100" src="/static/images/peoplecat-logo.png" />
                <h2>PeopleCat</h2>
            </div>

            <div onclick="location = 'https://sudoku.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>SudokuCat</h2>
            </div>

            <div onclick="location = 'https://solitaire.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>SolitaireCat</h2>
            </div>

            <div onclick="location = 'https://blog.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>BlogCat</h2>
            </div>

            <div onclick="location = '/HackCat';" class="content-card app-card column align-center justify-center">
                <img width="100" height="100" src="/static/images/hackcat-logo.png" />
                <h2>HackCat</h2>
            </div>

            <div onclick="location = 'https://cloud.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>CloudCat</h2>
            </div>

            <div onclick="location = 'https://note.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>NoteCat</h2>
            </div>

            <div onclick="location = 'https://study.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>StudyCat</h2>
            </div>

            <div onclick="location = 'https://aggro.nathcat.net';" class="content-card app-card column align-center justify-center">
                <h2>AggroCat</h2>
            </div>
        </div>

        <?php include("footer.php"); ?>
    </div>
</body>

</html>
