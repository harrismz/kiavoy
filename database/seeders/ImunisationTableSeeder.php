<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imunisation;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ImunisationTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('name', 'imunisation');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'imunisation',
                'display_name_singular' => __('voyager::seeders.data_types.imunisation.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.imunisation.plural'),
                'icon'                  => 'voyager-rum-1',
                'model_name'            => 'App\Models\Imunisation',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'details'               => [
                    'order_column' => 'id',
                    'order_display_column' => 'id',
                    'order_direction' => 'asc',
                    'default_search_key' => 'id',
                    'scope' => null,
                ],
            ])->save();
        }
        //Data Rows
        $childDataType = DataType::where('slug', 'imunisation')->firstOrFail();
        $dataRow = $this->dataRow($childDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'child_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.child_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'hospital_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.hospital_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'staff_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.staff_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'vaccine_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.vaccine_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'date_vaccinated');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => __('voyager::seeders.data_rows.date_vaccinated'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'updated_at');
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
                'order'        => 12,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'imunisation_belongsto_child_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.child'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                 'details'      => [
                    'model' => 'App\\Models\\Child',
                    'table' => 'child',
                    'type' => 'belongsTo',
                    'column' => 'child_id',
                    'key' => 'id',
                    'label' => 'child_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'imunisation_belongsto_hospital_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.hospital'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\Hospital',
                    'table' => 'hospital',
                    'type' => 'belongsTo',
                    'column' => 'hospital_id',
                    'key' => 'id',
                    'label' => 'hospital_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'imunisation_belongsto_medical_staff_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.medical_staff'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\MedicalStaff',
                    'table' => 'medical_staff',
                    'type' => 'belongsTo',
                    'column' => 'staff_id',
                    'key' => 'id',
                    'label' => 'staff_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'imunisation_belongsto_vaccine_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.vaccine'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\Vaccine',
                    'table' => 'vaccine',
                    'type' => 'belongsTo',
                    'column' => 'vaccine_id',
                    'key' => 'id',
                    'label' => 'vaccine_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 9,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.imunisation'),
            'url'     => '',
            'route'   => 'voyager.imunisation.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-rum-1',
                'color'      => null,
                'parent_id'  => 68,
                'order'      => 1,
            ])->save();
        }

        //Permissions
        Permission::generateFor('imunisation');

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
