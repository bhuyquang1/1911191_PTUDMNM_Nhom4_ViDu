<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {font-family: Arial;}

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }
        </style>
    </head>
    <body>
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Bai1')" id="defaultOpen">Bài 5.1</button>
            <button class="tablinks" onclick="openTab(event, 'Bai2')">Bài 5.2</button>
            <button class="tablinks" onclick="openTab(event, 'Bai3')">Bài 5.3</button>
            <button class="tablinks" onclick="openTab(event, 'Bai4')">Bài 5.4</button>
            <button class="tablinks" onclick="openTab(event, 'Bai5')">Bài 5.5</button>
        </div>
        <div id="Bai1" class="tabcontent">
            <form method="post">
                <?php
                    $number = filter_input(INPUT_POST, 'number');
                    $evenOdd = "";
                    if (isset($_POST["validate"])) {
                        if (is_numeric($number)) {
                            if ($number % 2 == 0) {
                                $evenOdd = "Số chẵn";
                            } else {
                                $evenOdd = "Số lẻ";
                            }
                        }
                        else {
                            $evenOdd = "Không phải là số!";
                        }
                    }
                ?>
                <p>Nhập số bất kỳ: <input type="text" name="number" value="<?php echo $number?>"></p>
                <p>Loại số: <input type="text" name="evenOdd" value="<?php echo $evenOdd?>"></p>
                <input name="validate" type="submit" value="Kiểm tra">
            </form>
        </div>
        <div id="Bai2" class="tabcontent">
            <h2>Giải phương trình dạng ax + b = 0</h2>
            <form method="post">
                <?php
                    $a = filter_input(INPUT_POST, 'a');
                    $b = filter_input(INPUT_POST, 'b');
                    $x = filter_input(INPUT_POST, 'results');
                    if (isset($_POST["validate"])) {
                        if (is_numeric($a) && is_numeric($b)) {
                            if ($a == 0) {
                                if ($b == 0) {
                                    $x = "Phương trình có vô sô nghiệm.";
                                } else {
                                    $x = "Phương trình vô nghiệm.";
                                }
                            } else {
                                $x = -$b/$a;
                            }
                        }
                        else {
                            $evenOdd = "Không phải là số!";
                        }
                    }
                ?>
                <p>a: <input type="text" name="a" value="<?php echo $a?>"></p>
                <p>b: <input type="text" name="b" value="<?php echo $b?>"></p>
                <p>x: <input type="text" name="results" value="<?php echo $x?>" placeholder="Kết quả"></p>
                <input name="validate" type="submit" value="Kiểm tra">
            </form>
        </div>
        <script>
            function openTab(evt, exName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(exName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();
        </script>
    </body>
</html>
