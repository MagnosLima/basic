<?php

use yii\helpers\Html;

$this->title = 'Filtro';

$script=<<<script
	$("#pais").change(function() {
        $('#container').load('?r=site/filtro&pais='+$('#pais').val());
    });
script;

$this->registerJs($script);

?>
 
<h1>Filtro</h1>
 
<form>
    <label>País</label>
    <select name="" id="pais">
<?php
    foreach ($paises as $pais) {
        ?><option value="<?=$pais->Code?>"><?=Html::encode($pais->Name)?></option><?php
    }
?>
    </select>
 
    <label>Cidade</label>
    <div id="container">
    	<select id="cidade" name="cidade">
<?php
    foreach ($cidades as $cidade) {
       	?><option><?=Html::encode($cidade->Name)?></option><?php
   	}
?>
	    </select>
	</div>
</form>