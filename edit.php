<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- form table `user` -->
    <form action="" method="post" class="disable edit-user">
        <p>
            <select name="select-user" id="select-user"></select>
        </p>
        <button name="click-edit-user" id="edit-user">Изменить</button>
        <button name="delete-user" class="click-delete">Удалить</button>
        <p>
            <button name="back-click">Back</button>
        </p>
    </form>
    <form method="post" class="disable user">
        <div class="disable hide-add">
            <label>№ пользователя</label>
            <p>
                <input type="text" readonly id="id-edit" required placeholder="№" name="user_id">
            </p>
        </div>
        <label>Логин пользователя</label>
        <p>
            <input type="text" name="add_login" id="log-edit" placeholder="login" required>
        </p>
        <label class="active pass-hide">Пароль пользователя</label>
        <p class="active pass-hide">
            <input type="password" name="add_password" id="pass-edit" oncopy="return false;" placeholder="password">
        </p>
        <label>E-mail пользователя <sup>*</sup></label>
        <p>
            <input type="email" name="add_email" id="email-edit" placeholder="e-mail">
        </p>
        <label>Фамилия пользователя <sup>*</sup></label>
        <p>
            <input type="text" name='add_f' id="f-edit" placeholder="Фамилия">
        </p>
        <label>Имя пользователя <sup>*</sup></label>
        <p>
            <input type="text" name="add_i" id="i-edit" placeholder="Имя">
        </p>
        <label>Тип учётной записи</label>
        <p>
            <input type="text" name="add_access" id="acc-edit" value="user" placeholder="user or admin" required>
        </p>
        <p class="button">
            <button name="add_user_click">Выполнить</button>
        </p>
        <p>
            <button name="back-click">Back</button>
        </p>
    </form>

<!-- form table 'article' -->
    <form method="post" class="disable edit-article">
        <p>
            <select id="select-article" name="select-article"></select>
        </p>
        <button id="edit-article" name="click-edit-article">Изменить</button>
        <button name="click-delete-article" class="click-delete">Удалить</button>
        <p>
            <button name="back-click">Back</button>
        </p>
    </form>
    <form method="post" class="disable article">
        <div class="disable hide-add">
            <label>№ статьи</label>
            <p>
                <input type="text" id="articleClassId" readonly name="article_id">
            </p>
        </div>
        <label>Название статьи</label>
        <p>
            <input type="text" id="articleClassName"  name="add_name_article">
        </p>
        <label>Описание статьи</label>
        <p>
            <textarea name="add_description_article" id="articleClassDescription" maxlength="10000"></textarea>
        </p>
        <label>Пользователь</label>
        <p>
            <select name="select-user-article" id="select-user-article"></select>
        </p>
        <button name="add_article_click">Выполнить</button>
        <p>
            <button name="back-click">Back</button>
        </p>
    </form>

<!-- TODO: form table `temp article` -->
    <form method="post" class="disable article_temp_add">
        <label>Название статьи</label>
        <p>
            <input type="text" name="add_name_article_temp">
        </p>
        <label>Описание статьи</label>
        <p>
            <textarea name="add_description_article_temp" maxlength="10000"></textarea>
        </p>
        <label>Пользователь</label>
        <p>
            <input type="text" name="add_user_id_temp" value="1">
        </p>
        <button name="add_article_temp_click">Выполнить</button>
    </form>
    
