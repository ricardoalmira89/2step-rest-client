<?php

namespace TwoStepReviews\Session;

class WpSessionManager implements ISessionManager
{
    public function saveSession($data)
    {
        add_option('session-2steps', json_encode($data));
    }

    public function loadSession()
    {
        return json_decode(get_option('session-2steps'), true);
    }

    public function deleteSession()
    {
        delete_option('session-2steps');
    }


}