<?php
$fruits = ['リンゴ', 'バナナ', 'メロン', 'ブドウ'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>果物の名前</title>
</head>
<body>
<table border="1">
<tr>
<th>名前</th>
</tr>
<?php foreach($fruits as $fruit): ?>
<tr>
<td><?php echo $fruit; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
