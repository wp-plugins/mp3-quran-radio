<?php
/**
 * @package MP3 Quran Radio
 * @version 1.1
 */
/*
 Plugin Name: MP3 Quran Radio
 Plugin URI: http://www.mp3quran.net
 Description: MP3 Quran Radio plugin more than 120 quran radios.
 Version: 1.1
 Author: Nwahy
 Author URI: http://www.nwahy.com
 License: It is Free -_-
*/

include('list.php');

function mp3quran_plugin_install(){
    add_option( 'mp3quran_form', 1, '', 'yes' ); 
    add_option( 'mp3quran_title', '', '', 'yes' ); 
    add_option( 'mp3quran_height', '20', '', 'yes' ); 
    add_option( 'mp3quran_autostart', 'on', '', 'yes' ); 
    add_option( 'mp3quran_viewtitle', 'on', '', 'yes' ); 
}
register_activation_hook(__FILE__,'mp3quran_plugin_install'); 

function mp3quran_plugin_scripts(){
     wp_register_script('mp3quran_plugin_scripts',plugin_dir_url( __FILE__ ).'js/jwplayer/jwplayer.js');
     wp_enqueue_script('mp3quran_plugin_scripts');
}
add_action('wp_enqueue_scripts','mp3quran_plugin_scripts'); 

function mp3quran_plugin_styles() {
	wp_register_style( 'mp3quran-styles', plugin_dir_url( __FILE__ ).'style.css' );
	wp_enqueue_style( 'mp3quran-styles' );
}
add_action( 'wp_enqueue_scripts', 'mp3quran_plugin_styles' );

function mp3quran_adminHeader() {
	echo "<style type=\"text/css\" media=\"screen\">\n";
	echo "#mp3quran { margin:0 0 20px 0; text-align:center; border:1px solid #cccccc; padding:5px; background-color:#f2f2f2; }\n";
	echo "#mp3quran .lang { padding:5px 0 5px 0; margin:5px 0 10px 0; }\n";
	echo "#mp3qurancontent { margin:0 0 0 0; border:1px solid #cccccc; padding:5px; background-color:#fff; }\n";
	do_action('mp3quran_css');
	echo "</style>\n";
}

add_action('admin_head','mp3quran_adminHeader');

function mp3quran_words($k=''){

if ( get_option( 'WPLANG' ) == 'ar'){
$word['title'] = 'إذاعات موقع MP3Quran';
$word['error'] = 'خطأ';
$word['copy'] = 'انسخ الكود <span style="color:#0000ff;">[code]</span> وألصقه بالصفحة أو بالموضوع.<br />إذا أردت إظهار جميع الراديو بقائمة منسدلة فقط انسخ الكود <span style="color:#0000ff;">[Radios]</span> وضعه بصفحتك أو موضوعك';
$word['select_radio'] = 'اختر الإذاعة:';
$word['radio_title'] = 'عنوان الإذاعة:';
$word['radio'] = 'الإذاعة:';
$word['if_empty'] = 'إذا كان الحقل فارغا فسيتم كتابة اسم الإذاعة تلقائيا.';
$word['player_options'] = 'خيارات المشغل:';
$word['player_height'] = 'إرتفاع المشغل.';
$word['autostart'] = 'التشغيل التلقائي';
$word['show_title'] = 'مشاهدة العنوان';
$word['update_options'] = 'تحديث';
}else{
$word['title'] = 'MP3 Quran Radio';
$word['error'] = 'Error ID!';
$word['copy'] = 'Copy this code <span style="color:#0000ff;">[code]</span> and past in post or page.<br />if you want view all radios by drop menu use this shortcode <span style="color:#0000ff;">[Radios]</span>';
$word['select_radio'] = 'Select radio:';
$word['radio_title'] = 'Radio title:';
$word['radio'] = 'Radio:';
$word['if_empty'] = 'if empty will write radio title.';
$word['player_options'] = 'Player options:';
$word['player_height'] = 'Player height.';
$word['autostart'] = 'Autostart';
$word['show_title'] = 'Show title';
$word['update_options'] = 'Update options';
}
return $word[$k];
}

