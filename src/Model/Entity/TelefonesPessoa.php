<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TelefonesPessoa Entity
 *
 * @property int $id
 * @property int $numero
 * @property int $pessoa_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class TelefonesPessoa extends Entity
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
        'numero' => true,
        'pessoa_id' => true,
        'created' => true,
        'modified' => true,
        'pessoas' => true
    ];
}
