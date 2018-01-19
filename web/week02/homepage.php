<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="homepage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="homepage.js"></script>
</head>
<body>
    <!--Including the Nav-bar-->
    <?php
    include_once("navbar.php");
    ?>
    <!-- First Panel -->
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>About Me</h1>
            </div>
            <div class="panel-body">
                <p>Welcome user, my name is Jason Reed. I am from Las Vegas, Nevada. I served a volunteer mission for the Church of Jesus in the Japan Sendai Mission. I love to hike, weightlift, and beatbox on my spare times. Most recently, I was in an acapella group (called Apollo) as the vocal percussionist. Everyday is a new day, and I love to take advantage of that!
                </p>
                <br/>
                <h4>目指すべき所に、近道は存在しない。</h4>
                <h3 id="romaji"></h4>
                <h3 id="english"></h4>
                <button type="button" class="btn" onclick='insertTranslation()'>Translate</button>
            </div>
        </div>
        
        <!-- Second Panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Image Gallery</h1>
            </div>
            
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="engagements.jpg" target="_blank">
                                <img class="img-responsive" src="engagements.jpg" alt="Fiancee" width="460" height="345"> 
                                <div class="caption">
                                <p>I recently got engaged!</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="Apollo.jpg" target="_blank">
                                <img class="img-responsive" src="Apollo.jpg" alt="Acapella" width="460" height="345">
                                <div class="caption">
                                <p>Acapella group</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="buddha.jpg" target="_blank">
                                <img class="img-responsive" src="buddha.jpg" alt="Buddha" width="460" height="345">
                                <div class="caption">
                                <p>A buddha statue from my mission</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    


</body>
</html>