function mp3quran_get_radio($id,$shownotes=0){
global $post, $mp3quran_radio_list;

$rands = rand(0,999);
$languagescount = count($mp3quran_radio_list);
if($id > $languagescount){
$code = '<p style="border:1px solid #cccccc; text-align:center; padding:10px;">'.mp3quran_words('error').'</p>';
}else{
	
$code = '<div id="mp3quran">';
if(get_option('mp3quran_title') == ""){
$mp3quran_title = $mp3quran_radio_list[$id][0].'<br />'.$mp3quran_radio_list[$id][1];
}else{
$mp3quran_title = htmlentities(strip_tags(get_option('mp3quran_title')));
}

if(get_option('mp3quran_autostart') == "on"){ $mp3quranautostart = 'true'; }else{ $mp3quranautostart = 'false'; }
if(get_option('mp3quran_height') == ""){ $mp3quran_height = 20; }else{ $mp3quran_height = intval(get_option('mp3quran_height')); }

if(get_option('mp3quran_viewtitle') == "on"){
$code .= '<div class="lang">'.$mp3quran_title.'</div>'."\n";
}else{
$code .= '';
}

if($shownotes == 1){
$code .= '<script type="text/javascript" src="'.plugin_dir_url( __FILE__ ).'js/jwplayer/jwplayer.js"></script>'."\n";
}

$code .= '<div style="width:100%; margin:5px 0 5px 0;">'."\n";
$code .= '<div id="mp3quran_container_'.$rands.'">Loading the player...</div>
<script type="text/javascript">
	jwplayer("mp3quran_container_'.$rands.'").setup({
		file: "'.$mp3quran_radio_list[$id][2].'/;*.mp3",
		autostart: '.$mp3quranautostart.',
		type: "audio/mpeg",
		width: "100%",
		height: "'.$mp3quran_height.'",
		title: "'.$mp3quran_title.'",
		controls: true,
	});
</script>';
$code .= '</div>';

$rep = str_replace('[code]','R['.$id.']',mp3quran_words('copy'));
if($shownotes == 1){
$code .= '<div style="padding:7px 0 7px 0;">'.$rep.'</div>';
}
$code .= '</div>';
}
return $code;
} 

function mp3quran_get_all_radio($id=1){
global $post, $mp3quran_radio_list, $_POST;

if(isset($_POST['radio_id']) && $_POST['radio_id'] != 0){
$id = intval($_POST['radio_id']);
}else{
$id = 1;
}

$form = '<form name="sytform" action="" method="post">';
$form .= '<h3>Select radio</h3>';
$form .= '<div>';
$form .= '<select name="radio_id" style="width:100%;">';
for($i = 1; $i <= count($mp3quran_radio_list); $i++){
	if($id == $i ){
	$form .= '<option value="'.$i.'" selected="selected">'.$i.'- '.$mp3quran_radio_list[$i][0].' - '.$mp3quran_radio_list[$i][1].'</option>';
	}else{
	$form .= '<option value="'.$i.'">'.$i.'- '.$mp3quran_radio_list[$i][0].' - '.$mp3quran_radio_list[$i][1].'</option>';
	}
}
$form .= '</select>';
$form .= '</div>';
				
$form .= '<div style="padding: 1.5em 0;margin: 5px 0;">';
$form .= '<input type="submit" name="Submit" value="Update options" />';
$form .= '</div>';
$form .= '</form>';
						
$rands = rand(0,999);
$languagescount = count($mp3quran_radio_list);
if($id > $languagescount){
$code = '<p style="border:1px solid #cccccc; text-align:center; padding:10px;">Error ID!</p>';
}else{
	
$code = '<div id="mp3quran">';
$code .= $form;

$mp3quran_title = $mp3quran_radio_list[$id][0].'<br />'.$mp3quran_radio_list[$id][1];

if(get_option('mp3quran_autostart') == "on"){ $mp3quranautostart = 'true'; }else{ $mp3quranautostart = 'false'; }
if(get_option('mp3quran_height') == ""){ $mp3quran_height = 20; }else{ $mp3quran_height = intval(get_option('mp3quran_height')); }

$code .= '<div class="lang">'.$mp3quran_title.'</div>'."\n";

$code .= '<div style="width:100%; margin:5px 0 5px 0;">'."\n";
$code .= '<div id="mp3quran_container_'.$rands.'">Loading the player...</div>
<script type="text/javascript">
	jwplayer("mp3quran_container_'.$rands.'").setup({
		file: "'.$mp3quran_radio_list[$id][2].'/;*.mp3",
		autostart: '.$mp3quranautostart.',
		type: "audio/mpeg",
		width: "100%",
		height: "'.$mp3quran_height.'",
		title: "'.$mp3quran_title.'",
		controls: true,
	});
</script>';
$code .= '</div>';

$code .= '</div>';
}
return $code;
}

function mp3quran_content_replace ($text){
$text = preg_replace(array('/R\[([0-9]*?)\]/e','/\[Radios\]/e'),array('mp3quran_get_radio(\\1)','mp3quran_get_all_radio(\\1)'),$text);
return $text;
}
 
