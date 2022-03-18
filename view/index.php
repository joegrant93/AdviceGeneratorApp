<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">

    <title>Advice Generator</title>
</head>

<body>
    <div class="flex-container">
        <?php
        $json = file_get_contents('https://api.adviceslip.com/advice');
        $obj = json_decode($json, true);
        ?>
        <div class="backdrop">
            <p class="id">ADVICE #<?php echo $obj['slip']['id'] ?></p>
            <p class="quote"><?php echo $obj['slip']['advice'] ?></p>
            <div class="desktopSpacer">
                <svg width="444" height="16" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="#4F5D74" d="M0 8h196v1H0zM248 8h196v1H248z" />
                        <g transform="translate(212)" fill="#CEE3E9">
                            <rect width="6" height="16" rx="3" />
                            <rect x="14" width="6" height="16" rx="3" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="mobileSpacer">
                <svg width="295" height="16" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="#4F5D74" d="M0 8h122v1H0zM173 8h122v1H173z" />
                        <g transform="translate(138)" fill="#CEE3E9">
                            <rect width="6" height="16" rx="3" />
                            <rect x="14" width="6" height="16" rx="3" />
                        </g>
                    </g>
                </svg>
            </div>
            <a onClick="window.location.reload()">
                <div class="neonButton">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 0H4a4.005 4.005 0 0 0-4 4v16a4.005 4.005 0 0 0 4 4h16a4.005 4.005 0 0 0 4-4V4a4.005 4.005 0 0 0-4-4ZM7.5 18a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm0-9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm0-9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z" fill="#202733" />
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>