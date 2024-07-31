<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kabupaten;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class KabupatenTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('name', 'kabupaten');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'kabupaten',
                'display_name_singular' => __('voyager::seeders.data_types.kabupaten.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.kabupaten.plural'),
                'icon'                  => 'voyager-location',
                'model_name'            => 'App\Models\Kabupaten',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'details'               => [
                    'order_column' => 'kabupaten_name',
                    'order_display_column' => 'kabupaten_name',
                    'order_direction' => 'asc',
                    'default_search_key' => 'kabupaten_name',
                    'scope' => null,
                ],
            ])->save();
        }

        //Data Rows
        $kabupatenDataType = DataType::where('slug', 'kabupaten')->firstOrFail();
        $dataRow = $this->dataRow($kabupatenDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
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

        $dataRow = $this->dataRow($kabupatenDataType, 'kabupaten_name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.kabupaten_name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }
        
        $dataRow = $this->dataRow($kabupatenDataType, 'province_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.province_id'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 3,
            ])->save();
        }

        
        $dataRow = $this->dataRow($kabupatenDataType, 'created_at');
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
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($kabupatenDataType, 'updated_at');
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
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($kabupatenDataType, 'kabupaten_belongsto_province_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.province'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\\Models\\Province',
                    'table' => 'province',
                    'type' => 'belongsTo',
                    'column' => 'province_id',
                    'key' => 'id',
                    'label' => 'province_name',
                    'pivot_table' => 'blog',
                    'pivot' => '0',
                    'taggable' => '0',
                ],
                'order'        => 4,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.kabupaten'),
            'url'     => '',
            'route'   => 'voyager.kabupaten.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-location',
                'color'      => '#000000'
                'parent_id'  => 64,
                'order'      => 2,
            ])->save();
        }

        //Permissions
        Permission::generateFor('kabupaten');

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
