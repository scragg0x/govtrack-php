<?php

namespace GovTrack;

class Client {

    public $client;

    public $base_uri = 'http://www.govtrack.us/api/v2';

    public function __construct(){
        $this->client = new \Guzzle\Http\Client($this->base_uri);
    }

    public function get($endpoint, $params = array()){
        return $this->client->get($endpoint, $params)->send()->json();
    }
}