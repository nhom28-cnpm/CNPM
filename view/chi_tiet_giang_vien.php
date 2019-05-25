<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>QLSV</title>
    <link href="https://fonts.googleapis.com/css?family=Saira:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        .info a:first-child {
            width: 314px;
            height: 190.25px;
            overflow: hidden;
            display: inline-block;
            margin-bottom: 5px;
        }

        .info a:nth-child(2) {
            font-size: 17px;
            color: black;
            text-transform: capitalize;
            display: inline-block;
            margin-top: 3px;
        }

        h1#search_key {
            font-weight: 500;
            margin: 4px 0;
            font-size: 26px;
        }

        h1#search_key span {
            color: gray;
            font-size: 20px;
        }

        div#option {
            height: 39px;
            background: #eee;
            display: flex;
            box-sizing: border-box;
            padding: 8px;
        }

        div#option ul {
            display: flex;
            font-size: 13px;
            font-weight: 500;
        }



        div#option select {
            background-color: #eee;
            border: 1px solid #8080805c;
            height: 23px;
            width: 59px;
            font-size: 11px;
            font-weight: 600;
            margin-right: 30px;
        }

        div#option ul li {
            margin-right: 20px;
        }

        div#option ul li span {
            color: #de2600;
        }

        .key_word {
            background: #eee;
            padding: 4px 8px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 6px;
        }

        .key_word span {
            font-weight: 500;
        }

        .key_word a {
            font-size: 12px;
            color: black;
            text-decoration: underline;
            padding-right: 5px;
        }

        .pagination_top {
            margin-bottom: 13px;
        }

        .pagination_top ul {
            display: flex;
            justify-content: center;
        }

        .pagination_top ul li {
            border: 1px solid #80808085;
            width: 22px;
            margin-left: 10px;
            text-align: center;
        }

        .pagination_top ul li:last-child {
            border: none;
            width: auto;
            border-bottom: 1px solid;
            font-weight: 500;
        }

        .pagination_top ul li a {
            width: 100%;
            color: black;
        }

        .pagination_top ul li:last-child:hover {
            background: white;
            color: black;
            width: auto;
        }

        .pagination_top ul li:last-child:hover a {
            color: gray;
        }

        .pagination_top ul li:hover {
            background: #676565;
            color: white;
            cursor: pointer;
        }

        .pagination_top ul li:hover a {
            color: white;
        }

        h1.gv-title {
            font-weight: 500;
            font-size: 26px;
        }

        h1.gv-title span {
            background: gray;
            color: white;
            font-size: 13px;
            box-sizing: border-box;
            position: relative;
            top: -7px;
            border-radius: 2px;
            padding: 3px 7px;
        }

        .tag {
            margin-bottom: 14px;
        }

        .tag>span {
            background: #8080803d;
            padding: 0 8px;
        }

        .info {
            margin-bottom: 12px;
        }

        span.view {
            font-weight: 500;
            font-size: 21px;
        }

        .comments h2 {
            font-weight: 500;
            font-size: 20px;
        }

        .comments h2 span {
            color: white;
            background: black;
            display: inline-block;
            height: 21px;
            line-height: 23px;
            padding: 0px 3px;
            font-size: 17px;
            position: relative;
            top: -3px;
            left: 8px;
        }

        span.username {
            text-decoration-line: underline;
            font-weight: 600;
        }

        .comment-content span.time {
            font-weight: 200;
            font-size: 13px;
        }

        .comment-content P {
            font-weight: 400;
        }

        .comment-content li {
            margin-bottom: 16px;
        }

        .comment-content ul>li {
            background: url('img/user.png') no-repeat;
            background-size: contain;
            padding-left: 4rem;
        }

        .comments h2 {
            margin-bottom: 18px;
            margin-top: 20px;
        }

        a.like {
            background: #80808042;
            padding: 1px 17px;
            color: gray;
        }

        span.view {
            margin-right: 20px;
        }

        a.active {
            color: blue;
        }

        form#f_comment textarea {
            background: #f7f7f738;
            border: 1px solid grey;
        }

        form#f_comment input:nth-child(2) {
            width: 89px;
            display: block;
            margin: 15px 0 25px;
            padding: 2px 0;
        }

        .avt-gv img {
            width: 134px;
            height: 174px;
            margin-left:10px;
            margin-top: 5px;
        }

        .avt-gv {
            width: 134px;
            height: 100%;
        }

        .info-gv {
            display: flex;
            color: white;
            padding-left: 20px;
            padding-top: 42px;

        }

        .info-content {
            margin-left: 20px;
        }

        .social {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1><a href="<?php helper::url('home', 'index') ?>" style="color:white"><span style="color:red">Q</span>LSVS</a></h1>
            </div>
            <div class="search">
                <form action="<?php helper::url('home', 'search') ?>" method="GET" class="searchGr">
                    <div class="f-search">
                        <input type="text" placeholder="Search 54354 Teacher" name="searchName">
                    </div>
                    <span>
                        <input style="padding-top: 36px;" type="submit" name="submit" value="true">

                    </span>
                </form>
            </div>
            <div class="soligan">
                <h2>
                    THE BEST
                    <span>
                        lecturers</span>
                    uni
                </h2>
            </div>
            <div class="login">
                <a href="">Register</a>
                <button>Login</button>
                <span class="flag"></span>
            </div>
        </header>
        <main>
            <h1 id="search_key"></h1>


            <div class="clear"></div>
        </main>
        <h1 class="gv-title">Cao Thanh Sơn <span>31 Old</span></h1>
        <div class="tag">
            <span>sexy</span>
            <span>cute</span>
            <span>vietnam</span>
            <span>cntt</span>
        </div>
        <div class="info-gv" style="width:935px; height:475px;background:black">
            <div class="avt-gv">
                <img src="img/avt-cts.png">
            </div>
            <div class="info-content">
                <h3 clas="if-name">Ts. Cao Thanh Sơn</h3>
                <ul>
                    <li>Trưởng bộ môn</li>
                    <li>Email: sonct@vinhuni.edu.vn; ctsdhv@gmail.com</li>
                    <li>Điện thoại: 0912.445.955</li>
                    <li>Trang cá nhân: http://home.vinhuni.edu.vn/sonct</li>
                    <li>Nhiệm vụ:</li>
                    <p>- Giảng dạy đại học các học phần: Ngôn ngữ lập trình C, Lập trình hướng đối tượng, Lập trình Web, Công nghệ phần mềm,...

                        <br /> - Giảng dạy sau đại học học phần: Khai phá dữ liệu.

                        <br /> - Nghiên cứu khoa học và tự bồi dưỡng.

                        <br />- Hướng dẫn sinh viên nghiên cứu khoa học, thực tập và đồ án tốt nghiệp.

                        <br />- Hướng dẫn học viên cao học luận văn tốt nghiệp.

                        <br />- Điều hành hoạt động Bộ môn Hệ thống và Mạng máy tính.</p>
                </ul>
            </div>
        </div>
        <div class="social">
            <span class="view">24,394 views</span>
            <a class="like active" href="#"><i class="fas fa-thumbs-up"></i></a>
            <a class="like" href="#"><i class="fas fa-thumbs-down"></i></a>
        </div>
        <div class="comments">
            <h2>Comments <span>0</span></h2>
            <form id="f_comment" action="" method="POST">
                <textarea name="content-cm" rows="5" cols="30"></textarea>
                <input type="submit" value="Comment" name="comment">
            </form>
            <div class="comment-content">
                <ul>
                    <li>
                        <span class="username">Vietnamese</span>
                        <span class="time">2 month ago</span>
                        <p>Oh my god Yasuo !!!</p>
                    </li>
                    <li>
                        <span class="username">Vietnamese</span>
                        <span class="time">2 month ago</span>
                        <p>Oh my god Yasuo !!!</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pagination_top">
            <!-- <?php echo $this->pagination ?> -->
        </div>
        <footer>
            <div class="address">

            </div>
        </footer>
    </div>
    <script src="asset/js.js"></script>
</body>

</html>