<?php

class Kalekciya_Db
{
    const DB_PATH = __DIR__ . "/storage/stores";

    public $cms;

    public function __construct($cms)
    {
        $this->cms = $cms;
    }

    public function dbEvents($params = array()) {

        $data = $this->cms->store('events')->findAll(['_id'=>'desc']);

        return $data;
    }

    public function dbEventType($params = array()) {

        $data = $this->cms->store('event_type')->findAll(['_id'=>'desc']);

        return $data;
    }

    public function dbDiocese($params = array()) {

        $data = $this->cms->store('diocese')->findAll(['_id'=>'desc']);

        return $data;
    }
}
