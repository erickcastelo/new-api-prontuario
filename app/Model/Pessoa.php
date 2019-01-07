<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Pessoa extends Authenticatable implements JWTSubject
{
    use Notifiable;
    protected $table = 'pessoa';
    public $timestamps = false;

    protected $fillable = [
        'id', 'email', 'rg',
        'cpf', 'authkey', 'datacriacao',
        'dataalteracao', 'fone', 'datanascimento',
        'nome', 'password', 'codpais',
        'responsavel', 'foto', 'cep',
        'endereco', 'complemento', 'bairro',
        'cidade', 'uf', 'tipopessoa'
    ];

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
