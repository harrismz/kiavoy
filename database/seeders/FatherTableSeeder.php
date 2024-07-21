<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Father;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class FatherTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('name', 'father');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'father',
                'display_name_singular' => __('voyager::seeders.data_types.father.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.father.plural'),
                'icon'                  => 'voyager-people',
                'model_name'            => 'App\Models\Father',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'details'               => [
                    'order_column' => 'name',
                    'order_display_column' => 'name',
                    'order_direction' => 'asc',
                    'default_search_key' => 'name',
                    'scope' => null,
                ],
            ])->save();
        }
        //Data Rows
        $fatherDataType = DataType::where('slug', 'father')->firstOrFail();
        $dataRow = $this->dataRow($fatherDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'nik');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.nik'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }
        
        $dataRow = $this->dataRow($fatherDataType, 'no_jkn');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.no_jkn'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'date_of_birth');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => __('voyager::seeders.data_rows.date_of_birth'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'birth_place');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.birth_place'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'phone_number');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.phone_number'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'address');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('voyager::seeders.data_rows.address'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'kecamatan_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.kecamatan_id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'religion_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.religion_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'education_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.education_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 13,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'blood_type_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.blood_type_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 15,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'job_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.job_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 17,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 14,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 15,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'father_belongsto_kecamatan_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.kecamatan'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\Kecamatan',
                    'table' => 'kecamatan',
                    'type' => 'belongsTo',
                    'column' => 'kecamatan_id',
                    'key' => 'id',
                    'label' => 'kecamatan_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'father_belongsto_religion_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.religion'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\Religion',
                    'table' => 'religion',
                    'type' => 'belongsTo',
                    'column' => 'religion_id',
                    'key' => 'id',
                    'label' => 'religion_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 12,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'father_belongsto_education_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.education'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\Education',
                    'table' => 'education',
                    'type' => 'belongsTo',
                    'column' => 'education_id',
                    'key' => 'id',
                    'label' => 'education_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 14,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'father_belongsto_blood_type_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.blood_type'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\BloodType',
                    'table' => 'blood_type',
                    'type' => 'belongsTo',
                    'column' => 'blood_type_id',
                    'key' => 'id',
                    'label' => 'blood_type_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 16,
            ])->save();
        }

        $dataRow = $this->dataRow($fatherDataType, 'father_belongsto_job_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.job'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\Job',
                    'table' => 'job',
                    'type' => 'belongsTo',
                    'column' => 'job_id',
                    'key' => 'id',
                    'label' => 'job_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 18,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.father'),
            'url'     => '',
            'route'   => 'voyager.father.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-people',
                'color'      => null,
                'parent_id'  => 65,
                'order'      => 2,
            ])->save();
        }

        //Permissions
        Permission::generateFor('father');

    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
