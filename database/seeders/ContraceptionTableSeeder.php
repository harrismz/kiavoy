<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contraception;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ContraceptionTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('name', 'contraception');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'contraception',
                'display_name_singular' => __('voyager::seeders.data_types.contraception.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.contraception.plural'),
                'icon'                  => 'voyager-anchor',
                'model_name'            => 'App\Models\Contraception',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'details'               => [
                    'order_column' => 'contraception_name',
                    'order_display_column' => 'contraception_name',
                    'order_direction' => 'asc',
                    'default_search_key' => 'contraception_name',
                ],
            ])->save();
        }
        //Data Rows
        $childDataType = DataType::where('slug', 'contraception')->firstOrFail();
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

        $dataRow = $this->dataRow($childDataType, 'contraception_name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.contraception_name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($childDataType, 'created_at');
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
                'order'        => 3,
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
                'order'        => 4,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.contraception'),
            'url'     => '',
            'route'   => 'voyager.contraception.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-anchor',
                'color'      => null,
                'parent_id'  => 68,
                'order'      => 3,
            ])->save();
        }

        //Permissions
        Permission::generateFor('contraception');

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
