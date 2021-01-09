<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $address
 * @property int|null $company_id
 * @property string $notes
 * @property string $add_notes
 * @property string $internal_notes
 * @property string $comments
 *
 * @property \App\Model\Entity\Company $company
 */
class Contact extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'phone_number' => true,
        'address' => true,
        'company_id' => true,
        'notes' => true,
        'add_notes' => true,
        'internal_notes' => true,
        'comments' => true,
        'company' => true,
    ];
}
