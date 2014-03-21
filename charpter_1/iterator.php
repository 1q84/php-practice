<?php	
class ObjectIterator implements Iterator{
	private $obj;
	private $count;
	private $currentIndex;
	
	function __construct($obj)
	{
		$this->obj = $obj;
		$this->count = count($this->obj->data);
	}
	
	public function current() {
		return $this->obj->data[$this->currentIndex];	
	}

	public function next() {
 		$this->currentIndex++;
	}

	public function key() {
 		return $this->currentIndex;		
	}

	public function valid() {
 		$this->currentIndex < $this->count;
	}

	public function rewind() {
 		$this->currentIndex = 0;	
	}		
}


class Object implements IteratorAggregate{
	
	public $data = array();
	
	function __construct($in){
		$this->data = $in;
	}
	/* (non-PHPdoc)
	 * @see IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ObjectIterator($this);
	}	
}

$myObject = new Object(array(2,4,6,8,10));
$myIterator = $myObject->getIterator();
for ($myIterator->rewind();$myIterator->valid();$myIterator->next())
{
	$key = $myIterator->key();
	$value = $myIterator->current();
	echo $key." => ".$value."<br />";
}
?>