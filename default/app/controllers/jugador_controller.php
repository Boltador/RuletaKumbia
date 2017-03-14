<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class JugadorController extends AppController {

  
    public function delete($id) {
        View::response('json', null);
        $jugador = (new Jugador)->delete($id);
        
        $this->data = null;
    }

}