<!--
MCBE Rank API를 php를 통해 웹사이트에서 사용할 수 있는 예제입니다.
-->

<?php
  $data_str1 = file_get_contents('http://diamc.kr:3500/api/servers/diamc.kr:19132');
  $json1 = json_decode($data_str1, true);
  if ($json1['online'] != null) {
    echo '현재 동접: '. $json1['numplayers']. "<br>";
    echo '서버 순위: '. $json1['rank']. '위' . "<br><br>";
    echo 'MCBE Rank API';
  } else {
    echo 'API 값을 불러오지 못했습니다';
  }
  
?>
