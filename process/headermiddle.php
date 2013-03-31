<?php
//Put Second Header Stuff In This File
//Second include() file
//Header Stuff, includes Meta Tags, Javascript, and CSS

//headeropen.php
//"document title"
//headermiddle.php
//"document-specific headers"
//header.php
//"document"
//footer.php
echo $pageurl;
?>

</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
<META name="verify-v1" content="GLyFcDSdksZcsaz9fpEX/CuFJmURbgYWJIszAhX4Ob4=">
<META name="verify-v1" content="4OZ9Us/H5XJJ/k5chi46J7HlTrT1cvoF681Osg9qWmA="><!--Google Webmaster Tools!-->
<link rel="stylesheet" type="text/css" href="http://www.gilmannews.com/process/global.css">


<?php
//-----------------NIFTY CORNERS CUBE JAVASCRIPT INSERTS--------
echo '<link rel="stylesheet" type="text/css" href="http://www.gilmannews.com/process/niftyCorners.css">';
echo '<script type="text/javascript" src="http://www.gilmannews.com/process/niftycube.js"></script>';
if($noniftycorners){
	//PAGE HAS REQUESTED NOT TO USE NIFTY CORNERS
}else{
if(!$footer && !$downloadprintissue && !$cartoongrey && !$cartoonblue && !$index_poll && !$articleview_comments && !$index_articlesrightleft && !$index_messages && !$index_messagesmall){
	echo '
<script type="text/javascript">
NiftyLoad=function(){
	Nifty("div.footer","big fixed-height");
	Nifty("ul.header_nav","small transparent top");
	';
	/*Nifty("div.downloadprintissue");
	Nifty("div.cartoongrey","big");
	Nifty("div.cartoonblue","big");
	Nifty("div#index_poll","big");
	Nifty("div.articleview_comments","big");
	Nifty("div#index_articlesright,div#index_articlesleft","same-height big");
	Nifty("div.index_messages","tl br big fixed-height");
	Nifty("div.index_messagesmall","tr bl big fixed-height");*/
echo '}
</script>
';
}else{
echo '<script type="text/javascript">';
echo 'NiftyLoad=function(){';
	if($footer)echo 'Nifty("div.footer","big fixed-height");';
	if($header)echo 'Nifty("ul#header_links a","top");';
	if($downloadprintissue)echo 'Nifty("div.downloadprintissue");';
	if($cartoongrey)echo 'Nifty("div.cartoongrey","big");';
	if($cartoonblue)echo 'Nifty("div.cartoonblue","big");';
	if($index_poll)echo 'Nifty("div#index_poll","big");';
	if($articleview_comments)echo 'Nifty("div.articleview_comments","big");';
	if($index_articlesrightleft)echo 'Nifty("div#index_articlesright","big right");Nifty("div#index_articlesleft","big left");';
	if($index_inthisissue)echo 'Nifty("div.index_inthisissue","tl br big fixed-height");';
	if($index_sections)echo 'Nifty("div#index_sections","");';
	if($index_messages)echo 'Nifty("div.index_messages","tr bl fixed-height");';
	if($about_intro)echo 'Nifty("div.about_intro","big");';
	if($photos_sections)echo 'Nifty("div.photos_sections","big");';
echo '}';
echo '</script>';
}
}

?>


<?php
//header.php after
?>
