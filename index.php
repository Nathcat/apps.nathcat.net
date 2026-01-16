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

        <div class="main align-center">
            <div style="width: 50%;" class="column align-center">
                <h1 style="text-align: center;">Welcome, <?php echo $_SESSION["user"]["fullName"]; ?></h1>

                <h2 id="time"></h2>
                <h3 id="date"></h3>

                <script>
                    let two_digit_number = (v) => {
                        if (v < 10) return "0" + v.toString();
                        else return v.toString();
                    };

                    let time_f = () => { 
                        let d = new Date();
                        let t = two_digit_number(d.getHours()) + ":" + two_digit_number(d.getMinutes()) + ":" + two_digit_number(d.getSeconds());

                        $("#time").text(t);
                        $("#date").text(d.toDateString());
                        setTimeout(time_f, 1000); 
                    }
                    time_f()
                </script>
            </div>

            <div class="column" style="width: 100%">
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

                    <div onclick="location = 'https://cost.nathcat.net';" class="content-card app-card column align-center justify-center">
                        <h2>CostCat</h2>
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
        </div>

        <?php include("footer.php"); ?>
    </div>
</body>

</html>
