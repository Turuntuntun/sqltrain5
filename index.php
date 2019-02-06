<?php
	error_reporting(E_ALL);
    ini_set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = 'nfnmzyf40404';
	$dbName = 'my';

	$link = mysqli_connect($host,$user,$password,$dbName);
	mysqli_query($link,"SET NAMES 'utf-8'");

	$query = "SELECT * FROM message WHERE status = 1";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT teams2.team_name as name1, teams3.team_name as name2, game.date as date1, game.status as status, game.name as name FROM  game 
			    INNER JOIN teams as teams2 ON game.team1_id = teams2.id  
			    INNER JOIN teams as teams3 ON game.team2_id = teams3.id ";
    
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Название</th><th>Команда 1</th><th>Команда 2</th><th>Счет</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['name1'].'</td>
        	             <td>'.$value['name2'].'</td>
        	             <td>'.$value['status'].'</td>
        	             </tr>';
	        
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT teams2.team_name as name1, teams3.team_name as name2, game.date as date1, game.status as status, game.name as name FROM  game 
			    INNER JOIN teams as teams2 ON game.team1_id = teams2.id  
			    INNER JOIN teams as teams3 ON game.team2_id = teams3.id WHERE MONTH(game.date) = MONTH(NOW()) ";
    
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Название</th><th>Команда 1</th><th>Команда 2</th><th>Счет</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['name1'].'</td>
        	             <td>'.$value['name2'].'</td>
        	             <td>'.$value['status'].'</td>
        	             </tr>';
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT teams2.team_name as name1, teams3.team_name as name2, game.date as date1, game.status as status, game.name as name FROM  game 
			    INNER JOIN teams as teams2 ON game.team1_id = teams2.id  
			    INNER JOIN teams as teams3 ON game.team2_id = teams3.id WHERE MONTH(game.date) = MONTH(NOW() - INTERVAL 1 MONTH) ";
    
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Название</th><th>Команда 1</th><th>Команда 2</th><th>Счет</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['name1'].'</td>
        	             <td>'.$value['name2'].'</td>
        	             <td>'.$value['status'].'</td>
        	             </tr>';
  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT teams2.team_name as name1, teams3.team_name as name2, game.date as date1, game.status as status, game.name as name FROM  game 
			    INNER JOIN teams as teams2 ON game.team1_id = teams2.id  
			    INNER JOIN teams as teams3 ON game.team2_id = teams3.id WHERE status != '' ";
    
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Название</th><th>Команда 1</th><th>Команда 2</th><th>Счет</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['name1'].'</td>
        	             <td>'.$value['name2'].'</td>
        	             <td>'.$value['status'].'</td>
        	             </tr>';
        
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT teams2.team_name as name1, teams3.team_name as name2, game.date as date1, game.status as status, game.name as name FROM  game 
			    INNER JOIN teams as teams2 ON game.team1_id = teams2.id  
			    INNER JOIN teams as teams3 ON game.team2_id = teams3.id WHERE status = '' ";
    
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Название</th><th>Команда 1</th><th>Команда 2</th><th>Счет</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['name1'].'</td>
        	             <td>'.$value['name2'].'</td>
        	             <td>'.$value['status'].'</td>
        	             </tr>';          
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT teams.team_name as name,  player.name as name1 FROM  player 
			    LEFT JOIN teams ON player.team_id = teams.id ";
    
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Команда</th><th>Игрок</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['name1'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;

    $query = "SELECT user7.name as name,  user7.text as text, pages7.name as page FROM  user7 
			    INNER JOIN pages7  ON user7.page_id = pages7.id  
			    INNER JOIN category7  ON pages7.category_id = category7.id  ";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Юзер</th><th>Текст</th><th>Страница</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['text'].'</td>
        	             <td>'.$value['page'].'</td>
        	             </tr>';          
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;

    $query = "SELECT user7.name as name,  user7.text as text, pages7.name as page FROM  user7 
			    INNER JOIN pages7  ON user7.page_id = pages7.id  
			    INNER JOIN category7  ON pages7.category_id = category7.id  WHERE user7.name = 'Антон'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
	$content = '<table><tr><th>Команда</th><th>Игрок</th></tr>';
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['text'].'</td>
        	             <td>'.$value['page'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;

    $query = "SELECT product4.name_product as name, color4.color_name as colorname FROM product4
                LEFT JOIN color4 ON product4.color_id = color4.id";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Вещь</th><th>цвет</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['colorname'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;

    $query = "SELECT inteview8.name as name, inteview8.text as text, user8.name as username FROM inteview8 
                LEFT JOIN user8 ON inteview8.user_id = user8.id WHERE inteview8.status != 0";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Имя пользователя</th><th>Имя</th><th>Техт</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['username'].'</td>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['text'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;

    $query = "SELECT inteview8.name as name, inteview8.text as text, user8.name as username FROM inteview8 
                LEFT JOIN user8 ON inteview8.user_id = user8.id WHERE inteview8.status = 0 ";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Имя пользователя</th><th>Имя</th><th>Техт</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['username'].'</td>
        	             <td>'.$value['name'].'</td>
        	             <td>'.$value['text'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT category9.name as category, upcategory.name as subcategory, upupcategory.name as subsubcategory FROM category9 
                LEFT JOIN category9 as upcategory ON category9.id  = upcategory.category_id
                LEFT JOIN category9 as upupcategory ON upcategory.id  = upupcategory.category_id";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Категория</th><th>Подкатегория</th><th>Подподкатегория</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['category'].'</td>
        	             <td>'.$value['subcategory'].'</td>
        	             <td>'.$value['subsubcategory'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT user9.name as username, father.name as fathername FROM user9 
                LEFT JOIN user9 as father ON user9.father_id  = father.id ";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Пользователь</th><th>Отец</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['username'].'</td>
        	             <td>'.$value['fathername'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT user9.name as username, mother.name as mothername FROM user9 
                LEFT JOIN user9 as mother ON user9.mother_id  = mother.id ";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Пользователь</th><th>Мать</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['username'].'</td>
        	             <td>'.$value['mothername'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT  mother.name as mothername, user9.name as username, father.name as fathername  FROM user9 
                LEFT JOIN user9 as mother ON user9.mother_id   = mother.id
                LEFT JOIN user9 as father ON user9.father_id    = father.id
                ";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Мать</th><th>Отец</th><th>Ребенок</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['mothername'].'</td>
        	             <td>'.$value['fathername'].'</td>
        	             <td>'.$value['username'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT  mother.name as mothername, user9.name as username, father.name as fathername  FROM user9 
                LEFT JOIN user9 as mother ON user9.mother_id  = mother.id
                LEFT JOIN user9 as father ON user9.father_id  = father.id WHERE user9.sex = 'M'
                ";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Мать</th><th>Отец</th><th>Ребенок</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['mothername'].'</td>
        	             <td>'.$value['fathername'].'</td>
        	             <td>'.$value['username'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
    $query = "SELECT  mother.name as mothername, user9.name as username, father.name as fathername  FROM user9 
                LEFT JOIN user9 as mother ON user9.mother_id  = mother.id
                LEFT JOIN user9 as father ON user9.father_id  = father.id WHERE user9.sex = 'F'
                ";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Мать</th><th>Отец</th><th>Ребенок</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['mothername'].'</td>
        	             <td>'.$value['fathername'].'</td>
        	             <td>'.$value['username'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;
     $query = "SELECT  grandfather.name as grandfathername, user9.name as username, grandmother.name as grandmothername  FROM user9 
                LEFT JOIN user9 as mother ON user9.mother_id  = mother.id
                LEFT JOIN user9 as father ON user9.father_id  = father.id 
                LEFT JOIN user9 as grandfather ON father.father_id  = grandfather.id 
                LEFT JOIN user9 as grandmother ON mother.mother_id  = grandmother.id 
                ";
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    $content = '<table><tr><th>Дед</th><th>Бабка</th><th>Внук</th></tr>';
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
        	$content .= '<tr>
        	             <td>'.$value['grandfathername'].'</td>
        	             <td>'.$value['grandmothername'].'</td>
        	             <td>'.$value['username'].'</td>
        	             </tr>';  
        }
    $content .= '</table>';
    echo "<br>";
    echo $content;


