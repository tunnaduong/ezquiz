<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>EZQuiz - a game by Tùng Anh</title>
  </head>
  <body>
  	<div class="content">
      <div class="board" id="scene1">
        <div class="animate__animated animate__bounce">
          <img src="/logo.jpeg" style="width: 100px;">
          <h1>EZQuiz v1.0</h1>
          <p>Một tựa game bởi Dương Tùng Anh</p>
          <center>
            <div class="wrapper" onclick="start()">Bắt đầu</div>
            <div class="wrapper">Giới thiệu</div>
          </center>
        </div>
      </div>
      <div class="board" id="scene2">
          <p><b>Chọn thể loại bạn muốn chơi</b></p>
          <div class="language" onclick="languageStart()">
            <img class="language_img" src="/assets/language.jpeg">
            <div class="language_text">Ngôn ngữ</div>
          </div>
          <div class="iq">
            <img class="iq_img" src="/assets/iq.png">
            <div class="iq_text">Câu đố</div>
          </div>
          <div class="edu">
            <img class="edu_img" src="/assets/education.png">
            <div class="edu_text">Học đường</div>
          </div>
          <div class="tech">
            <img class="tech_img" src="/assets/science.jpeg">
            <div class="tech_text">Khoa học công nghệ</div>
          </div>
      </div>
      <div class="board" id="scene_language">
          <p><b>Chọn một câu đố mà bạn muốn chơi</b></p>
          
      </div>
  	</div>
    <script src="/assets/js/script.js"></script>
  </body>
</html>