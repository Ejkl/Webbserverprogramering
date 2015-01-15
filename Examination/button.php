<?php
class Ejkl_Button
{
		public $color;

		public function setColor($color)
		{
				$this->color=$color;
		}

		public function getColor()
		{
			return 'option1';
		}

	/*	Increase amount of pageviews
			Take a value and add 1 to it
			@param int $cuttentCount
			@return int*/
		public function increasePageview($currentCount)
		{
			return $ccurrentCount +1;
		}
	/*	Devide clicks by views in order to get the current conversion rate
	@param int $clicks
	@param int $views
	@return float*/
		public function calculateConversationRate($clicks, $views)
		{
			return $clicks / $views;
	}
}
$myButton = new Ejkl_Button();
$myButton->setColor('black');

$myButton2 = new Ejkl_Button();
$myButton2->setColor('white');

/*random get a color*/
$randomIndex = rand(0,2);
$options = array(
0 => 'value1',
1 => 'value2',
2 => 'value3'
);

$color=$options[$randomIndex];

/*Save data to file*/
$my_file = 'file.csv';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$new_data = "\n". $color;
fwrite($handle, $new_data);

