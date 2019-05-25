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
            <h1 id="search_key"><?php echo ($_GET['searchName']) ?><span> (<?php echo $this->soluong ?> results)</span></h1>
            <div id="option">
                <select name="listOp">
                    <option>Fillters</option>
                </select>
                <ul>
                    <li>Sort by: <span>Relevance</span> /</li>
                    <li>Date: <span>Anytime</span> /</li>
                    <li>Duration: <span>All</span> /</li>
                    <li>Video quality: <span>All</span> /</li>
                    <li>Type: <span>Straight</span></li>
                </ul>
            </div>
            <div class="key_word">
                <span>Related searches</span>
                <?php if ($this->related) : ?>
                    <?php foreach ($this->related as $giangvien) : ?>
                        <?php if ($giangvien->hoten == $_GET['searchName']) : ?>
                            <a href="<?php echo "?searchName=$giangvien->hoten&submit=true" ?>"><?php echo '<b style="font-size:20px;    font-weight: 600;">' . $giangvien->hoten . '</b>' ?></a>
                        <?php else : ?>
                            <a href="<?php echo "?searchName=$giangvien->hoten&submit=true" ?>"><?php echo $giangvien->hoten ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                <?php endif; ?>
            </div>
            <div class="pagination_top">
                <?php echo $this->pagination ?>
            </div>
            <div>
                <?php if ($this->listgv) : ?>
                    <?php foreach ($this->listgv as $gv) : ?>
                        <div class="home_data">
                            <div class="info">
                                <a href=""><img width="314px" src="<?php echo $gv->avatar ?>" alt=""></a>
                                <a href=""><?php echo $gv->hoten ?></a>
                                <p class="totalLike">
                                    <?php echo $gv->solike ?>
                                    <i class="fas fa-heart"></i>
                                </p>
                            </div>
                        </div>
                    <?php
                endforeach;
            else :
                echo "<b>No teacher match with this search.</b>";
            endif;

            ?>

                <div class="clear"></div>
        </main>
        <div class="pagination">
            <?php echo $this->pagination ?>
        </div>
        <footer>
            <div class="address">

            </div>
        </footer>
    </div>
    <script src="../asset/js.js"></script>
</body>

</html>