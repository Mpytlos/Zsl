<?php
 $text = <<< T
 zsl - Zespół
 szkół
 łączności<br>
 T;

 echo $text;
 echo n12br($text); /// wrzuca entera w html tam gdzie sa entery w heredoc

 $name = 'jAnUsZ';
 echo strtolower($name); /// wszystkie litery robi małe
 echo $name;
 $name = 'krystyna';
 echo strtoupper($name); /// wszystkie litery robi duże
 $name = 'anNA nOWAk';
 echo ucfirst($name); /// zmienia pierwszą litere na dużą
 $name = 'anNA nOWAk';
 echo ucwords($name); /// zamienia pierwszą literę każdego słowa

 /// zadanie 1 $name ma wyglądać tak : Anna Nowak
  $name = 'anNA nOWAk';
  $name = strtolower($name);
  echo ucwords($name);


  $lorem =<<<LOREM
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 LOREM;

  echo $lorem;
  $col = wordwrap($lorem, 40, '<br>'); /// oddziela co 40 znaków <br>
  echo $col;

  ob_clean(); /// usuwanie zawartości bufora

  $name = 'Anna';
  $name1 = ' Anna  ';
  echo 'długość $name ', strlen($name); ///4 znaków
  echo 'długość $name1 ', strlen($name1); ///7 znaków
  echo strlen(ltrim($name1)); ///5 znaków usuwa znaki z lewej strony
  echo strlen(rtrim($name1)); ///6 znaków usuwa znaki z prawej strony
  echo strlen(trim($name1)); /// 4 znaki ///usuwanie białych znaków (tab enter i space)
  echo strlen($name1); //7 znaków
  $name1 = trim($name1);
  echo strlen($name1); //4 znaków


  /// przeszukiwanie znaków ciągłych \/\/\/
  $adres = "Poznań. ul. Polna 2, tel. (61)123-45-67";
  $search = strstr($adres, 'tel', true);
  echo "<br>$search<br>"; /// tel. (61)123-45-67


  $adres = "Poznań. ul. Polna 2, tel. (61)123-45-67";
  $search = strstr($adres, 'tel', true);
  echo '<br> Długość $search:', strlen($search); /// 22 znaki (polskie x2)
  echo "<br>$search<br>"; ///Poznań ul. Polna 2

  $adres = "Poznań. ul. Polna 2, tel. (61)123-45-67";
  $search = stristr($adres, 'Tel');
  echo "<br>$search<br>"; ///tel. (61)123-45-67

  echo strstr('zsl@gmail.com', '@'); /// zsl@gmail
  echo strstr('zsl@gmail.com', 64), '<br>';

  $domain = strstr(strstr('zsl@gmail.com'),'@',1);





?>