add_filter('the_content','mp3quran_content_replace');

add_action( 'admin_menu', 'mp3quran_plugin_menu' );

function mp3quran_plugin_menu() {
	add_menu_page( ''.mp3quran_words('title').'', ''.mp3quran_words('title').'', 'manage_options', 'mp3quran-edit', 'mp3quran_options', ''.trailingslashit(plugins_url(null,__FILE__)).'/i/radio.png' );
}

function mp3quran_options() {
	global $mp3quran_radio_list;
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

if(isset($_POST['submitted']) && $_POST['submitted'] == 1){
if(isset($_POST['mp3quran_autostart'])){ $show_autostart = 'on'; }else{ $show_autostart = 'off'; }
if(isset($_POST['mp3quran_viewtitle'])){ $show_title = 'on'; }else{ $show_title = 'off'; }

	if ( get_option( 'mp3quran_form' ) !== false ) {
		update_option( 'mp3quran_form', intval($_POST['mp3quran_form']) );
		update_option( 'mp3quran_title', addslashes($_POST['mp3quran_title']) );
		update_option( 'mp3quran_height', intval($_POST['mp3quran_height']) );
		update_option( 'mp3quran_autostart', $show_autostart );
		update_option( 'mp3quran_viewtitle', $show_title );
	} else {
		add_option( 'mp3quran_form', 1, null );
		add_option( 'mp3quran_title', '', null );
		add_option( 'mp3quran_height', '20', null );
		add_option( 'mp3quran_autostart', 'on', null );
		add_option( 'mp3quran_viewtitle', 'on', null );
	}
}

if(get_option('mp3quran_autostart') == 'on'){ $mp3quran_autostart = 'checked="checked"'; }else{ $mp3quran_autostart = ''; }
if(get_option('mp3quran_viewtitle') == 'on'){ $mp3quran_viewtitle = 'checked="checked"'; }else{ $mp3quran_viewtitle = ''; }

$mp3quran_title = strip_tags(get_option('mp3quran_title'));
$mp3quran_height = intval(get_option('mp3quran_height'));
?>
	<div id="mp3qurancontent" class="submit">
			<div class="dbx-content">				
				<h2><?php echo mp3quran_words('title'); ?></h2>
				<br />
	<?php echo mp3quran_get_radio(get_option('mp3quran_form'),1); ?>
				<form name="sytform" action="" method="post">
					<input type="hidden" name="submitted" value="1" />
					<h3><?php echo mp3quran_words('select_radio'); ?></h3>
					<div>
							<label for="mp3quran_form"><?php echo mp3quran_words('radio'); ?></label>
						<select name="mp3quran_form" id="mp3quran_form">
							<?php for($i = 1; $i <= count($mp3quran_radio_list); $i++): ?>
<option value="<?php echo $i; ?>"<?php echo ( get_option('mp3quran_form') == $i ) ? ' selected="selected"' : ''; ?>><?php echo $i.'- '.$mp3quran_radio_list[$i][0].' - '.$mp3quran_radio_list[$i][1]; ?></option>
							<?php endfor; ?>
						</select>
					</div>
	
					<h3><?php echo mp3quran_words('radio_title'); ?></h3>
					<div>
						<input id="mp3quran_title" type="text" name="mp3quran_title" value="<?php echo htmlentities($mp3quran_title); ?>" />
						<label for="mp3quran_title"><?php echo mp3quran_words('if_empty'); ?></label>
					</div>

					<h3><?php echo mp3quran_words('player_options'); ?></h3>
					<div>
						<input id="mp3quran_height" type="text" name="mp3quran_height" value="<?php echo intval($mp3quran_height); ?>" />
						<label for="mp3quran_height"><?php echo mp3quran_words('player_height'); ?></label>
					</div>
						
					<div>
						<input id="autostart" type="checkbox" name="mp3quran_autostart" <?php echo $mp3quran_autostart; ?> />
						<label for="autostart"><?php echo mp3quran_words('autostart'); ?></label>
					</div>
					
					<div>
						<input id="mp3quran_viewtitle" type="checkbox" name="mp3quran_viewtitle" <?php echo $mp3quran_viewtitle; ?> />
						<label for="mp3quran_viewtitle"><?php echo mp3quran_words('show_title'); ?></label>
					</div>
					
					<div style="padding: 1.5em 0;margin: 5px 0;">
						<input type="submit" name="Submit" value="<?php echo mp3quran_words('update_options'); ?>" />
					</div>
				</form>
			</div>   
		</div>
<?php
}
