<html>
<head>
  <title>Gerador de QR Code - PHP</title>
</head>
<body>

  <h1>Gerador de QR Code </h1>
  <form>
<input type="hidden" value="http://www.google.com" id="texto" ?>
    </form>

<?php

$var = 'code/php/qr_img.php?';
$var .= 'd=Gerador de QR Code';



 ?>
<div style="float: left;border: 1px solid #000;">
  <img src="<?php echo $var;?>" />
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$('#botao').click(function(e){
e.preventDefault();
var texto = $('#texto').val();

if(texto.lenght == 0){
  alert("Digite o texto");
  return false;
}

//alert('code/php/qr_img.php?d='+texto);
				$('img').attr('src','code/php/qr_img.php?d='+texto);
})

</script>
</body>
</html>
