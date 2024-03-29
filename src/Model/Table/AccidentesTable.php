<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accidentes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Ubicaciones
 * @property \Cake\ORM\Association\BelongsTo $Causas
 * @property \Cake\ORM\Association\BelongsTo $Estados
 * @property \Cake\ORM\Association\HasMany $DetalleAccidentes
 *
 * @method \App\Model\Entity\Accidente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Accidente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Accidente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Accidente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accidente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Accidente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Accidente findOrCreate($search, callable $callback = null, $options = [])
 */
class AccidentesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('accidentes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Ubicaciones', [
            'foreignKey' => 'ubicacion_id',
            'joinType' => 'LEFT'
        ])->property('ubicacion');
        $this->belongsTo('Causas', [
            'foreignKey' => 'causa_id',
            'joinType' => 'LEFT'
        ])->property('causa');
        $this->belongsTo('Estados', [
            'foreignKey' => 'estado_id',
            'joinType' => 'INNER'
        ]);
        
        $this->hasMany('DetalleAccidentes', [
            'foreignKey' => 'accidente_id'
        ]);
    }                                                                                                                                                                                                                              
}
