<?php

namespace App\Livewire\Estudiantes;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudiante as Estudiantes;

class Estudiante extends Component
{
    use WithPagination;
    public $cuenta, $nombre, $apellido, $carrera, $sexo, $estudiante_id,$search;
    public $isOpen = 0;


    public function render()
    {
        $estudiantes = Estudiantes::where('nombre', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return view('livewire.estudiantes.estudiante', ['estudiantes' => $estudiantes]);
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
        $this->carrera = '';
        $this->sexo = '';
        $this->estudiante_id = '';


    }

    public function store()
    {
        $this->validate([
            'cuenta' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'sexo' => 'required',
            'carrera' => 'required'
        ]);
   
        Estudiantes::updateOrCreate(['id' => $this->estudiante_id], [
            'cuenta' => $this->cuenta,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'sexo' => $this->sexo,
            'carrera' => $this->carrera,
           
        ]);
  
        session()->flash('message', 
            $this->estudiante_id ? 'estudiante Actualizado correctamente!' : 'estudiante creado correctamente!');
  
        $this->closeModal();
        $this->resetInputFields();
    }


    public function edit($id)
    {
        $estudiante = Estudiantes::findOrFail($id);

        $this->estudiante_id = $id;



        $this->nombre = $estudiante->nombre;
        $this->apellido = $estudiante->apellido;
        $this-> sexo = $estudiante->sexo;
        $this->carrera = $estudiante->carrera;
        $this->cuenta = $estudiante->cuenta;
        
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Estudiantes::find($id)->delete();
        session()->flash('message', 'Registro Eliminado correctamente!');
    }

}
