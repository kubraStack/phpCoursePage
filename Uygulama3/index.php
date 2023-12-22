<?php

  define("Title","Popular Courses");
//   const title = "Popular Courses";

  $categories = array("Programming", "Web Development", "Data Analysis", "Office Applications");
  sort($categories); // sort alphabetically
  $courses = array(
        "1" => array(
            "header" => "PHP COURSE",
            "altHeader" => "Advanced Web Development with Php from Scratch",
            "img" => "1.jpg",
            "comments" => "100",
            "date" => "01.01.2023",
            "likes" => "300"
        ),
        "2" => array(
            "header" => "PHYTON COURSE",
            "altHeader" => "Advanced Phyton Programming from scratch",
            "img" => "2.jpg",
            "comments" => "200",
            "date" => "03.03.2023",
            "likes" => "400"
        ),
        "3" => array(
            "header" => "Node.js COURSE",
            "altHeader" => "Advanced web development with Node.js from scratch",
            "img" => "3.jpg",
            "comments" => "400",
            "date" => "05.05.2023",
            "likes" => "500"
        )
    );

   $new_course = array(
        "header" => "Django Kursu",
        "altHeader" => "Advanced Django programming from scratch",
        "img" => "django1.jpg",
        "comments" => "500",
        "date" => "06.06.2023",
        "likes" => "250" 
    );

  $courses["4"] = $new_course;


  $course1_header = "PHP COURSE";
  $course1_alt_header =  "Advanced Web Development with Php from Scratch";
  $course1_img = "1.jpg";
  $course1_date = "01.01.2023";
  $course1_comments = "100";
  $course1_likes = "300";

  $course2_header = "PHYTON COURSE";
  $course2_alt_header = "Advanced Phyton Programming from scratch";
  $course2_img = "2.jpg";
  $course2_date = "03.03.2023";
  $course2_comments = "200";
  $course2_likes ="400";

  $course3_header = "NODE.JS COURSE";
  $course3_alt_header = "Advanced web development with Node.js from scratch";
  $course3_img ="3.jpg";
  $course3_date = "05.05.2023";
  $course3_comments = "300";
  $course3_likes = "500";


  $course1_alt_header =  ucfirst(strtolower($courses["1"]["altHeader"]));
  $course2_alt_header =  ucfirst(strtolower($courses["2"]["altHeader"]));
  $course3_alt_header =  ucfirst(strtolower($courses["3"]["altHeader"]));

  $course1_alt_header = strlen($course1_alt_header) > 40 ? substr($course1_alt_header,0,40).'...': $course1_alt_header;
  $course2_alt_header = strlen($course2_alt_header) > 30 ? substr($course2_alt_header,0,20).'...': $course2_alt_header;
  $course3_alt_header = strlen($course3_alt_header) > 30 ? substr($course3_alt_header,0,20).'...': $course3_alt_header;

  $course1_url = str_replace([" ", "ç","@","."],["-","c","","-"],strtolower( $courses["1"]["header"]));
  $course2_url = str_replace([" ", "ç","@","-"],["-","c","@","-"],strtolower( $courses["2"]["header"]));
  $course3_url = str_replace([" ", "ç","@","."],["-","c","","-"],strtolower( $courses["3"]["header"]));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>Course Page</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group mt-2">
                    <a href="#" class="list-group-item list-group-action active">
                        <?php echo $categories[0]; ?>
                    </a>
                    <a href="#" class="list-group-item list-group-action">
                        <?php echo $categories[1]; ?>
                    </a>
                    <a href="#" class="list-group-item list-group-action">
                        <?php echo $categories[2]; ?>
                    </a>
                    <a href="#" class="list-group-item list-group-action">
                        <?php echo $categories[3]; ?>
                    </a>
                    
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo Title;  ?></h1>
                <p class="lead"><?php echo count($categories) ?> kategoride <?php echo count($courses) ?> kurs listelenmiştir.</p>
                <div class="card mb-3">
                        <div class="row p-1">
                            <div class="col-4">
                            <img src="img/<?php echo $courses["1"]["img"]; ?>" alt="" class="img-fluid rounded-2">                    
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $course1_url; ?>">
                                            <?php echo $courses["1"]["header"]; ?>
                                        </a>
                                    
                                    </h5>
                                    <p class="card-text"><?php echo $courses["1"]["altHeader"] ; ?></p>
                                    <p>
                                        <span class="badge rounded-pill text-bg-primary text-decoration-none ">
                                         Likes:  <?php echo $courses["1"]["likes"] ; ?> <i class="fa-solid fa-thumbs-up ms-1"></i>
                                        </span>
                                        <span class="badge rounded-pill text-bg-danger">
                                         Comments: <?php echo $courses["1"]["comments"]; ?> <i class="fa-solid fa-comment"></i>
                                        </span>
                                        <span class="badge rounded text-bg-secondary">
                                         Publication Date: <?php echo $courses["1"]["date"]; ?>
                                        </span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card mb-3">
                        <div class="row p-1">
                            <div class="col-4">
                            <img src="img/<?php echo $courses["2"]["img"]; ?>" alt="" class="img-fluid rounded-2">                    
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $course1_url; ?>">
                                            <?php echo $courses["2"]["header"]; ?>
                                        </a>
                                    
                                    </h5>
                                    <p class="card-text"><?php echo $courses["2"]["altHeader"] ; ?></p>
                                    <p>
                                        <span class="badge rounded-pill text-bg-primary text-decoration-none ">
                                         Likes:  <?php echo $courses["2"]["likes"] ; ?> <i class="fa-solid fa-thumbs-up ms-1"></i>
                                        </span>
                                        <span class="badge rounded-pill text-bg-danger">
                                         Comments: <?php echo $courses["2"]["comments"]; ?> <i class="fa-solid fa-comment"></i>
                                        </span>
                                        <span class="badge rounded text-bg-secondary">
                                         Publication Date: <?php echo $courses["2"]["date"]; ?>
                                        </span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card mb-3">
                        <div class="row p-1">
                            <div class="col-4">
                            <img src="img/<?php echo $courses["3"]["img"]; ?>" alt="" class="img-fluid rounded-2">                    
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $course1_url; ?>">
                                            <?php echo $courses["3"]["header"]; ?>
                                        </a>
                                    
                                    </h5>
                                    <p class="card-text"><?php echo $courses["3"]["altHeader"] ; ?></p>
                                    <p>
                                        <span class="badge rounded-pill text-bg-primary text-decoration-none ">
                                         Likes:  <?php echo $courses["3"]["likes"] ; ?> <i class="fa-solid fa-thumbs-up ms-1"></i>
                                        </span>
                                        <span class="badge rounded-pill text-bg-danger">
                                         Comments: <?php echo $courses["3"]["comments"]; ?> <i class="fa-solid fa-comment"></i>
                                        </span>
                                        <span class="badge rounded text-bg-secondary">
                                         Publication Date: <?php echo $courses["3"]["date"]; ?>
                                        </span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card mb-3">
                        <div class="row p-1">
                            <div class="col-4">
                            <img src="img/<?php echo $courses["4"]["img"]; ?>" alt="" class="img-fluid rounded-2">                    
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php echo $course1_url; ?>">
                                            <?php echo $courses["4"]["header"]; ?>
                                        </a>
                                    
                                    </h5>
                                    <p class="card-text"><?php echo $courses["4"]["altHeader"] ; ?></p>
                                    <p>
                                        <span class="badge rounded-pill text-bg-primary text-decoration-none ">
                                         Likes:  <?php echo $courses["4"]["likes"] ; ?> <i class="fa-solid fa-thumbs-up ms-1"></i>
                                        </span>
                                        <span class="badge rounded-pill text-bg-danger">
                                         Comments: <?php echo $courses["4"]["comments"]; ?> <i class="fa-solid fa-comment"></i>
                                        </span>
                                        <span class="badge rounded text-bg-secondary">
                                         Publication Date: <?php echo $courses["4"]["date"]; ?>
                                        </span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                        
            </div>
        </div>

       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    
</body>
</html>