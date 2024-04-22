<?php
require_once "../handlers/isAdmin.php";

 require '../database/db.php';
 if (session_id() == '')
 session_start();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лотос - Панель администратора</title>


    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sign-in-up.css">
    <link rel="stylesheet" href="../css/header-white-admin-master.css">
    <link rel="stylesheet" href="../css/admin-panel.css">
</head>

<body>

    <?php 
        require 'header-white-admin-master.php';
    ?>

     <main class="page">
        <section class="page__specialists">
            <div class="specialists__body _container">
                <div class="admin-panel-title ">Панель Администратора</div>
                <div class="tab-admin-panel">
                    <div class="radio-buttons__body-admin-panel">
                        <input checked id="tab-btn-1" name="tab-btn" type="radio" value="">
                        <label for="tab-btn-1">Мастера</label>

                        <input id="tab-btn-2" name="tab-btn" type="radio" value="">
                        <label for="tab-btn-2">Услуги</label>

                        <input id="tab-btn-3" name="tab-btn" type="radio" value="">
                        <label for="tab-btn-3">Записи на услугу</label>

                        <input id="tab-btn-4" name="tab-btn" type="radio" value="">
                        <label for="tab-btn-4">Обратная связь</label>

                        <input id="tab-btn-5" name="tab-btn" type="radio" value="">
                        <label for="tab-btn-5">Колесо фортуны</label>

                        <input id="tab-btn-6" name="tab-btn" type="radio" value="">
                        <label for="tab-btn-6">Модерация отзывов</label>

                    </div>


                    <div class="tab-content-admin-panel" id="content-1">
                    <p class="sub-header">Введите данные нового мастера: </p>
                        <table class="table__to-add">
                            <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Фото</th>
                                    <th>Курсы</th>
                                    <th>Опыт работы</th>
                                    <th>Специализация</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        <td><textarea class="master_name"></textarea></td>
                                        <td><textarea class="master_surname"></textarea></td>
                                        <td><textarea class="master_photo"></textarea></td>
                                        <td><textarea class="education"></textarea></td>
                                        <td><textarea class="work_experience"></textarea></td>
                                        <td><textarea class="position"></textarea></td>
                                        <td>
                                            <button class='add-master__button'></button>
                                        </td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="sub-header">Все мастера: </p>
                        <table class="table__to-update-delete">
                            <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Фото</th>
                                    <th>Курсы</th>
                                    <th>Опыт работы</th>
                                    <th>Специализация</th>
                                </tr>
                            </thead>
                                <?php
                                    $query = 'SELECT * from master';

                                    echo "<tbody>";
                                    $trBlock = '';

                                    $result = mysqli_query($link, $query) or die('Ошибка' . mysqli_error($link));
                                    if ($result) {
                                        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                            $row = mysqli_fetch_row($result);

                                            $trBlock .= "
                                                <tr id='$row[0]'>
                                                    <td><textarea id='". $row[0] ."'>" . $row[1] . "</textarea></td>
                                                    <td><textarea id='". $row[0] ."'>" . $row[2] . "</textarea></td>
                                                    <td><textarea id='". $row[0] ."'>" . $row[3] . "</textarea></td>
                                                    <td><textarea id='". $row[0] ."'>" . $row[4] . "</textarea></td>
                                                    <td><textarea id='". $row[0] ."'>" . $row[5] . "</textarea></td>
                                                    <td><textarea id='". $row[0] ."'>" . $row[6] . "</textarea></td>
                                                    
                                                    <td>
                                                        <button class='change-master__button' id='".$row[0]."'></button>
                                                        <button class='delete-master__button' id='" . $row[0] . "'></button>
                                                    </td>
                                                </tr>";
                                        }
                                    }
                                    echo $trBlock;
                                    echo "</tbody>";
                                ?>

                        </table>

                    </div>

                    <div class="tab-content-admin-panel" id="content-2">
                        Содержимое 1... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique eaque iure
                        debitis nostrum, vero ad totam ratione sequi! Suscipit, labore repellat cum soluta ullam
                        dignissimos perspiciatis sequi rerum sapiente ex.
                    </div>
                    <div class="tab-content-admin-panel" id="content-3">
                        Содержимое 1... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique eaque iure
                        debitis nostrum, vero ad totam ratione sequi! Suscipit, labore repellat cum soluta ullam
                        dignissimos perspiciatis sequi rerum sapiente ex.
                    </div>

                    <div class="tab-content-admin-panel" id="content-4">
                        Содержимое 4... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique eaque iure
                        debitis nostrum, vero ad totam ratione sequi! Suscipit, labore repellat cum soluta ullam
                        dignissimos perspiciatis sequi rerum sapiente ex.
                    </div>

                    <div class="tab-content-admin-panel" id="content-5">
                        Содержимое 5... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique eaque iure
                        debitis nostrum, vero ad totam ratione sequi! Suscipit, labore repellat cum soluta ullam
                        dignissimos perspiciatis sequi rerum sapiente ex.
                    </div>

                    <div class="tab-content-admin-panel" id="content-6">
                        Содержимое 6... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique eaque iure
                        debitis nostrum, vero ad totam ratione sequi! Suscipit, labore repellat cum soluta ullam
                        dignissimos perspiciatis sequi rerum sapiente ex.
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php 
        // require 'footer-white.php' 
    ?>

    <!-- <script>
          const textarea = document.querySelector('.number-input');
        
        textarea.addEventListener('input', function () {
            // Удаляем все нецифровые символы
            this.value = this.value.replace(/\D/g, '');
            
            // Ограничиваем длину ввода двумя символами
            if (this.value.length > 2) {
                this.value = this.value.slice(0, 2);
            }
        });
    </script> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="../js/tabs-admin-panel.js"></script>


    <script src="../libraries/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    

    <script src="../js/header.js"></script>

    <script src="../js/admin-panel-ajax/add-master.js"></script>
    <script src="../js/admin-panel-ajax/delete-master.js"></script>
    <script src="../js/admin-panel-ajax/update-master.js"></script>

</body>

</html>