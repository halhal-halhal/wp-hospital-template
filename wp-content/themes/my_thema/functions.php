<?php
register_post_type(
'hoge',
  array(
  // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail') 
  )
);
?>