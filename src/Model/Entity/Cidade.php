<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cidade Entity
 *
 * @property int $id
 * @property string $nome_cidade
 * @property int $estado_id
 * @property \Cake\I18n\FrozenTime $created
 * @property int|null $modified
 *
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Bairro[] $bairro
 */
class Cidade extends Entity
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
        'nome_cidade' => true,
        'estado_id' => true,
        'created' => true,
        'modified' => true,
        'estados' => true,
        'bairros' => true
    ];
}