<!-- form table `maps` -->
    <form method="post" class="disable edit-maps">
         <p>
            <select name='select-maps' id="select-maps"></select>
         </p>
        <button id="edi-t-maps" name="ed-maps">Изменить</button>
        <button id="delete-maps" name="del-maps">Удалить</button>
        <button name="back-click">Back</button>
    </form>
    <form method="post" class="disable maps">
        <div class="disable hide-add">
            <label>№ метки</label>
            <p>
                <input type="text" readonly id="map-id" name="map_id">
            </p>
        </div>
        <label>Название метки </label>
        <p>
            <input type="text" id="name_map" name="add_name_map">
        </p>
        <label>Описание метки</label>
        <p>
            <textarea class="description_map" id="desc-map" maxlength="150" name="add_description_map"></textarea>
        </p>
        <label>Пользователь</label>
        <p>
            <select name="add_map_user_id" id="us_map"></select>
        </p>
        <label>Широта</label>
        <p>
            <input type="text" id="lat" name="add_latitude">
        </p>
        <label>Долгота</label>
        <p>
            <input type="text" id="lan" name="add_langitude">
        </p>
        <button name="add_maps_click">Выполнить</button>
        <p>
            <button name="back-click">Back</button>
        </p>
    </form>

<!-- FIXME: form table `contents` -->
    <form method="post" class="disable edit-gallery">
        <p>
            <select name="" id="select-content"></select>
        </p>
        <button name="edit-gallery_on" id="edi-t-gallery">Изменить</button>
        <button name="delete-gallery-on" id="delete-gal-lery">Удалить</button>
        <button name="back-click">Back</button>
    </form>
    <form method="post" class="disable gallery">
        <div class="disable hide-add">
            <label>№ пользователя</label>
            <p>
                <input type="text" readonly name="gallery_id">
            </p>
        </div>
        <label>Файл</label>
        <p>
            <input type="file" name="upload">
        </p>
        <label>Название</label>
        <p>
            <input type="text" name="add_name_link">
        </p>
        <label>Опубликованная статья</label>
        <p>
            <input type="text" name="add_link_article">
        </p>
        <label>Не опубликованная статья</label>
        <p>
            <input type="text" name="add_linc_article_temp">
        </p>
        <button name="add_gallery_click">Выполнить</button>
        <p>
            <button name="back-click">Back</button>
        </p>
    </form>
    
<!-- script Load -->
    <script>
        let session = "<?php echo $_SESSION['select']; ?>",
            method = "<?php echo $_SESSION['method']; ?>",
            server = "<?php echo $_SESSION["edit"];?>";

        $(window).on('DOMContentLoaded', function (){
            if (method == 'add') {
                if (session == 1) {
                    document.title = 'Добавить статью';
                    $(".article").removeClass('disable');
                    $(".article").addClass('active');
                } else if (session === 2) { //FIXME: show form
                    document.title = 'Добавить в галерею';
                    $(".gallery").removeClass('disable');
                    $(".gallery").addClass('active');
                } else if (session == 3) {
                    document.title = "Добавить метку на карте";
                    $(".maps").removeClass('disable');
                    $(".maps").addClass('active');

                    $(".maps-show").removeClass('disable');
                    $(".maps-show").addClass('active');
                } else if (session == 4) {
                    document.title = "Добавить пользователя";
                    $(".user").removeClass('disable');
                    $(".user").addClass('active');
                }
            } else if (method == 'edit') {
                if (server === "edit") { // Continued Edit
                    $('.hide-add').removeClass('disable');
                    $('.hide-add').addClass('active');

                    let user_view = '<?php for ($i = 0; $i < 7; $i++) { echo $_SESSION["massiv"][$i].","; }?>'.split(',', 7),
                        article_view = '<?php for ($i = 0; $i < 4; $i++) { echo $_SESSION["article_massiv"][$i].","; }?>'.split(',', 4),
                        contents_view = '',
                        maps_view = '<?php for ($i = 0; $i < 6; $i++) { echo $_SESSION["massiv-map"][$i].","; }?>'.split(',', 6);

                    if (session == 1) { // filling table `article`
                        $('.article').removeClass('disable');
                        $('.article').addClass('active');

                        $("#articleClassId").val(article_view[0]);
                        $("#articleClassName").val(article_view[1]);
                        $("#articleClassDescription").val(article_view[2]);
                        $("#select-user-article :selected").val(article_view[3]);
                    } else if (session == 2) { // FIXME:filling table `contents`
                        $(".gallery").removeClass('disable');
                        $(".gallery").addClass('active');
                    } else if (session == 3) { // filling table `maps`
                        $(".maps").removeClass('disable');
                        $(".maps").addClass('active');

                        $('#map-id').val(maps_view[0]);
                        $('#name_map').val(maps_view[1]);
                        $('#desc-map').val(maps_view[2]);
                        $('#us_map [value="<?php echo $_SESSION['massiv-map'][3]?>"]').attr("selected", "selected");
                        $('#lat').val(maps_view[4]);
                        $('#lan').val(maps_view[5]);
                    } else if (session == 4) { // filling table `user`
                        $('.user').removeClass('disable');
                        $('.user').addClass('active');
                        $('.pass-hide').removeClass('active');
                        $('.pass-hide').addClass('disable');

                        $('#id-edit').val(user_view[0]);
                        $('#log-edit').val(user_view[1]);
                        $('#email-edit').val(user_view[3]);
                        $('#f-edit').val(user_view[4]);
                        $('#i-edit').val(user_view[5]);
                        $('#acc-edit').val(user_view[6]);
                    }
                } else { // Start edit
                    if (session == 1) {
                        document.title = 'Изменить статью';
                        $(".edit-article").removeClass('disable');
                        $(".edit-article").addClass('active');
                    } else if (session === 2) {
                        document.title = 'Изменить файл из галерея';
                        $(".edit-gallery").removeClass('disable');
                        $(".edit-gallery").addClass('active');
                    } else if (session == 3) {
                        document.title = "Изменить метку на карте";
                        $(".edit-maps").removeClass('disable');
                        $(".edit-maps").addClass('active');
                    } else if (session == 4) {
                        document.title = "Изменить пользователя";
                        $(".edit-user").removeClass('disable');
                        $(".edit-user").addClass('active');
                    }
                }
            }
        });
    </script>
