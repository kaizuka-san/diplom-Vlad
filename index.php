<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- Form registration -->
    <form class="disable" id="registor" method="post">
        <p>
            <input type="text" name="login_reg" placeholder="login">
        </p>
        <p>
            <input type="password" name="password_reg" placeholder="password">
        </p>
        <p>
            <input type="password" name="return_password_reg" placeholder="return password">
        </p>
        <p>
            <input type="submit" name="registriert" value="registrier">
        </p>
    </form>

<!-- Form autorization -->
    <form class="disable" id="autor" method="post">
        <p>
            <input type="text" name="login" placeholder="login">
        </p>
        <p>
            <input type="password" name="password" placeholder="password">
        </p>
        <p>
            <input type="submit" name="autorization" value="autorization">
        </p>
    </form>

<!-- Form autorized user -->
    <form method="post" class="disable user">
        <p>
            <span id="span">Hello</span>
        </p>
        <p>
            <a href="my_data.php">My data</a>
        </p>
        <p>
            <button name="exit">exit</button>
        </p>
    </form>
<!-- Start-page registration or autorization -->
    <div id="link">
        <p>
            <a class="active reg" href="#">Click registrier</a>
        </p>
        <p>
            <a class="active auto" href="#">Click autorization</a>
        </p>
    </div>

<!-- JS-script hide or show form -->
    <script type="text/javascript">
        $(".reg").click(function(e) {
          e.preventDefault();
          $("#link").removeClass('active');
          $("#link").addClass('disable');
          $("#registor").removeClass('disable');
          $("#registor").addClass('active');
          document.title = 'Regestration';
        });

        $(".auto").click(function(e) {
          e.preventDefault();
          $("#link").removeClass('active');
          $("#link").addClass('disable');
          $("#autor").removeClass('disable');
          $("#autor").addClass('active');
          document.title = 'Autorization';
        })

        let user = "<?php echo $_SESSION['user'];?>";

        if (user !== '') {
            $("#link").removeClass('active');
            $("#link").addClass('disable');
            $(".user").removeClass('disable');
            $(".user").addClass('active');

            let span = document.getElementById('span');
            span.appendChild( document.createTextNode(" <?php echo $_SESSION['user']?>"));
        }
        else {
            $("#link").removeClass('disable');
            $("#link").addClass('active');
        }
    </script>
</body>
</html>

<?php
/**
 * PHP-script registration
 */
   try {
       if (isset($_POST['registriert'])) {
           $login = filter_input(INPUT_POST, 'login_reg');
           if (!$login) {
               throw new Exception("Не корректно введён логин!");
           }

           $password = filter_input(INPUT_POST, 'password_reg');
           if (!$password || mb_strlen($password) < 8) {
               throw new Exception("Введите пароль!");
           }

           $return_password = filter_input(INPUT_POST, 'return_password_reg');
           if (!$return_password) {
               throw new Exception("Повторите введёный пароль!");
           }

           if ($password === $return_password) {
               $password_hash = password_hash($return_password, PASSWORD_DEFAULT, ["cost" => 12]);
               if (!$password_hash) {
                   throw new Exception("Ошибка хеширования!");
               }

               include 'connect.php';
               $sql = 'INSERT INTO user (login, password) VALUES (?, ?)';
               $write = $pdo->prepare($sql);
               $write->execute([$login, $password_hash]);
           }
       }
   } catch (Exeption $e) {
        echo $e->getMessage();
    }
/**
 * PHP-script autorization
 */
    try {
        if (isset($_POST['autorization'])) {
            $log = filter_input(INPUT_POST, 'login');
            if (!$log) {
                throw new Exception("Введите логин!");
            }

            $passw = filter_input(INPUT_POST, 'password');
            if (!$passw) {
                throw new Exception("Введите пароль!");
            }

            include 'connect.php';

            $query_log = "SELECT * FROM user";
            $selector_log = $pdo->prepare($query_log);
            $selector_log->execute();
            while ($row = $selector_log->fetch(PDO::FETCH_LAZY)) {
                if ($log === $row['login']) {
                    if (password_verify($passw, $row['password'])) {
                        $_SESSION['user'] = $row['login'];
                        $_SESSION['access'] = $row["access_level"];
                        echo "<script>location.replace('index.php');</script>";
                    }
                }
            }
        }
    } catch (Exeption $e) {
        echo $e->getMessage();
    }

    if (isset($_REQUEST['exit'])) {
        session_destroy();
        echo "<script>location.replace('index.php');</script>";
    }
?>