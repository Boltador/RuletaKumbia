<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class IndexController extends AppController {

    public function index() {
        $this->estado = 0;
        if (isset($_SESSION['estado'])) {
            $this->estado = 1;
        }
        $this->jugadores = (new Jugador)->find();
    }

}
