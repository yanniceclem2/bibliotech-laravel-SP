<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * For now allow all — you can add auth logic later.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $salleId = null;
        $routeSalle = $this->route('salle');
        if ($routeSalle) {
            $salleId = is_object($routeSalle) ? $routeSalle->id : $routeSalle;
        }

        $uniqueNomRule = 'unique:salles,nom';
        if ($salleId) {
            $uniqueNomRule .= ',' . $salleId;
        }

        return [
            'nom' => ['required', 'string', 'max:100', $uniqueNomRule],
            'etage' => ['required', 'integer', 'between:0,5'],
            'capacite' => ['required', 'integer', 'between:1,200'],
            'type' => ['required', 'in:lecture,réunion,multimédia,archives'],
            'disponible' => ['sometimes', 'boolean'],
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.max' => 'Le nom ne peut pas dépasser 100 caractères.',
            'nom.unique' => 'Ce nom de salle est déjà utilisé.',
            'etage.between' => 'L\'étage doit être entre 0 et 5.',
            'capacite.between' => 'La capacité doit être entre 1 et 200.',
            'type.in' => 'Le type doit être une des valeurs autorisées (lecture, réunion, multimédia, archives).',
        ];
    }
}
