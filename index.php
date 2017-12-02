<?php

class FindBig {

	/*
		* Preparation to execute the function inside this class
		* @param string $val
	*/
	public function __construct($val) {
		$this->var = $this->dirToArray($val);
		$this->findTheBigVal($this->var);
	}

	/*
		* Count the duplicate items in the array
		* @param array $data
		* @return array
	*/
	public function countDuplicateItems($data = array()) {
		return array_count_values($data);
	}

	/*
		* Converting array into one key array
		* @param array $data
		* @return array
	*/
	public function changeArray($data = array()) {
		$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($data));
		$list = iterator_to_array($it, false);

		return $list;
	}

	/*
		* Find the big value of the array
	*/
	public function findTheBigVal($data = array()) {
		echo array_search(max($this->countDuplicateItems($this->changeArray($data))), $this->countDuplicateItems($this->changeArray($data))) . ' ' . max($this->countDuplicateItems($this->changeArray($data)));
	}

	/*
		* Convert directory and subdirectory into an array
		* @param string $dir
		* @return array
	*/
	public function dirToArray($dir) {

		$_result = array();

		$cdir = scandir($dir);
		foreach ($cdir as $key => $value) {
			if (!in_array($value, array(".", ".."))) {
				if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
					$_result[] = $this->dirToArray($dir . DIRECTORY_SEPARATOR . $value);
				} else {
					// Pass index.php and .DS_Store file
					if ($value !== 'index.php' && $value !== '.DS_Store') {
						$_result[] = file_get_contents($dir . DIRECTORY_SEPARATOR . $value);
					}
				}
			}
		}

		return $_result;
	}

}

$var = new FindBig('./');

echo (string) $var;