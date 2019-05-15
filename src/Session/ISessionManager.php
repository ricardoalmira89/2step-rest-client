<?php

namespace TwoStepReviews\Session;

interface ISessionManager
{

    /**
     * Almacena un array con informacion de session
     * @param array $data
     * @return mixed
     */
    public function saveSession($data);

    /**
     * Devuelve un array con la infromacion de session
     * @return mixed
     */
    public function loadSession();

    /**
     * Elimina la session
     * @return mixed
     */
    public function deleteSession();

}