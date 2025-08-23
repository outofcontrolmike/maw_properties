<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListingImages Model
 *
 * @property \App\Model\Table\ListingsTable&\Cake\ORM\Association\BelongsTo $Listings
 *
 * @method \App\Model\Entity\ListingImage newEmptyEntity()
 * @method \App\Model\Entity\ListingImage newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ListingImage> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ListingImage get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ListingImage findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ListingImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ListingImage> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ListingImage|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ListingImage saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ListingImage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ListingImage>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ListingImage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ListingImage> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ListingImage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ListingImage>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ListingImage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ListingImage> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ListingImagesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('listing_images');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Listings', [
            'foreignKey' => 'listing_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('listing_id')
            ->allowEmptyString('listing_id');

        $validator
            ->scalar('image_path')
            ->maxLength('image_path', 255)
            ->allowEmptyString('image_path');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['listing_id'], 'Listings'), ['errorField' => 'listing_id']);

        return $rules;
    }
}
