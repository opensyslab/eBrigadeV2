<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int $city_id
 * @property int $creator_id
 * @property int $bill_id
 * @property string $title
 * @property string $address
 * @property int $latitude
 * @property int $longitude
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $is_closed
 * @property \Cake\I18n\Time $closed
 * @property int $price
 * @property bool $canceled
 * @property string $canceled_detail
 * @property bool $is_active
 * @property string $instructions
 * @property string $responsible_id
 * @property string $details
 * @property int $barrack_id
 * @property \Cake\I18n\Time $event_start_date
 * @property \Cake\I18n\Time $event_end_date
 * @property string $horaires
 * @property bool $public
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Creator $creator
 * @property \App\Model\Entity\Bill $bill
 * @property \App\Model\Entity\Responsible $responsible
 * @property \App\Model\Entity\Barrack $barrack
 * @property \App\Model\Entity\EventEquipment[] $event_equipments
 * @property \App\Model\Entity\EventTeam[] $event_teams
 * @property \App\Model\Entity\EventVehicle[] $event_vehicles
 * @property \App\Model\Entity\Operation[] $operations
 */
class Event extends Entity
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