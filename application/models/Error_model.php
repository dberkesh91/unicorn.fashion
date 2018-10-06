<?php

use MongoDB\Client;

class Error_model extends CI_Model 
{

    public $levels = array(
		E_ERROR			=>	'Error',
		E_WARNING		=>	'Warning',
		E_PARSE			=>	'Parsing Error',
		E_NOTICE		=>	'Notice',
		E_CORE_ERROR		=>	'Core Error',
		E_CORE_WARNING		=>	'Core Warning',
		E_COMPILE_ERROR		=>	'Compile Error',
		E_COMPILE_WARNING	=>	'Compile Warning',
		E_USER_ERROR		=>	'User Error',
		E_USER_WARNING		=>	'User Warning',
		E_USER_NOTICE		=>	'User Notice',
		E_STRICT		=>	'Runtime Notice'
	);

    public function save($severity, $message, $filepath, $line, $backtrace)
    {
        require APPPATH . 'libraries/vendor/autoload.php';

        // Get the collections
        $errors = (new Client('mongodb://127.0.0.1/'))->error->errors;

        $errorBacktrace = $this->_extractBacktrace($backtrace);
        $severity = isset($this->levels[$severity]) ? $this->levels[$severity] : $severity;
        $array = array(1,3,4);

        $errors->insertOne([
            'severity' => $severity,
            'message' => $message,
            'name' => $filepath,
            'line' => $line,
            'backtrace' => $errorBacktrace
        ]);
    }

    public function getAll()
    {

        require APPPATH . 'libraries/vendor/autoload.php';
        

        $errors = (new Client('mongodb://127.0.0.1/'))->error->errors;

        $data['errorDocuments'] = $errors->find();

        return $data;
    }

    private function _extractBacktrace($backtrace)
    {
        $result = array();
        foreach ($backtrace as $error)
        {
            if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0)
            {
            $backtrace = array(
                'file' => $error['file'], 
                'line' => $error['line'], 
                'function' => $error['function']
            );
            $result[] = $backtrace;    
            }
        }

        return $result;
    }
}