<?php

namespace TwoStepReviews\Session;

use Alm\AlmArray;

class LocalSessionManager implements ISessionManager
{
    public function saveSession($token)
    {
        AlmArray::saveToFile($token, $this->getSessionFile());
    }

    public function loadSession()
    {
        return AlmArray::loadFromFile( $this->getSessionFile());
    }

    public function deleteSession()
    {
        if (file_exists($this->getSessionFile()))
            unlink($this->getSessionFile());
    }

    private function getSessionFile(){
        return sys_get_temp_dir().DIRECTORY_SEPARATOR.'session-2steps';
    }

}