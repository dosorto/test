<?php

namespace App\Livewire\Estudiante;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Estudiante;


class Estudiantes extends Component
{
    use WithPagination;

    public $cuenta, $nombre, $apellido, $sexo, $carrera, $estudiante_id, $search;
    public $isOpen = 0;

    public function render()
    {
        $estudiantes = Estudiante::where('nombre', 'like', '%'.$this->search.'%')
                                 ->orWhere('cuenta', 'like', '%'.$this->search.'%')
                                 ->orderBy('id', 'DESC')
                                 ->paginate(5);
        return view('livewire.estudiante.estudiantes', ['estudiantes' => $estudiantes]);
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

    private function resetInputFields()
    {
        $this->cuenta = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->sexo = '';
        $this->carrera = '';
        $this->estudiante_id = '';
    }

    public function store()
    {
        $this->validate([
            'cuenta' => 'required|unique:estudiantes,cuenta,' . $this->estudiante_id,
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
            $this->estudiante_id ? 'Estudiante Actualizado correctamente!' : 'Estudiante creado correctamente!');

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

    public function delete($id)
    {
        Estudiante::find($id)->delete();
        session()->flash('message', 'Registro Eliminado correctamente!');
    }
}