<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartos;
use App\Models\Reservas;
use Illuminate\Validation\Rule;
use PhpParser\Node\Expr\PostDec;

class QuartosController extends Controller
{
   public function index () {
        return view('quartos.teste');
    }


    public function index2 () { // nome da funcao que vai ser chamada
        // Return the view with the quartos data
        return view('quartos.index2', 
        ['quartos' => Quartos::all()]);
   }

    public function quartos () { // nome da funcao que vai ser chamada
         // Return the view with the quartos data
         return view('quartos.index', 
         ['quartos' => Quartos::all()]);
    }


    public function show(Quartos $quarto){
        return view('quartos.quarto', ['quarto' => $quarto]); // Return the view with the listing data
        } 

     
        public function create () {
          return view('quartos.reserva');
      }


      public function store ( Request $request) {
       // dd($request -> all());
       $formFields = $request->validate([

          // will only accept unique name will check if name already exist on the database
          'nome_do_quarto' => ['required', Rule::unique('quartos', 'nome_do_quarto')], // nome da tabela(quartos),(nome do campos)
          'tags' => 'required', // must not be empty field
          'tipo_de_quarto' => 'required|string',
          'descricao_do_quarto' => 'nullable|string',
          'preco_por_noite' => 'required|string',
          'numero_quarto_disponiveis' => 'required|string',
          'numero_pessoas_no_quarto' => 'required|string',
          'numero_camas' => 'required|string',

        ]);
       
       // name of the Model that contains name of our table on the database
       Quartos::create($formFields);

       return redirect('/')->with('message', 'reserva criado com sucesso');
    }
           
        public function edit ($id){
        
            if (!$quartos = Quartos::find($id)){

                return redirect()->back();
             }

             return view('quartos.edit', compact('quartos')); 

        }



        public function update(Request $request, $id)
        {
        if (!$quartos = Quartos::find($id)) {
            return redirect()->back();
        }

        $quartos->update($request->only(['nome_do_quarto', 'descricao_do_quarto'])); // Replace 'field1' and 'field2' with the actual field names you want to update


        return redirect()
            ->route('quartos.index2')
            ->with('message', 'Quartos atualizado com sucesso');
    }


    public function destroy($id)
    {
        if ($quarto = Quartos::find($id)) {
            $quarto->delete();
            return redirect()->route('quartos.index2')->with('message', 'Quarto eliminado com sucesso.');
        } else {
            return redirect()->route('quartos.index2')->with('error', 'Quarto não encontrado.');
        }
    }
 
 
       // criar reserva
    public function criar_reserva(Request $request, $id)
    {
        $request->validate([
            'data_entrada' => 'required|date',
            'data_saida' => 'date|after:data_entrada',
        ]);
    
        $estaReservado = Reservas::where('quarto_id', $id)
            ->where('data_entrada', '<=', $request->data_saida)
            ->where('data_saida', '>=', $request->data_entrada)
            ->exists();
    
        if ($estaReservado) {
            return redirect()->back()->with([
                'message' => 'Quarto indisponível nas datas selecionadas, tente data diferente',
                'alert-type' => 'danger'
            ]);
        } else {
            $data = new Reservas;
            $data->quarto_id = $id;
            $data->nome = $request->nome;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->data_entrada = $request->data_entrada;
            $data->data_saida = $request->data_saida;
            $data->save();
    
            return redirect()->back()->with([
                'message' => 'Quarto Reservado com Sucesso',
                'alert-type' => 'success'
            ]);
        }
    }
    

}
