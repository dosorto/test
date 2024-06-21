<?php

namespace App\Livewire\Persona;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Persona;

class Personas extends Component
{
    use WithPagination;
    public $nombre, $apellido, $identidad, $persona_id,$search;
    public $isOpen = 0;
    public function render()
    {
        $personas = Persona::where('nombre', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(10);
        return view('livewire.persona.personas', ['personas' => $personas]);
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
        $this->nombre = '';
        $this->apellido = '';
        $this->identidad = '';
        $this->persona_id = '';
    }

    public function store()
    {
        $this->validate([
            'identidad' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
   
        Persona::updateOrCreate(['id' => $this->persona_id], [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'identidad' => $this->identidad
        ]);
  
        session()->flash('message', 
            $this->persona_id ? 'Persona Actualizada correctamente!' : 'Persona creada correctamente!');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        $this->persona_id = $id;
        $this->nombre = $persona->nombre;
        $this->apellido = $persona->apellido;
        $this->identidad = $persona->identidad;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Persona::find($id)->delete();
        session()->flash('message', 'Registro Eliminado correctamente!');
    }
}
