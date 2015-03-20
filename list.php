<?php
/* 
 * Radio and Show functions
 * Author: mp3quran.net
 * Since: 1.0
 */

/* List */

/**
 * Adds Radio_Widget widget.
 */
 
$mp3quran_radio_list = array(
"1"=>array("Main Radio","الإذاعة العامة","http://live.mp3quran.net:9998"),
"2"=>array("Beautiful recitations","التلاوات الخاشعة","http://live.mp3quran.net:9992"),
"3"=>array("ROQIAH Radio","الرقية","http://live.mp3quran.net:9936"),
"4"=>array("FATAWA Radio","الفتاوى","http://live.mp3quran.net:8014"),
"5"=>array("Ibrahim Al-Akdar","إبراهيم الأخضر","http://live.mp3quran.net:9946"),
"6"=>array("Abu Bakr Al Shatri","أبو بكر الشاطري","http://live.mp3quran.net:9966"),
"7"=>array("Ahmad Al-Ajmy","أحمد بن علي العجمي","http://live.mp3quran.net:8008"),
"8"=>array("Ahmad Al-Hawashi","أحمد الحواشي","http://live.mp3quran.net:9928"),
"9"=>array("Ahmad Saber","أحمد صابر","http://live.mp3quran.net:9922"),
"10"=>array("Ahmad Nauina","أحمد نعينع","http://live.mp3quran.net:9904"),
"11"=>array("Akram Alalaqmi","أكرم العلاقمي","http://live.mp3quran.net:9918"),
"12"=>array("Idrees Abkr","إدريس أبكر","http://live.mp3quran.net:9968"),
"13"=>array("Alzain Mohammad Ahmad","الزين محمد أحمد","http://live.mp3quran.net:9914"),
"14"=>array("Al-Qaria Yassen","القارئ ياسين","http://live.mp3quran.net:9908"),
"15"=>array("Aloyoon Al-Koshi","العيون الكوشي","http://live.mp3quran.net:9912"),
"16"=>array("Tawfeeq As-Sayegh","توفيق الصايغ","http://live.mp3quran.net:9906"),
"17"=>array("Jamal Shaker Abdullah","جمال شاكر عبدالله","http://live.mp3quran.net:9900"),
"18"=>array("Khaled Al-Qahtani","خالد القحطاني","http://live.mp3quran.net:9970"),
"19"=>array("Khalid Abdulkafi","خالد عبدالكافي","http://live.mp3quran.net:9894"),
"20"=>array("Khalifa Altunaiji","خليفة الطنيجي","http://live.mp3quran.net:9892"),
"21"=>array("Saad Al-Ghamdi","سعد الغامدي","http://live.mp3quran.net:8004"),
"22"=>array("Saud Al-Shuraim","سعود الشريم","http://live.mp3quran.net:9986"),
"23"=>array("Sahl Yassin","سهل ياسين","http://live.mp3quran.net:9888"),
"24"=>array("Zaki Daghistani","زكي داغستاني","http://live.mp3quran.net:9890"),
"25"=>array("Sayeed Ramadan","سيد رمضان","http://live.mp3quran.net:9886"),
"26"=>array("Shirazad Taher","شيرزاد عبدالرحمن طاهر","http://live.mp3quran.net:9884"),
"27"=>array("Saber Abdulhakm","صابر عبدالحكم","http://live.mp3quran.net:9952"),
"28"=>array("Salah Albudair","صلاح البدير","http://live.mp3quran.net:9882"),
"29"=>array("Salah Alhashim","صلاح الهاشم","http://live.mp3quran.net:9880"),
"30"=>array("Slaah Bukhatir","صلاح بو خاطر","http://live.mp3quran.net:9878"),
"31"=>array("Khalid Almohana","خالد المهنا","http://live.mp3quran.net:9896"),
"32"=>array("Adel Ryyan","عادل ريان","http://live.mp3quran.net:9872"),
"33"=>array("Abdelbari Al-Toubayti","عبدالبارئ الثبيتي","http://live.mp3quran.net:9870"),
"34"=>array("Abdulbari Mohammad","عبدالبارئ محمد","http://live.mp3quran.net:9868"),
"35"=>array("Abdulbasit Abdulsamad","عبدالباسط عبدالصمد","http://live.mp3quran.net:9974"),
"36"=>array("Abdulbasit Abdulsamad","عبدالباسط عبدالصمد","http://live.mp3quran.net:9956"),
"37"=>array("Abdulbasit Abdulsamad","عبدالباسط عبدالصمد","http://live.mp3quran.net:9980"),
"38"=>array("Abdulrahman Alsudaes","عبدالرحمن السديس","http://live.mp3quran.net:9988"),
"39"=>array("Abdul Aziz Al-Ahmad","عبدالعزيز الأحمد","http://live.mp3quran.net:9862"),
"40"=>array("Abdullah Al-Mattrod","عبدالله المطرود","http://live.mp3quran.net:9858"),
"41"=>array("Abdullah Basfer","عبدالله بصفر","http://live.mp3quran.net:9954"),
"42"=>array("Abdullah Khayyat","عبدالله خياط","http://live.mp3quran.net:9948"),
"43"=>array("Abdullah Al-Johany","عبدالله عواد الجهني","http://live.mp3quran.net:9944"),
"44"=>array("Abdulrasheed Soufi","عبدالرشيد صوفي","http://live.mp3quran.net:9866"),
"45"=>array("Abdulrasheed Soufi","عبدالرشيد صوفي","http://live.mp3quran.net:9864"),
"46"=>array("Abdulmohsin Al-Harthy","عبدالمحسن الحارثي","http://live.mp3quran.net:9856"),
"47"=>array("Abdulmohsen Al-Qasim","عبدالمحسن القاسم","http://live.mp3quran.net:9852"),
"48"=>array("Abdulmohsin Al-Obaikan","عبدالمحسن العبيكان","http://live.mp3quran.net:9854"),
"49"=>array("Abdulhadi Kanakeri","عبدالهادي أحمد كناكري","http://live.mp3quran.net:9850"),
"50"=>array("Abdulwadood Haneef","عبدالودود حنيف","http://live.mp3quran.net:9848"),
"51"=>array("Ali Alhuthaifi","علي بن عبدالرحمن الحذيفي","http://live.mp3quran.net:9844"),
"52"=>array("Ali Alhuthaifi","علي الحذيفي","http://live.mp3quran.net:9846"),
"53"=>array("Ali Jaber","علي جابر","http://live.mp3quran.net:9964"),
"54"=>array("Ali Hajjaj Alsouasi","علي حجاج السويسي","http://live.mp3quran.net:9842"),
"55"=>array("Emad Hafez","عماد زهير حافظ","http://live.mp3quran.net:9840"),
"56"=>array("Mousa Bilal","موسى بلال","http://live.mp3quran.net:9786"),
"57"=>array("Omar Al-Qazabri","عمر القزابري","http://live.mp3quran.net:9838"),
"58"=>array("Fares Abbad","فارس عباد","http://live.mp3quran.net:9972"),
"59"=>array("Nasser Alqatami","ناصر القطامي","http://live.mp3quran.net:9994"),
"60"=>array("Nabil Al Rifay","نبيل الرفاعي","http://live.mp3quran.net:9784"),
"61"=>array("Neamah Al-Hassan","نعمة الحسان","http://live.mp3quran.net:9782"),
"62"=>array("Hani Arrifai","هاني الرفاعي","http://live.mp3quran.net:9780"),
"63"=>array("Waleed Alnaehi","وليد النائحي","http://live.mp3quran.net:9778"),
"64"=>array("Yasser Al-Dosari","ياسر الدوسري","http://live.mp3quran.net:9984"),
"65"=>array("Yasser Al-Qurashi","ياسر القرشي","http://live.mp3quran.net:9776"),
"66"=>array("Yasser Al-Mazroyee","ياسر المزروعي","http://live.mp3quran.net:9774"),
"67"=>array("Yahya Hawwa","يحيى حوا","http://live.mp3quran.net:9772"),
"68"=>array("Yousef Alshoaey","يوسف الشويعي","http://live.mp3quran.net:9770"),
"69"=>array("Maher Al Meaqli","ماهر المعيقلي","http://live.mp3quran.net:8002"),
"70"=>array("Mohammad Al-Tablaway","محمد الطبلاوي","http://live.mp3quran.net:9834"),
"71"=>array("Mohammed Al-Lohaidan","محمد اللحيدان","http://live.mp3quran.net:9832"),
"72"=>array("Mohammed Ayyub","محمد أيوب","http://live.mp3quran.net:9960"),
"73"=>array("Mohammad Saleh Alim Shah","محمد صالح عالم شاه","http://live.mp3quran.net:9828"),
"74"=>array("Mohammed Jibreel","محمد جبريل","http://live.mp3quran.net:9962"),
"75"=>array("Mohammed Siddiq Al-Minshawi","محمد صديق المنشاوي","http://live.mp3quran.net:9978"),
"76"=>array("Mohammed Siddiq Al-Minshawi","محمد صديق المنشاوي","http://live.mp3quran.net:9826"),
"77"=>array("Mohammad Abdullkarem","محمد عبدالكريم","http://live.mp3quran.net:9824"),
"78"=>array("Mohammad Al-Abdullah","محمد عبدالحكيم سعيد العبدالله","http://live.mp3quran.net:9814"),
"79"=>array("Mohammad Al-Abdullah","محمد عبدالحكيم سعيد العبدالله","http://live.mp3quran.net:9816"),
"80"=>array("Mahmoud Khalil Al-Hussary","محمود خليل الحصري","http://live.mp3quran.net:9958"),
"81"=>array("Mahmoud Khalil Al-Hussary","محمود خليل الحصري","http://live.mp3quran.net:9806"),
"82"=>array("Mahmoud Khalil Al-Hussary","محمود خليل الحصري","http://live.mp3quran.net:9804"),
"83"=>array("Mahmoud Ali  Albanna","محمود علي البنا","http://live.mp3quran.net:9808"),
"84"=>array("Mahmoud Ali  Albanna","محمود علي البنا","http://live.mp3quran.net:9810"),
"85"=>array("Mishary Alafasi","مشاري العفاسي","http://live.mp3quran.net:8010"),
"86"=>array("Mustafa Ismail","مصطفى إسماعيل","http://live.mp3quran.net:9800"),
"87"=>array("Mustafa Al-Lahoni","مصطفى اللاهوني","http://live.mp3quran.net:9798"),
"88"=>array("Mustafa raad Alazawy","مصطفى رعد العزاوي","http://live.mp3quran.net:9796"),
"89"=>array("Muftah Alsaltany","مفتاح السلطني","http://live.mp3quran.net:9790"),
"90"=>array("Maher Shakhashero","ماهر شخاشيرو","http://live.mp3quran.net:9836"),
"91"=>array("Mahmood AlSheimy","محمود الشيمي","http://live.mp3quran.net:9812"),
"92"=>array("Hatem Fareed Alwaer","حاتم فريد الواعر","http://live.mp3quran.net:9898"),
"93"=>array("Adel Al-Khalbany","عادل الكلباني","http://live.mp3quran.net:9874"),
"94"=>array("Mahmood Al rifai","محمود الرفاعي","http://live.mp3quran.net:9818"),
"95"=>array("Muftah Alsaltany","مفتاح السلطني","http://live.mp3quran.net:9792"),
"96"=>array("Ibrahim Aldosari","ابراهيم الدوسري","http://live.mp3quran.net:9902"),
"97"=>array("Muftah Alsaltany","مفتاح السلطني","http://live.mp3quran.net:9788"),
"98"=>array("Jamaan Alosaimi","جمعان العصيمي","http://live.mp3quran.net:9950"),
"99"=>array("Yousef Bin Noah Ahmad","يوسف بن نوح أحمد","http://live.mp3quran.net:9768"),
"100"=>array("Muftah Alsaltany","مفتاح السلطني","http://live.mp3quran.net:9794"),
"101"=>array("Mohammad Rashad Alshareef","محمد رشاد الشريف","http://live.mp3quran.net:9830"),
"102"=>array("Alfateh Alzubair","الفاتح محمد الزبير","http://live.mp3quran.net:9910"),
"103"=>array("Moeedh Alharthi","معيض الحارثي","http://live.mp3quran.net:9802"),
"104"=>array("Ahmad Khader Al-Tarabulsi","أحمد خضر الطرابلسي","http://live.mp3quran.net:9924"),
"105"=>array("Ahmed Al-trabulsi","أحمد الطرابلسي","http://live.mp3quran.net:9926"),
"106"=>array("Abdullah Al-Kandari","عبدالله الكندري","http://live.mp3quran.net:9860"),
"107"=>array("Ahmed Amer","أحمد عامر","http://live.mp3quran.net:9920"),
"108"=>array("Mohammed Osman Khan (from India)","محمد عثمان خان ( من الهند )","http://live.mp3quran.net:9820"),
"109"=>array("Addokali Mohammad Alalim","الدوكالي محمد العالم","http://live.mp3quran.net:9916"),
"110"=>array("Mohammad Abdullkarem","محمد عبدالكريم","http://live.mp3quran.net:9822"),
"111"=>array("Tareq Abdulgani daawob","طارق عبدالغني دعوب","http://live.mp3quran.net:9876"),
"112"=>array("Abdullah Basfer (English Translation)","ترجمة معاني القران الكريم باللغة الإنجليزية - القارئ عبدالله بصفر","http://live.mp3quran.net:9754"),
"113"=>array("AbdulBaset AbdulSamad with Naeem Sultan [Pickthall Translation](ENGLISH)","ترجمة معاني القران الكريم باللغة الإنجليزية :القارئ عبدالباسط عبدالصمد يقراء الترجمة نعيم سلطان.","http://live.mp3quran.net:9748"),
"114"=>array("AbdulBaset AbdulSamad with Ibrahim Walk [Saheeh Intl Translation](ENGLISH)","ترجمة معاني القرآن الكريم باللغة الانجليزية - قراءة عبدالباسط عبدالصمد وقراءة الترجمة بواسطة ابراهيم والك","http://live.mp3quran.net:9746"),
"115"=>array("Mishary Alafasy (Spanish Translation)","ترجمة معاني القران الكريم باللغة الأسبانية - القارئ مشاري العفاسي","http://live.mp3quran.net:9756"),
"116"=>array("Ali Alhuthaifi (France Translation)","ترجمة معاني القران الكريم باللغة الفرنسية - القارئ علي الحذيفي","http://live.mp3quran.net:9744"),
"117"=>array("Saud Al-Shuraim (Germany Translate )","ترجمة معاني القران الكريم باللغة الألمانية - القارئ سعود الشريم","http://live.mp3quran.net:9742"),
"118"=>array("Abdulbasit Abdulsamad [Urdu Translation]","ترجمة معاني القران باللغة الأوردية - القارئ عبدالباسط عبدالصمد","http://live.mp3quran.net:9752"),
"119"=>array("Mohammed Alminshawi [Urdu Translation]","ترجمة معاني القران الكريم باللغة الأوردية - القارئ محمد المنشاوي","http://live.mp3quran.net:9758"),
"120"=>array("Saud Al-Shuraim with Abdulrahman Alsudaes [Urdu translation]","ترجمة معاني القرآن الكريم باللغة الأوردية- القارئ السديس والشريم","http://live.mp3quran.net:9750"),
"121"=>array("Saad Alghamdi [Turkish Translation]","ترجمة معاني القران الكريم باللغة التركية - القارئ سعد الغامدي","http://live.mp3quran.net:9764"),
"122"=>array("Saad Alghamdi [Chinese Translation]","ترجمة معاني القران الكريم باللغة الصينية- القارئ سعد الغامدي","http://live.mp3quran.net:9766"),
"123"=>array("Saad Alghamdi [Kurdish Translation]","ترجمة معاني القران الكريم باللغة الكردية - القارئ سعد الغامدي","http://live.mp3quran.net:9762"),
"124"=>array("C. Haj Muhannad Al-Tayyib (Warsh An nafi) [Tamazight Translation]","ترجمة معاني القران الكريم باللغة الأمازيغية - القارئ سي حاج محند الطيب - رواية ورش عن نافع","http://live.mp3quran.net:9760")
);
 
