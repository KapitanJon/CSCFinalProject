<html>
    <head>
        <title>Arithmetic</title>
        <link rel="stylesheet" href="tracks.css"> 
    </head>
    <body>
        <main>
            <div class="container">
                <h1>Make a Question</h1>
                <form method="post" action="add.php">
                    <p>
                        <label>Question ID:</label>
                        <input type="text" name="question_ID"/>
                    </p>
                    <p>
                        <label>Question Text:</label>
                        <input type="text" name="question_text"/>
                    </p>
                    <p>
                        <label>Choice #1:</label>
                        <input type="text" name="choice1"/>
                    </p>
                    <p>
                        <label>Choice #2:</label>
                        <input type="text" name="choice1"/>
                    </p>
                    <p>
                        <label>Choice #3:</label>
                        <input type="text" name="choice1"/>
                    </p>
                    <p>
                        <label>Choice #4:</label>
                        <input type="text" name="choice1"/>
                    </p>
                    <p>
                        <label>Correct Choice Number:</label>
                        <input type="number" name="correct_choice"/>
                    </p>
                    <p>
                        <input type="text" name="submit" value="submit"/>
                </form>
            </div>
        </main>
    </body>