<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TaskLink</title>
</head>
<body>
  	<p>
    	English number(1,2,3) to convert bangla কথায় (এক,দুই,তিন) using PHP & Laravel:-

    	https://stackoverflow.com/questions/28580359/convert-number1-2-3-to-stringone-two-three-cake-php

    	Laravel example:
    	Route:-   Route::get('num/{num}', 'GeneralinfoController@getDigit');

    	controller method: 
    	public function  getDigit($num){
          $numbers10 = array('দশ','বিশ','ত্রিশ','চল্লিশ','পঞ্চাশ','ষাট','সত্তর','আশি','নব্বই');
          $numbers01 = array('এক','দুই','তিন','চার','পাঁচ','ছয়','সাত','আট','নয়','দশ',
                             'এগারো','বারো','তেরো','চোদ্দ','পনেরো','ষোল','সতেরো','আঠারো','উনিশ','বিশ',
                             'একুশ','বাইশ','তেইশ','চব্বিশ','পঁচিশ','ছাব্বিশ','সাতাশ','সাতাশ','ঊনত্রিশ','ত্রিশ',
                             'একত্রিশ','বত্রিশ','তেত্রিশ','চৌত্রিশ','পঁয়ত্রিশ','ছত্রিশ','সাঁইত্রিশ','আটত্রিশ','ঊনচল্লিশ','চল্লিশ',
                             'একচল্লিশ','বিয়াল্লিশ','তেতাল্লিশ','চুয়াল্লিশ','পঁয়তাল্লিশ','ছেচল্লিশ','সাতচল্লিশ','আটচল্লিশ','ঊনপঞ্চাশ', 'পঞ্চাশ',
                             'একান্ন','বায়ান্ন','তিপ্পান্ন','চুয়ান্ন','পঞ্চান্ন','ছাপ্পান্ন','সাতান্ন','আটান্ন','ঊনষাট','ষাট',
                             'একষট্টি','বাষট্টি','তেষট্টি','চৌষট্টি','পঁয়ষট্টি','ছেষট্টি','সাতষট্টি','আটষট্টি','ঊনসত্তর','সত্তর',
                             'একাত্তর','বাহাত্তর','তিয়াত্তর','চুয়াত্তর','পঁচাত্তর','ছিয়াত্তর','সাতাত্তর','আটাত্তর','ঊনআশি','আশি',
                             'একাশি','বিরাশি','তিরাশি','চুরাশি','পঁচাশি','ছিয়াশি','সাতাশি','আটাশি','ঊননব্বই','নব্বই',
                             'একানব্বই','বিরানব্বই','তিরানব্বই','চুরানব্বই','পঁচানব্বই','ছিয়ানব্বই','সাতানব্বই','আটানব্বই','নিরানব্বই','একশত');

          if($num == 0) {
              echo "শূন্য";
          }

          $lakhs = floor($num/100000);
          if($lakhs != 0) {
              echo $numbers01[$lakhs-1] . " লাখ ";
              $num -= $lakhs*100000;
          }

          $thousands = floor($num/1000);
          if($thousands != 0) {
              echo $numbers01[$thousands-1] . " হাজার ";
              $num -= $thousands*1000;
          }

          $hundreds = floor($num/100);
          if($hundreds != 0) {
              echo $numbers01[$hundreds-1] . " শত ";
              $num -= $hundreds*100;
          }

          if($num < 100) {
              if($num != 0) {
                  echo $numbers01[$num-1];
              }
          }else {
              $tens = floor($num/10);
              echo $numbers10[$tens-1] . " ";
              $num -= $tens*10;

              if($num != 0) {
                  echo $numbers01[$num-1];
              }
          }
      }
  	</p>



    Output hit Route:- http://localhost:8000/num/120





    PHP example:- 

    <?php
    $num = 1250;

    $numbers10 = array('ten','twenty','thirty','fourty','fifty','sixty','seventy','eighty','ninety');
    $numbers01 = array('one','two','three','four','five','six','seven','eight','nine','ten',
        'eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen');

    if($num == 0) {
        echo "zero";
    }

    $thousands = floor($num/1000);
    if($thousands != 0) {
        echo $numbers01[$thousands-1] . " thousand ";
        $num -= $thousands*1000;
    }

    $hundreds = floor($num/100);
    if($hundreds != 0) {
        echo $numbers01[$hundreds-1] . " hundred ";
        $num -= $hundreds*100;
    }

    if($num < 20) {
        if($num != 0) {
            echo $numbers01[$num-1];
        }
    } else {
        $tens = floor($num/10);
        echo $numbers10[$tens-1] . " ";
        $num -= $tens*10;

        if($num != 0) {
            echo $numbers01[$num-1];
        }
    }
    ?>

    Output hit url:-  http://localhost/index.php
</body>
</html>