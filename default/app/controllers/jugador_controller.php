<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class JugadorController extends AppController {

  
    public function delete($id) {
        $jugador = (new Jugador)->delete($id);
        
        View::response('json', null);
    }

}