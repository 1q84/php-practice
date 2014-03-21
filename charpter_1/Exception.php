<?php
	class Exception{
		function __construct($message = null, $code = 0){
			if(func_num_args()){
				$this->message = $message;
			}
			$this->code = $code;
			$this->file = __FILE__;
			$this->line = __LINE__;
			$this->trace = debug_backtrace();
			$this->string = StringFormat($this);
		}
		protected $message;
		protected $code = 0;
		protected $file;
		protected $line;
		
		private $trace;
		private $string;
		
		final function getMessage(){
			return $this->message;
		}
		
		final function getCode(){
			return $this->code;
		}
		
		final function getTrace(){
			return $this->trace;
		}
		
		final function getTraceAsString(){
			return self::TraceFormat($this);
		}
		
		function _toString(){
			return $this->string;
		}
		
		static private function StringFormat(Exception $exception){
			
		}
		static private function TraceFormat(Exception $exception){		
		}		
	}
?>