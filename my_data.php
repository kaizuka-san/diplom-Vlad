<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Standart Form user or admin panel -->
    <form method="post">
        <button name="link_home">home</button>
        <button name="exit">exit</button>
    </form>
<!-- Form admin panel -->
    <form method="post"  name="data">
        <div class="admin disable">
            <p>
                <select name="select_admin" id="select_admin">
                    <option value="0"></option>
                    <option value="1">Статьи</option>
                    <option value="2">Галерея</option>
                    <option value="3">Карта</option>
                    <option value="4">Пользователи</option>
                </select>
                <button name="add_admin">Добавить</button>
                <button name="edit_admin">Изменить</button>
            </p>
        </div>

<!-- Form user panel -->
        <div class="user disable">
            <p>
                <select name="select_user" id="select_user">
                    <option value="0"></option>
                    <option value="1">Статьи</option>
                    <option value="2">Галерея</option>
                    <option value="3">Карта</option>
                    <option value="4">Данные</option>
                </select>
                <button name="add_user">Добавить</button>
                <button name="edit_user">Изменить</button>
            </p>
        </div>
    </form>

<!-- JS-script: hide or show form admin or user -->
    <script type="text/javascript">
        document.title = "Привет <?php echo $_SESSION['user'];?>";

        let access = "<?php echo $_SESSION['access'];?>";
        if (access === 'admin') {
            $(".admin").removeClass('disable');
            $(".admin").addClass('active');
        }
        else {
            $(".user").removeClass('disable');
            $(".user").addClass('active');
        }
    </script>
</body>
</html>
<?php
/**
 * Button Standart Form
 */
    if (isset($_REQUEST['link_home'])) {
        echo "<script>location.replace('index.php');</script>";
    }

    if (isset($_REQUEST['exit'])) {
        session_destroy();
        echo "<script>location.replace('index.php');</script>";
    }

/**
 * PHP-script work admin panel
 */
    try {
        if (isset($_REQUEST['add_admin'])) {
            if (filter_input(INPUT_POST, 'select_admin') != '0') {
                $_SESSION['select'] = filter_input(INPUT_POST, 'select_admin');
                $_SESSION['method'] = "add";
                echo "<script>location.replace('edit.php');</script>";
            } else {
                throw new Exception("Выберите таблицу для добавления!");
            }
        }

        if (isset($_REQUEST['edit_admin'])) {
            if (filter_input(INPUT_POST, 'select_admin') != '0') {
                $_SESSION['select'] = filter_input(INPUT_POST, 'select_admin');
                $_SESSION['method'] = 'edit';
                echo "<script>location.replace('edit.php');</script>";
            } else {
                throw new Exception("Выберите таблицу для изменения!");
            }

        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>