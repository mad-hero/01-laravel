<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaintainerModel;

class Proyectos extends Controller
{
    public function obtenerProyectos ($_id){
        $id = $_id;
        if ($id == NULL){
        // Retorna todo
        } else{
            // Retorna solo el Valor del Id.
        }
    }

    public function nuevoProyecto ($_nuevo){
        //Nuevo objeto

        $id = $_nuevo->getId();
        $nombre = $_nuevo->getNombre();
        $fechaInicio = $_nuevo->getFechaInicio();
        $estado = $_nuevo->getEstado();
        $responsable = $_nuevo->getResponsable();
        $monto = $_nuevo->getMonto();

        // Crea una nueva instancia de MaintainerModel con todos los argumentos necesarios
        $registro = new MaintainerModel($id, $nombre, $fechaInicio, $estado, $responsable, $monto);
        $registro ->setId($_nuevo->getId());
    }

    public function actualizarProyecto($_id, $_nuevo){
        // Para actualizar un registro
    }

    public function eliminarProyecto($_id){
        // Para eliminar un Registro
    }

}
