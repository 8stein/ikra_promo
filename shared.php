<?
$hash = substr(md5(rand(32000,256000)),0,8);
if(isset($_REQUEST['story']))
{
	$h = substr($_REQUEST['story'],0,8);
	$fn = $h.".txt";
	if(file_exists($fn))
	{
		$story = unserialize(file_get_contents($h.".txt"));
		if(!is_array($story))
		{ header("Location: http://newyear.ikraikra.ru//"); }
	}
	else
	{ header("Location: http://newyear.ikraikra.ru//"); }
}
else
{
	$_REQUEST['story'] = $hash;
	$story = $_REQUEST;
	file_put_contents($hash.".txt", serialize($story));
}
//$hash
?>
<html lang="ru"> <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="2014 ЗАКАНЧИВАЕТСЯ И МНЕ ЕСТЬ ЧЕМ ГОРДИТЬСЯ! Я БЫЛ<?=($story['gender']>0?"А":"");?> РАД<?=($story['gender']>0?"А":"");?> КАК РЕБЁНОК <?= $story['happy']; ?>. ЭТО ПОЛНОСТЬЮ ЗАХЛЕСТНУЛО МЕНЯ ЭМОЦИЯМИ И Я ДАЖЕ ВСПЛАКНУЛ<?=($story['gender']>0?"А":"");?>, ПОКА НИКТО НЕ ВИДЕЛ.  Я ПЕРЕСТАЛ<?=($story['gender']>0?"А":"");?> ДУМАТЬ О ТОМ, КАК МНОГО МНЕ ПРИХОДИЛОСЬ  <?= $story['drunk']; ?> В ЭТОМ ГОДУ. СВОИМ ВНУКАМ Я БУДУ РАССКАЗЫВАТЬ КАК Я <?= $story['first']; ?>, ВЕДЬ ДЛЯ ЭТОГО Я ТАК МНОГО СДЕЛАЛ<?=($story['gender']>0?"А":"");?>  <?= $story['banners']; ?>. СЛЕДУЮЩИЙ ГОД БУДЕТ НЕПРЕМЕННО ЛУЧШЕ, И Я СДЕЛАЮ ВСЁ, ЧТОБЫ <?= $story['next']; ?>">
<meta name="author" content="">
<link rel="canonical" href="http://newyear.ikraikra.ru//shared.php?story=<?=$story['story'];?>" />
<meta property="og:title" content="ЕЩЁ ОДНО НОВОГОДНЕЕ ПРОМО"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://newyear.ikraikra.ru//shared.php?story=<?=$story['story'];?>"/>
<meta property="og:image" content="http://newyear.ikraikra.ru//images/newyear-promo-ikra.png"/>
<meta property="og:site_name" content="IKRA"/>
<meta property="og:description" content="2014 ЗАКАНЧИВАЕТСЯ И МНЕ ЕСТЬ ЧЕМ ГОРДИТЬСЯ! Я БЫЛ<?=($story['gender']>0?"А":"");?> РАД<?=($story['gender']>0?"А":"");?> КАК РЕБЁНОК <?= $story['happy']; ?>. ЭТО ПОЛНОСТЬЮ ЗАХЛЕСТНУЛО МЕНЯ ЭМОЦИЯМИ И Я ДАЖЕ ВСПЛАКНУЛ<?=($story['gender']>0?"А":"");?>, ПОКА НИКТО НЕ ВИДЕЛ.  Я ПЕРЕСТАЛ<?=($story['gender']>0?"А":"");?> ДУМАТЬ О ТОМ, КАК МНОГО МНЕ ПРИХОДИЛОСЬ  <?= $story['drunk']; ?> В ЭТОМ ГОДУ. СВОИМ ВНУКАМ Я БУДУ РАССКАЗЫВАТЬ КАК Я <?= $story['first']; ?>, ВЕДЬ ДЛЯ ЭТОГО Я ТАК МНОГО СДЕЛАЛ<?=($story['gender']>0?"А":"");?>  <?= $story['banners']; ?>. СЛЕДУЮЩИЙ ГОД БУДЕТ НЕПРЕМЕННО ЛУЧШЕ, И Я СДЕЛАЮ ВСЁ, ЧТОБЫ <?= $story['next']; ?>"/>
<link rel="icon" href="favicon.ico">
<title>ikraikra</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ikra.css" rel="stylesheet">
<script src="js/ie-emulation-modes-warning.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript"></script>
</head>
<body>
	<div class="ikraikra">
		<div class="container">
			<img src="images/logo.png" id="logo">
			<div class="row">
        <div class="col-sm-6">
        <img src="images/dead.png" height="308px">
        </div>
        <div class="col-sm-6 text">
		<h1>Итак</h1>
		<p>2014 ЗАКАНЧИВАЕТСЯ И МНЕ ЕСТЬ ЧЕМ ГОРДИТЬСЯ! Я БЫЛ<?=($story['gender']>0?"А":"");?> РАД<?=($story['gender']>0?"А":"");?> КАК РЕБЁНОК <span class="fat"><?= $story['happy']; ?></span>. ЭТО ПОЛНОСТЬЮ ЗАХЛЕСТНУЛО МЕНЯ ЭМОЦИЯМИ И Я ДАЖЕ ВСПЛАКНУЛ<?=($story['gender']>0?"А":"");?>, ПОКА НИКТО НЕ ВИДЕЛ.  Я ПЕРЕСТАЛ<?=($story['gender']>0?"А":"");?> ДУМАТЬ О ТОМ, КАК МНОГО МНЕ ПРИХОДИЛОСЬ  <span class="fat"><?= $story['drunk']; ?></span> В ЭТОМ ГОДУ. СВОИМ ВНУКАМ Я БУДУ РАССКАЗЫВАТЬ КАК Я <span class="fat"><?= $story['first']; ?></span>, ВЕДЬ ДЛЯ ЭТОГО Я ТАК МНОГО СДЕЛАЛ<?=($story['gender']>0?"А":"");?>  <span class="fat"><?= $story['banners']; ?></span>. СЛЕДУЮЩИЙ ГОД БУДЕТ НЕПРЕМЕННО ЛУЧШЕ, И Я СДЕЛАЮ ВСЁ, ЧТОБЫ <span class="fat"><?= $story['next']; ?></span>.</p>
