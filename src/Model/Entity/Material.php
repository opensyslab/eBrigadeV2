<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property int $id
 * @property int $list_material_id
 * @property int $type_material_id
 * @property int $barrack_id
 * @property int $stock
 *
 * @property \App\Model\Entity\ListMaterial $list_material
 * @property \App\Model\Entity\TypeMaterial $type_material
 * @property \App\Model\Entity\Barrack $barrack
 * @property \App\Model\Entity\User[] $users
 */
class Material extends Entity
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
        '*' => true,
        'id' => false
    ];
}