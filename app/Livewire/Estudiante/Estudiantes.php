<?php

namespace App\Livewire\Estudiante;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudiante;

class Estudiantes extends Component
{

    use WithPagination;
    public $cuenta, $nombre, $apellido, $sexo, $carrera, $estudiante_id;
    public $search = '';
    public $isOpen = 0;


    public function render()
    {

        $estudiantes = Estudiante::where('nombre', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('livewire.estudiante.estudiantes', compact('estudiantes'));
    }


    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }
    private function resetInputFields(){
        $this->cuenta = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->sexo = '';
        $this->carrera = '';
    }

    public function store()
    {
        $this->validate([
            'cuenta' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'sexo' => 'required',
            'carrera' => 'required',
        ]);
   
        Estudiante::updateOrCreate(['id' => $this->estudiante_id], [
            'cuenta' => $this->cuenta,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'sexo' => $this->sexo,
            'carrera' => $this->carrera,
        ]);
  
        session()->flash('message', 
            $this->estudiante_id ? 'Estudiante Actualizado correctamente.' : 'Estudiante Creado correctamente.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $this->estudiante_id = $id;
        $this->cuenta = $estudiante->cuenta;
        $this->nombre = $estudiante->nombre;
        $this->apellido = $estudiante->apellido;
        $this->sexo = $estudiante->sexo;
        $this->carrera = $estudiante->carrera;
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Estudiante::find($id)->delete();
        session()->flash('message', 'Estudiante Eliminado Correctamente.');
    }
}
