<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class JugadorController extends AppController {

    public function delete($id) {
        $jugador = (new Jugador)->delete($id);
        $this->data = json_encode(null);
        View::select(null, null);
        View::template('json', null);
    }

}
