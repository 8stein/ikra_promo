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
<html lang="ru"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="2014 заканчивается и мне есть чем гордиться! Я был<?=($story['gender']>0?"А":"");?> рад<?=($story['gender']>0?"А":"");?> как ребёнок <?= $story['happy']; ?>. Это полностью захлестнуло меня эмоциями и я даже всплакнул<?=($story['gender']>0?"А":"");?>, пока никто не видел. Я перестал<?=($story['gender']>0?"А":"");?> думать о том, как много мне приходилось  <?= $story['drunk']; ?> в этом году. Своим внукам я буду рассказывать как я <?= $story['first']; ?>, ведь для этого я так много сделал<?=($story['gender']>0?"А":"");?>  <?= $story['banners']; ?>. Следующий год будет непременно лучше, и я сделаю всё, чтобы <?= $story['next']; ?>">
<meta name="author" content="">
<link rel="canonical" href="http://newyear.ikraikra.ru//shared.php?story=<?=$story['story'];?>" />
<meta property="og:title" content="ЕЩЁ ОДНО НОВОГОДНЕЕ ПРОМО"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://newyear.ikraikra.ru//shared.php?story=<?=$story['story'];?>"/>
<meta property="og:image" content="http://newyear.ikraikra.ru//images/newyear-promo-ikra.png"/>
<meta property="og:site_name" content="IKRA"/>
<meta property="og:description" content="2014 заканчивается и мне есть чем гордиться! Я был<?=($story['gender']>0?"А":"");?> рад<?=($story['gender']>0?"А":"");?> как ребёнок <?= $story['happy']; ?>. Это полностью захлестнуло меня эмоциями и я даже всплакнул<?=($story['gender']>0?"А":"");?>, пока никто не видел. Я перестал<?=($story['gender']>0?"А":"");?> думать о том, как много мне приходилось  <?= $story['drunk']; ?> в этом году. Своим внукам я буду рассказывать как я <?= $story['first']; ?>, ведь для этого я так много сделал<?=($story['gender']>0?"А":"");?>  <?= $story['banners']; ?>. Следующий год будет непременно лучше, и я сделаю всё, чтобы <?= $story['next']; ?>"/>
<link rel="icon" href="favicon.ico">
<title>ikraikra</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ikra.css" rel="stylesheet">
<script src="js/ie-emulation-modes-warning.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="http://vkontakte.ru/js/api/xd_connection.js?2" type="text/javascript"></script>
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
		<p>2014 заканчивается и мне есть чем гордиться! Я был<?=($story['gender']>0?"А":"");?> рад<?=($story['gender']>0?"А":"");?> как ребёнок <span class="fat"><?= $story['happy']; ?></span>. Это полностью захлестнуло меня эмоциями и я даже всплакнул<?=($story['gender']>0?"А":"");?>, пока никто не видел. Я перестал<?=($story['gender']>0?"А":"");?> думать о том, как много мне приходилось  <span class="fat"><?= $story['drunk']; ?></span> в этом году. Своим внукам я буду рассказывать как я <span class="fat"><?= $story['first']; ?></span>, ведь для этого я так много сделал<?=($story['gender']>0?"А":"");?>  <span class="fat"><?= $story['banners']; ?></span>. Следующий год будет непременно лучше, и я сделаю всё, чтобы <span class="fat"><?= $story['next']; ?></span>.</p>
</div>
			</div>
		</div>
	</div>
    <div class="container">
      <div class="row"><div class="intro">А теперь расскажи о том, как ты профукал свой 2014 своим друзьям, ведь им так интересно!</div>
      <div class="shareit">
      <a id="share-fb" style="cursor:pointer;"><span class="share-fb">В ФЕЙСБУКЕ</span></a>
      <a id="share-vk" style="cursor:pointer;"><span class="share-vk">В ВКОНТАКТЕ</span></a>
      </div>
       <div class="row center"><div class="intro">ИКРА поздравляет тебя с Новым годом и желает не останавливаться на достигнутом. Продолжай учиться и самосовершенствоваться!</div>
       <h2 class="big">С Новым Годом!</h2>
       <p class="grey">не забудь поздравить маму и папу</p>
     </div>
    </div>
</div>
    <div class="surprise">
      <div class="container center">
        <h2>НУ И КАКОЙ ЖЕ НОВЫЙ ГОД БЕЗ</h2>
        <div class="col-sm-4">
          <img src="images/tree.png"><br/>
          ЁЛКИ
        </div>
        <div class="col-sm-4">
          <img src="images/snowman.png"><br/>
          СНЕГА
        </div>
        <div class="col-sm-4">
          <a href="http://www.ikraikra.ru/?utm_source=promo&utm_medium=ref&utm_campaign=promony"><img src="images/logo.png" id="logo"></a><br/>
          И ИКРЫ
        </div>
      <hr>
     </div>
      <div class="container center">     
	<footer>
		<p>ИНТЕГРИРОВАННЫЕ КОММУНИКАЦИИ В РЕКЛАМЕ</p><p>2009 — 2015 НОУ <span class="red">ИКРА</span></p>
	</footer>
	</div>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(function()
{
	$("#share-fb").on("click", function()
	{
		var w = window.open("http://www.facebook.com/sharer.php?u="+encodeURIComponent("http://newyear.ikraikra.ru/shared.php?story=<?=$hash;?>"),"Sharing","width=740,height=440");
	});

	$("#share-vk").on("click", function()
	{
		var mes = "2014 заканчивается и мне есть чем гордиться! Я был<?=($story['gender']>0?"А":"");?> рад<?=($story['gender']>0?"А":"");?> как ребёнок <?= $story['happy']; ?>."+" Это полностью захлестнуло меня эмоциями и я даже всплакнул<?=($story['gender']>0?"А":"");?>, пока никто "+" не видел. Я перестал<?=($story['gender']>0?"А":"");?> думать о том, как много мне приходилось <?= $story['drunk']; ?>"+" в этом году. Своим внукам я буду рассказывать как я <?= $story['first']; ?>, ведь для этого я так много сделал<?=($story['gender']>0?"А":"");?>  <?= $story['banners']; ?>."+" Следующий год будет непременно лучше, и я сделаю всё, чтобы <?= $story['next']; ?>";

		VK.Api.call('wall.post', {message: mes, attachments:"photo283395741_351264187,newyear.ikraikra.ru"}, function(r) { console.log("R= "+r); });

		//var w = window.open("http://vkontakte.ru/share.php?"
		//+"url="+encodeURIComponent("http://newyear.ikraikra.ru//result.php?story=<?= $hash;?>")+"&"
		//+"title="+encodeURIComponent(mes)+"&"
		//+"description="+encodeURIComponent("ЕЩЁ ОДНО НОВОГОДНЕЕ ПРОМО")+"&"
		//+"image="+encodeURIComponent("http://newyear.ikraikra.ru//images/tree.png"),"Sharing","width=740,height=440");
	});
});
VK.init({apiId: '4697175'});
</script>

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