</body>
</html>

<?php
    include 'connect.php';
/**
 * Admin module
 */
    try {
    /**
     * Insert && Update table `user`
     */
        if (isset($_REQUEST['add_user_click'])) {
            $edit_user_id = filter_input(INPUT_POST, "user_id");

            $add_login = filter_input(INPUT_POST, "add_login");
            if (!$add_login) {
                throw new Exception("Не корректно введён логин!");
            }

            $add_email = filter_input(INPUT_POST, 'add_email', FILTER_VALIDATE_EMAIL);

            $add_f = filter_input(INPUT_POST, 'add_f');

            $add_i = filter_input(INPUT_POST, 'add_i');

            $add_access = filter_input(INPUT_POST, "add_access");
            if (!$add_access) {
                throw new Exception("Не выбраны права доступа для аккаунта!");
            }

            if ($_SESSION['method'] == 'add') {
                $add_password = filter_input(INPUT_POST, "add_password");
                if (!$add_password || mb_strlen($add_password) < 8) {
                    throw new Exception("Не корректно введён пароль!");
                }

                $add_password_hash = password_hash($add_password, PASSWORD_DEFAULT, ['cost' => 12]);
                if (!$add_password_hash) {
                    throw new Exception("Хеш не сформирован!");
                }

                $sql = "INSERT INTO user (login, password, email, name_user, firstname_user, access_level) VALUES (?, ?, ?, ?, ?, ?)";
                $query = $pdo->prepare($sql);
                $query->execute([$add_login, $add_password_hash, $add_email, $add_f, $add_i, $add_access]);
                echo "<script>alert('Пользователь ". $add_login ." добавлен'); location.replace('my_data.php');</script>";
            } elseif ($_SESSION['method'] == 'edit') {
                if (!$edit_user_id) {
                    throw new Exeption('Not exsists user_id');
                }

                $sql = "UPDATE `user` SET `login` = ?, `email` = ?, `name_user` = ?, `firstname_user` = ?,`access_level` = ? WHERE `id_user` = ?";
                $query = $pdo->prepare($sql);
                $query->execute([$add_login, $add_email, $add_i, $add_f, $add_access, $edit_user_id]);
                echo "<script>alert('Данные пользователя ". $add_login ." изменены'); location.replace('my_data.php');</script>";
            }

            unset($_SESSION['edit']);
            unset($_SESSION['massiv']);
            unset($_SESSION['id_user']);
        }

    /**
     * INsert && Update table `article`
     */
        if (isset($_REQUEST['add_article_click'])) {
            $add_name_article = filter_input(INPUT_POST, "add_name_article");
            if (!$add_name_article) {
                throw new Exception("Не корректно введено название статьи!");
            }

            $add_description_article = filter_input(INPUT_POST, "add_description_article");
            if (!$add_description_article) {
                throw new Exception("Не корректно введены данные!");
            }

            $add_user_id = filter_input(INPUT_POST, "select-user-article", FILTER_VALIDATE_INT);
            if (!$add_user_id) {
                throw new Exception("Не выбран автор статьи!");
            }
            $id_article = filter_input(INPUT_POST, 'article_id');
            if (!$id_article) {
                throw new Exception("Error Processing Request");
                
            }

            if ($_SESSION['method'] == 'add') {
                $sql = "INSERT INTO article (name_article, description, id_user) VALUES (?, ?, ?)";
                $query = $pdo->prepare($sql);
                $query->execute([$add_name_article, $add_description_article, $add_user_id]);
                echo "<script>alert('Статья добавлена'); location.replace('my_data.php');</script>";
            } else if ($_SESSION['method'] == 'edit') {
                $sql = "UPDATE article SET name_article = ?, description = ?, id_user = ? WHERE id_article = ?";
                $query = $pdo->prepare($sql);
                $query->execute([$add_name_article, $add_description_article, $add_user_id, $id_article]);
                echo "<script>alert('Статья изменена'); location.replace('my_data.php');</script>";
            }
            unset($_SESSION['id_article']);
            unset($_SESSION['edit']);
            unset($_SESSION['article-massiv']);
        }

    /**
     * Insert table `article_temp` TODO:
     */
        if (isset($_REQUEST['add_article_temp_click'])) {
            $add_name_article_temp = filter_input(INPUT_POST, "add_name_article_temp");
            if (!$add_name_article_temp) {
                throw new Exception("Не корректно введено название статьи!");
            }

            $add_description_article_temp = filter_input(INPUT_POST, "add_description_article_temp");
            if (!$add_description_article_temp) {
                throw new Exception("Не корректно введены данные!");
            }

            $sql = "INSERT INTO article (name_article, description) VALUES (?, ?)";
            $query = $pdo->prepare($sql);
            $query->execute([$add_name_article_temp, $add_description_article_temp]);
            echo "<script>alert('Статья добавлена'); location.replace('my_data.php');</script>";
        }

    /**
     * Insert table `maps`
     */
        if (isset($_REQUEST['add_maps_click'])) {
            $add_name_map = filter_input(INPUT_POST, "add_name_map");
            if (!$add_name_map) {
                throw new Exception("Не корректно введено название метки!");
            }

            $add_description_map = filter_input(INPUT_POST, "add_description_map");
            if (!$add_description_map) {
                throw new Exception("Не корректно введено описание метки!");
            }

            $add_map_user_id = filter_input(INPUT_POST, "add_map_user_id", FILTER_VALIDATE_INT);
            if (!$add_map_user_id) {
                throw new Exception("Не выбран пользователь!");
            }

            $add_latitude = filter_input(INPUT_POST, "add_latitude", FILTER_VALIDATE_FLOAT);
            if (!$add_latitude) {
                throw new Exception("Не корректно введена широта!");
            }

            $add_langitude = filter_input(INPUT_POST, "add_langitude", FILTER_VALIDATE_FLOAT);
            if (!$add_langitude) {
                throw new Exception("Не корректно введена долгота!");
            }
            
            if ($_SESSION[method] == 'add') {
                $sql = "INSERT INTO maps (name_map, description, id_user, latitude, langitude) VALUES (?, ?, ?, ?, ?)";
                $query = $pdo->prepare($sql);
                $query->execute([$add_name_map, $add_description_map, $add_map_user_id, $add_latitude, $add_langitude]);
                echo "<script>alert('Метка на карту добавлена'); location.replace('my_data.php');</script>";
            } else if ($_SESSION['method'] == 'edit') {
                $id_maps = filter_input(INPUT_POST, 'map_id');
                if (!$id_maps) {
                    throw new Exception("Error Processing Request");
                }

                $sql = "UPDATE maps SET name_map = ?, description = ?, id_user = ?, latitude = ?, langitude = ? WHERE id_maps = ?";
                $query = $pdo->prepare($sql);
                $query->execute([$add_name_map, $add_description_map, $add_map_user_id, $add_latitude, $add_langitude, $id_maps]);
                echo "<script>alert('Метка изменена'); location.replace('my_data.php');</script>";
            }
            
            unset($_SESSION['id_map']);
            unset($_SESSION['edit']);
            unset($_SESSION['massiv-map']);
        }

    /**
     * Insert table `contents` FIXME:
     */
        if (isset($_REQUEST['add_gallery_click'])) {
            // $add_link = filter_input(INPUT_POST, "upload", FILTER_VALIDATE_URL);
            // if (!$add_link) {
            //     throw new Exception("Error Processing Request", 1);
            // }
            $image = addslashes(file_get_contents($_FILES['upload']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            var_dump($images); echo "<br>"; var_dump($images_name);

            $add_name_link = filter_input(INPUT_POST, "add_name_link");
            if (!$add_name_link) {
                throw new Exception("Error Processing Request", 1);
            }

            $add_link_article = filter_input(INPUT_POST, "add_link_article", FILTER_VALIDATE_INT);

            $add_link_article_temp = filter_input(INPUT_POST, "add_link_article_temp", FILTER_VALIDATE_INT);

            // if ($add_link_article == '' && $add_link_article_temp != "" || $add_link_article != "" && $add_link_article_temp == '') {
            //     $sql = "INSERT INTO contents (link, name_link, id_article, id_article_temp) VALUES (?, ?)";
            //     $query = $pdo->prepare($sql);
            //     $query->execute([$add_link, $add_name_link, $add_link_article, $add_link_article_temp]);
            //     echo "<script>alert('Статья добавлена'); location.replace('my_data.php');</script>";
            // } else {
            //     throw new Exception("Ошибка заполнения формы!");
            // }
        }

    /**
     * Click `button` >> Back
     */
        if (isset($_REQUEST['back-click'])) {
            echo "<script>alert('Операция отменена пользователем!'); location.replace('my_data.php');</script>";
            unset($_SESSION['edit']);

            unset($_SESSION['id_user']);
            unset($_SESSION['id_map']);
            unset($_SESSION['id_content']);
            unset($_SESSION['id_article']);
        }

    /**
     * SQL-query for "id" `select`->`option` table
     */
        if (empty($_SESSION['id_user'])) {
            $query_user = "SELECT id_user, login FROM user";
            $view_user = $pdo->query($query_user);
            $login_edit = array();
            $count = 0;
            $user_id_edit = array();
            while ($row = $view_user->fetch(PDO::FETCH_LAZY)) {
                $login_edit[$count] = $row->login;
                $user_id_edit[$count] = $row->id_user;
                $count++;
            }
            $_SESSION['id_user'] = array($login_edit, $user_id_edit);
        }
        if (empty($_SESSION['id_map'])) {
            $query_maps = "SELECT id_maps, name_map FROM maps";
            $view_maps = $pdo->query($query_maps);
            $counts = 0;
            $name_maps = array();
            $id_map = array();
            while ($row = $view_maps->fetch(PDO::FETCH_LAZY)) {
                $name_maps[$counts] = $row->name_map;
                $id_map[$counts] = $row->id_maps;
                $counts++;
            }
            $_SESSION['id_map'] = array($name_maps, $id_map);
        }
        if (empty($_SESSION['id_content'])) {
            $query = "SELECT id_link, name_link FROM contents";
            $view_edit = $pdo->query($query);
            $name_link = array();
            $countt = 0;
            $id_link = array();
            while ($row = $view_edit->fetch(PDO::FETCH_LAZY)) {
                $name_link[$countt] = $row->name_link;
                $id_link[$countt] = $row->id_link;
                $countt++;
            }
            $_SESSION['id_content'] = array($name_link, $id_link);
        }
        if (empty($_SESSION['id_article'])) {
            $query_article = "SELECT id_article, name_article FROM article";
            $view_article = $pdo->query($query_article);
            $name_article = array();
            $count_article = 0;
            $id_article_edit = array();
            while ($row = $view_article->fetch(PDO::FETCH_LAZY)) {
                $name_article[$count_article] = $row->name_article;
                $id_article_edit[$count_article] = $row->id_article;
                $count_article++;
            }
            $_SESSION['id_article'] = array($name_article, $id_article_edit);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
<script>
/**
 * Add select element
 */
    let select_user_edit = document.getElementById('select-user'),
        select_user_id = document.getElementById('select-user-article'),
        select_article = document.getElementById('select-article'),
        user_map_select = document.getElementById('us_map'),
        user_map_sel_maps = document.getElementById('select-maps'),
        count = "<?php echo count($_SESSION['id_user'][0]);?>",
        count_article = "<?php echo count($_SESSION['id_article'][0]);?>",
        parametr_text = '<?php for ($i = count($_SESSION["id_user"][0])-1; $i >= 0; $i--) { echo $_SESSION["id_user"][0][$i].","; }?>'.split(',', count),
        parametr_id = '<?php for ($i = count($_SESSION["id_user"][0])-1; $i >= 0; $i--) { echo $_SESSION["id_user"][1][$i].","; }?>'.split(',', count),
        parametr_text_article = '<?php for ($i = count($_SESSION["id_article"][0])-1; $i >= 0; $i--) { echo $_SESSION['id_article'][0][$i].","; }?>'.split(',', count_article),
        parametr_id_article = '<?php for ($i = count($_SESSION["id_article"][0])-1; $i >= 0; $i--) { echo $_SESSION['id_article'][1][$i].","; }?>'.split(',', count_article),
        count_map = "<?php echo count($_SESSION['id_map'][0]);?>",
        map_view = '<?php for ($i = count($_SESSION["id_map"][0])-1; $i >= 0; $i--) { echo $_SESSION['id_map'][0][$i].","; }?>'.split(',', count_map),
        map_view_id = '<?php for ($i = count($_SESSION["id_map"][0])-1; $i >= 0; $i--) { echo $_SESSION['id_map'][1][$i].","; }?>'.split(',', count_map)

    for (let i = 0; i < count; i++) { // Add `option` in `select` table user->`user_id`
        let option = document.createElement('option');

        option.innerHTML = parametr_text[i];
        option.value = parametr_id[i];
        select_user_edit.appendChild(option);
    }

    for (let i = 0; i < count; i++) { // Add `option` in `select` table article->`article_user_id`
        let option_art_id = document.createElement('option');

        option_art_id.innerHTML = parametr_text[i];
        option_art_id.value = parametr_id[i];
        select_user_id.appendChild(option_art_id);
    }
    for (let i = 0; i < count; i++) { // Add `option` in `select` table maps->maps_user_id`
        let option_map_id = document.createElement('option');

        option_map_id.innerHTML = parametr_text[i];
        option_map_id.value = parametr_id[i];
        user_map_select.appendChild(option_map_id);
    }

    for (let i = 0; i < count_article; i++) { //Add 'option' in `select` table article->`article_id`
        let option_article = document.createElement('option');

        option_article.innerHTML = parametr_text_article[i];
        option_article.value = parametr_id_article[i];
        select_article.appendChild(option_article);
    }

    for (let i = 0; i < count_map; i++) { //Add 'option' in `select` table maps->`maps_id`
        let option_map = document.createElement('option');

        option_map.innerHTML = map_view[i];
        option_map.value = map_view_id[i];
        user_map_sel_maps.appendChild(option_map);
    }
</script>
<?php
/**
 * Click Select `user` Edit
 */
    if (isset($_REQUEST['click-edit-user'])) {
        $select_user_edit_view = filter_input(INPUT_POST, "select-user");
        if (!$select_user_edit_view) {
            throw new Exception("Выберите что-нибудь для изменения!");
        }

        $query_edit = "SELECT * FROM user WHERE id_user = ?";
        $view_edit_user = $pdo->prepare($query_edit);
        $view_edit_user->execute([$select_user_edit_view]);
        while ($row = $view_edit_user->fetch(PDO::FETCH_LAZY)) {
            $_SESSION["massiv"][0] = $row->id_user;
            $_SESSION["massiv"][1] = $row->login;
            $_SESSION["massiv"][2] = $row->password;
            $_SESSION["massiv"][3] = $row->email;
            $_SESSION["massiv"][4] = $row->firstname_user;
            $_SESSION["massiv"][5] = $row->name_user;
            $_SESSION["massiv"][6] = $row->access_level;
        }
        $_SESSION['edit'] = 'edit';
        echo "<script>location.replace('edit.php');</script>";
    }
/**
 * Click Select `user` Delete
 */
    $select_user_edit_view = filter_input(INPUT_POST, "select-user");

    if (isset($_REQUEST['delete-user'])) {
        if (!$select_user_edit_view) {
            throw new Exception("Выберите что-нибудь для изменения!");
        }

        $value_edit_select = array_search( $select_user_edit_view, $_SESSION['id_user'][1]);
        $select_user_edit_view_value = $_SESSION['id_user'][0][$value_edit_select];
        
        echo "<script>
            let answer = confirm('Вы действительно хотите удалить пользователя - " .$select_user_edit_view_value. " !');
            if (answer == true) {
                location.replace('edit.php?id=ok&del=" .$select_user_edit_view. "');
            } else { 
                alert('Операция отменена пользователем!'); 
                location.replace('my_data.php');
            }
            </script>";
    }
    if ($_GET['id'] == 'ok') {
        $query_main = 'DELETE FROM user WHERE id_user=?;';
        $query_one = 'DELETE FROM article WHERE id_user = ?';
        $query_two = 'DELETE FROM user WHERE id_user = ?';
        $query_tree = 'DELETE FROM article WHERE id_user = ?';
        try {
            $view_del = $pdo->prepare($query_one);
            $view_dell = $pdo->prepare($query_two);
            $view_delet = $pdo->prepare($query_tree);
            $view_delete = $pdo->prepare($query_main);
            $view_del->execute([$_GET['del']]);
            $view_dell->execute([$_GET['del']]);
            $view_delet->execute([$_GET['del']]);
            $view_delete->execute([$_GET['del']]);
            
            echo "<script>alert('Запись удалена!');location.replace('my_data.php');</script>";
            unset($_SESSION['id_user']);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

/**
 * Click Select `article` Edit
 */
    if (isset($_REQUEST['click-edit-article'])) {
        $_SESSION['edit'] = 'edit';

        $select_article_edit_view = filter_input(INPUT_POST, "select-article");
        if (!$select_article_edit_view) {
            throw new Exception("Выберите что-нибудь для изменения!");
        }

        $query_edit_article = "SELECT * FROM article WHERE id_article = ?";
        $view_edit_article = $pdo->prepare($query_edit_article);
        $view_edit_article->execute([$select_article_edit_view]);
        while ($row = $view_edit_article->fetch(PDO::FETCH_LAZY)) {
            $_SESSION["article_massiv"][0] = $row->id_article;
            $_SESSION["article_massiv"][1] = $row->name_article;
            $_SESSION["article_massiv"][2] = $row->description;
            $_SESSION["article_massiv"][3] = $row->id_user;
        }
        echo "<script>location.replace('edit.php');</script>";
    }
/**
 * Click Select `article` Delete
 */
    if (isset($_REQUEST['click-delete-article'])) {
        $select_article_edit_view = filter_input(INPUT_POST, "select-article");
        if (!$select_article_edit_view) {
            throw new Exception("Выберите что-нибудь для изменения!");
        }

        $value_edit_select = array_search( $select_article_edit_view, $_SESSION['id_article'][1]);
        $select_article_edit_view_value = $_SESSION['id_article'][0][$value_edit_select];
        
        echo "<script>
            let answer = confirm('Вы действительно хотите удалить статью - " .$select_article_edit_view_value. " !');
            if (answer == true) {
                location.replace('edit.php?id=ok&del=" .$select_article_edit_view. "');
            } else { 
                alert('Операция отменена пользователем!'); 
                location.replace('my_data.php');
            }
            </script>";
    }

    if ($_GET['id'] == 'ok') {
        $query = 'DELETE FROM article WHERE id_article = ?';
        $query_one = 'DELETE FROM contents WHERE id_article = ?';
        try {
            $view_dell = $pdo->prepare($query_one);
            $view_del = $pdo->prepare($query);
            $view_dell->execute([$_GET['del']]);
            $view_del->execute([$_GET['del']]);
            
            echo "<script>alert('Запись удалена!');location.replace('my_data.php');</script>";
            unset($_SESSION['id_article']);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

/**
 * Click Select `maps` Edit
 */
    if (isset($_REQUEST['ed-maps'])) {
        $select_map_edit_view = filter_input(INPUT_POST, "select-maps");
        if (!$select_map_edit_view) {
            throw new Exception("Выберите что-нибудь для изменения!");
        }

        $query_edit = "SELECT * FROM maps WHERE id_maps = ?";
        $view_edit_map = $pdo->prepare($query_edit);
        $view_edit_map->execute([$select_map_edit_view]);
        while ($row = $view_edit_map->fetch(PDO::FETCH_LAZY)) {
            $_SESSION["massiv-map"][0] = $row->id_maps;
            $_SESSION["massiv-map"][1] = $row->name_map;
            $_SESSION["massiv-map"][2] = $row->description;
            $_SESSION["massiv-map"][3] = $row->id_user;
            $_SESSION["massiv-map"][4] = $row->latitude;
            $_SESSION["massiv-map"][5] = $row->langitude;
        }
        $_SESSION['edit'] = 'edit';
        echo "<script>location.replace('edit.php');</script>";
    }

/**
 * Click Select `maps` Delete
 */
    if (isset($_REQUEST['del-maps'])) {
        $select_maps_edit_view = filter_input(INPUT_POST, "select-maps");
        if (!$select_maps_edit_view) {
            throw new Exception("Выберите что-нибудь для изменения!");
        }

        $value_edit_id = array_search( $select_maps_edit_view, $_SESSION['id_map'][1]);
        $select_maps_edit_view_value = $_SESSION['id_map'][0][$value_edit_id];
        
        echo "<script>
            let answer = confirm('Вы действительно хотите удалить метку - " .$select_maps_edit_view_value. " !');
            if (answer == true) {
                location.replace('edit.php?id=ok&del=" .$select_maps_edit_view. "');
            } else { 
                alert('Операция отменена пользователем!'); 
                location.replace('my_data.php');
            }
            </script>";
    }

    if ($_GET['id'] == 'ok') {
        $query_one = 'DELETE FROM maps WHERE id_maps = ?';
        try {
            $view_dell = $pdo->prepare($query_one);
            $view_dell->execute([$_GET['del']]);
            
            echo "<script>alert('Запись удалена!');location.replace('my_data.php');</script>";
            unset($_SESSION['id_map']);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
?>