</div>
			</div>
		</div>
	</div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row"><div class="intro">ИКРА поможет тебе подвести </div>
      <hr>
        <div class="hello">
<form id="form" class="form-horizontal" action="result.php" method="POST">
  <div class="form-heading"><h2>Итоги 2014 года</h2></div>
  <div class="form-group">
    <label for="first" class="col-sm-6 control-label">В этом году я впервые в жизни</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="first" name="first" placeholder="Попал в писуар">
  </div>
  </div>
  <div class="form-group">
    <label for="drunk" class="col-sm-6 control-label">Мне приходилось много</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="drunk" name="drunk" placeholder="Пить">
  </div>
</div>
  <div class="form-group">
    <label for="banners" class="col-sm-6 control-label">Я стал делать в 10 раз больше</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="banners" name="banners" placeholder="Баннеров">
  </div>
</div>
  <div class="form-group">
    <label for="happy" class="col-sm-6 control-label">Больше всего я радовался</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="happy" name="happy" placeholder="Оскару Макконахи">
  </div>
</div>
  <div class="form-group">
    <label for="next" class="col-sm-6 control-label">В следующем году я хочу</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="next" name="next" placeholder="Попасть на Дом-2">
  </div>
</div>
  <div class="form-group radio-inline-wrapper radio-left">
    <span>Ты</span>
  <label class="radio-inline">
    <input type="radio" name="gender" id="inlineRadio1" value="0"  checked>
    <span>Мальчик</span>
  </label>
 <span>или</span> 

  <label class="radio-inline">
    <input type="radio" name="gender" id="inlineRadio2" value="1">
    <span>Девочка</span>
  </label>
  <span>?</span>
  </div>
  <hr/>
<div class="badcat" id="error">Мы знаем, что ты пытался пройти, не заполнив все поля. Мы всё о тебе знаем. <br><img src="images/cat.png"></div>
  <div>
    <div>
      <button type="submit" class="btn btn-default">Готово</button>
    </div>
  </div>
</form>
</div>
</div>
<hr>
<footer>
	<p>ИНТЕГРИРОВАННЫЕ КОММУНИКАЦИИ В РЕКЛАМЕ</p><p>2009 — 2015 НОУ <span class="red">ИКРА</span></p>
</footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/script.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter27737343 = new Ya.Metrika({id:27737343,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27737343" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>