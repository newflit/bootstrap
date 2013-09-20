<?php
	require_once 'abstract.php';
	class HTML extends Abstract_Helper{
		const IMG_ROUNDED = 'img-rounded';
		const IMG_CIRCLE = 'img-circle';
		const IMG_THUMBNAIL = 'img-thumbnail';

		public static function Image($options = null ){
			$default_options = array(
				'src'=>'default.png',
				'class'=>'',
				'alt' =>''
			);

			if ($options && is_array($options)) {
				$default_options = array_merge($default_options,$options);
			}

			//print_r($default_options);
			$result = '<img ';

			foreach ($default_options as $key => $value) {
				if ($key=='src') {
					# code...
					$value = IMAGE_ROOT_URL.$value;
				}
				$result .= $key.'="'.$value.'" ';
			}
			
			return $result.'>';
		}

		public static function Output(){
			echo '->echo';
		}
	}