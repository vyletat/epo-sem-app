<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Tomas Vyleta">

    <!-- Icon next to the title -->
    <link rel="shortcut icon" type="image/x-icon" href="../../pic/icons/icon.png"/>
    <title><?php echo $tplData['title'] ?></title>

    <?php include "./views/elem/head.php"; ?>

    <!-- JavaScript files-->
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
    <!-- CSS files-->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<!-- Navbar -->
<?php include "./views/elem/navbar.php" ?>

<main>
    <!-- Comment contains from ... -->
    <div class="container">

        <div class="container">
            <h1 class="page-title display-4">Dotazy</h1>
        </div>
        <div id="comments">
            <!-- comment-block is a div element for question and answer ... -->
            <div class="comment-question">
                <div class="comment-question-head row">
                    <p class="comment-question-name">Ota Pavel</p>
                    <p>&nbsp-&nbsp</p>
                    <p class="comment-question-date"><i>Wednesday, 27 November 2019</i></p>
                </div>
                <div class="comment-question-body">
                    <h5 class="comment-question-title">Dotaz 1</h5>
                    <p class="comment-question-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        viverra
                        aliquet
                        tellus, nec varius sem maximus iaculis. Aenean pharetra nisl non auctor dictum. Integer
                        euismod
                        quis
                        lorem nec porttitor. Pellentesque cursus ex erat, in fringilla augue eleifend eget. Nulla
                        pellentesque metus quis tellus finibus pharetra. Donec tempus molestie sapien, a rhoncus
                        nisi
                        hendrerit id. Aenean ipsum purus, dapibus egestas nibh quis, dapibus dictum est. Ut lorem
                        nulla,
                        convallis a laoreet vel, eleifend sed massa. Mauris nulla enim, tincidunt quis scelerisque
                        in,
                        blandit in nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in
                        aliquam
                        est.
                        Ut non erat a enim convallis mattis in eu urna.</p>
                </div>
            </div>

            <!-- ... and comment-answer, that is answer from someone of company. -->
            <div class="comment-answer">
                <div class="comment-answer-head">
                    <div class="comment-answer-head row">
                        <p class="comment-answer-name">Tomáš Vyleta</p>
                        <p>&nbsp-&nbsp</p>
                        <p class="comment-dateanswer-"><i>Wednesday, 27 November 2019</i></p>
                    </div>
                    <div class="comment-answer-body">
                        <p class="comment-answer-text">Ellentesque cursus ex erat, in fringilla augue eleifend eget.
                            Nulla
                            pellentesque metus quis tellus finibus pharetra. Donec tempus molestie sapien, a rhoncus
                            nisi
                            hendrerit id. Aenean ipsum purus, dapibus egestas nibh quis, dapibus dictum est. Ut
                            lorem
                            nulla,
                            convallis a laoreet vel, eleifend sed massa.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="comment-block">
            <!-- ... comments, whitch are the questions from users ... -->

            <div class="comment-question">
                <div class="comment-question-head row">
                    <p class="comment-question-name">Ota Pavel</p>
                    <p>&nbsp-&nbsp</p>
                    <p class="comment-question-date"><i>Wednesday, 27 November 2019</i></p>
                </div>
                <div class="comment-question-body">
                    <h5 class="comment-question-title">Dotaz 1</h5>
                    <p class="comment-question-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        viverra
                        aliquet
                        tellus, nec varius sem maximus iaculis. Aenean pharetra nisl non auctor dictum. Integer
                        euismod
                        quis
                        lorem nec porttitor. Pellentesque cursus ex erat, in fringilla augue eleifend eget. Nulla
                        pellentesque metus quis tellus finibus pharetra. Donec tempus molestie sapien, a rhoncus
                        nisi
                        hendrerit id. Aenean ipsum purus, dapibus egestas nibh quis, dapibus dictum est. Ut lorem
                        nulla,
                        convallis a laoreet vel, eleifend sed massa. Mauris nulla enim, tincidunt quis scelerisque
                        in,
                        blandit in nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in
                        aliquam
                        est.
                        Ut non erat a enim convallis mattis in eu urna.</p>
                </div>
            </div>

            <!-- ... and comment-answer, that is answer from someone of company. -->
            <div class="comment-answer">
                <div class="comment-answer-head">
                    <div class="comment-answer-head row">
                        <p class="comment-answer-name">Tomáš Vyleta</p>
                        <p>&nbsp-&nbsp</p>
                        <p class="comment-dateanswer-"><i>Wednesday, 27 November 2019</i></p>
                    </div>
                    <div class="comment-answer-body">
                        <p class="comment-answer-text">Ellentesque cursus ex erat, in fringilla augue eleifend eget.
                            Nulla
                            pellentesque metus quis tellus finibus pharetra. Donec tempus molestie sapien, a rhoncus
                            nisi
                            hendrerit id. Aenean ipsum purus, dapibus egestas nibh quis, dapibus dictum est. Ut
                            lorem
                            nulla,
                            convallis a laoreet vel, eleifend sed massa.</p>
                    </div>
                </div>
            </div>

            <div class="comment-answer">
                <div class="comment-answer-head">
                    <div class="comment-answer-head row">
                        <p class="comment-answer-name">Tomáš Vyleta</p>
                        <p>&nbsp-&nbsp</p>
                        <p class="comment-dateanswer-"><i>Wednesday, 27 November 2019</i></p>
                    </div>
                    <div class="comment-answer-body">
                        <p class="comment-answer-text">Ellentesque cursus ex erat, in fringilla augue eleifend eget.
                            Nulla
                            pellentesque metus quis tellus finibus pharetra. Donec tempus molestie sapien, a rhoncus
                            nisi
                            hendrerit id. Aenean ipsum purus, dapibus egestas nibh quis, dapibus dictum est. Ut
                            lorem
                            nulla,
                            convallis a laoreet vel, eleifend sed massa.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="comment-block">
            <!-- ... comments, whitch are the questions from users ... -->

            <div class="comment-question">
                <div class="comment-question-head row">
                    <p class="comment-question-name">Ota Pavel</p>
                    <p>&nbsp-&nbsp</p>
                    <p class="comment-question-date"><i>Wednesday, 27 November 2019</i></p>
                </div>
                <div class="comment-question-body">
                    <h5 class="comment-question-title">Dotaz 1</h5>
                    <p class="comment-question-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        viverra
                        aliquet
                        tellus, nec varius sem maximus iaculis. Aenean pharetra nisl non auctor dictum. Integer
                        euismod
                        quis
                        lorem nec porttitor. Pellentesque cursus ex erat, in fringilla augue eleifend eget. Nulla
                        pellentesque metus quis tellus finibus pharetra. Donec tempus molestie sapien, a rhoncus
                        nisi
                        hendrerit id. Aenean ipsum purus, dapibus egestas nibh quis, dapibus dictum est. Ut lorem
                        nulla,
                        convallis a laoreet vel, eleifend sed massa. Mauris nulla enim, tincidunt quis scelerisque
                        in,
                        blandit in nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in
                        aliquam
                        est.
                        Ut non erat a enim convallis mattis in eu urna.</p>
                </div>
            </div>

            <!-- ... and comment-answer, that is answer from someone of company. -->
            <div class="comment-answer">
                <div class="comment-answer-head">
                    <div class="comment-answer-head row">
                        <p class="comment-answer-name">Tomáš Vyleta</p>
                        <p>&nbsp-&nbsp</p>
                        <p class="comment-dateanswer-"><i>Wednesday, 27 November 2019</i></p>
                    </div>
                    <div class="comment-answer-body">
                        <p class="comment-answer-text">Ellentesque cursus ex erat, in fringilla augue eleifend eget.
                            Nulla
                            pellentesque metus quis tellus finibus pharetra. Donec tempus molestie sapien, a rhoncus
                            nisi
                            hendrerit id. Aenean ipsum purus, dapibus egestas nibh quis, dapibus dictum est. Ut
                            lorem
                            nulla,
                            convallis a laoreet vel, eleifend sed massa.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div id="comment-form">
            <!-- This is a form for question -->
            <form action="forum-display.php" method="post" target="_blank" accept-charset="UTF-8">
                <fieldset>
                    <legend>Místo pro vaše dotazy...</legend>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputFirstname">Jméno</label>
                            <input name="question[first-name]" type="text" class="form-control" id="inputFirstname"
                                   placeholder="First name"
                                   required>
                            <div class="invalid-feedback">
                                Prosím vyplňte jméno.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLastname">Příjmení</label>
                            <input name="question[last-name]" type="text" class="form-control" id="inputLastname"
                                   placeholder="Last name" required>
                            <div class="invalid-feedback">
                                Prosím vyplňte příjmení.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">Nadpis</label>
                        <input name="question[title]" type="text" class="form-control" id="inputTitle" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="inputText">Obsah</label>
                        <textarea name="question[content]" class="form-control" id="inputText" rows="4" placeholder="Text here..."
                                  required></textarea>
                        <div class="invalid-feedback">
                            Prosím vyplňte dotaz.
                        </div>
                    </div>

                    <!-- Google reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6LdayboUAAAAAAtSvuKwj30b_jnS9OJ-RfrkcUVI"></div>

                    <div class="row justify-content-center">
                        <div class="col-auto align-self-center">
                            <button class="btn btn-primary" type="submit">Dotázat se</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>

<!-- Footer, under the main container -->
<?php include "./views/elem/footer.php" ?>

<!-- reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</body>
</html>