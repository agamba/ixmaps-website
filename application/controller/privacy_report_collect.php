<?php
include('../config.php');
include('../model/PrivacyReportCollect.php');
if(!isset($_REQUEST) || count($_REQUEST)==0)
{
	echo '<br/><hr/>No parameters sent.';
} else {
	//$privacyReportCollect = PrivacyReportCollect::getPrivacyDataImport();
	//echo $privacyReportCollect;
	echo "checkCarriers()<br/>";
	$checkCarriers = PrivacyReportCollect::checkCarriers();

}
?>