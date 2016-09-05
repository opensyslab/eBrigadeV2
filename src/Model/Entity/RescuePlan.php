<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RescuePlan Entity
 *
 * @property int $id
 * @property int $event_id
 * @property int $barrack_id
 * @property int $public_headcount
 * @property int $rescue_plan_activity_id
 * @property int $rescue_plan_environment_id
 * @property int $rescue_plan_delay_id
 * @property float $public_ris
 * @property int $rescue_plan_type_id
 * @property int $rescue_plan_recommendation_id
 * @property string $public_reinforcement
 * @property int $public_total
 * @property int $organization_id
 * @property int $actors_headcount
 * @property int $rescuers_total
 * @property int $headcount_total
 * @property string $actors_organization
 * @property string $general_organization
 * @property string $transport_organization
 * @property string $team_instructions
 * @property int $report_assisted
 * @property int $report_slight
 * @property int $report_medicalized
 * @property int $report_reinforcement
 * @property int $report_evacuated
 * @property string $report_bilan_notes
 * @property int $meals_morning
 * @property int $meals_lunch
 * @property int $meals_dinner
 * @property int $meals_unit_cost
 * @property int $meals_charge
 * @property int $meals_cost
 * @property int $cost_kilometers_vps
 * @property int $cost_kilometers_other
 * @property int $discount_percentage
 * @property string $discount_reason
 * @property int $cost_percentage_adpc
 * @property int $total_cost
 * @property \Cake\I18n\Time $date
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\Barrack $barrack
 * @property \App\Model\Entity\RescuePlanActivity $rescue_plan_activity
 * @property \App\Model\Entity\RescuePlanEnvironment $rescue_plan_environment
 * @property \App\Model\Entity\RescuePlanDelay $rescue_plan_delay
 * @property \App\Model\Entity\RescuePlanType $rescue_plan_type
 * @property \App\Model\Entity\RescuePlanRecommendation $rescue_plan_recommendation
 * @property \App\Model\Entity\Organization $organization
 */
class RescuePlan extends Entity
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
