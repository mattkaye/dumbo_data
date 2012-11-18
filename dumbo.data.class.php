<?php 
/**
* Dumbo Data
*
* This class aids in testing how various website layouts will respond when provided with content data sets of varying lengths and sizes. With each refresh of the page, the layout will change slightly due to the copy and/or image sizes changing randomly within the parameters you set
* 
* @version 1.0
* @author Matt Kaye <mattkaye79@gmail.com>
* @link https://github.com/mattkaye/dumbo_data
*/

class Dumbodata{
	// Min and Max character limits
	private $minChar;
	private $maxChar;
	
	// This is the path to the images directory in the DumboData class
	private $imagePath;
	
	/**
	*
	* Constructor method
	* 
	* @param	$minChar	string		The minimum number of characters a text block can be.
	* @param	$maxChar	string		The maximum number of characters a text block can be.
	* @return	N/A
	*/
	public function __construct($minChar = 20, $maxChar = 255, $imagePath = '../images/'){
		$this->minChar = $minChar;
		$this->maxChar = $maxChar;
		$this->imagePath = $imagePath;
	}
	
	/**
	*
	* Creates a block of copy
	* 
	* @return	$result		string		The block of copy
	*/
	public function doText(){
		return $this->_getCopy();
	}
	
	public function doList($type, $minItems = 3, $maxItems = 10){
		$list = ($type === 'ol' ? '<ol>' : '<ul>');
		
		//Get list items into a string
		$copy = file_get_contents(__DIR__ . '/includes/lists.txt');
		$copy = explode('<li>', $copy);

		$numItems = rand($minItems, $maxItems);

		for($i = 0; $i < $numItems; $i++){
			$list .= '<li>'.$copy[array_rand($copy)].'</li>';
		}
		
		$list .= ($type === 'ol' ? '</ol>' : '</ul>');
		return $list;
	}
	
	/**
	*
	* Create a new table with variable rows, columns and width
	* 
	* @param	$minRows	int			The minimum number of rows the table should be
	* @param	$maxRows	int			The maximum number of rows the table should be
	* @param	$minColumns	int			The minimum number of columns the table should be
	* @param	$maxColumns	int			The maximum number of columns the table should be
	* @param	$minWidth	int			The minimum width the table should be as a percentage
	* @param	$maxWidth	int			The maximum width the table should be as a percentage
	* @return	$table      string		An HTML table
	*/
	public function doTable($minRows = 5, $maxRows = 10, $minColumns = 5, $maxColumns = 10, $minWidth = 100, $maxWidth = 100){
		$rows = rand($minRows, $maxRows);
		$columns = rand($minColumns, $maxColumns);
		$tableWidth = rand($minWidth, $maxWidth);
		
		$table = '<table style="border:1px solid; border-collapse:collapse; width:'.$tableWidth.'%"><thead>';
		
		// Set text limit low for headers
		$this->setTextLimit(25,30);
		
		// Headers
		$table .= '<tr>';
		for($i = 0; $i < $columns; $i++){
			$table .= '<th style="border:1px solid;">'.$this->doText().'</th>';
		}
		$table .= '</tr>';
		
		// Rows
		for($i = 0; $i < $rows; $i++){
			$table .= '<tr>';
				// Set text limit low for headers
				// Columns
				$this->setTextLimit(50,200);
				for($a = 0; $a < $columns; $a++){
					$table .= '<td style="border:1px solid; vertical-align:top;">'.$this->doText().'</td>';
				}
			$table .= '</tr>';
		}
		
		$table .= '</table>';
		return $table;
	}
	
	/**
	*
	* Pull a random image and set it to the width/height defined. By default, all images are their natural dimensions
	* 
	* @param	$minWidth	int			The minimum width the image should be in pixels
	* @param	$maxWidth	int			The maximum width the image should be in pixels
	* @param	$minHeight	int			The minimum height the image should be in pixels
	* @param	$maxHeight	int			The maximum height the image should be in pixels
	* @return	$image		string		An HTML image tag
	*/
	public function doImage($minWidth = 0, $maxWidth = 0, $minHeight = 0, $maxHeight = 0){
		$dir = scandir(__DIR__ . '/images');
		unset($dir[0], $dir[1]);
		$thisImage = $dir[array_rand($dir)];
		$width = ($minWidth === 0 || $maxWidth === 0 ? '' : 'width="'.rand($minWidth, $maxWidth).'"');
		$height = ($minHeight === 0 || $maxHeight === 0 ? '' : 'height="'.rand($minHeight, $maxHeight).'"');

		$image = '<img src="' . $this->imagePath . $thisImage.'" '.$width . $height .'>';
		return $image;
	}
	
	/**
	*
	* Sets new values for the min and max amount of text in a copy block
	* 
	* @param	$minChar	int			The minimum number of characters the copy can be. Will round to next whole word.
	* @param	$maxChar	int			The maximum number of characters the copy can be. Will round to next whole word.(0 means no limit)
	* @return	N/A
	*/
	public function setTextLimit($minChar, $maxChar){
		try{
			if($minChar < 1){
				throw new Exception('<p style="color:red;">Error: The minimum character limit cannot be less than 1</p>');
			}
			
			if($minChar > $maxChar && $maxChar !== 0){
				throw new Exception('<p style="color:red;">Error: The minimum character limit cannot be greater than the maximum</p>');
			}
		}
		catch(Exception $e){
			echo $e->getMessage();
			return;
		}
		
		$this->minChar = $minChar;
		$this->maxChar = $maxChar;
	}
	
	/**
	*
	* Get a block of copy
	* 
	* @return	$myCopy		string		A string of dummy copy
	*/
	private function _getCopy(){
		$myCopy = false;
		
		//Get copy into a string
		$copy = file_get_contents(__DIR__ . '/includes/copy.txt');
	
		// Break into an array and shuffle
		$copy = explode('<p>', $copy);
		shuffle($copy);
		
		foreach($copy as $block){
			// Max length reached
			if(strlen($myCopy) >= $this->maxChar && $this->maxChar !== 0){
				break;
			}
			$myCopy .= '<p>'. $block . '</p>'; // Build up the copy string
		}
		
		// If maxChar is set to 0, use total length of the built up copy as the high limit
		$this->maxChar = ($this->maxChar === 0 ? strlen($myCopy) : $this->maxChar);
		
		return $this->_truncateText($myCopy,rand($this->minChar, $this->maxChar));
	}
	
	/**
	*
	* Truncate a a string of text based on a maximum length. String will truncate on whole words, so it might go a little bit over the $length
	* 
	* @param	$string		string		The string to truncate.
	* @param	$length		int			The max length of the truncated section of text
	* @return	N/A
	*/
	private function _truncateText($string, $length) {
		if (strlen($string) > $length) {
			//limit hit!
			$string = substr($string,0,($length -3));
			$string = substr($string,0,strrpos($string,' ')).'...';
		}
    return $string;
	}
}
?>

