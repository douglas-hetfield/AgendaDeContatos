<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property int $endereco_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\TelefonesPessoa[] $telefones_pessoas
 */
class Pessoa extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'email' => true,
        'endereco_id' => true,
        'created' => true,
        'modified' => true,
        'Endereco' => true,
        'telefones_pessoas' => true,
        'numero' => true,
        'Bairros' => true,
        'nome_bairro' => true,
        'Cidades' => true,
        'nome_cidade' => true,
        'Estados' => true,
        'nome_estado' => true
    ];
}
