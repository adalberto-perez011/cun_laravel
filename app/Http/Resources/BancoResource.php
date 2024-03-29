<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BancoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'nombrebanco'=>$this->nombrebanco,
            'telefono'=>$this->telefono,
            'Cuentas'=>CuentaResource::collection($this->cuentas),
            'Movimientos'=>MovimientoResource::collection($this->movimientos)
        ];
    }
}
