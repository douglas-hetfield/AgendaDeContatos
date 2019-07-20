<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property string $logradouro
 * @property string $cep
 * @property int $bairro_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Bairro $bairro
 * @property \App\Model\Entity\Pessoa[] $pessoas
 */
class Endereco extends Entity
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
        'id' => true,
        'Enderecos' => true,
        'logradouro' => true,
        'cep' => true,
        'bairro_id' => true,
        'created' => true,
        'modified' => true,
        'bairros' => true,
        'pessoas' => true
    ];
}
