<?php

class ExtPagesProcessorLogin extends ComPagesControllerProcessorAbstract
{
	public function processData(array $data)
	{
		$credentials = [
		 	'username' =>	$data['email'],
		 	'password' => $data['password'] ?? null,
 		];

    return JFactory::getApplication()->login($credentials);
	}
}
