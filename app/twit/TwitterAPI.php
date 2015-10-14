<?php

namespace twit;

use GuzzleHttp\Client as GuzzleClient;


class TwitterAPI {

	public function __construct()
	{
		$client = new GuzzleClient();
	}

}