function mp3quran_player($rands, $height, $autostart, $mp3quran_radio_id, $mp3quran_radio_showtitle=1){
global $mp3quran_radio_list;

$code = '';
$code .= '<div style="width:100%; margin:5px 0 5px 0;">'."\n";
$code .= '<div id="mp3quran_container_post_'.$rands.'">Loading the player...</div>
<script type="text/javascript">
	jwplayer("mp3quran_container_post_'.$rands.'").setup({
		file: "'.$mp3quran_radio_list[$mp3quran_radio_id][2].'/;*.mp3",
		autostart: '.$autostart.',
		type: "audio/mpeg",
		width: "100%",
		height: '.$height.',
		title: "'.$mp3quran_radio_list[$mp3quran_radio_id][0].'",
		controls: true,
	});
</script>';
$code .= '</div>';
if($mp3quran_radio_showtitle == 1){
$code .= '<div style="padding:7px 0 7px 0; text-align:center;">'.$mp3quran_radio_list[$mp3quran_radio_id][0].'<br />'.$mp3quran_radio_list[$mp3quran_radio_id][1].'</div>';
}else{
$code .= '';
}
return $code;
}

class mp3quran_Radio_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'mp3quran_Radio_Widget', // Base ID
			__('MP3 Quran Radio', 'mp3quran_widget'), // Name
			array( 'description' => __( 'More than 120 quran radios', 'mp3quran_widget' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		global $mp3quran_radio_list;

		$title = apply_filters( 'widget_title', $instance['title'] );
		$mp3quran_radio_id = $instance['mp3quran_radio_id'];
		$mp3quran_radio_height = $instance['mp3quran_radio_height'];
		$mp3quran_radio_autostart = $instance['mp3quran_radio_autostart'];
		$mp3quran_radio_showtitle = $instance['mp3quran_radio_showtitle'];

		if($mp3quran_radio_autostart == 1){ $autostart = "true"; }else{ $autostart = "false"; }
		if(empty($mp3quran_radio_height)){ $height = 20; }else{ $height = $mp3quran_radio_height; }

		$rands = rand(0,999);
		$languagescount = count($mp3quran_radio_list);
		if($mp3quran_radio_id > $languagescount){
		$code = '<p style="border:1px solid #cccccc; text-align:center; padding:10px;">Error ID!</p>';
		}else{
		$code = '<div id="quran-radio-widget">';
		$code .= mp3quran_player($rands, $height, $autostart, $mp3quran_radio_id, $mp3quran_radio_showtitle);
		$code .= '</div>';
		}

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		echo __( ''.$code.'', 'mp3quran_widget' );
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		global $mp3quran_radio_list;
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
			$mp3quran_radio_id = $instance['mp3quran_radio_id'];
			$mp3quran_radio_height = $instance['mp3quran_radio_height'];
			$mp3quran_radio_autostart = $instance['mp3quran_radio_autostart'];
			$mp3quran_radio_showtitle = $instance['mp3quran_radio_showtitle'];
		}else{
			$title = __( 'MP3 Quran Radio', 'mp3quran_widget' );
			$mp3quran_radio_id = 1;
			$mp3quran_radio_height = 28;
			$mp3quran_radio_autostart = 0;
			$mp3quran_radio_showtitle = 0;
		}
		
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		
		<p>
		<select id="<?php echo $this->get_field_id('mp3quran_radio_id'); ?>" name="<?php echo $this->get_field_name('mp3quran_radio_id'); ?>">
		<?php for($i = 1; $i <= count($mp3quran_radio_list); $i++): ?>
		<option value="<?php echo $i; ?>"<?php echo ( $mp3quran_radio_id == $i ) ? ' selected="selected"' : ''; ?>><?php echo $i.'- '.$mp3quran_radio_list[$i][0].' - '.$mp3quran_radio_list[$i][1]; ?></option>
		<?php endfor; ?>
		</select>
		<label for="<?php echo $this->get_field_id('mp3quran_radio_id'); ?>"> 
		<?php _e('Radio', 'mp3quran_widget'); ?>
		</label>
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id( 'mp3quran_radio_height' ); ?>"><?php _e( 'Height:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'mp3quran_radio_height' ); ?>" name="<?php echo $this->get_field_name( 'mp3quran_radio_height' ); ?>" type="text" value="<?php if(empty($mp3quran_radio_height)){ echo 20; }else{ echo esc_attr( $mp3quran_radio_height ); } ?>" />
		</p>
			
		<p>
		<label for="<?php echo $this->get_field_id('mp3quran_radio_autostart'); ?>"> 
		<input id="<?php echo $this->get_field_id('mp3quran_radio_autostart'); ?>" name="<?php echo $this->get_field_name('mp3quran_radio_autostart'); ?>" type="checkbox" <?php if($mp3quran_radio_autostart) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Auto Start', 'mp3quran_widget'); ?>
		</label>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('mp3quran_radio_showtitle'); ?>"> 
		<input id="<?php echo $this->get_field_id('mp3quran_radio_showtitle'); ?>" name="<?php echo $this->get_field_name('mp3quran_radio_showtitle'); ?>" type="checkbox" <?php if($mp3quran_radio_showtitle) { echo 'checked="checked"'; } ?> /> 
		<?php _e('Show title', 'mp3quran_widget'); ?>
		</label>
		</p>
			
		<?php 
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['mp3quran_radio_id'] = $new_instance['mp3quran_radio_id'];
		$instance['mp3quran_radio_height'] = $new_instance['mp3quran_radio_height'];
		$instance['mp3quran_radio_autostart'] = ( isset( $new_instance['mp3quran_radio_autostart'] ) ? 1 : 0 );
		$instance['mp3quran_radio_showtitle'] = ( isset( $new_instance['mp3quran_radio_showtitle'] ) ? 1 : 0 );
		return $instance;
	}

}

function register_mp3quran_Widget() {
    register_widget( 'mp3quran_Radio_Widget' );
}
add_action( 'widgets_init', 'register_mp3quran_Widget' );

?>