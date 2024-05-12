<?php

require 'Bootstrap.php';
require_once 'db.php';

class Kalekciya_Action// extends Kalekciya_Db
{
    private $kalekciyaDb;

    public function __construct()
    {
    }

    /**
     * @return void
     */
    public function process($cms)
    {
        $this->kalekciyaDb = new Kalekciya_Db($cms);

        $params = $_GET;
        $params = array_map('strtolower', $params);

        if(!isset($params['action'])) {
            return null;
        }

        switch($params['action']) {
            case 'getevents':
                return $this->getEvents($params);
                break;
            case 'getevent':
                return $this->getEvent($params);
                break;
            case 'getdioceses':
                return $this->getDioceses($params);
                break;
            case 'geteventtypes':
                return $this->getEventTypes();
                break;
            case 'addpost':
                return $this->addPost($params);
                break;
            case 'deletepost':
                return $this->deletePost($params);
                break;
            case 'map':
                return $this->getMap($params);
                break;
            default:
                return null;
                break;
        }

    }

    private function getEvents($params) {

        /*
         * Params: $limit, $page
         */
        $events = $this->kalekciyaDb->dbEvents();

        echo !empty($events) ? json_encode($events) : null;

    }

    private function getEvent($params) {
        /*
         * Params: $id, $page
         */
    }

    private function addPost($params) {

    }

    private function deletePost($params) {

    }

    private function getMapPosts() {

        $posts = $this->dbPosts();

        var_dump($posts);

    }

    private function getDioceses($kalekciyaDb) {

        $dioceses = $this->kalekciyaDb->dbDiocese();

        echo !empty($dioceses) ? json_encode($dioceses) : null;
    }

    private function getEventTypes() {

        $eventTypes = $this->kalekciyaDb->dbEventType();

        echo !empty($eventTypes) ? json_encode($eventTypes) : null;
    }

}

$action = new Kalekciya_Action();
$action->process($cms);
