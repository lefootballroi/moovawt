<?php
$this->pageTitle=Yii::app()->name . ' - Welcome';
?>
<p>
	<b>Start using Moovawt right away! &amp; have fun!</b>
	
<?php	
	$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Manage your listing'=>$this->renderPartial('//proprietor/_manageListings',array('modelHangout'=>$modelHangout),true),
        'Promos'=>$this->renderPartial('//promo/_managePromos',null,true),      
        'Reports'=>$this->renderPartial('//reports/_proprietor_reports',null,true),         
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'bounceslide',
    ),
));

?>
</p>


